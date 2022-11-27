<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <title> Doctor Profile</title>
     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/styles.css">
     <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/search.css">

    <link rel="stylesheet" href="css/newStyle.css">

    <link rel="stylesheet" href="javascript/fullcalendar-5.11.3/lib/main.css">
    
    <script src="javascript/fullcalendar-5.11.3/lib/main.js"></script>
    <script src="https://kit.fontawesome.com/4c2b37abf9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script>        
      document.addEventListener('DOMContentLoaded', function() {
              var calendarEl = document.getElementById('calendar');
              var calendar = new FullCalendar.Calendar(calendarEl, {
              initialView: 'timeGridWeek',
              editable: 'true'
              });
              calendar.render();
          });
  </script>
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
        
<!-- ------------------------------------------------------------------------>
<div id="profile-container">
  <div id="profile-info">
      <div class="info-element">
          <img src="./Resources/Images/doctor.jpg">
      </div>
      <div class="devider">
          <div>personal info</div>
          <div class="devider-line"></div>
      </div>
      <div class="info-element">
          <div class="info-element-div">
              <div>
                  Birthday:
              </div>
              <div>
                  Gender:
              </div>
              <div>
                  Phone Number:
              </div>
          </div>
          <div class="info-element-div">
              <div id="bday">
                  131331
              </div>
              <div id="gender">
                  male
              </div>
              <div id="phone">
                  12313123987
              </div>
          </div>
      </div>
      <div class="devider">
          <div style="font-size:18px;">work info </div>
          <div class="devider-line"><br><br></div>
      </div>
      <div class="info-element">
          <div class="info-element-div">
              <div>
                  Room:
              </div>
              <div>
                  Licence card ID:
              </div>
          </div>
          <div class="info-element-div">
              <div>
                  131331s
              </div>
              <div>
                  6255523
              </div>
          </div>
      </div>
      
  </div>
  <div id="profile-details">
      <div id="top-half">
          <div id="first-row">
              <div id="name-specialty">
                  <div id="doctor-name">
                      Dr. John Doe
                  </div>
                  <div id="doctor-specialty">
                      Cardiologist
                  </div>
              </div>
          </div>
          <div>
              <div id="rating-text">
                  Average Rating:
              </div>
              <div id="rating">
                  <div id="rating-number">3</div>
                  <i class="fa-solid fa-star" style="margin-left:10px"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
              </div>
          </div>
          
      </div>
      <div id="botton-half">
          <div id="upper-section">
              <button class="upper-button clicked" id="day-button" onclick="clickDay()" style="width: 250px;">
                  <i class="fa-regular fa-clock"></i>
                  Hours Available
              </button>
              <button class="upper-button" id="rev-button" onclick="clickRev()" style="width: 250px;">
                  <i class="fa-solid fa-book"></i>
                  Reviews Received
              </button>
          </div>
          <div id="lower-section">
              <div id="option-1">
                  <div id="calendar" style="width:100%"></div>
              </div>
              <div id="option-2" style="display:none">
                  <div class="review">
                      <div class="review-container">
                          <div class="quotes">
                              <img src="./Resources/Images/quotes.png">
                          </div>
                          <div class="review-bg">
                              <div class="review-pic">
                                  <img src="./Resources/Images/patient.jpg">
                              </div>
                              <div class="review-element" id="review-1st">
                                  Review by: Mr batata
                              </div>
                              <div class="review-element">
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                              </div>
                              <div class="review-element" style="height:200px;overflow-y:auto;">
                                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat facilis 
                                  accusamus aliquam voluptatum iusto optio nihil molestias quibusdam dolor. 
                                  Possimus laudantium dignissimos ipsum quos at tempora recusandae! 
                                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat facilis 
                                  accusamus aliquam voluptatum iusto optio nihil molestias quibusdam dolor. 
                                  Possimus laudantium dignissimos ipsum quos at tempora recusandae! 
                                  Repudiandae, rerum corrupti?Repudiandae, rerum corrupti?
                              </div>
                              <div class="review-edit-delete">
                                  <button class="review-button">
                                      <i class="fa-solid fa-pen"></i>
                                      Edit
                                  </button>
                                  <button class="review-button" style="border-left:1px solid silver">
                                      <i class="fa-solid fa-trash"></i>
                                      Delete
                                  </button>
                              </div>
                          </div>
                          <div class="quotes">
                              <img src="./Resources/Images/quotes.png">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

</div>

<script>
   function clickDay(){
        document.getElementById("option-1").setAttribute("style","display:flex");
        document.getElementById("day-button").setAttribute("class","upper-button clicked");
        document.getElementById("option-2").setAttribute("style","display:none");
        document.getElementById("rev-button").setAttribute("class","upper-button");
    }
    function clickRev(){
        document.getElementById("option-2").setAttribute("style","display:flex");
        document.getElementById("day-button").setAttribute("class","upper-button");
        document.getElementById("option-1").setAttribute("style","display:none");
        document.getElementById("rev-button").setAttribute("class","upper-button clicked");
    }
</script>
<script src="javascript/scripts1.js"></script>
</body>



</html>