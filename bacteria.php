<?php



/*
 * Complete the 'bioHazard' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY affected
 *  3. INTEGER_ARRAY poisonous
 */

function bioHazard($n, $affected, $poisonous) {
    // Write your code here
    //$not_coexist_list = array(); 
    $main_array = range(1,$n); 
    $counter = 0; 
    $count = sizeof($affected); 
    // for ($i=0; $i < sizeof($affected) ; $i++) { 
    //     $not_coexist_list[$i] = array($affected[$i],$poisonous[$i]);
    // }
    for ($i=0; $i <$n; $i++) {  
         $interval_array = array();
         for($j = $i;$j < $n; $j++){ 
         	 //for ($k = $i; $k <= $j; $k++){ 
            array_push($interval_array,$main_array[$j]);
            //var_dump($interval_array);
            //echo implode(",", $interval_array)."\n";
         	 //}
             $counter++;
             for ($l=0; $l < $count ; $l++) {
                if(in_array($affected[$l], $interval_array) && in_array($poisonous[$l], $interval_array)){ 
                    $counter--;
                    break 2;
                } 
            }  
         }
    }  
  return $counter;
}
$start = microtime(true);
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$affected_count = intval(trim(fgets(STDIN)));

$affected = array();

for ($i = 0; $i < $affected_count; $i++) {
    $affected_item = intval(trim(fgets(STDIN)));
    $affected[] = $affected_item;
}

$poisonous_count = intval(trim(fgets(STDIN)));

$poisonous = array();

for ($i = 0; $i < $poisonous_count; $i++) {
    $poisonous_item = intval(trim(fgets(STDIN)));
    $poisonous[] = $poisonous_item;
}

$result = bioHazard($n, $affected, $poisonous);
echo $result;
fwrite($fptr, $result . "\n");

fclose($fptr);
$time_elapsed_secs = microtime(true) - $start;
echo "Time execution is ".$time_elapsed_secs;
