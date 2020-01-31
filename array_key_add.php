<?php
$excel_lib = '/var/www/mp/cronfiles/data/Classes/PHPExcel/IOFactory.php';
include($excel_lib);
$filearray = array('file1.xlsx','file2.csv','file3.csv');
$file2 = fopen(dirname(__FILE__).'/'.$filearray[0],"r");
if (!$file2) {
                echo "File not exisit";
            }
$inputFileType1 = PHPExcel_IOFactory::identify($filearray[0]);
$objReader1 = PHPExcel_IOFactory::createReader($inputFileType1);
$objPHPExcel1 = $objReader1->load($filearray[0]);
$sheet1 = $objPHPExcel1->getSheet(0);

      $highestRow1 = $sheet1->getHighestRow();

      $highestColumn1 = $sheet1->getHighestColumn();

      $rowData1 = array();

  for ($row1 = 1; $row1 <= $highestRow1; $row1++) { 
    $rowData1[] = $sheet1->rangeToArray('A' . $row1 . ':' . $highestColumn1 . $row1, null, true, true);
  }

  foreach($rowData1 AS $k => $v){
      foreach ($v AS $fk => $fv){
          $csv[] = $fv;
          }
      }

$excel_date = 'As of '.$csv[1][1]; //its B2 cell in excel value ex.[echo $excel_date; output 22/6/2019]
$changed_date = date_format('M/d/Y', $excel_date);
echo $change_date;