
<div class="content">
		<div class="content_left">
        		<?php 
					include('menu/left/danhsach.php');
				?>
        </div>
        	
        <div  class="content_right">
        		<?php 
					if(isset($_GET['xem'])){
							$tam=$_GET['xem'];
						}
					else{
						$tam='';
					}if($tam == 'chitietloaisp'){
						include('menu/right/chitietloaisp.php');
					}elseif($tam=='chitietsp'){
						include('menu/right/chitietsp.php');
					}else
						include('menu/right/allsanpham.php');
				?>
        </div>
</div>
<div class="clear"></div>