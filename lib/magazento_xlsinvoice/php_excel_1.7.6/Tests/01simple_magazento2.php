<?php
error_reporting(E_ALL);

date_default_timezone_set('Europe/London');

require_once '../Classes/PHPExcel.php';
require('../Classes/PHPExcel/IOFactory.php');

$file = '01simple.xls';
$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load($file);

$sheetData =  array();
$worksheet = $objPHPExcel->getActiveSheet();
foreach ($worksheet->getRowIterator() as $row) {
  $cellIterator = $row->getCellIterator();
//  $cellIterator->setIterateOnlyExistingCells(false);
  foreach ($cellIterator as $cell) {
    $sheetData[$cell->getRow()][$cell->getColumn()] = $cell->getValue();
  }
}

$i = 0;
foreach ($sheetData as $k => $row) {
    foreach ($row as $col => $value) {
        if ($value) {
            $i++;
            $cell = $col.$k;
            echo $cell." => ". $sheetData[$k][$col]."<br/>";
            
            $objPHPExcel->getActiveSheet()->setCellValue($cell, "##".$i);
        }
        
    }
}

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save($file);




//var_dump($sheetData);