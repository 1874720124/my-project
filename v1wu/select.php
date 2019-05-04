<?php
//include("./config.php");
//$sql="select * from shop";
//$res=mysql_query("$sql");
//$shop=array();
//while($row=mysql_fetch_assoc($res)){
//	array_push($shop,$row);
//};
//$json=array(
//"res_code"=>1,
//"res_message"=>"网络错误，加载失败，请重试"
//"res_body"=>array(
//"data"=> $shop
//)
//);
//echo json_encode($json);
//mysql_close();
include("./config.php");
$pageIndex=$GET['pageIndex'];
$count=$GET["count"];
//查找所有
$sqlAll="select * from shop";
$resAll=mysql_quey($sqlAll);
//取总条数
$countAll=mysql_num_rows($resAll);
//页数=总条数/每页的条数并向上取整
$pageCount=ceil($countAll/$count);
//跳过好多条找好多条
//第一页 0，4
//第二页4，4
//第三页8，4
//第n页($pageIndex-1)*$count，$count
$start=($pageIndex-1)*$count;
//执行跳过几条查几条语句
$sql="select *from shop limit $start,$count";
$res=mysql_query($sql);
$shop=array();
while($row=mysql_fetch_assoc($res)){
	array_push($shop,$row);
};
$json=array(
"res_code"=>1,
"res_message"=>"查询成功"
"res_body"=>array(
"data"=> $shop,
 "pageCount" => $pageCount);
 );
echo json_encode($json);
mysql_close();
?>
