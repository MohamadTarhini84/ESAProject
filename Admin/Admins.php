<?php  include('./partials/sidebar.php');?>
  
        <!-- Main -->
        <main class="main-adm-container">
          <div class="adm-title">
            <h2 class="font-weight-bold">ADMINS</h2>
          </div>
  
            <div class="adm-cards">
  
            <div class="adm-card">
              <div class="adm-inner">
                <p class="text-primary">Add New Admin</p>
              </div>
              <button class="text-primary adm-btn" id="register">Register</button>              
            </div>

            <div class="adm-card">
                <div class="adm-inner">
                  <p class="text-primary">Update Profile</p>
                </div>
                <button class="text-primary adm-btn" id="viewprof">Update Profile</button>              
            </div>
            
            <div class="adm-card">
                <div class="adm-inner">
                  <p class="text-primary">Sultana</p>
                </div>
                <button class="text-primary adm-btn remove">Remove Admin</button>                                
            </div>

            <div class="adm-card">
                <div class="adm-inner">
                  <p class="text-primary">Yasser</p>
                </div>
                <button class="text-primary adm-btn remove">Remove Admin</button>                                
            </div>

            <div class="adm-card">
                <div class="adm-inner">
                  <p class="text-primary">Mohammad</p>
                </div>
                <button class="text-primary adm-btn remove">Remove Admin</button>                                
            </div>

            <div class="adm-card">
                <div class="adm-inner">
                  <p class="text-primary">Suzane</p>
                </div>
                <button class="text-primary adm-btn remove">Remove Admin</button>                                
            </div>
           
        </div>
    </main>
   
    <script src="javascript/scripts.js"></script>
    <script>
        document.getElementById("register").addEventListener('click',function(){
        location.href="add-admin.php";
        });
        let i;
        for(i=0;i<document.getElementsByClassName("remove").length;i++){
            document.getElementsByClassName("remove")[i].addEventListener('click',function(){
            confirm("Do you want to delete this account?")
            });
        }

        document.getElementById("viewprof").addEventListener('click',function(){
        location.href="update-admin.php";
        });

    </script>
    <script src="javascript/scripts1.js"></script>
</body>
</html>