<?php
    echo '
    <div id="login">
        <form action="login.php" method="post">
            <table style="width: 400px;margin: auto;text-align: center">
                <tr>
                    <td colspan="2">
                        <h1>VLE Login</h1>
                    </td>
                </tr>';
    echo '               
                <tr>
                    <td>User Name :</td>
                    <td>
                        <input type="text" name="username" placeholder="Enter User Name">
                    </td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter Password">
                    </td>
                </tr><br>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </div>';
?>