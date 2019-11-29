<?php



/*
 * Complete the 'test' function below.
 *
 * The function accepts following parameters:
 *  1. STRING firstDate
 *  2. STRING secondDate
 *  3. STRING dayOfWeek
 */

function test($firstDate, $secondDate, $dayOfWeek,$currentPage = 1) {
    file_get_contents('https://jsonmock.hackerrank.com/api/stocks');
    
    $theResponse = file_get_contents('https://jsonmock.hackerrank.com/api/stocks'.'?page='.$currentPage);  
    //var_dump($theResponse);
    $firstDate=date('Y-m-d', strtotime($firstDate));
    $secondDate=date('Y-m-d', strtotime($secondDate));
    $responseObject = json_decode($theResponse);
    //var_dump($responseObject);
    $currentPage = $responseObject->page;
    $totalRecords = $responseObject->total;
    $totalPages = $responseObject->total_pages;
    $perPage = $responseObject->per_page;
    $stocksData = $responseObject->data;

    foreach ($stocksData as $key => $value) {
    	$timestamp = strtotime($value->date);
    	$date =date('Y-m-d', $timestamp);
    	$day = date('l',$timestamp);
    	if ((($date >= $firstDate) && ($date <= $secondDate)) && $day == $dayOfWeek){
		    echo $value->date."   ".$value->open."  ".$value->close."\n";
		}
    	
    }
    if($currentPage != $totalPages){
       $currentPage++;
       test($firstDate,$secondDate,$dayOfWeek,$currentPage);
    }
 }

$firstDate = rtrim(fgets(STDIN), "\r\n");

$secondDate = rtrim(fgets(STDIN), "\r\n");

$dayOfWeek = rtrim(fgets(STDIN), "\r\n");

test($firstDate, $secondDate, $dayOfWeek);