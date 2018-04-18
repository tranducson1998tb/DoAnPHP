<!DOCTPYE html>
<html>
<head>
	<title>Flower Shop</title>
	<link rel="stylesheet" type="text/css" href="style_main.css"/>
    <link rel="stylesheet" type="text/css" href="menu/index.css"/>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css"/>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/js/bootstrap.js"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
   			<?php 
				include('admin/modul/config.php');
			?>
	<div class="cover-container">
		<div class="container-fluid"><!--phan dau-->
				<div class="container">
					<div class="row">
						<?php 
							include('nguoidung/dangnhapdk.php');
						?>
					</div>
					<div class="middle-text">
						<strong>VidoShop</strong>
					</div>
				</div>
		</div><!--ket thuc phan dau-->
			<!--MEnu-->
            <?php 
				include('menu/menu.php');
			?>
		
			<!--slide anh-->
            <?php 
				include('menu/slide.php');
			?>
			

			<!--san pham-->
            <div class="row">
           		<?php 
		   		include('menu/content.php');
		   		?>
           	</div>
               <!--footer-->
            <?php 
				include('menu/footer.php');
			?>
         
	</div>
</body>
</html>