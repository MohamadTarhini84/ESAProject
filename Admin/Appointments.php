<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=0.75">
    <title>MedCenter-Appointments</title>

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
    <div class="grid-container" >
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
              <a href="service.php"style="color:white!important; text-align:left"><span class="fa fa-heartbeat " style="font-size: 20px;" id="services"></span> &nbsp; Services</a>
            </li>
            <li class="sidebar-list-item" > 
            <a href="patients.php"style="color:white!important; text-align:left"><span class="material-symbols-outlined" id="Patients">personal_injury</span> Patients</a>
            </li>
            <li class="sidebar-list-item">
            <a href="appointments.php"style="color:white!important; text-align:left"><span class="material-symbols-outlined" id="appo">book_online</span> Appointments</a>
            </li>
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
        <div class="main-title" >
          <h2 class="font-weight-bold">Appointments
            <p style="color:#367952;">MedCenter
              <span style="content: \2192;color: #666666;" >&#8594;</span> <small style="color: #666666;">Appointments</small></p>
              <?php
              if(isset($_SESSION['deleteApp'])){
                echo $_SESSION['deleteApp'];
                UNSET($_SESSION['deleteApp']);
              }
              
              ?>
        </h2>
        </div>
         
<!-- -------------------------------Appointments Div----------------------------------------->
<br><br>
          <div class="charts-card">
              
             <!--Appointments List-->
          <div class="list" style="height: 700px;" id="blur">     
                
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>birthday</th>
                  <th>Gender</th>                  
                  <th>Speciality</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Doctor</th>
                  <th>Fees</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php

                  /*$sql="SELECT users.firstName ,users.lastName,users.email,users.age,users.gender,appointments.*,doctordetails.speciality,doctordetails.fees
                  FROM appointments
                  join users 
                  on appointments.patientID=users.id
                  join doctordetails 
                  on doctordetails.doctorID=appointments.doctorID order BY appointments.id";
                  
                  //execute the query
                  $res=mysqli_query($conn,$sql);
                  
                  echo $count=mysqli_num_rows($res);
                  $sn=1;
                  while($row = mysqli_fetch_assoc($res)){
                    
                  //user available
                    $cid=$row['id'];
                    $patname = $row['firstName'].' '.$row['lastName'];
                    
                    $email=$row['email'];
                    $age=$row['age'];
                    $gender=$row['gender'];
                    
                    $spec=$row['speciality'];
                    $date=$row['appDate'];
                    $time=$row['appTime'];
                    $fee=$row['fees'];

                    $drID=$row['doctorID'];
                    $sql2="SELECT firstName ,lastName
                    FROM users
                    where id='$drID'";
                    $res2=mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($res2);
                    
                    $drName = $row2['firstName'].' '.$row2['lastName'];
                    */
                    $sql="SELECT * FROM appointments";
                  
                  //execute the query
                  $res=mysqli_query($conn,$sql);
                  
                  $count=mysqli_num_rows($res);
                  $sn=1;
                  while($row = mysqli_fetch_assoc($res)){
                    $cid=$row['id'];
                    $pid=$row['patientID'];
                    $did=$row['doctorID'];
                    $date=$row['appDate'];
                    $time=$row['appTime'];

                    $sql2="SELECT * FROM users where id='$pid'";
                    $res2=mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($res2);

                    $patname = $row2['fullName'];                    
                    $email=$row2['email'];
                    $age=$row2['birthday'];
                    $gender=$row2['gender'];

                    $sql3="SELECT * FROM users where id='$did'";
                    $res3=mysqli_query($conn,$sql3);
                    $row3 = mysqli_fetch_assoc($res3);
                    $drName = $row3['fullName'];   

                    $sql4="SELECT * FROM doctordetails where doctorID='$did'";
                    $res4=mysqli_query($conn,$sql4);
                    $row4 = mysqli_fetch_assoc($res4);
                    $spec = $row4['speciality'];  
                    $fee= $row4['fees'];  
              ?>
                <tr>
                  <td class="name-img">
                  
                    <?php echo $sn;?>                   
                  </td>
                  <td><?php echo $patname;?></td>
                  <td><?php echo $email;?></td>
                  <td><?php echo $age;?></td>
                  <td><?php echo $gender;?></td>
                  <td><?php echo $spec;?></td>
                  <td><?php echo $date;?></td>
                  <td><?php echo $time;?></td>
                  <td><?php echo 'Dr. '.$drName; ?></td>
                  <td><?php echo '$'.$fee;?></td>                                   
                  <td><button><a href="<?php echo SITEURL; ?>admin/AppDetails.php?app_id=<?php echo $cid?>&patname=<?php echo $patname?>&drname=<?php echo $drName?>"> View</button></td>
                </tr>
                
                <?php
                  $sn++;
                }
                ?> 
              </tbody>
            </table>
            
          </div> 

    </div>
</div>
<!--
<div class="popup" id="popup">
    Appointmet by <br> <h2 ?>"></h2>
    <h3>Appointment Details</h3>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptas quasi voluptate iure quo deserunt dicta, minus modi odit labore. 
      Nesciunt voluptatibus, recusandae est dolorem quibusdam mollitia iure minima reiciendis.</p>
      <br>
    <button onclick="toggle()">Okay</button>
    <button onclick="toggle()">Delete</button>

</div>-->
               
      </main>
      
      <!-- End Main -->
      

    <!-- Scripts -->
    
    <!-- Custom JS -->
    <script src="javascript/scripts.js"></script>
    <script src="javascript/scripts1.js"></script>
    <script>
      var b;
      function toggle(){        
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup');
        popup.classList.toggle('active');

      }
      
    </script>
  </body>
</html>
