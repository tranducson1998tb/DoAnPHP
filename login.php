<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
    include('config.php');
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{   
    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysql_query("SELECT username, password FROM member WHERE username='$username'");
    if (mysql_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysql_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }else{
		echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='trangChu/index_mainLayout.php'>Về trang chủ</a>";
		die();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/app.css">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.js"></script>
</head>
<body>
<section id="top">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <a href="trangChu/index_mainLayout.php" class="btn btn-link sale"><h1 class="saleh1">Flower World</h1></a>
      </div>
        <div class="col-md-1">
        <a href="#" class="btn btn-link saletop"><h4> Dịch Vụ </h4></a>
      </div>
      <div class="col-md-2" align="center">
        <a href="#" class="btn btn-link saletop"><h4> Thắc mắc </h4></a>
      </div>
      <div class="col-md-2">
        <a href="#" class="btn btn-link saletop"><h4> Liên Hệ </h4></a>
      </div>
    </div>
  </div>
</section><!--top-->

<section id ="main">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
          <img class="imgvd" src="img/vd.png">
          <h1 class="main-title">Đăng nhập hệ thống</h1>
          <p class="main-p">Chào mừng bạn tham gia trang sản phẩm của chúng tôi</p>
      </div>

      <div class="col-md-6 ">
        <div class="panel panel-color">
          <div class="panel-heading">
            <h4>LOGIN</h4>
          </div>

          <div class="panel-body">
            <form action="login.php?do=login" method="POST" role="form">

              <div class="form-group">
                <label for="username">UserName</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Tên đăng Nhập">
              </div>

               <div class="form-group">
                <label for="pass">PassWord</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Mật Khẩu">
              </div>
              <div class="row row-luutk">
                <div class="col-md-12" align="left">
                <input type="checkbox" name="remember" value="Nhớ Mật Khẩu"> Nhớ Mật Khẩu <br>
                </div>      
              </div>     
              <div class="row">
                <div class="col-md-6">
                  <input type="submit" name="dangnhap" class="btn btn-primary btn-block" value="Đăng Nhập"/>
                </div>
                <div class="col-md-2" align="center">
                  <a href="dangky.php" class="btn btn-link"> Đăng Ký </a>
                </div>
                <div class="col-md-4" align="center">
                  <a href="#" class="btn btn-link"> Quên Mật Khẩu </a>
                </div>
              </div>                   
            </form><!--form-->
          </div><!--panel body-->
        </div><!--panel color-->
      </div><!--phan login-->
    </div><!--row-->
  </div><!--container-->
</section><!--main-->

</body>
</html>