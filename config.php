<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='user';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl)or die('khong the ket noi');
	mysql_select_db($csdl,$conn);
?>