<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>

<?php

$service="";
$description="";
$errorMessage="";
$errors['exist']="";
if(isset($_POST['submit'])){

        $service=$_POST['service'];
        $description=$_POST['description'];

        if(empty($service) || empty($description)){
            $errorMessage ="ALL FIELDS REQUIRED";
        }
        else{
            $sql = "SELECT * FROM services WHERE serviceName='$service'";
            //execute the query
            $res = mysqli_query($conn, $sql);

            //check if user exists or not
            $count = mysqli_num_rows($res);

            if ($count != 0) {
                $errors['exist'] = "service already exists";
            }
            else{
                
            $insert="INSERT INTO services(serviceName,serviceDesc) VALUES ('$service','$description')";
            $result= mysqli_query($conn,$insert);
            header('Location:/ESAProject/Admin/service.php');
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

    <div class="container" style="margin-top:60px;">
        <img id="logo" src="../images/Hospital wheelchair-pana.svg">
        <div class="content">
            <h2 class="title">Add New Services</h2>
            <?php
            if (!empty($errorMessage)) {
                echo '<span class="error">' . $errorMessage . '</span>';
            }
            ?>
            <h4 style="color:red">
            <?php
                echo $errors['exist'];
            ?></h4>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="div">
            <label class="label">Name Of Service:</label>
            <input type="text" class="input"  name="service" value="<?php echo $service;?>"><br>
            </div>
            <div class="div">
            <label class="labeli" >Description:</label>
            <textarea class="input" name="description" ><?php echo $description;?></textarea>
            </div>
            <div class="DIV">
            <button type="submit" class="btn" name="submit">ADD</button>
            <a type="cancel" class="btnc" href="/ESAProject/services/service.php">Cancel</a>
            </div>
        </div>  

        </form>
    </div>
    </div>
</body>

</html>
<style>
#logo {
    height: 500px;
    width: 500px;
    background-color: #16a085;
}

.container {
    display: flex;
    justify-content: center;
    padding-top: 30px;

}

.content {
    height: 500px;
    width: 500px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.input {
    height: 25px;
    width: 400px;
    border: none;
    background-color: #E7DCE6;
    outline: 0;
    padding: 5px 10px;
    border-radius: 5px;
}

.div {
    padding-top: 30px;

}

.title {
    padding-top: 50px;
    font-size: 40px;
    color: #16a085;
}

.btn {
    background-color: #16a085;
    color: white;
    width: 100px;
    height: 35px;
    border: none;
    border-radius: 10px;

}

.btnc {
    color: #16a085;
    padding: 6px 30px 7px 30px;
    border: 2px solid #16a085;
    text-decoration: none;
    border-radius: 10px;
}

.DIV {
    padding-top: 30px;
}

.btn:hover {
    background-color: #16a070;
    color: #fff;
    cursor: pointer;
}

.btnc:hover {
    background-color: #16a085;
    color: white;
    cursor: pointer;
}

.error {
    padding: 5px 12px 5px 12px;
    border-radius: 5px;
    background-color: #FF8A8A;
    color: white;
    font-size: 20px;

}

.label {
    font-size: 18px;
    color: #16a085;
    margin-right: 280px;
    font-weight: 600;
}

.labeli {
    font-size: 18px;
    color: #16a085;
    margin-right: 315px;
    font-weight: 600;
}

@media(max-width:990px) {
    .container {
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
    }

}
</style>