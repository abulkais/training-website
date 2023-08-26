<?php
error_reporting();
$courseval = $_REQUEST['courseval'];
$new_array = array();
$file="abc1.csv";
$csv= file_get_contents($file);

$array = array_map("str_getcsv", explode("\n", $csv));

for( $i = 1;$i < count($array);$i++  )
{
	if (preg_match("/$courseval/i", $array[$i][0], $match)){
	$new_array[] = array('name'=> $array[$i][0], 'link'=>$array[$i][1]);
} 
}

if(count($new_array) == 0)  { print_r("No result found"); }
else { print_r(json_encode($new_array)); }
?>