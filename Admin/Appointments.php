
<?php  include('./partials/sidebar.php');?>

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
                  <th>Department</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Doctor</th>
                  <th>Fees</th>
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
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>Dr.Doctor Doctor</td>
                  <td>50$</td>                                   
                  <td><button onclick="toggle()">View</button></td>
                </tr>
              
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