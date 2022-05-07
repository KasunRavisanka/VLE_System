<!DOCTYPE html>
<html>
    <head>
        <!--title> WESTGATE College of Technology Student Registration System </title-->
        <link rel="icon" href="img/icons/LICT.png" type="image/png" sizes="32x32">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/main1.css" type="text/css">
        <link  rel="stylesheet" href="css/sub.css" type="text/css">
    </head>
    <body>
        <?php
            if(isset($_SESSION['username'])){
                require 'dbcon/user.php';
                require 'dbcon/dbcon.php';
                $username = $_SESSION['username'];
                $sql = "SELECT * FROM tb_user WHERE username='$username'";
                $result = mysqli_query($conn,$sql);
                if($result != "") {
                    while ($row = mysqli_fetch_array($result)){
                        $usertype = $row['u_type'];
                    }
                }
                echo '
                <div id="home_cont">
                    <!--header-->
                    <div id="header1">
                        <table width="1000">
                            <tr>
                                <!--left image-->
                                <!--td width="500">
                                    <div id="header">
                                        <img src="img/icons/banner.png" style="margin-left: 20px">
                                    </div> 
                                </td-->
                                <!--right image-->
                                <td> 
                                    <table style="margin-left: 50px; width: 300px;">
                                        <!--username-->
                                        <tr>
                                            <td rowspan="3">
                                                <img src="img/icons/user.png" width="140" height="140">
                                            </td>
                                            <td width="200">
                                                <h3>',$_SESSION['username'],'</h3>
                                            </td>
                                        </tr>
                                        <!--user typr-->
                                        <tr>
                                            <td width="200">
                                                <h4>' ,$usertype,'</h4>
                                            </td>
                                        </tr>
                                        <!--logout button-->
                                        <tr>
                                            <td width="200"> 
                                                <form action="sessionout.php" method="post">
                                                    <input type="submit" value="Logout">
                                                </form>';

                echo '
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>';


                echo '

                    </div>
                    <!--navigation bar-->
                    <div class="nav" >
                        <table>
                            <tr>
                                <!--students-->
                                <td>
                                    <a href="Users/Students/index.html" target="frame1">
                                        <div class="nav_item">Student</div>
                                    </a>
                                </td>
                                <!--teachers-->
                                <!--td>
                                    <a href="Users/Teachers/index.html" target="frame1">
                                        <div class="nav_item">Teachers</div>
                                    </a>
                                </td-->
                                <!--courses-->
                                <td>
                                    <a href="courses/index.html" target="frame1">
                                        <div class="nav_item">Courses</div>
                                    </a>
                                </td>
                                <!--Payments-->
                                <td>
                                    <a href="payments/index.html" target="frame1">
                                        <div class="nav_item">Payments</div>
                                    </a>
                                </td>
                                <td>
                                <!--Enroll-->
                                    <a href="report/index.html" target="frame1">
                                        <div class="nav_item">Enroll</div>
                                    </a>
                                </td>
                                <!--reposts-->
                                <td>
                                    <a href="report/index.html" target="frame1">
                                        <div class="nav_item">Reports</div>
                                    </a>
                                </td>
                                <!--users-->
                                <!--td>
                                    <a href="users/index.php" target="frame1">
                                        <div class="nav_item">Users</div>
                                    </a>
                                </td-->
                            </tr>
                        </table>                                                                                        
                    </div>';
                echo '
                <hr>
                    <iframe name="frame1" scrolling="yes" src="users/teachers/home.html" width="1000px" height="550px" frameborder="none">
                    </iframe>
                <hr>';
            }
        ?>
    </body>
</html>