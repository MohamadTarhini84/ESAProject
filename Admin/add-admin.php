<?php require('../config/constants.php'); ?>
<?php require('./partials/login-check.php'); ?>

<?php
if (isset($_SESSION['userType'])) {
  if ($_SESSION['userType'] == '100') {
    $_SESSION['not super admin'] = "<div style='text-center'> You do not have access to the admins page</div>";
    header('location:' . SITEURL . 'admin/dashboard.php');
  }
}
?>
<?php

$errors = array(
  "usernameError" => "",
  "passError" => "",
  "verfError" => "",
  "verfpass" => "",
  "exist" => "",
  "success" => ""
);

if (isset($_POST['submit'])) {

  if (empty($_POST['username'])) {
    $errors['usernameError'] = 'username field is empty';
  }
  if (empty($_POST['pass'])) {
    $errors['passError'] = 'password field is empty';
  }
  if (empty($_POST['Verpass'])) {
    $errors['verfError'] = 'verify password field is empty';
  } else {

    $username = $_POST['username'];
    $password = $_POST['pass'];
    $passwordver = $_POST['Verpass'];

    //sql to check if the username and password exist or not
    $sql = "SELECT * FROM admins WHERE fullName='$username'";
    //execute the query
    $res = mysqli_query($conn, $sql);

    //check if user exists or not
    $count = mysqli_num_rows($res);

    if ($count != 0) {
      $errors['exist'] = "username already exists";
    } else {
      if ($password != $passwordver) {

        $errors['verfpass'] = 'Passwords do not match';
      } else {

        $sql2 = "INSERT INTO admins SET
                fullName='$username',
                pass='$password',
                adminType='100'
                ";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2 == true) {
          $errors['success'] = "Admin added successfully";
        } else {
          $errors['success'] = "Admin added successfully";
        }
      }
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=0.75">
    <title>MedCenter-Add New</title>

    <!-- Montserrat Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Custom CSS -->


    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
    a {
        text-decoration: none !important;
    }
    </style>
</head>

<body>
    <div class="grid-container" id="blur">
        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined">account_circle</span>
            </div>
        </header>
        <!-- End Header -->

        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-icons-outlined">
                        <!--<img src="images/logo.png" alt="logo" style="background-color:#21232d ;">-->
                    </span> MedCenter
                </div>
                <span class="material-icons-outlined closeIc" onclick="closeSidebar()">close</span>
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="dashboard.php" style="color:white!important; text-align:left"><span
                            class="material-icons-outlined">dashboard</span> Dashboard</a>
                </li>
                <?php
                  if (isset($_SESSION['userType'])) {
                    if ($_SESSION['userType'] != '100') {
                  ?>

                          <li class="sidebar-list-item">
                              <a href="admins.php" style="color:white!important; text-align:left"><span
                                      class="material-icons-outlined">admin_panel_settings</span> Admins</a>
                          </li>

                          <?php
                    }
                  }
                ?>
                <li class="sidebar-list-item">
                    <a href="doctors.php" style="color:white!important; text-align:left"><span class="fa fa-user-md "
                            style="font-size: 20px;" id="doctors"></span> &nbsp; Doctors</a>
                </li>
                <li class="sidebar-list-item" >
                    <a href="service.php"style="color:white!important; text-align:left"><span class="fa fa-heartbeat " style="font-size: 20px;" id="services"></span> &nbsp; Services</a>
                </li>
                <li class="sidebar-list-item">
                    <a href="patients.php" style="color:white!important; text-align:left"><span
                            class="material-symbols-outlined" id="Patients">personal_injury</span> Patients</a>
                </li>
                <li class="sidebar-list-item">
                    <a href="appointments.php" style="color:white!important; text-align:left"><span
                            class="material-symbols-outlined" id="appo">book_online</span> Appointments</a>
                </li>

                <?php
                  if (isset($_SESSION['userType'])) {
                    if ($_SESSION['userType'] != '100') {
                  ?>
                          <li class="sidebar-list-item">
                              <a href="add-admin.php" style="color:white!important; text-align:left"><span
                                      class="material-icons-outlined" id="reg">settings</span> Register New</a>
                          </li>
                          <?php
                    }
                  }
                ?>

                <li class="sidebar-list-item">
                    <a href="update-admin.php" style="color:white!important; text-align:left"><span
                            class="material-icons-outlined" id="upd">settings</span> Update Profile</a>
                </li>
                <li class="sidebar-list-item">
                    <a href="logout.php" style="color:white!important; text-align:left"><span
                            class="material-icons-outlined">logout</span>Logout</a>
                </li>
            </ul>
        </aside>
        <!-- End Sidebar -->

        <!-- Main -->
        <main class="main-container">

            <div class="main-title">
                <h2 class="font-weight-bold">REGISTER NEW <br>
                    <b style="color:red"><?php echo $errors['exist']; ?>
                        <?php echo $errors['success'] ?></b>
                </h2>
            </div>
            <div class="container" style="margin: auto;">
                <div class="login-content">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

                        <h2 class="title">Register
                        </h2>
                        <div class="input-div one">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h6 style="text-align:left; color:red"><?php echo $errors['usernameError']; ?></h6>
                                <h5>Username</h5>
                                <input type="text" name="username" class="input">

                            </div>

                        </div>
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h6 style="text-align:left; color:red"><?php echo $errors['passError']; ?></h6><br>
                                <h5>Password</h5>
                                <input type="password" name="pass" class="input">
                            </div>
                        </div>
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h6 style="text-align:left; color:red"><?php echo $errors['verfError']; ?>
                                    <?php echo $errors['verfpass']; ?></h6><br>

                                <h5> Confirm Password</h5>
                                <input type="password" name="Verpass" class="input">
                            </div>
                        </div>

                        <input type="submit" name="submit" class="btn" value="Register New">
                    </form>
                </div>
            </div>
        </main>

    </div>
    <script src="javascript/scripts.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>