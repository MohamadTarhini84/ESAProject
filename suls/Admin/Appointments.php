<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=0.75">
    <title>MedCenter-Pharmacy</title>

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
              <span class="material-icons-outlined" id="dash">dashboard</span> Dashboard
            </li>
            <li class="sidebar-list-item" >
              <span class="material-icons-outlined" id="admins">admin_panel_settings</span>  Admins
            </li>          
            <li class="sidebar-list-item" >
              <span class="fa fa-user-md " style="font-size: 20px;" id="doctors"></span> &nbsp; Doctors
            </li>
            <li class="sidebar-list-item" > 
              <span class="material-symbols-outlined" id="Patients">personal_injury</span> Patients
            </li>
            <li class="sidebar-list-item">
              <span class="material-symbols-outlined" id="appo">book_online</span> Appointments
            </li>
  
            <!--<li class="sidebar-list-item">
              <span class="material-symbols-outlined " id="phar">medication</span> Pharmacy
            </li>
            <li class="sidebar-list-item">
              <span class="material-icons-outlined" id="orders">shopping_cart</span> Sales Orders
            </li>-->
            
            <li class="sidebar-list-item">
              <span class="material-icons-outlined" id="reg">settings</span> Register New
            </li>
            <li class="sidebar-list-item">
              <span class="material-icons-outlined" id="upd">settings</span> Update Profile
            </li>
          </ul>
        </aside>
        <!-- End Sidebar -->

      <!-- Main -->
      

      <main class="main-container">
        <div class="main-title">
          <h2 class="font-weight-bold">Appointments
            <p style="color:#367952;">MedCenter
              <span style="content: \2192;color: #666666;" >&#8594;</span> <small style="color: #666666;">Appointments</small></p>
        </h2>
        </div>
         
<!-- -------------------------------Appointments Div----------------------------------------->
<br><br>
          <div class="charts-card">
              
             <!--Appointments List-->
          <div class="list" style="height: 700px;">     
                
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
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

                  $sql="SELECT users.firstName ,users.lastName,users.email,users.age,users.gender,appointments.*,doctordetails.speciality,doctordetails.fees
                  FROM appointments
                  join users 
                  on appointments.patientID=users.id
                  join doctordetails 
                  on doctordetails.doctorID=appointments.doctorID";
                  
                  //execute the query
                  $res=mysqli_query($conn,$sql);
                  $count=mysqli_num_rows($res);
                  $sn=1;
                  while($row = mysqli_fetch_assoc($res)){
                    
                  //user available
                    $cid=$row['id'].'<br>';
                    $fname = $row['firstName'].'<br>';
                    $lname=$row['lastName'].'<br>';
                    $email=$row['email'].'<br>';
                    $age=$row['age'].'<br>';
                    $gender=$row['gender'].'<br>';
                    
                    $spec=$row['speciality'].'<br>';
                    $date=$row['appDate'].'<br>';
                    $time=$row['appTime'].'<br>';
                    $fee=$row['fees'].'<br>';

                    $drID=$row['doctorID'];
                    $sql2="SELECT firstName ,lastName
                    FROM users
                    where id='$drID'";
                    $res2=mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($res2);
                    
                    $drfName = $row2['firstName'].'<br>';
                    $drlName=  $row2['lastName'].'<br>';
                    /*$lname=$row['lastName'];
                    $email=$row['email'];
                    $gender=$row['gender'];
                    $email=$row['email'];
                    $phone==$row['phoneNumber'];
                  */
                  
 

              ?>
                <tr>
                  <td class="name-img">
                  <img src="img/avatar.svg" alt="" class="climg">&nbsp
                    <?php echo '0'.$sn;?>
                    
                  </td>
                  <td><?php echo $fname.' '. $lname; ?></td>
                  <td><?php echo $email;?></td>
                  <td><?php echo $age;?></td>
                  <td><?php echo $gender;?></td>
                  <td><?php echo $spec;?></td>
                  <td><?php echo $date;?></td>
                  <td><?php echo $time;?></td>
                  <td><?php echo 'Dr'.$drfName.' '. $drlName; ?></td>
                  <td><?php echo '$'.$fee;?></td>                                   
                  <td><button onclick="toggle()">View</button></td>
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
<div class="popup" id="popup">
    <h2>Appointmet by Mr Patient Pat</h2>
    <h3>Appointment Details</h3>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptas quasi voluptate iure quo deserunt dicta, minus modi odit labore. 
      Nesciunt voluptatibus, recusandae est dolorem quibusdam mollitia iure minima reiciendis.</p>
      <br>
    <button onclick="toggle()">Okay</button>
    <button onclick="toggle()">Delete</button>

</div>
      </main>
      
      <!-- End Main -->
      

    <!-- Scripts -->
    
    <!-- Custom JS -->
    <script src="javascript/scripts.js"></script>
    <script>
      /*
      function openPopUp(){
        popup.classList.add("open-popup");

      }
      function closePopUp(){
        popup.classList.remove("open-popup");

      }
      */
    </script>
    <script src="javascript/scripts1.js"></script>
    <script>
      function toggle(){
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var popup=document.getElementById('popup');
        popup.classList.toggle('active');

      }
    </script>
  </body>
</html>
