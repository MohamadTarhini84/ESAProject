<?php  require('../config/constants.php');?>
<?php  require('./partials/login-check.php');?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=0.75">
    <title>Admin Dashboard</title>

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
  }
</style>

  </head>

  <body>
  
    <div class="grid-container">
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
<style>
  hr{
    border: solid 1px black;

  }
</style>
      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2 class="font-weight-bold">DASHBOARD <br>
          <?php
              if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                UNSET($_SESSION['login']);
              }
              if(isset( $_SESSION['not super admin'])){
                echo  $_SESSION['not super admin'];
                UNSET( $_SESSION['not super admin']);
              }               
          ?>
          </h2>          
        </div>

        <div class="main-cards">

          <div class="card" >
            <div class="card-inner">
              <p class="text-primary">PATIENTS</p>
              <span class="material-symbols-outlined text-blue">personal_injury</span>
            </div>
            <span class="text-primary font-weight-bold">558</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Admins</p>
              <span class="material-symbols-outlined text-blue">medication</span>
            </div>
            <span class="text-primary font-weight-blue">4</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">DOCTORS</p>
              <span class="fa fa-user-md text-blue"></span>
            </div>
            <span class="text-primary font-weight-bold">79</span>
          </div>

          

        
        <div class="card">
            <div class="card-inner">
              <p class="text-primary">APPOINTMENTS</p>
              <span class="material-symbols-outlined text-blue">book_online</span>
            </div>
            <span class="text-primary font-weight-bold">56</span>
          </div>

        </div>
<!-- -------------------------------charts div----------------------------------------->
        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Appointments</p>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Patients per Department</p>
            <div id="area-chart"></div>
          </div>

        </div><!--
-------------------------------details div-----------------------------------------
        <div class="details">

            <div class="charts-card">
              <p class="chart-title">Appointments</p>
              <div class="card-inner">
                <span class="material-symbols-outlined text-blue marg">book_online</span>
                
                <span style="font-size: 20px; " class="margR">150 Patients</span>                                             
            </div>
            <br>
            <hr>  
             Appointments List
          <div class="list">          
            <table class="table">
              <thead>
                <tr>
                  
                  <th>Name</th>            
                  <th>Department</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Doctor</th>
                  <th>Status</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="name-img">
                    <img src="img/avatar.svg" alt="" class="climg">
                    
                  </td>
                  <td>Sam David</td>
                  <td>Cardiology</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>Dr.Doctor Doctor</td>
                  <td>Confirmed</td>
                </tr>                
              </tbody>
            </table>
          </div>
     
      </div>
        
          <div class="charts-card">
            <p class="chart-title"> Orders</p>
            <div>
                <div class="card-inner">
                    <span class="material-symbols-outlined text-blue marg">medication</span>
                    <span style="font-size: 20px; " class="margR">500 patient</span>                                                                
                </div>
                <br>
                <hr> 

                <div class="list">          
                  <table class="table">
                    <thead>
                      <tr>
                      
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Order Date</th>
                        <th>Status</th>                  
                        <th>Customer Name</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="name-img">01</td>
                        <td>Face Mask</td>                  
                        <td>20.00</td>
                        <td>2</td>
                        <td>40.00</td>
                        <td></td> 
                        <td>Delivered</td>
                      </tr>                      
                    </tbody>
                  </table>
                </div>
                
        </div>
        </div>
        </div>-->
      <!------------------------------Patients Reviews------------------------------------------------->
      <!--<div class="details">
      
        <div class="charts-card">  
          <p class="chart-title">Patients Reviews</p>
                    
            <div class="card-inner">
                <span class="material-symbols-outlined text-blue marg" >personal_injury</span>
                <div>
                  <select name="neol" id="newold" class="det-select margR" >
                    <option value="new">New</option>
                    <option value="old">Old</option>
                  </select>
                </div>                     
          </div> 
          <br>           
            <hr>
          <div class="Rev-inner"> 
            <div class="customer">            
                <div class="listRev">
                  <div> <img src="img/avatar.svg" alt="" ></div>
                  <div class="dr-details">
                    <h4>Dr Doctor Doctor <br>
                      <small>Pediatric</small><br>
                      <small>(45) Excellent</small></h4>            
                  </div>
                </div>  
                <div class="contact">
                  <span >150 Patients</span>                  
                </div>            
          </div>
          <div class="customer">            
            <div class="listRev">
              <div> <img src="img/avatar.svg" alt="" ></div>
              <div class="dr-details">
                <h4>Dr Doctor Doctor <br>
                <small>Pediatric</small><br>
                <small>(45) Excellent</small>
              </h4>                  
              </div>
            </div>  
            <div class="contact">
              <span >150 Patients</span>                  
            </div>            
          </div>

        </div>

      </div>
    </div>-->
  </div>

      </main>
      <!-- End Main -->

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.0/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="javascript/scripts.js"></script>
    <script src="javascript/scripts1.js"></script>
  </body>
</html>