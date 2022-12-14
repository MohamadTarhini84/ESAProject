<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>
<?php
  $sql="SELECT * FROM users WHERE userType='100'";
  
  //execute the query
  $res=mysqli_query($conn,$sql);
  $sn=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=0.75">
    <title>MedCenter-Patients</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <!-- Custom CSS -->
    
    
    <link rel="stylesheet" href="css/newStyle.css">
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pharmacy-style.css">
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
      <main class="main-container">
        <div class="main-title">
          <h2 class="font-weight-bold"><br>
            <p style="color:#367952;">MedCenter
              <span style="content: \2192;color: #666666;" >&#8594;</span> <small style="color: #666666;">Doctors</small></p>
        </h2>
        </div>
<br>
<!-- -------------------------------Appointments Div----------------------------------------->

          <div class="charts-card">
              
             <!--Appointments List-->
          <div class="list" style="height: 700px;">   
            
        <!--    <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Search patient name here.."
        />
        <button id="search">Search</button>
      </div>
      <div id="buttons">
        <button class="button-value" >All</button>
        <button class="button-value" >
          Normal
        </button>
        <button class="button-value" >
          Banned
        </button>
        
      </div>-->
      <br>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>Gender</th>                  
                  
                  <th>Phone Number</th>
                  
                  <!--<th>Status</th>-->
                  <th></th>
                 
                </tr>
              </thead>
              <tbody>
              <?php
                
                while($row = mysqli_fetch_assoc($res)){
   
                 //user available
                   $cid=$row['id'];
                   $patname = $row['fullName'];                   
                   $email=$row['email'];
                   $age=$row['birthday'];
                   $gender=$row['gender'];
                   
                   $phone=$row['phoneNumber'];             
               ?>
                <tr>
                    <td class="name-img">                        
                    <?php echo $sn;?>
                    </td>
                    <td><?php echo $patname;?></td>
                    <td><?php echo$email;?></td>
                    <td><?php echo$age;?></td>
                    <td><?php echo$gender;?></td>
                    
                    <td><?php echo$phone;?></td>
                    
                    <!--<td class="Appr" id="status">Normal</td>  -->                                 
                    <td>
                      <button><a style="color:black;" href="<?php echo SITEURL; ?>admin/patients.php?id=<?php echo $cid?>&patname=<?php echo $patname?>">View Profile</a></button>
                      <button><a style="color:black;" href="<?php echo SITEURL; ?>admin/deletePatient.php?id=<?php echo $cid?>" onclick="return confirm('Are you sure you want to delete this?')">Delete Patient</a></button>

                      <!--<button onclick="toggle()"> Status</button>-->
                    </td>
                </tr>
                <?php               
                $sn++;
                 }
                ?>
              </tbody>
            </table>
          </div>

    </div>
</div><!--
    <div class="popup" id="popup">
      <h2>Dr. Doc Doctor</h2>
      <br>
      <button onclick="toggle()" id="ok">Approve</button>
      <button onclick="toggle()" id="ban">Decline</button>
      <button onclick="toggle()" id="del">Cancel</button>
    </div>-->
      </main>
      <!-- End Main -->
    
    <!-- Custom JS -->
    <script src="javascript/scripts.js"></script>
    <script>
      function toggle(){
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup');
        popup.classList.toggle('active');

      }
    </script>

     <script>      
      function goto(){
          window.location.href="Drprofile.php";
      }
    </script>
</body>
</html>