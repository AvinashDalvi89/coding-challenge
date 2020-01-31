<?php

function convert_date_format($old_date = '')	 {	 $old_date = trim($old_date);		 
    if (preg_match('/^(0[1-9]|1[0-2]|[1-9])\/(0[1-9]|[1-2][0-9]|3[0-1])\/[0-9]{4}$/', $old_date)) // MySQL-compatible YYYY-MM-DD format	 
     {	 return 'm/d/Y';	 }	 
     elseif (preg_match('/^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2]|[1-9])\/[0-9]{4}$/', $old_date)) // DD-MM-YYYY format	 
     {	 return 'd/m/Y';
     }	  
 }

echo convert_date_format('12/9/2019');
echo "\n";
echo convert_date_format('06/22/2018');


// function convert_date_format($old_date = '')	 {	 $old_date = trim($old_date);		 
//     if (preg_match('/^(0[1-9]|1[0-2])\/(0[1-9]|[1-2][0-9]|3[0-1])\/[0-9]{4}$/', $old_date)) // MySQL-compatible YYYY-MM-DD format	 
//      {	 return 'm/d/Y';	 }	 
//      elseif (preg_match('/^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/[0-9]{4}$/', $old_date)) // DD-MM-YYYY format	 
//      {	 return 'd/m/Y';
//      }	  
//  }
 
// $excel_format = convert_date_format($excel_date);
// $changed_date = DateTime::createFromFormat($excel_format, $excel_date)->format('D/M/Y');
// echo $changed_date;
 
  
?>