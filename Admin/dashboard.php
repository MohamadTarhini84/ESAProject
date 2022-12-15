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
<style>
  hr{
    border: solid 1px black;

  }
</style>
      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2 class="font-weight-bold">DASHBOARD - <?php
            if(isset($_SESSION['userType'])){
              if($_SESSION['userType']=='101'){
                echo 'Welcome Super Admin';
              }
              else{
                echo 'Welcome Admin';
              } 

            }
                ?><br>
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
            <?php
              $sql="SELECT * FROM users WHERE userType='100'";
              $res=mysqli_query($conn,$sql);
              $count=mysqli_num_rows($res);
            ?>
            <span class="text-primary font-weight-bold"><?php echo $count?></span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">Admins</p>
              <span class="material-symbols-outlined text-blue">medication</span>
            </div>
            <?php
              $sql2="SELECT * FROM admins";
              $res2=mysqli_query($conn,$sql2);
              $count2=mysqli_num_rows($res2);
            ?>
            <span class="text-primary font-weight-blue"><?php echo $count2?></span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">DOCTORS</p>
              <span class="fa fa-user-md text-blue"></span>
            </div>
            <?php
              $sql3="SELECT * FROM users where userType='101'";
              $res3=mysqli_query($conn,$sql3);
              $count3=mysqli_num_rows($res3);
            ?>
            <span class="text-primary font-weight-bold"><?php echo $count3?></span>
          </div>
        <div class="card">
            <div class="card-inner">
              <p class="text-primary">APPOINTMENTS</p>
              <span class="material-symbols-outlined text-blue">book_online</span>
            </div>
            <?php
              $sql4="SELECT * FROM appointments";
              $res4=mysqli_query($conn,$sql4);
              $count4=mysqli_num_rows($res4);
            ?>
            <span class="text-primary font-weight-bold"><?php echo $count4?></span>
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
        </div>       
  </div>

      </main>
      <!-- End Main -->

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.0/apexcharts.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>
    <!-- Custom JS -->
    <script src="javascript/scripts.js"></script>
    <script src="javascript/scripts1.js"></script>


    <?php
    
    $sql5="SELECT * FROM appointments";
    $res5=mysqli_query($conn,$sql5);
    $count5 = mysqli_num_rows($res5);

    $appdata= [0,0,0,0,0,0,0,0,0,0,0,0];


    while($row= mysqli_fetch_assoc($res5)){

        $date=$row['appDate'];
        $arr= explode ("-", $date); 
        

        if($arr[1]=='01'){
            $appdata[0]+=1;
        }
        elseif($arr[1]=='02'){
            $appdata[1]+=1;
        }
        elseif($arr[1]=='03'){
            $appdata[2]+=1;
        }
        elseif($arr[1]=='04'){
            $appdata[3]+=1;
        }
        elseif($arr[1]=='05'){
            $appdata[4]+=1;
        }
        elseif($arr[1]=='06'){
            $appdata[5]+=1;
        }
        elseif($arr[1]=='07'){
            $appdata[6]+=1;
        }
        elseif($arr[1]=='08'){
            $appdata[7]+=1;
        }
        elseif($arr[1]=='09'){
            $appdata[8]+=1;
        }
        elseif($arr[1]=='10'){
            $appdata[9]+=1;
        }
        elseif($arr[1]=='11'){
            $appdata[10]+=1;
        }
        elseif($arr[1]=='12'){
           $appdata[11]+=1;
        }
    }

?>
<script>
      var barChartOptions = {
  
      series: [{
          name:"appointments",
          data: <?php echo json_encode($appdata)?>
      }],
      chart: {
        type: 'bar',
        height: 350,
        toolbar: {
          show: false
        },
      },
      colors: [
        "#246dec",
        "#cc3c43",
        "#367952",
        "#f5b74f",
        "#4f35a1"
      ],
      plotOptions: {
        bar: {
          distributed: true,
          borderRadius: 4,
          horizontal: false,
          columnWidth: '30%',
        }
      },
      dataLabels: {
        enabled: false
      },
      legend: {
        show: false
      },
      xaxis: {
        categories: ["January", "February", "March", "April","May", "June","July","August","September","October","November","December"],
      },
      yaxis: {
        title: {
          text: "Count"
        }
      }
      };

      var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
      barChart.render();
</script>

      
      <?php
    $data= array();
    $sql="SELECT * FROM services";
    $res=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    $i=0;

    $sql3="SELECT * FROM appointments";
    $res3=mysqli_query($conn,$sql3);
    $count3 = mysqli_num_rows($res3);

    $sql4="SELECT * FROM users where userType='100'";
    $res4=mysqli_query($conn,$sql4);
    $count4 = mysqli_num_rows($res4);

    while($row= mysqli_fetch_assoc($res)){

        $data[$i]=$row['serviceName'];
        $d=$data[$i];

        $sql2="SELECT * FROM appointments 
        join doctorDetails 
        on doctorDetails.doctorID=appointments.doctorID 
        where doctorDetails.speciality = '$d'";

        $res2=mysqli_query($conn,$sql2);
        $count2 = mysqli_num_rows($res2);

        $c[$i]=$count2*100/$count3;    
        $i++;   
    }
?>

<script>
      // Radial Chart
      var radialBaroptions = {
        chart: {
          height: 280,
          type: "radialBar",
        },
        series: <?php echo json_encode($c)?>,
        plotOptions: {
          radialBar: {
            dataLabels: {
              total: {
                show: true,
                formatter: function (w) {
                  
                  return <?php echo json_encode($count4)?>
                }
                
              }
            }
          }
        },
        colors: [
            "#246dec",
            "#cc3c43",
            "#367952",
            "#f5b74f",
            "#4f35a1"
          ],
        labels: <?php echo json_encode($data)?>
      };
      
      var radialChart = new ApexCharts(document.querySelector("#area-chart"), radialBaroptions);
      radialChart.render();
    </script>
  </body>
</html>