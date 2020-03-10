<?php

//https://www.hackerrank.com/test/1cmjfa5c35j/questions/d5pg5e4di5h

/*
 * Complete the 'countMeetings' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY firstDay
 *  2. INTEGER_ARRAY lastDay
 */
 
function countMeetings($firstDay, $lastDay) {
    // Write your code here
    //$investor_array = array();
    $final_array = array();
    for($i=0;$i<count($firstDay);$i++){ 
        $final_array = array_merge($final_array,range($firstDay[$i],$lastDay[$i]));
    }
    //print_r($invest_array);
    $output = array_unique($final_array);
     
    return (count($firstDay) < count($output)) ? count($firstDay) : count($output);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$firstDay_count = intval(trim(fgets(STDIN)));

$firstDay = array();

for ($i = 0; $i < $firstDay_count; $i++) {
    $firstDay_item = intval(trim(fgets(STDIN)));
    $firstDay[] = $firstDay_item;
}

$lastDay_count = intval(trim(fgets(STDIN)));

$lastDay = array();

for ($i = 0; $i < $lastDay_count; $i++) {
    $lastDay_item = intval(trim(fgets(STDIN)));
    $lastDay[] = $lastDay_item;
}

$result = countMeetings($firstDay, $lastDay);

fwrite($fptr, $result . "\n");

fclose($fptr);
