<!DOCTYPE html>
<html>
    <body>
        <?php
            require '../dbcon/user.php';
            require '../dbcon/dbcon.php';
            $sql2 = "SELECT * FROM tb_student WHERE id = (SELECT max(id) FROM tb_student)";
            $result2 = mysqli_query($conn, $sql2);
            if($result2 != "") {
                while($row = mysqli_fetch_array($result2)){
                    $preid = $row['id'];
                }
            }
            else{
                $preid= 1;
            }
            if($preid<9){
                $st_id='ST0000'.($preid+1);
            }
            elseif ($preid<99){
                $st_id='ST000'.($preid+1);
            }
            elseif ($preid<999){
                $st_id='ST00'.($preid+1);
            }
            elseif ($preid<9999){
                $st_id='ST0'.($preid+1);
            }
            else{
                $st_id='ST'.($preid+1);
            }
            if(isset($_POST['submit'])){
                date_default_timezone_set("Asia/Calcutta");
                $st_type=$_POST['st_type'];
                $st_name=$_POST['st_name'];
                $st_bd=$_POST['st_bd'];
                $st_add=$_POST['st_add'];
                $st_gender=$_POST['st_gender'];
                $st_scl=$_POST['st_scl'];
                $st_home_cont=$_POST['st_home_cont'];
                $st_mob_cont=$_POST['st_mob_cont'];
                $st_email=$_POST['st_email'];
                $st_home_cont=$_POST['st_home_cont'];
                $st_gud_name=$_POST['st_gud_name'];
                $st_rel=$_POST['st_rel'];
                $st_cont_gud=$_POST['st_cont_gud'];
                $st_job=$_POST['st_job'];
                $st_emp=$_POST['st_emp'];
                $st_emp_cont=$_POST['st_emp_cont'];
                $st_pry_cont=$_POST['st_pry_cont'];
                $st_hear=$_POST['st_hear'];
                $st_rm=$_POST['st_rm'];
                date_default_timezone_set("Asia/Calcutta");
                $st_time= date("h:i:sa");
                $st_date = date('Y-m-d H:i:s');;
                $st_update = date('Y-m-d H:i:s');;
                $sql3 = "SELECT * FROM tb_userlog WHERE id = (SELECT max(id) FROM tb_userlog)";
                $result3=mysqli_query($conn,$sql3);
                if($result3 != "") {
                    while ($row = mysqli_fetch_array($result3)){
                        $st_added = $row['username'];
                    }
                }
                $sql = "INSERT INTO `tb_student`(`st_type`, `st_id`, `st_name`, `st_bd`, `st_add`, `st_gender`, `st_scl`, `st_home_cont`, `st_mob_cont`, `st_email`, `st_gud_name`, `st_rel`, `st_cont_gud`, `st_job`, `st_emp`, `st_emp_con`, `st_pry_con`, `st_hear`, `st_rm`, `st_date`, `st_time`, `st_update`, `st_added`) VALUES ('$st_type','$st_id','$st_name','$st_bd','$st_add','$st_gender','$st_scl','$st_home_cont','$st_mob_cont','$st_email','$st_gud_name','$st_rel','$st_cont_gud','$st_job','$st_emp','$st_emp_cont','$st_pry_cont','$st_hear','$st_rm','$st_date','$st_time','$st_update','$st_added')";
                $res1 = mysqli_query($conn, $sql);
                echo '<script language="javascript">';
                echo 'alert("User Added Successfully ");';  //not showing an alert box.
                echo '</script>';
            }
        ?>
    </body>
</html>