<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>
<?php 
    if(isset($_SESSION['userType'])){
      if($_SESSION['userType']=='100'){
        $_SESSION['not super admin']="<div style='text-center'> You do not have access to the admins page</div>";
        header('location:'.SITEURL.'admin/dashboard.php');
      }
    }  
?>
<?php
$sql = "SELECT * FROM admin where type='100'";
                
$res=mysqli_query($conn,$sql);
            

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=0.8">
    <title>MedCenter-Admins</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <!-- Custom CSS -->
    
    <link rel="stylesheet" href="css/admins.css">
    
    <link rel="stylesheet" href="css/styles.css">
    <style>
  a{
    text-decoration:none!important;
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
              <span class="material-icons-outlined"><!--<img src="images/logo.png" alt="logo" style="background-color:#21232d ;">--></span> MedCenter
            </div>
            <span class="material-icons-outlined closeIc" onclick="closeSidebar()">close</span>
          </div>
  
          <ul class="sidebar-list">
            <li class="sidebar-list-item" >
            <a href="dashboard.php"style="color:white!important; text-align:left"><span class="material-icons-outlined">dashboard</span> Dashboard</a>
            </li>
            <?php
            if(isset($_SESSION['userType'])){
              if($_SESSION['userType']!='100'){
                ?>
              
            <li class="sidebar-list-item" >
            <a href="admins.php"style="color:white!important; text-align:left"><span class="material-icons-outlined">admin_panel_settings</span>  Admins</a>
            </li>
              
            <?php
              } 
            } 
            ?>        
            <li class="sidebar-list-item" >
            <a href="doctors.php"style="color:white!important; text-align:left"><span class="fa fa-user-md " style="font-size: 20px;" id="doctors"></span> &nbsp; Doctors</a>
            </li>
            <li class="sidebar-list-item" > 
            <a href="patients.php"style="color:white!important; text-align:left"><span class="material-symbols-outlined" id="Patients">personal_injury</span> Patients</a>
            </li>
            <li class="sidebar-list-item">
            <a href="appointments.php"style="color:white!important; text-align:left"><span class="material-symbols-outlined" id="appo">book_online</span> Appointments</a>
            </li>
  
            <!--<li class="sidebar-list-item">
              <span class="material-symbols-outlined " id="phar">medication</span> Pharmacy
            </li>
            <li class="sidebar-list-item">
              <span class="material-icons-outlined" id="orders">shopping_cart</span> Sales Orders
            </li>-->
            <?php
            if(isset($_SESSION['userType'])){
              if($_SESSION['userType']!='100'){
                ?>
              <li class="sidebar-list-item">
            <a href="add-admin.php"style="color:white!important; text-align:left"><span class="material-icons-outlined" id="reg">settings</span> Register New</a>
            </li> 
            <?php
              } 
            } 
            ?>
            
            <li class="sidebar-list-item">
            <a href="update-admin.php"style="color:white!important; text-align:left"><span class="material-icons-outlined" id="upd">settings</span> Update Profile</a>
            </li>
            <li class="sidebar-list-item">
              <a href="logout.php"style="color:white!important; text-align:left"><span class="material-icons-outlined" >logout</span>Logout</a>
            </li>
          </ul>
        </aside>
        <!-- End Sidebar -->
  
        <!-- Main -->
        <main class="main-adm-container">
          <div class="adm-title">
            <h2 class="font-weight-bold">ADMINS <br>
            <?php
              if(isset($_SESSION['delete'])){
                echo $_SESSION['delete'];
                UNSET($_SESSION['delete']);
              }
          ?>
          </h2>
          </div>
  
            <div class="adm-cards">
  
            <div class="adm-card">
              <div class="adm-inner">
                <p class="text-primary">Add New Admin</p>
              </div>
              <button class="text-primary adm-btn" id="register"> <a href="add-admin.php" style="color:white"> Register</a></button>              
            </div>

            <div class="adm-card">
                <div class="adm-inner">
                  <p class="text-primary">Update Profile</p>
                </div>
                <button class="text-primary adm-btn" id="viewprof"><a href="update-admin.php" style="color:white">Update Profile</a></button>              
            </div>
            <?php
              while($row=mysqli_fetch_assoc($res)){
                $aid=$row['id'];
                $admName=$row['username'];
            
            ?>
            <div class="adm-card">
                <div class="adm-inner">
                  <p class="text-primary" style="color:black !important;"><?php echo $admName ?></p>
                </div>
                <button class="text-primary adm-btn remove"> <a  style="color:white" href="delete-admin.php?a_id=<?php echo $aid?>">Remove Admin</a> </button>                                
            </div>
            <?php
           }
            
            ?>
           
        </div>
    </main>
   
    <script src="javascript/scripts.js"></script>
    <!--<script>
        document.getElementById("register").addEventListener('click',function(){
        location.href="add-admin.php";
        });
        let i;
        for(i=0;i<document.getElementsByClassName("remove").length;i++){
            document.getElementsByClassName("remove")[i].addEventListener('click',function(){
            confirm("Do you want to delete this account?")
            });
        }

        document.getElementById("viewprof").addEventListener('click',function(){
        location.href="update-admin.php";
        });

    </script>-->
    <script src="javascript/scripts1.js"></script>
</body>
</html>
