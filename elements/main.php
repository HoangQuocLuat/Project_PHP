<?php
if(isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
}else{
    $tam = '';
}
if ($tam ==''){
    include("pages/home.php");
}elseif($tam =='Home'){
    include("pages/home.php");
}elseif($tam =='Introduce'){
    include("pages/introduce.php");
}elseif($tam =='Introduce'){
    include("pages/introduce.php");
}elseif($tam =='Album'){
    include("pages/album.php");
}elseif($tam =='RestRoom'){
    include("pages/Room/RestRoom.php");
}elseif($tam =='Banquet'){
    include("pages/Room/Banquet.php");
}elseif($tam =='BarRoom'){
    include("pages/Room/BarRoom.php");
}elseif($tam =='Presidential'){
    include("pages/Room/Presidential.php");
}elseif($tam =='Menu'){
    include("pages/Menu.php");
}elseif($tam =='Feedback'){
    include("pages/feedback.php");
}elseif($tam =='Setnow'){
    include("pages/tobook.php");
}elseif($tam =='loginKH'){
    include("login/loginKH.php");
}elseif($tam =='sigup'){
    include("login/sigup.php");
}
?>