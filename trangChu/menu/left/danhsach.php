<?php 
	$sql_loaisp="select * from loaisp";
	$query = mysql_query($sql_loaisp);
?>
<div class="col-md-4">
            	<p style="text-align:center;color:red;background:#09C;padding:10px;">
                San Pham
                </p>
                <div class="danhsachsp">
                    <ul>
                    <?php
						while($dong_sp=mysql_fetch_array($query)){
					?>
                        <li>
                        <a href="index_mainLayout.php?xem=chitietloaisp&id=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tenloaisp'] ?>
                        </a>
                        </li>
                    
                        <?php
						}
						?>
                    </ul>
            	</div><!--ket thuc ds sp-->
</div>
