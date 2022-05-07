<?php
require '../dbcon/user.php';
require '../dbcon/dbcon.php';



if(isset($_POST['submit'])){
    $c_id=$_POST['$c_id'];
    $c_name=$_POST['$c_name'];
    $c_du=$_POST['$c_du'];
    $c_hrs=$_POST['$c_hrs'];
    $c_fee=$_POST['$c_fee'];
    $c_des=$_POST['$c_des'];
    $c_upd = date('Y-m-d H:i:s');;


    $sql = "INSERT INTO `tb_caurse`( `c_id`, `c_name`, `c_du`, `c_hrs`, `c_fee`, `c_des`, `c_update`) VALUES ('$c_id','$c_name','$c_du','$c_hrs','$c_fee','$c_des','Admin',$c_upd)";
    $res1=mysqli_query($conn,$sql);


}

?>