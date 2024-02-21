<?php
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $sql ="SELECT * FROM tbl_admin WHERE username ='".$username."'AND password='".$password."'";
  $row = mysqli_query($mysqli,$sql);
  $count = mysqli_num_rows($row);
  if($count>0){
    $_SESSION['username'] = $username;
    header("location: index.php");
  }else{
    echo'<script>alert("Tài khoản hoặc mật khẩu sai, vui lòng nhập lại.")</script>';
    header("location: login.php");
  }
}
?>

    <div id="login">
      <!--head của login-->
      <div class="login-heading">
        <h1>Đăng nhập Admin</h1>
      </div>
      <!---->
      <form action='' method ='POST'>
        <!--username-->
        <div class="input">
          <input type="text"  name="username" placeholder="Username"/>
        </div>
        <!--password-->
        <div class="input">
          <input type="password"  name="password" placeholder="Password"/>
        </div>
        <!--sigup-->
        <button id="btn" name ="login" class="btn">Login</button>
      </form>
    </div>