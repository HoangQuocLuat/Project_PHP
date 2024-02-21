
        <?php
if(isset($_GET['admin'])){
    $tam1 = $_GET['admin'];
}else{
    $tam1 = '';
}
if ($tam1 ==''){
    include("modul/welcome.php");
}elseif($tam1 =='qlKH'){
    include("modul/qlKH.php");
}elseif($tam1 =='qlBV'){
    include("modul/qlBV.php");
}elseif($tam1 =='qlHA'){
    include("modul/qlHA.php");
}
?>