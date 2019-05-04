<?php
include("./config.php");
$id=$_GET["id"];
$price=$_GET["price"];
$num=$_GET["num"];
$sql="update shop set price=$price,num=$num where id=$id";
$res=mysql_query($sql);
if($res){
	"res_code"=>1,//1表示成功，0表示失败
	"res_message"=>"修改成功"
}else{
	"res_code"=>0,
	"res_message"=>"网络错误，修改失败，请重试"
?>