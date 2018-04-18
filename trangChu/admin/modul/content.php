 <div class="content">
        	
            <?php 
					if(isset($_GET['quanly'])){
							$tam=$_GET['quanly'];
						}
					else{
						$tam='';
					}if($tam == 'quanlyloaisp'){
						include('modul/quanlyloaisp/main.php');
					}if($tam=='quanlychitietsp'){
						include('modul/quanlychitietsp/main.php');
						}
				?>
            
        </div>
        <div class="clear"></div>