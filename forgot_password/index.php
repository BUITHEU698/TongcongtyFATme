<?php
include'../connect/connect.php';
include_once '../mail/index.php';
if(!empty($_SESSION['dangnhap'])){
  header("location: ../Home_main_page/index.php");
}
$mail= new Mailer();
$error='';
if (isset($_POST['submit'])){
  $email=$_POST['email'];  
  if($email==''){
    $error='e-mail không được để trống';
  }
  if(empty($error)){
    $sql="SELECT *FROM khachhang WHERE email='$email'";
    $query=mysqli_query($conn,$sql);
    $check=mysqli_num_rows($query);
    if($check==0){
      $error='Địa chỉ e-mail chưa được đăng kí';
    }else {
      $code =substr(rand(1111,9999),0,4);
      $title="Quên mật khẩu";
      $content="Mã xác nhận của bạn là: <span style ='color: green'>".$code."</span>";
      $mail->sendMail($title,$content,$email);
      $_SESSION['email']=$email;
      $_SESSION['code']=$code;
      header("location: confirm.php");
    }
  }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quên mật khẩu</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/app.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <form action="" method="post" class="form-forgot">
        <!-- icon back -->
        <div class="form-forgot-icon">
          <a href="../login/index.php"><i class="fas fa-arrow-left sub-link"></i></a>
          <span class="error sub-text"><?php echo(isset($error)?$error:'')?></span>
        </div>
        <h1 class="header-text bold">Quên mật khẩu</h1>
        <p class="sub-text">
          Nhập email của bạn để nhận mã xác nhận!
        </p>
        <div class="form-group">
          <input type="email" name="email" placeholder="Nhập email" class="input-text" />
          <button type="submit"name="submit">Gửi</button>
        </div>
      </form>
    </div>
  </body>
  <script src="./scripts/index.js"></script>
</html>
