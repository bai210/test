<?php

// echo date('Y-m-d', strtotime(date('Y-m', time()) . '-01 00:00:00')); var_export('--------------------');
//  echo strtotime(date('Y-m-d', time()) . '-01 00:00:00');


// echo date('Y-m-d', strtotime(date('Y-m', time()) . '-' . date('t', time()) . ' 00:00:00'));

//获取本月开始的时间戳
$beginThismonth=mktime(0,0,0,date('m')+1,1,date('Y'));
//获取本月结束的时间戳
$endThismonth=mktime(23,59,59,date('m')+1,date('t'),date('Y'))*1000;

// $a = date('t');
var_export($beginThismonth);




















