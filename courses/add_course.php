<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/main1.css">
    </head>
    <body style="width: 975px;">
        <div class="header">
            Add Course<br>
            <form action="add_course.php" method="post">
                <table style="margin: auto; width: 600px;padding: 20px">
                    <tr>
                        <td style=" width: 150px">
                            Course ID:
                        </td>
                        <td>
                            <input type="text" name="c_id" placeholder="ID *" pattern=".{3,5}" title="3 to 5 characters">
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Course Title :
                        </td>
                        <td>
                            <input type="text" name="c_name" placeholder="Course title *" pattern=".{3,}" title="Charachters only">
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Duration (Months):
                        </td>
                        <td>
                            <input type="text" name="c_du" placeholder="Course Duration *" maxlength="10" pattern="\d+.{1,4}" title="Duration">
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Hours :
                        </td>
                        <td>
                            <input type="text" name="c_hrs" placeholder="Course Duration *" maxlength="5" pattern="\d+.{1,4}" title="No of Hours">
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Course Fee (Rs.) :
                        </td>
                        <td>
                            <input type="text" name="c_fee" placeholder="Course Fee *" maxlength="5" pattern="\d+.{3,5}" title="Course Fee">
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Course Description :
                        </td>
                        <td>
                            <input type="text" name="c_des" placeholder="Course Decription *" pattern=".{3,}" title="Charachters only">
                        </td>
                    </tr>
                </table>
                <table style="margin: auto; width: 600px"> 
                    <tr>
                        <td>
                            <input type="submit" value="Submit" name="submit">
                        </td>  
                        <td> 
                            <input type="submit" name="button" id="button" value="Cancel" onclick="clear()">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
            require '../dbcon/dbcon.php';
            require '../dbcon/user.php';
            if(isset($_POST['submit'])){
                $c_id =$_POST['c_id'];
                $c_name=$_POST['c_name'];
                $c_du=$_POST['c_du'];
                $c_hrs=$_POST['c_hrs'];
                $c_fee=$_POST['c_fee'];
                $c_des=$_POST['c_des'];
                $c_upd = date('Y-m-d H:i:s');;
                $sql = "INSERT INTO `tb_caurse`(`c_id`, `c_name`, `c_du`, `c_hrs`, `c_fee`, `c_des`,`c_update`) VALUES ('$c_id','$c_name','$c_du','$c_hrs','$c_fee','$c_des','$c_upd')";
                $res1 = mysqli_query($conn, $sql);
                echo '<script language="javascript">';
                echo 'alert("User Added Successfully ");';  //not showing an alert box.

            }
        ?>
    </body >
</html>