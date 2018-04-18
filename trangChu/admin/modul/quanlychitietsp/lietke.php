<?php
	$sql="select * from loaisp,chitietsp where loaisp.id_loaisp = chitietsp.id_loaisp order by chitietsp.id_sp desc";
	$run= mysql_query($sql);
?>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tensp</td>
    <td>Hinh Anh</td>
    <td>Gia</td>
    <td>Loai sp</td>
    <td>Thu Tu</td>
    <td colspan="2">Quan Ly</td>
  </tr>
    <?php
  	$i=0;
  	while($dong = mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tensp']; ?></td>
    <td><img src="modul/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>" width="50" height="50"/></td>
    <td><?php echo $dong['gia']; ?></td>
    <td><?php echo $dong['tenloaisp']; ?></td>
    <td><?php echo $dong['thutu']; ?></td>
    <td><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp'] ?>">Sua</a></td>
    <td><a href="modul/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>">Xoa</a></td>
  </tr>
  <?php
  	$i++;
  }
  ?>
</table>
