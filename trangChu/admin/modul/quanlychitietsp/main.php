<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}
		else{
			$tam='';
		}if($tam == 'them'){
			include('modul/quanlychitietsp/them.php');
		}elseif($tam == 'sua'){
			include('modul/quanlychitietsp/sua.php');	
		}
	?>
</div>
<div class="right">
	<?php
    	include('modul/quanlychitietsp/lietke.php');	
	?>
</div>