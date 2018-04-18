<?php
	$sql_loaisp = "select * from loaisp" ;
	$query = mysql_query($sql_loaisp);
?>
<div class="container header-content" style="margin-top: 30px;margin-bottom: 20px;">
<?php
while($dong_sp=mysql_fetch_array($query)){
?>
<ul>
	<li>
      <a href="index_mainLayout.php?sanpham=chitietsanpham&id=<?php echo $dong_sp['id_loaisp']?>">
                                <?php echo $dong_sp['tenloaisp']?>
      </a>
    </li>
                 
<?php
}
?>
</div>