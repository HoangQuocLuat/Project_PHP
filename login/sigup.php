<?php
if(isset($_POST['sigup'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $sodienthoai = $_POST['sodienthoai'];
  $password = md5($_POST['password']);
 
  $sql_sigup = mysqli_query($mysqli,"INSERT INTO tbl_sigup(tenkhachhang,email,sdt,matkhau) VALUE('".$username."','".$email."','".$sodienthoai."','".$password."')");
  if($sql_sigup){
    echo'<script>alert("Bạn đã đăng kí thành công")</script>';
    $_SESSION['sigup'] = $username;
  }
}
?>

    <div id="login">
      <!--head của login-->
      <div class="login-heading">
        <h1>Đăng kí tài khoản</h1>
      </div>
      <!---->
      <form action='' method ='POST'>
        <!--username-->
        <div class="input">
          <input type="text"  name="username" placeholder="Username"/>
        </div>
        <!--password-->
        <div class="input">
          <input type="text"  name="email" placeholder="Email"/>
        </div>
        <div class="input">
          <input type="text"  name="sodienthoai" placeholder="Số điện thoại"/>
        </div>
        <div class="input">
          <input type="password"  name="password" placeholder="Password"/>
        </div>
        <!--sigup-->
        <a href="#" class="sigup">Sig Up</a>
        <button id="btn" name ="sigup" class="btn">Sigup</button>
      </form>
    </div>