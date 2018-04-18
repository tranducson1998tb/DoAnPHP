<?php
	$sql_all="select * from chitietsp";
	$queryall = mysql_query($sql_all);
?>

<div class="col-md-8">
            	<p style="text-align:center;color:red;background:#09C;padding:10px;">
                All San Pham
                </p>
                <div class="allsanpham">
                	 <ul>
                       <?php
					 	while($dong_all=mysql_fetch_array($queryall)){
					 ?>
                       <li>
                           <a href="index_mainLayout.php?xem=chitietsp&id=<?php echo $dong_all['id_sp'] ?>">
                           <img src="admin/modul/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh'] ?>" width="100px" height="100px" />
                           </a>
                            <p><?php echo $dong_all['tensp'] ?></p>
                            <p><?php echo $dong_all['gia'] ?></p>
                            <p>Chi Tiet</p>
                        </li>
                        <?php
						}
						?>
                    </ul>
                </div>
</div>