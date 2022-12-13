<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>
<?php
    if(isset($_GET['app_id'])){
    $aid = $_GET['app_id'];
    $patname=$_GET['patname'];
    $docname=$_GET['drname'];
    $sql = "SELECT * FROM appointments WHERE id='$aid'";
                
    $res=mysqli_query($conn,$sql);
                
    $row=mysqli_fetch_assoc($res);
                        
    $date=$row['appDate'];
    $time=$row['appTime'];              
    }
    else{
        header('location:http://localhost:80/ESAProject/admin/appointments.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=0.75">
    <title>MedCenter-Appointmnent Details</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">

<style>
    .popup2{
        width:500px;
        height: 500px;
        background-color:  #367952;
        border-radius: 6px;
        margin: auto;
        
        /*transform: translate(-50%,-50%) scale(0.1);*/
        text-align: center;
        padding: 10px 30px 30px;
        color: #333;
        opacity: 1;
        visibility: visible;
        transition: 0.4s,top 0.4s;
        }
        .popup2 button{
        background-color: white !important;
        color:   #367952 !important;
        
        }
        .popup2 button:hover{
        background:  #367952 !important;
        color: #fff !important; 
        transition: 0.5rem;
    }
  
  a{
    text-decoration:none!important;
    color:black;
  }
  a:hover{
    color: white !important;
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
      

      <main class="main-container">
        <div class="main-title">
          <h2 class="font-weight-bold">Appointments
            <p style="color:#367952;">MedCenter
              <span style="content: \2192;color: #666666;" >&#8594;</span> <small style="color: #666666;">Appointment Details</small></p>             
        </h2>
        </div>
        
        <div class="popup2">
          <form action="<?php $_SERVER['PHP_SELF']?>"  method="POST">
            <br> <h2>Appointmet for </h2>
            <h2><?php echo $patname?> with</h2>
            <h2>Dr.<?php echo $docname?></h2>
            <hr>
            <h3>Appointment Details</h3>
            
            <h4><?php echo $date ?><br><?php echo $time ?></h4>
            <h5 style="text-align:left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptas quasi voluptate iure quo deserunt dicta, minus modi odit labore. 
            Nesciunt voluptatibus, recusandae est dolorem quibusdam mollitia iure minima reiciendis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni blanditiis obcaecati illum earum dolorum! Unde, exercitationem aliquid! Voluptatum vel pariatur autem consequatur similique. 
            Placeat vel rem eligendi animi ut illo!</h5>
            <br>
            <button><a href="<?php echo SITEURL; ?>admin/deleteApp.php?app_id=<?php echo $aid?>&patname=<?php echo $patname?>"> Delete</button>
          </form>
        </div>

        

        
    <script src="javascript/scripts.js"></script>
    <script src="javascript/scripts1.js"></script>
    </body>
</html>
