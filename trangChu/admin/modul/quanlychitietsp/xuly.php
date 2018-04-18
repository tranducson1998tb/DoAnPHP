<?php
	include('../config.php');
	
	$id			=	$_GET['id'];
	
	$tensp 		= 	$_POST['tensp'];
	$mota 		= 	$_POST['mota'];
	$gia 		= 	$_POST['gia'];
	$loaisp 	= 	$_POST['loaisp'];
	$thutu 		= 	$_POST['thutu'];
	
	$hinhanh 	= 	$_FILES['hinhanh']['name'];
	$hinhanh_tmp 	= 	$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	
	if(isset($_POST['them'])){
		//them
		$sql = "insert into chitietsp (tensp,hinhanh,gia,mota,id_loaisp,thutu) values ('$tensp','$hinhanh','$gia','$mota','$loaisp','$thutu')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh != ''){
		$sql = "update chitietsp set tensp='$tensp',hinhanh='$hinhanh',gia='$gia',mota='$mota',id_loaisp='$loaisp',thutu='$thutu' where id_sp='$id'";
		}else{
		$sql = "update chitietsp set tensp='$tensp',gia='$gia',mota='$mota',id_loaisp='$loaisp',thutu='$thutu' where id_sp='$id'";}
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
	}else{
		//xoa
		$sql = "delete from chitietsp where id_sp='$id'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
	}
	
?>