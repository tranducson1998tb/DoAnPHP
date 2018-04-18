<?php
	$sql="select * from loaisp where id_loaisp = $_GET[id]";
	$run=mysql_query($sql)or die($sql."<br/><br/>".mysql_error());
	$dong=mysql_fetch_array($run);
?>

<form action="modul/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sua loai sp</div></td>
  </tr>
  <tr>
    <td>ten loai sp</td>
    <td><input type="text" name="tenloaisp" value="<?php echo $dong['tenloaisp'] ?>"/></td>
  </tr>
  <tr>
    <td>stt</td>
    <td><input type="text" name="stt" value="<?php echo $dong['thutu'] ?> "/></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="sua" id="sua" value="Sua">
      </div>
   	</td>
  </tr>
</table>
</form>