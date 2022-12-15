<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:/ESAProject/index.php");
}
include '../connect1.php';
if (isset($_POST['name']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST['name']);
    $password = $_POST['password'];
    if (empty($name)) {
        header("Location:newSignIN.php?error=Name is required");
        exit();
    } elseif (empty($password)) {
        header("Location:newSignIN.php?error=password is required");
        exit();
    } else {
        $sql = " SELECT * FROM users WHERE fullName='$name' && pass='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['fullName'] === $name && $row['pass'] === $password) {
                $_SESSION['logged_in'] = true;
                $_SESSION['name'] = $row['fullName'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['userType']=$row['userType'];
                header("Location:/ESAProject/index.php");
                exit();
            } else {
                header("Location:/ESAProjct/loginn/newSignIN.php?error=Incorect User or Password");
                exit();
            }
        } else {
            header("Location:/ESAProjct/loginn/newSignIN.php?error=Incorect User or Password ");
            exit();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/4c2b37abf9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Login/styles.css">
    <title>Sign in!</title>
</head>

<body>
    <div class="container">
        <img id="logo-signin" src="./Resources/Images/Hello-rafiki.png">
        <div class="card">
            <div class="left-side">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="right-side">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="login">
                        <h2>User Login</h2>
                    </div>
                    <?php
                    if (isset($_GET['error'])) {
                    ?>
                    <br>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <div class="input_text">
                        <input type="text" placeholder="Username" name="name">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="input_text">
                        <input class="signin_pass" id="passInput" type="password" name="password"
                            placeholder="Password">
                        <i class="fa fa-lock"></i>
                        <i class="fa fa-eye-slash signup_eye"></i>
                    </div>
                    <div class="login_btn">
                        <button id="signup_button" type="submit" name="submit">LOG IN</button>
                    </div>
                    <div class="forgot">
                        <p>Forgot your <a href="#">username</a> or <a href="#">password</a>?</p>
                    </div>
                    <div class="create margin">
                        <p>Don't have an account?</p>
                        <a href="../Loginn/newPrompt.html" class="create_acc">Create Account</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="profile-footer">
            <div style="margin:5px;color:var(var(--white));text-align: center;">
                &copy; MedCenter 2022. All rights reserved.
            </div>
            <div id="profile-footer-links">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</body>
<style>
.forgot {
    text-align: center;
    margin-top: 20px;
    font-size: 13px;
    color: #B8B0B1;
    font-weight: 600;
    letter-spacing: 1px
}

.forgot p a {
    text-decoration: none;
    color: var(--green);
}

.error {
    text-align: center;
    font-size: 18px;
    background: var(--green);
    color: white;
    border-radius: 5px;
    height: 35px;
    padding: 5px 10px;
}
</style>
<script src="../Login/JavaScript/hidePassword.js"></script>

</html>