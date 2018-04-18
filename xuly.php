<?php
    //Nhúng file kết nối với database
  	include('config.php'); 
    //Lấy dữ liệu từ file dangky.php
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $email      = $_POST['email'];
    $sdt   		= $_POST['sdt'];
 
 
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$sdt)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }      
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT username FROM member WHERE username='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT email FROM member WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }     
    //Lưu thông tin thành viên vào bảng
    $sql = "INSERT INTO member (username, password, email, sdt)
        		  VALUES ('$username','$password','$email','$sdt')";
	mysql_query($sql);
                          
    //Thông báo quá trình lưu
    if ($sql)
        echo "Quá trình đăng ký thành công. <a href='trangChu/index_mainLayout.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>