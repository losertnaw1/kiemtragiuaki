<?php
    include("config/db.php");
    session_start();
    include("../template/header.php")
?>
    <form method="POST" >
        <fieldset>
            <legend>Đăng nhập</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" size="30"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" size="30"></td>
                </tr>
                <tr>
                    <td colspan="2"> <input name="btn_submit" type="submit" value="Đăng nhập"></td>
                </tr>
            </table>
    </fieldset>
    </form>
    <?php
        if(isset($_POST['btn_submit'])){
            $username = $_POST['username'];
            $pass  = $_POST['password'];
    
            //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
            //Bước 02: Thực hiện truy vấn
            $sql = "SELECT * FROM user WHERE username='$username' AND pass='$pass'";
            $result = mysqli_query($conn,$sql);
            
            $count=mysqli_num_rows($result);
            
            if($count == 1){
                $_SESSION['login'] = $username; //Tạo SESSION
                header('location:'.siteurl.'/admin/index.php');
            }else{
                $_SESSION['message'] = 'abcxuz';
                header('location:'.siteurl.'/admin/login.php');
            }
        }

    ?>
</body>
</html>