<html>
<head>
    <title>LOGIN WEBSITE</title>
</head>
<body>
    <h3>Form Input Data</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h3>Hasil :</h3>
    <?php
        if(isset($_POST['submit'])){
            $username = trim($_POST['username']);
            
                        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
                echo "Username Tidak diizinkan<br>";
            }
        
            $password = trim($_POST['Password']);
            
                        if(!preg_match("/^[min from 10]*$/", $username)){
                echo "Username Tidak diizinkan<br>";

            else if(!empty($_POST['username,Password'])){
                echo "WELCOME TO WEBSITE<br>";
            }    
        }    
    ?>
</body>
</html>