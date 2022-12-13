<?php
include '../connect1.php';
if (isset($_POST['submit'])) {

    $nameErr = $emailErr = $passwordErr = $genderErr = $birthdayErr = "";
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    }
    if (empty($_POST['email'])) {
        $emailErr = "Invalid email";
    }
    if (empty($_POST['password'])) {
        $passwordErr = "Invalid password";
    }
    if (empty($_POST['birthday'])) {
        $birthdayErr = "Enter your Birthday";
    }
    if (empty($_POST['gender'])) {
        $genderErr = "Select Gender";
    }
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['birthday']) && !empty($_POST['gender'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $userType = 102;
        $insert = " INSERT INTO users(fullName,email,pass,birthday,gender,userType) VALUES ('$name','$email','$password','$birthday','$gender','$userType')";
        mysqli_query($conn, $insert);
        header('location:/ESAProject/Login/newDrSignUP.php');
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
    <title>Document</title>
    <style>
    .error {
        display: block;
        margin: 5px 0px 0px 0px;
        height: 50%;
    }

    .input_text span {
        color: red;
        position: absolute;
        bottom: 12px;
        right: 17px;
        font-size: 14px;
    }
    </style>
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
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="login">
                        <h2>Create Account</h2><br>
                    </div>
                    <div class="input_text">
                        <input type="text" placeholder="Username" name="name">
                        <span class="error"><?php
                                            if (isset($nameErr)) {
                                                echo $nameErr;
                                            }
                                            ?></span>
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="input_text">
                        <input type="email" placeholder="Email" name="email">
                        <span class="error"><?php
                                            if (isset($emailErr)) {
                                                echo $emailErr;
                                            } ?></span>
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div style="display:flex;">
                        <div class="input_text" style="margin-right:5px">
                            <select name="gender">
                                <option value="">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div style="color:red;font-size:14px;"><?php if (isset($genderErr)) {
                                                                        echo $genderErr;
                                                                    } ?></div>
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="input_text">
                            <input type="text" name="birthday" placeholder="Birthday" onfocus="(this.type='date')"
                                onblur="if(!this.value) this.type='text'">
                            <span style="color:red;font-size:14px;padding-top:25px;height:50%;"><?php if (isset($birthdayErr)) {
                                                                                                    echo $birthdayErr;
                                                                                                } ?></span>
                            <i class="fa fa-solid fa-cake-candles"></i>
                        </div>
                    </div>
                    <div class="input_text">
                        <input type="password" name="password" class="signup_pass" id="passInput"
                            placeholder="Password">
                        <span class="error" style="margin-right:12px;margin-top:30px;height:50%;"><?php if (isset($passwordErr)) {
                                                                                                        echo $passwordErr;
                                                                                                    } ?></span>
                        <i class="fa fa-lock"></i>
                        <i class="fa fa-eye-slash signup_eye"></i>
                    </div>
                    <div class="login_btn">
                        <button id="signup_button" href="./newDrSignUP.php" name="submit" type="submit">Next</button>
                    </div>
                    <div class="create">
                        <p>Already have an account? <a href="../Login/newSignIN.php" class="login_acc">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div id="profile-footer">
            <div style="margin:5px;color:var(var(--white))">
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

</html>