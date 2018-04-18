<?php
	$sql="select * from loaisp order by id_loaisp desc";
	$run= mysql_query($sql);
?>
<table width="100%" border="1">
  <tr>
    <td width="32">ID</td>
    <td width="75">TenSp</td>
    <td width="41">Stt</td>
    <td colspan="2"><div align="center">Quan Ly</div></td>
  </tr>
  <?php
  	$i=0;
  	while($dong = mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    <td><?php echo $dong['thutu'] ?></td>
    <td width="10%">
    <a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id_loaisp'] ?>">Sua</a>
    </td>
    <td width="10%">
    <a href="modul/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>"> Xoa </a>
    </td>
  </tr>
 	<?php
	$i++;
  	}
  	?>
</table>
