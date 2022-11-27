<?php  include('./partials/sidebar.php');?>

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2 class="font-weight-bold">DASHBOARD</h2>
        </div>

        <div class="main-cards">

          <div class="card">
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
              <p class="text-primary">APPOINTMENT</p>
              <span class="material-symbols-outlined text-blue">book_online</span>
            </div>
            <span class="text-primary font-weight-bold">56</span>
          </div>

        </div>

        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Patients visits per gender</p>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Patients per Department</p>
            <div id="area-chart"></div>
          </div>

        </div>
<!-- -------------------------------details div----------------------------------------->
        <div class="details">

            <div class="charts-card">
              <p class="chart-title"> Appointments</p>
              <div class="card-inner">
                <span class="material-symbols-outlined text-blue marg">book_online</span>
                
                <span style="font-size: 20px; " class="margR">150 Patients</span>                                             
            </div>
            <hr>  
             <!--Appointments List-->
          <div class="list">          
            <table class="table">
              <thead>
                <tr>
                  
                  <th>Name</th>
                  
                  
                  <th>Gender</th>                  
                  <th>Department</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Doctor</th>
                  
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <!--<td class="name-img">
                    <img src="img/avatar.svg" alt="" class="climg">
                    
                  </td>-->
                  <td>Sam David</td>
                  
                  
                  <td>Male</td>
                  <td>Cardiology</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>Dr.Doctor Doctor</td>
                                                     
                  
                </tr>
                <tr>
                  
                  <td>Sam David</td>
                  
                  
                  <td>Male</td>
                  <td>Cardiology</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>Dr.Doctor Doctor</td>
                                                    
                 
                </tr>
                <tr>
                  
                  <td>Sam David</td>
                  
                  
                  <td>Male</td>
                  <td>Cardiology</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>Dr.Doctor Doctor</td>
                                                    
                  
                </tr>
                <tr>
                  
                  <td>Sam David</td>
                  
                  
                  <td>Male</td>
                  <td>Cardiology</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>Dr.Doctor Doctor</td>
                                                   
                  
                </tr>
                <tr>
                  
                  <td>Sam David</td>
                  
                 
                  <td>Male</td>
                  <td>Cardiology</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>Dr.Doctor Doctor</td>
                                                   
                  
                </tr>
              </tbody>
            </table>
          </div>
     

      </div>
        <!-- Recent Orders-->
          <div class="charts-card">
            <p class="chart-title"> Recent Patients</p>
            <div>
                <div class="card-inner">
                    <span class="material-symbols-outlined text-blue marg">medication</span>
                    <span style="font-size: 20px; " class="margR">500 patient</span>                                             
                </div>
                <hr> 
                <div class="list">          
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        
                       
                        <th>Gender</th>                  
                        
                        <th>Address</th>
                        
                        <th>Status</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td class="name-img">
                              <img src="img/avatar.svg" alt="" class="climg">
                              01
                          </td>
                          <td>Sam David</td>
                          
                          
                          <td>Male</td>
                          
                          <td>1452-ABC Street,NY</td>
                          
                          <td class="Appr" id="status">Normal</td>                                   
                          
                      </tr>
                      <tr>
                          <td class="name-img">
                              <img src="img/avatar.svg" alt="" class="climg">
                              02
                          </td>
                          <td>Sam David</td>
                         
                          
                          <td>Male</td>
                          
                          <td>1452-ABC Street,NY</td>
                          
                          <td class="ban" id="status">Banned</td>                                   
                         
                      </tr>
                      <tr>
                          <td class="name-img">
                              <img src="img/avatar.svg" alt="" class="climg">
                              03
                          </td>
                          <td>Sam David</td>
                          
                          
                          <td>Male</td>
                          
                          <td>1452-ABC Street,NY</td>
                          
                          <td class="Appr" id="status">Normal</td>                                   
                         
                      </tr>
                      <tr>
                          <td class="name-img">
                              <img src="img/avatar.svg" alt="" class="climg">
                              04
                          </td>
                          <td>Sam David</td>
                          
                          
                          <td>Male</td>
                          
                          <td>1452-ABC Street,NY</td>
                          
                          <td class="ban" id="status">Banned</td>                                   
                          
                          </td>
                      </tr>
                      <tr>
                          <td class="name-img">
                              <img src="img/avatar.svg" alt="" class="climg">
                              05
                          </td>
                          <td>Sam David</td>
                          
                          
                          <td>Male</td>
                          
                          <td>1452-ABC Street,NY</td>
                          
                          <td class="Appr" id="status">Normal</td>                                   
                          
                      </tr>
                      <tr>
                          <td class="name-img">
                              <img src="img/avatar.svg" alt="" class="climg">
                              06
                          </td>
                          <td>Sam David</td>
                          
                          
                          <td>Male</td>
                          
                          <td>1452-ABC Street,NY</td>
                          
                          <td class="Appr" id="status">Normal</td>                                   
                          
                      </tr>
                    </tbody>
                  </table>
                </div>
                
        </div>
        </div>

      <!--Patients Reviews-->
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
          <div class="customer">            
            <div class="listRev">
              <div> <img src="img/avatar.svg" alt="" ></div>
              <div class="dr-details">
                <h4>Dr Doctor Doctor<br>
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
                <h4>Dr Doctor Doctor<br>
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
                <h4>Dr Doctor Doctor<br>
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
                <h4>Dr Doctor Doctor<br>
                  <small>Pediatric</small><br>
                  <small>(45) Excellent</small></h4>                    
              </div>
            </div>  
            <div class="contact">
              <span >150 Patients</span>                  
            </div>            
          </div>

        
        </div>

      </div></div></div>

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