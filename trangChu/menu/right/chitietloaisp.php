<?php 
	$sql_ctlsp="select * from chitietsp where id_loaisp='$_GET[id]'";
	$query=mysql_query($sql_ctlsp);
?>
<div class="col-md-8">
            	<p style="text-align:center;color:red;background:#09C;padding:10px;">
                Chi Tiet Loai San Pham
                </p>
                <div class="allsanpham">
                	 <ul>
                     <?php
					 	while($dong_ctlsp=mysql_fetch_array($query)){
					 ?>
                        <li>
                           <a href="index_mainLayout.php?xem=chitietsp&id=<?php echo $dong_ctlsp['id_sp'] ?>">
                           <img src="admin/modul/quanlychitietsp/uploads/<?php echo $dong_ctlsp['hinhanh'] ?>" width="100px" height="100px" />
                           </a>
                            <p><?php echo $dong_ctlsp['tensp'] ?></p>
                            <p><?php echo $dong_ctlsp['gia'] ?></p>
                            <p>Chi Tiet</p>
                        </li>
                    <?php
						}
					?>
                     </ul>
                </div>
</div>