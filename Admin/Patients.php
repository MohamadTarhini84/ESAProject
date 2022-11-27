<?php  include('./partials/sidebar.php');?>

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
        window.location.href="PatientPro.html";
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