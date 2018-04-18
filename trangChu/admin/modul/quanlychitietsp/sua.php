<?php
	$sql="select * from chitietsp where id_sp = $_GET[id]";
	$run=mysql_query($sql)or die($sql."<br/><br/>".mysql_error());
	$dong=mysql_fetch_array($run);
?>

 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
<form action="modul/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2">Sua chi tiet sp</td>
  </tr>
  <tr>
    <td width="158">Ten SP</td>
    <td width="40"><input type="text" name="tensp" value="<?php echo $dong['tensp'] ?>"/></td>
  </tr>
  <tr>
    <td>Gia SP</td>
    <td><input type="text" name="gia" value="<?php echo $dong['gia'] ?>"/></td>
  </tr>
  <tr>
    <td>Hinh Anh</td>
    <td><input type="file" name="hinhanh"/><img src="modul/quanlychitietsp/uploads/<?php echo $dong['hinhanh'] ?>"/>
    </td>
  </tr>
  <tr>
    <td>Mo Ta</td>
    <td><textarea name="mota" cols="30" rows="15"><?php echo $dong['mota'] ?></textarea></td>
  </tr>
  <?php
  	$sql_lsp= "select * from loaisp";
	$run_lsp= mysql_query($sql_lsp);
  ?>
  <tr>
    <td>Loai Sp</td>
    <td>
    <select name="loaisp" value="<?php echo $dong['tenloaisp'] ?>">
    <?php
   		while($dong_lsp=mysql_fetch_array($run_lsp)){
			if($dong['id_loaisp'==$dong_lsp['id_loaisp']]){
	?>
    		<option selected value="<?php echo $dong_lsp['id_loaisp'] ?>"><?php echo $dong_lsp['tenloaisp'] ?></option>	
        <?php
		}else{
		?>
        <option value="<?php echo $dong_lsp['id_loaisp'] ?>"><?php echo $dong_lsp['tenloaisp'] ?></option>
        <?php
			}
		}
		 ?>
    </select></td>
  </tr>
  <tr>
    <td>Thu Tu</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"/></td>
  </tr>
   <tr>
    <td colspan="2">
      <div align="center">
        <button name="sua" value="sua">sua</button>
      </div>
    </td>
  </tr>
</table>
</form>