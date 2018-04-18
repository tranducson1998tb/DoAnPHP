<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dang Ky</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/app2.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
	<body id="body2" style="margin">
		<section id="main2">
			<div class="container">
				<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-color" >
						<div class="panel-heading">
							<h4>Dang Ky Tai Khoan</h4>
						</div>
						<div class="panel-body">
		
						<form action="xuly.php" method="POST" role="form">
							  <div class="form-group">
								<label for="username">UserName</label>
								<input type="text" name="username" class="form-control" id="username" placeholder="Ten dang Nhap">
							  </div>

							   <div class="form-group">
								<label for="pass">PassWord</label>
								<input type="password" name="password" class="form-control" id="passord" placeholder="Mat Khau">
							  </div>
							  <div class="form-group">
								<label for="pass">Email</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Email">       
							  </div> 
                              <div class="form-group">
								<label for="pass">Số Điện Thoại</label>
								<input type="text" name="sdt" class="form-control" id="sdt">       
							  </div> 
							  <div class="row">
								<div class="col-md-6">
								  <input type="submit" class="btn btn-primary btn-block" value="Đăng Ký" />
								</div>
                                <div class="col-md-6">
								  <input type="reset" class="btn btn-primary btn-block" value="Nhập Lại" />
								</div>
							  </div>
						  </form>
						 </div>
					</div>
				</div>
				<div class="col-md-3"></div>
				</div>
			</div>
			</section>
	</body>
</html>