<?php
	$sqlchitietsp = "select * from chitietsp where id_sp = $_GET[id]";
	$query_chitietsp=mysql_query($sqlchitietsp);
	$dong_chitietsp=mysql_fetch_array($query_chitietsp);
?>


<div class="col-md-8">
				<p style="text-align:center;color:red;padding:10px;background:#09C;">
                Chi Tiet San Pham
                </p>
                <div class="row">
                    <div col-md-5>
                        <div class="allsanpham">
                             <ul>
                                <li>
                                    <img src="admin/modul/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh'] ?>" width="100px" height="100px" />
                                    <p><?php echo $dong_chitietsp['tensp'] ?></p>
                                    <p><?php echo $dong_chitietsp['gia'] ?>: VDN</p>
                                   
                                </li>
                              </ul>
                         </div>
                     </div>
                     <div class="col-md-5">
                      	<p><?php echo $dong_chitietsp['mota'] ?></p>
                     </div>
                     <div class="col-md-2">
                      	<h3>Giỏ Hàng</h3>
                     </div>
                 </div>
                 
</div>