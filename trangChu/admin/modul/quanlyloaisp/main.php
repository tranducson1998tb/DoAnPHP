<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}
		else{
			$tam='';
		}if($tam == 'them'){
			include('modul/quanlyloaisp/them.php');
		}elseif($tam == 'sua'){
			include('modul/quanlyloaisp/sua.php');	
		}
	?>
</div>
<div class="right">
	<?php
    	include('modul/quanlyloaisp/lietke.php');	
	?>
</div>