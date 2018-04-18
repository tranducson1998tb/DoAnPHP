 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<form action="modul/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2">Them chi tiet sp</td>
  </tr>
  <tr>
    <td width="158">Ten SP</td>
    <td width="40"><input type="text" name="tensp"/></td>
  </tr>
  <tr>
    <td>Gia SP</td>
    <td><input type="text" name="gia"/></td>
  </tr>
  <tr>
    <td>Hinh Anh</td>
    <td><input type="file" name="hinhanh"/></td>
  </tr>
  <tr>
    <td>Mo Ta</td>
    <td><textarea name="mota" cols="30" rows="15"></textarea></td>
  </tr>
  <?php
  	$sql= "select * from loaisp";
	$run= mysql_query($sql);
  ?>
  <tr>
    <td>Loai Sp</td>
    <td>
    <select name="loaisp">
    <?php
   		while($dong=mysql_fetch_array($run)){
	?>
    		<option value="<?php echo $dong['id_loaisp'] ?>"><?php echo $dong['tenloaisp'] ?></option>	
        <?php
		}
		?>
    </select></td>
  </tr>
  <tr>
    <td>Thu Tu</td>
    <td><input type="text" name="thutu"/></td>
  </tr>
   <tr>
    <td colspan="2">
      <div align="center">
        <button name="them" value="them">them</button>
      </div>
    </td>
  </tr>
</table>
</form>