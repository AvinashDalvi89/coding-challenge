<?php



/*
 * Complete the 'largestMatrix' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function largestMatrix($arr) {
    // Write your code here
   $row = sizeof($arr);
   $column = sizeof($arr[0]);
   echo $row;
   echo $column;
   $sum_array = array(array());

   for ($i=0; $i < $row ; $i++) { 
   	 $sum_array[$i][0] = $arr[$i][0];
   }
   for ($j=0; $j < $column ; $j++) { 
   	 $sum_array[0][$j] = $arr[0][$j];
   }
   //echo "sum array -- ".var_dump($sum_array); echo "\n";

   for ($i=1; $i < $row ; $i++) { 
   	   for ($j=1; $j < $column ; $j++) { 

   	   		if($arr[$i][$j] == 1){
   	   			$sum_array[$i][$j] = min($sum_array[$i][$j-1],
                                      $sum_array[$i-1][$j],
                                      $sum_array[$i-1][$j-1]
   	   								 ) + 1;
   	   		}
   	   		else{
   	   			$sum_array[$i][$j] = 0;
   	   		}

       }
    }
   $max_of_array = $sum_array[0][0];
   $max_of_i = 0;
   $max_of_j = 0;
   for($i = 0; $i < $row; $i++){

   	 for ($j=0; $j < $column ; $j++) { 
   	 	if($max_of_array < $sum_array[$i][$j]){
   	 		$max_of_array = $sum_array[$i][$j];
   	 		$max_of_i = $i;
   	 		$max_of_j = $j;
   	 	}
   	 }
   }
   return $max_of_array; 

}
//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_rows = intval(trim(fgets(STDIN)));
$arr_columns = intval(trim(fgets(STDIN)));
// $row = fgets(STDIN);
// $column = fgets(STDIN);
$arr = array(); 
$sub_array = array();
for ($i = 0; $i < $arr_rows; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
} 

$result = largestMatrix($arr);
echo $result;

//fwrite($fptr, $result . "\n");

//fclose($fptr);