<!DoCTYPE html>
<html>
    <head>
        <!--title> WESTGATE College of Technology Student Registration System </title-->
        <!--link rel="icon" href="img/icons/LICT.png" type="image/png" sizes="32x32"-->
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/main1.css" type="text/css">
    </head>
    <body>
        <?php
            include('dbcon/dbcon.php');
            session_start();
            if(isset($_SESSION['username'])){
                if($_SESSION['type']=='Administrator'){
                    require 'Users/admins/home_screen.php';
                }else if($_SESSION['type']=='Teacher'){
                    require 'Users/teachers/home_screen.php';
                }else if($_SESSION['type']=='Student'){
                    require 'Users/students/home_screen.php';
                }
            }else{
                require 'login-form.php';
            }
        ?>
    </body>
</html>