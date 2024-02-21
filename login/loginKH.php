<?php
if(isset($_POST['login'])){
  $sdt = $_POST['sodienthoai'];
  $password = md5($_POST['password']);

  $row = mysqli_query($mysqli,"SELECT * FROM tbl_sigup WHERE sdt ='".$sdt."'AND matkhau='".$password."'");
  $count = mysqli_num_rows($row);
  if($count>0){
    $row_data = mysqli_fetch_array($row);
    $_SESSION['sigup'] = $row_data['tenkhachhang'];
  }else{
    echo'<script>alert("Số điện thoại hoặc mật khẩu sai, vui lòng nhập lại.")</script>';
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>login</title>
    <link rel="stylesheet" href="login.css"/>
  </head>
  <body>
    <div id="login">
      <!--head của login-->
      <div class="login-heading">
        <h1>Đăng nhập khách hàng</h1>
      </div>
      <!---->
      <form action='' method ='POST'>
        <!--username-->
        <div class="input">
          <input type="text"  name="sodienthoai" placeholder="Số điện thoại..."/>
        </div>
        <!--password-->
        <div class="input">
          <input type="password"  name="password" placeholder="Password"/>
        </div>
        <!--sigup-->
        <button id="btn" name ="login" class="btn">Login</button>
      </form>
    </div>
  </body>
</html>