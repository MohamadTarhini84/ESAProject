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
    
    <
    <link rel="stylesheet" href="css/newStyle.css">
    <link rel="stylesheet" href="css/pharmacy-style.css">
    
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
            
            <div id="search-container">
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
        
      </div>
      <br>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>Gender</th>                  
                  
                  <th>Address</th>
                  
                  <th>Status</th>
                  <th></th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td class="name-img">
                        <img src="img/avatar.svg" alt="" class="climg">
                        01
                    </td>
                    <td>Sam David</td>
                    <td>Sam-David@email.com</td>
                    <td>23</td>
                    <td>Male</td>
                    
                    <td>1452-ABC Street,NY</td>
                    
                    <td class="Appr" id="status">Normal</td>                                   
                    <td><button onclick="goto()">View Profile</button>

                      <button onclick="openPopUp()"> Status</button>
                    </td>
                </tr>
                <tr>
                    <td class="name-img">
                        <img src="img/avatar.svg" alt="" class="climg">
                        02
                    </td>
                    <td>Sam David</td>
                    <td>Sam-David@email.com</td>
                    <td>23</td>
                    <td>Male</td>
                    
                    <td>1452-ABC Street,NY</td>
                    
                    <td class="ban" id="status">Banned</td>                                   
                    <td><button onclick="goto()">View Profile</button>

                      <button onclick="openPopUp()"> Status</button>
                    </td>
                </tr>
                <tr>
                    <td class="name-img">
                        <img src="img/avatar.svg" alt="" class="climg">
                        03
                    </td>
                    <td>Sam David</td>
                    <td>Sam-David@email.com</td>
                    <td>23</td>
                    <td>Male</td>
                    
                    <td>1452-ABC Street,NY</td>
                    
                    <td class="Appr" id="status">Normal</td>                                   
                    <td><button onclick="goto()">View Profile</button>

                      <button onclick="openPopUp()"> Status</button>
                    </td>
                </tr>
                <tr>
                    <td class="name-img">
                        <img src="img/avatar.svg" alt="" class="climg">
                        04
                    </td>
                    <td>Sam David</td>
                    <td>Sam-David@email.com</td>
                    <td>23</td>
                    <td>Male</td>
                    
                    <td>1452-ABC Street,NY</td>
                    
                    <td class="ban" id="status">Banned</td>                                   
                    <td><button onclick="goto()">View Profile</button>

                      <button onclick="openPopUp()"> Status</button>
                    </td>
                </tr>
                <tr>
                    <td class="name-img">
                        <img src="img/avatar.svg" alt="" class="climg">
                        05
                    </td>
                    <td>Sam David</td>
                    <td>Sam-David@email.com</td>
                    <td>23</td>
                    <td>Male</td>
                    
                    <td>1452-ABC Street,NY</td>
                    
                    <td class="Appr" id="status">Normal</td>                                   
                    <td><button onclick="goto()">View Profile</button>

                      <button onclick="openPopUp()"> Status</button>
                    </td>
                </tr>
                <tr>
                    <td class="name-img">
                        <img src="img/avatar.svg" alt="" class="climg">
                        06
                    </td>
                    <td>Sam David</td>
                    <td>Sam-David@email.com</td>
                    <td>23</td>
                    <td>Male</td>
                    
                    <td>1452-ABC Street,NY</td>
                    
                    <td class="Appr" id="status">Normal</td>                                   
                    <td><button onclick="goto()">View Profile</button>

                      <button onclick="openPopUp()"> Status</button>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>

    </div>

      </main>
      <!-- End Main -->
    
    <!-- Custom JS -->
    <script src="javascript/scripts.js"></script>
    <script>
      function goto(){
        window.location.href="PatientPro.php";
      }
    </script>

      <script>
        function openPopUp(){
          popup.classList.add("open-popup");

        }
        function closePopUp(){
          popup.classList.remove("open-popup");

      }</script>
       
      <script src="javascript/scripts1.js"></script>
      
   
</body>
</html>