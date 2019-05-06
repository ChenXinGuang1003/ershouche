<?php

if (!defined('APP_IN')) exit('Access Denied');
header("Content-type: text/html; charset=utf-8");
//$list = $db ->row_select('area',"parentid=-1",'id,name',0,'orderid asc');
$list = $db ->row_select('city',"1=1",'province',0,'id asc');
$list = array_unique($list,SORT_REGULAR);
$list1 = array();
foreach($list as $key =>$value){
//    $list1[$key]['province'] = $value['province'];
$citylist = $db ->row_select('city',"province='".$value['province']."'",'id,city',0,'citycode asc');
$list1[$value['province']]['name'] = $value['province'];
$list1[$value['province']]['citylist'] = $citylist;
}
//print_r($list1['河北省']['citylist'][1]['city']);
//print_r($list1);
//exit;

$tpl->assign( 'arealist',$list1 );
$tpl ->display('m/city.html');

?>