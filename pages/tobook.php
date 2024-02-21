<?php
 
 if(isset($_POST['sigup1'])){
  $name = $_POST['Name'];
  $phone = $_POST['Phone'];
  $email = $_POST['Email'];
  $address = $_POST['Address'];
  $checkin = $_POST['Checkin'];
  $checkout = $_POST['Checkout'];
  $Room = $_POST['Room'];
  $NfR = $_POST['NfR'];
  $sql_sigup = mysqli_query($mysqli,
  "INSERT INTO tbl_sigupkh(Name,Phone,EmailKH,Address,Checkin,Checkout,Roomtype,numberRoom) 
  VALUE ('".$name."','".$phone."','".$email."','".$address."','".$checkin."','".$checkout."','".$Room."','".$NfR."')");
  if($sql_sigup){
    echo'<script>alert("Bạn đã đăng kí thành công chúng tôi sẽ liên hệ sớm nhất có thể")</script>';
  }
}
?>
<div id="main1">
    <div class="user-information">
       <?php
       if(isset($_SESSION['sigup'])){
        echo '<span style="margin-left:26%">'.'xin chào '.'<span style="color:red; font-weight:700; font-size:25px">'.$_SESSION['sigup'].'</span>'.'</span>';
       }
       ?> 
       <span></br>Đăng kí đặt phòng</span>
       <form action='' method ='POST'>
       <div class="input1">
          <input type="text"  name="Name" placeholder="Name..."/>
        </div>
        <div class="input1">
          <input type="text"  name="Phone" placeholder="Phone..."/>
        </div>
        <div class="input1">
          <input type="text"  name="Email" placeholder="Email..."/>
        </div>
        <div class="input1">
          <input type="text"  name="Address" placeholder="Address..."/>
        </div>
        <div class="input1">
          <input type="text"  name="Checkin" placeholder="Check in..."/>
        </div> 
        <div class="input1">
          <input type="text"  name="Checkout" placeholder="Check out..."/>
        </div>
        <div class="input1">
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Roomtype</label>
          <select class="form-select" id="inputGroupSelect01" name ="Room">
          <option selected name ="RestRoom">RestRoom</option>
          <option  name ="Presidential">Presidential</option>
          <option  name ="BarRoom">BarRoom</option>
          <option  name ="Banquet">Banquet</option>
          </select>
        </div>
        </div>
        <div class="input1">
          <input type="text"  name="NfR" placeholder="Number of rooms..."/>
        </div>      
        <button id="btn" name ="sigup1" class="btn">Sigup</button>
        </form>
    </div>

    <div class="booking-information">
    <img src="img/setRoom.jpg" alt="Set">
    </div>
</div>