<?php

if (!defined('APP_IN')) exit('Access Denied');
if(isset($_GET['cid'])){
setMyCookie("city",intval($_GET['cid']),time()+COOKIETIME );
header("location:index.php?m=search");
exit;
}
header("Content-type: text/html; charset=utf-8");
if(empty($_COOKIE['city']) or $_COOKIE['city']=="undefined"){
$ip = getIp();
$ip = "61.54.123.212";
//$cityname = get_cityname($ip);
  $cityname = getCity($ip);

    if(empty($cityname) or $cityname=="I"){
        $cityname="<a href='index.php?m=citylist'>全国</a>";
        $cityid = 0;
    }else{
        $citydata = $db->row_select_one('city',"city='".$cityname['city']."'",'id');
        if(!empty($citydata['id'])){
             $cityid = $citydata['id'];
        }
        else{
             $cityid = 0;
        }
    }
    setMyCookie("city",$cityid,time()+COOKIETIME);
    $citydata = $db->row_select_one('city',"id='".$_COOKIE['city']."'",'city');
 }
else{
$citydata = $db->row_select_one('city',"id='".$_COOKIE['city']."'",'city');
$cityname = "<a href='index.php?m=citylist'>".$citydata['name']."</a>";
}

//echo "document.write(\"".$cityname."\");";
$tpl->assign('cityname',$citydata['city']);
//echo document.write($citydata['name']);
?>