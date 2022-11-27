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

          <div class="charts-card">
              
             <!--Appointments List-->
          <div class="list" style="height: 700px;">   
            
            <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Search doctor name here.."
        />
        <button id="search">Search</button>
      </div>
      <div id="buttons">
        <button class="button-value" >All</button>
        <button class="button-value" >
          Approved
        </button>
        <button class="button-value" >
          Pending
        </button>
        <button class="button-value" >
          Declined
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
                  <th>Department</th>
                  <th>Address</th>
                  <th>Date</th>
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
                    <td>Pediatric</td>
                    <td>1452-ABC Street,NY</td>
                    <td>03-24-22</td>
                    <td class="Appr" id="status">Approved</td>                                   
                    <td><button onclick="goto()" >View Profile</button>

                      <button onclick="toggle()" > Validate</button>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
</div>
<div class="popup" id="popup">
    <h2>Appointmet by Mr Patient Pat</h2>
    <p>Appointment Details</p>
    <button onclick="toggle()" id="ok">Okay</button>
    <button onclick="toggle()" id="ban">Ban</button>
    <button onclick="toggle()" id="del">Delete</button>
</div>
      </main>
      <!-- End Main -->
    
    <!-- Custom JS -->
    <script src="javascript/scripts.js"></script>
    <script src="javascript/scripts1.js"></script>
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