<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../css/sub.css">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/main1.css">
    </head>
    <body style="width: 975px;">
        <div class="header">
            Add Student<br>
            <form action="add.php" method="post">
                <table style="margin:auto; width:600px;padding:20px">
                    <tr>
                        <td>
                            <b>Personal Details</b>
                        </td>
                    </tr>
                    <?php
                        require '../../dbcon/user.php';
                        require '../../dbcon/dbcon.php';
                        $sql2 = "SELECT * FROM tb_student WHERE id = (SELECT max(id) FROM tb_student)";
                        $result2 = mysqli_query($conn,$sql2);
                        if($result2 != "") {
                            while($row = mysqli_fetch_array($result2)){
                                $preid= $row['id'];
                            }
                        }else{
                            $preid= 1;
                        }
                        if($preid<9){
                            $st_id='ST0000'.($preid+1);
                        }else if ($preid<99){
                            $st_id='ST000'.($preid+1);
                        }elseif ($preid<999){
                            $st_id='ST00'.($preid+1);
                        }elseif ($preid<9999){
                            $st_id='ST0'.($preid+1);
                        }else{
                            $st_id='ST'.($preid+1);
                        }
                    ?>
                    <tr>
                        <td style=" width: 150px">
                            Student ID :
                        </td>
                        <td>
                            <label > 
                                <?php echo $st_id; ?>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Student:
                        </td>
                        <td>
                            <select name="st_type">
                                <option value="Rev" >Rev</option>
                                <option value="Mr" selected>Mr</option>
                                <option value="Miss" >Miss</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Full Name :
                        </td>
                        <td>
                            <input type="text" name="st_name" id="st_name" placeholder="Enter Student Name *" pattern="[A-Za-z]{3,}" title="Charachters only"> 
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Get Photo (Photo Should Save using above Reg No  :
                        </td>
                        <td>
                            <a href="webrun:C:\xampp\htdocs\WESTGATE\student\MyCam\MyCam.exe" onclick="copyToClipboard('st_name')">
                                Click to Get Photo 
                            </a> 
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Date of Birth:
                        </td>
                        <td>
                            <input type="date" name="st_bd" placeholder="Enter Birthday *" pattern=".{5,}" title="5 or more characters">
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Address :
                        </td>
                        <td>
                            <input type="text" name="st_add" placeholder="Enter Student Address *" pattern=".{3,}" title="Enter the address"> 
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Gender:
                        </td>
                        <td>
                            <select name="st_gender">
                                <option value="Male" selected>Male</option>
                                <option value="Female" >Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            School Attended :
                        </td>
                        <td>
                            <input type="text" name="st_scl" placeholder="Enter Student School *" > 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b> Contact details</b>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Contact No - Home:
                        </td>
                        <td>
                            <input type="text" name="st_home_cont" placeholder="Enter Student Home Contact Number " maxlength="10" pattern="\d+.{5,}" title="Phone Numbers only">
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Contact No - Mobile:
                        </td>
                        <td>
                            <input type="text" name="st_mob_cont" placeholder="Enter Student Mobile Contact Number *" maxlength="10" pattern="\d+.{5,}" title="Phone Numbers only">
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Email :
                        </td>
                        <td>
                            <input type="email" name="st_email" placeholder="Enter Student E-mail *" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b> Guardian Details</b>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Name :
                        </td>
                        <td>
                            <input type="text" name="st_gud_name" placeholder="Enter Student Guardian's name *" pattern="[A-Za-z]{3,}" title="Charachters only"> 
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Relationship:
                        </td>
                        <td>
                            <select name="st_rel">
                                <option value="Father" selected >Father</option>
                                <option value="Mother" >Mother</option>
                                <option value="Guardian" >Guardian</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Contact No :
                        </td>
                        <td>
                            <input type="text" name="st_cont_gud" placeholder="Enter  Contact Number of Guadian *" maxlength="10" pattern="\d+.{5,}" title="Phone Numbers only">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b> Business Details</b>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Job Title/Profession :
                        </td>
                        <td>
                            <input type="text" name="st_job" placeholder="Enter Student Profession *" pattern="[A-Za-z]{3,}" title="Charachters only"> 
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Employer :
                        </td>
                        <td>
                            <input type="text" name="st_emp" placeholder="Enter Employer name *" pattern="{3,}" title="Charachters only"> 
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Contact No :
                        </td>
                        <td>
                            <input type="text" name="st_emp_cont" placeholder="Enter  Contact Number Job place *" maxlength="10" pattern="\d+.{5,}" title="Phone Numbers only">
                        </td>
                    </tr>
                    <tr
                        ><td>
                            <b> Other Details</b>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width:150px">
                            Primary Contact No:
                        </td>
                        <td>
                            <select name="st_pry_cont">
                                <option value="Personal" selected >Personal</option>
                                <option value="Office" >Office</option>
                                <option value="Guardian" >Guardian</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width:150px">
                            Way hear about Institute:
                        </td>
                        <td>
                            <select name="st_hear">
                                <option value="Handbill" selected >HandBill</option>
                                <option value="Word Of Mouth" >Word Of Mouth</option>
                                <option value="Seminar" >Seminar</option>
                                <option value="Social Media" >Social Media</option>
                                <option value="Other" >Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width: 150px">
                            Remark:
                        </td>
                        <td>
                            <input type="text" name="st_rm" placeholder="Enter Student Remark*" pattern="{3,}" title="Charachters only"> 
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
    </body >
</html>
