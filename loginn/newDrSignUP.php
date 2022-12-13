<?php
include 'connect.php';
if(isset($_POST['submit'])){
$nameErr=$emailErr=$passwordErr=$genderErr=$birthdayErr="";
if(empty($_POST['card_id'])){
  $idcardErr="id is required";
}
if(empty($_POST['certification'])){
  $certificationErr="certification is Required";
}
if(empty($_POST['speciality'])){
   $specialisteErr="speciality is Required";
}
if(empty($_POST['room'])){
  $roomErr="room is Required ";
}

if(!empty($_POST['card_id']) && !empty($_POST['certification']) && !empty($_POST['speciality']) && !empty($_POST['room'])){
$idcard=$_POST['card_id'];
$certification=$_POST['certification'];
$speciality=$_POST['speciality'];
$room=$_POST['room'];
$insert=" INSERT INTO doctordetails(licenceID,certificateNumber,speciality,room) VALUES ('$idcard','$certification','$speciality','$room')";
mysqli_query($conn, $insert);
header('location:/ESAProject/ESAProject/index.php');
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
</head>
<body>
    <div class="container"> 
        <img id="logo-signin" src="./Resources/Images/research.png">
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
                        <h2>Create Account</h2> 
                    </div> 
                    <div class="input_text"> 
                        <input type="number" placeholder="Licence Card ID" name="card_id"> 
                        <span class="error"><?php
                        if(isset($idcardErr)) {
                        echo $idcardErr;}
                        ?></span>
                    </div> 
                    <div class="input_text"> 
                        <input type="number" placeholder="Board Certification Number" name="certification">
                        <span class="error"><?php
                        if(isset( $certificationErr)) {
                        echo  $certificationErr;}
                        ?></span>
                    </div> 
                    <div class="input_text"> 
                        <input type="text" placeholder="Speciality" name="speciality"> 
                        <span class="error"><?php
                        if(isset($specialisteErr)) {
                        echo $specialisteErr;}
                        ?></span>
                    </div> 
                    <div class="input_text"> 
                        <input type="text" placeholder="Room" name="room"> 
                        <span class="error"><?php
                        if(isset($roomErr)) {
                        echo  $roomErr;}
                        ?></span>
                    </div> 
                    <div class="login_btn"> 
                        <button id="signup_button" type="submit" name="submit">SIGN UP</button> 
                    </div>
                    <div class="create">
                        <a href="/Login/newSignIN.php">Cancel</a>
                    </div>
                </form> 
            </div> 
        </div>
        <div id="profile-footer">
            <div style="margin:5px">
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

input{
    padding:10px;
}
    .error{
    display: block;
    margin: 5px 0px 0px 0px;
    height:50%;
    }
    .input_text span{
    color: red;
    position: absolute;
    bottom: 12px;
    right: 17px;
    font-size: 14px;
    }
</style>
</html>