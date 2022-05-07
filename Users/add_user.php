<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/main1.css">

</head>
<body style="width: 975px;">
<div class="header">
    Add User to the System
    <br>

    <form action="add.php" method="post">
        <table style="margin: auto; width: 600px;padding: 20px">
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
            $_SESSION['add']=$u_id;
            echo'';

            ?>
            <tr>
                <td style=" width: 150px">
                    User ID :
                </td>
                <td><label n="u_id" > <?php echo $u_id; ?></label></td>
            </tr>
            <tr>
                <td style=" width: 150px">
                   Name :
                </td>
                <td><input type="text" name="u_name" placeholder="Enter Your Name *" pattern="[A-Za-z]{3,}" title="Charachters only"></td>
            </tr>
            <tr>
                <td style=" width: 150px">
                    System User Name:
                </td>
                <td><input type="text" name="username" placeholder="Enter Your System User Name *" pattern=".{5,}" title="5 or more characters"></td>
            </tr>
            <tr>
                <td style=" width: 150px">
                    Select User Type:
                </td>
                <td>
                    <select name="usertype">
                        <option value="Administrator">Administrator</option>
                        <option value="Standard" selected>Standard</option>
                        <option value="Cashier">Cashier</option>
                    </select></td>
            </tr>
                        <tr>
                <td style=" width: 150px">
                    Contact No:
                </td>
                <td><input type="text" name="u_tp" placeholder="Enter your Contact No *" maxlength="10" pattern="\d+.{5,}" title="Phone Numbers only"></td>
            </tr>
            <tr>
                <td style=" width: 150px">
                    Password:
                </td>
                <td><input type="password" name="u_pw" placeholder="Enter your Contact No *" pattern=".{8,}" title="Eight or more characters"></td>
            </tr>
            <tr>
                <td style=" width: 150px">
                    Confirm Password:
                </td>
                <td><input type="password" name="con_u_pw" placeholder="Enter your Contact No *"  pattern=".{8,}" title="Eight or more characters"></td>
            </tr>

        </table>
        <table style="margin: auto; width: 600px"> <tr><td><input type="submit" value="Submit" name="submit"></td>  <td> <input type="submit" name="button" id="button" value="Cancel" onclick="clear()"></td>
                    </tr></table>
    </form>


</div>



</body >

</html>
