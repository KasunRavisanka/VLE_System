<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/sub.css" type="text/css">

</head>
<body style="width: 975px;">
<div class="header">
    Add Users
</div>
<div class="cont">
    <table>
        <tr>
            <td>
                <a href="add_user.php">
                    <div class="nav_button">
                        <img src="../img/icons/add.png">
                        <br>
                        Add Another User
                    </div>
                </a>
            </td>
            <td>
                <a href="index.php">
                    <div class="nav_button">
                        <img src="../img/icons/Search.png">
                        <br>
                        Got to Users
                    </div>
                </a>
            </td>
        </tr>
    </table>
    <?php
    require '../dbcon/user.php';
    require '../dbcon/dbcon.php';
    $sql2 ="SELECT * FROM tb_user WHERE id = (SELECT max(id) FROM tb_user)";
    $result2=mysqli_query($conn,$sql2);
    if($result2!="") {
        while ($row = mysqli_fetch_array($result2)){
            $preid= $row['id'];
        }
    }
    else{
        $preid= 1;
    }
    $u_id='U'.($preid+1);

    echo'';

    ?>
    <?php
    require '../dbcon/user.php';
    require '../dbcon/dbcon.php';



    if(isset($_POST['submit'])){
        $u_id1=$u_id;
        $u_name=$_POST['u_name'];
        $u_type=$_POST['usertype'];
        $date_clicked = date('Y-m-d H:i:s');;
        $username = $_POST['username'];
        $u_tp=$_POST['u_tp'];
        $u_pw=$_POST['u_pw'];
        $con_u_pw=$_POST['con_u_pw'];

        $sql1 ="SELECT * FROM tb_user WHERE username='$username'";
        $result1=mysqli_query($conn,$sql1);
        if(($u_name=="")or ($u_type=="") or ($username=="") or ($u_tp=="") or ($u_pw=="") or ($con_u_pw=="")){
            echo '<script language="javascript">';
            echo 'alert("Enter the Details Correctly ");';  //not showing an alert box.
            echo '</script>';

        }
        elseif ($con_u_pw!=$u_pw){
            echo '<script language="javascript">';
            echo 'alert("Passwords Do not match ");';  //not showing an alert box.
            echo '</script>';
        }
        elseif ($result1==""){
            echo '<script language="javascript">';
            echo 'alert("Duplicate User ");';  //not showing an alert box.
            echo '</script>';

        }
        else{
            $sql = "INSERT INTO tb_user (`u_id`,`u_name`,`u_type`,`u_ch_date`,`username`,`u_tp`,`u_pw`) VALUES ('$u_id1','$u_name','$u_type','$date_clicked','$username','$u_tp','$u_pw')";
            $res1=mysqli_query($conn,$sql);
            echo '<script language="javascript">';
            echo 'alert("Added Successfully ");';  //not showing an alert box.
            echo '</script>';

        }



    }

    ?>






</div>


</body>