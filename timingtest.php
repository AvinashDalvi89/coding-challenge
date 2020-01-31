<?php

 /* Set this to avoid memory errors */ 
 ini_set('memory_limit','1024M'); 
 $array = array();  
 /* Use this for creating a numeric array */ 
 for ($i = 0; $i < 1000000; $i++) {  
   $array[$i] = $i; 
  }  
  /* Or use this for creating an associative array */ 
  for ($i = 0; $i < 1000000; $i++) { 
     $array[$i] = strval($i) . 'string'; 
  }  
  $count = count($array);
  $start = microtime(TRUE);
    /* Foreach loop, ok for both array types */ 
 foreach ($array as $item) {    
 $var = $item; } 
  /* For loop only for numeric arrays */ 
for ($i = 0; $i < $count; $i++) {  
    $var = $array[$i]; }  
 /* While loop only for numeric arrays */ 
 $i = 0; 
 while ($i < $count) {
     $var = $array[$i];
     $i++; 
 }  /* For loop for associative arrays */ 
 for ($item = current($array); 
 	$item !== FALSE; 
 	$item = next($array)) {
 	    $var = $item; 
 }  /* While loop for associative arrays */ 
 $item = current($array); 
 while ($item !== FALSE) {
     $var = $item;
     $item = next($array);
 }  

 $end = microtime(TRUE); echo ($end - $start); 

 ?>