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
    $interest = array_flip(array_merge($affected, $poisonous));
    var_dump($interest);
    for ($i=0; $i <$n; $i++) {
    // Reset array in outer loop
    $interval_array = array();
    
    for($j = $i;$j < $n; $j++){
        // Add in new number to interval array as the key
        $interval_array[$main_array[$j]] = 0;
        $counter++;
        // Only check for exclusion if interested in the number
        if ( isset($interest[$main_array[$j]] )) {
            for ($l=0; $l < $count ; $l++) {
                // if block here to additional condition using isset()
                if(isset($interval_array[$affected[$l]]) &&
                    isset($interval_array[$poisonous[$l]]))   {
                        $counter--;
                        // Exit 2 levels of array as all further combinations will be excluded
                        break 2;
                        }
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