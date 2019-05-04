<?php
include("./config.php");
$name=$_GET["name"];
$price=$_GET["price"];
$num=$_GET["num"];
//sql插入
$sql="insert into shop (name,price,num) values('$name',$price,$num)";
//执行sql
$res=mysql_query($sql);
//添加成功与否
//若成功
if($res){
	echo json_encode(array(
	"res_code"=>1,
	"res_message"=>"添加成功"));
}else{
	echo json_encode(array(
	"res_code"=>0,
	"res_message"=>"网络错误，添加失败，请重试"));	
};
?>