<?php  include('./partials/sidebar.php');?>

      <!-- Main -->
      

      <main class="main-container">
        <div class="main-title">
          <h2 class="font-weight-bold">Orders
            <p style="color:#367952;">MedCenter
              <span style="content: \2192;color: #666666;" >&#8594;</span> <small style="color: #666666;">Orders</small></p>
        </h2>
        </div>
         <br><br>
<!-- -------------------------------Appointments Div----------------------------------------->

          <div class="charts-card" style="width: 80%; margin:auto">
              
             <!--Appointments List-->
          <div class="list" style="height: 700px;">     
                
          <table class="table" >
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Featured</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td >
                    
                    01
                  </td>
                  <td>Face Mask</td>
                  <td>Health</td>
                  <td>20</td>
                  <td><img src="../Pharmacy/images/13.jpg" width= "50px" height="auto">
                </td>
                  <td>Yes</td>
                                                   
                  <td>
                    <button id="updateorder" onclick="toggle2()" >Update Product</button>
                    <button onclick="toggle()" >Delete Product</button>
                  </td>
                </tr>
                
                
              </tbody>
            </table>
            
          </div> 

    </div>
</div>
<div class="popup" id="popup">
    <h2>Are You sure you want to delete this order</h2>
    
    <button onclick="toggle()" id="del">Yes</button>
    <button onclick="toggle()">Cancel</button>

</div>

<div class="popup" id="update">
    <h2>Update Status</h2>
    <br>
    <form class="" action="" method="post">

      <table class="tbl-ord">
        <tr>
          <th></th>
          <th></th>
        </tr>
        <tr>
          <td style="text-align: left;">Product Name</td>
          <td style="text-align: left;"><b>  Face Mask  </b> </td>
        </tr>

        <tr>
          <td style="text-align: left;">Price</td>
          <td style="text-align: left;"><b> $ 20 </b> </td>
        </tr>

        <tr>
          <td style="text-align: left;">Qty</td>
          <td style="text-align: left;">
            <input type="number" name="qty" value="2">
          </td>
        </tr>

        <tr>
          <td style="text-align: left;">Status</td>
          <td style="text-align: left;">
            <select class="" name="status" style="width: 70%;">
              <option value="Ordered">Ordered</option>
              <option  value="On Delivery">On Delivery</option>
              <option  value="Delivered">Delivered</option>
              <option  value="Cancelled">Cancelled</option>

            </select>
          </td>
        </tr>

        <tr>
          <td style="text-align: left;">Customer id: </td>
          <td style="text-align: left;">
            <input type="text" name="customer_id" value="01">
          </td>
        </tr>

        <td  colspan="2" style="text-align: center;">
        
        </td>
      </table>
      
    </form>
    <br>
    <button onclick="toggle2()" id="upd" >update</button>
    <button onclick="toggle2()">Cancel</button>
</div>
      </main>
      
      <!-- End Main -->
      

    <!-- Scripts -->
    
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
      function toggle2(){
        var blur=document.getElementById('blur');
        blur.classList.toggle('active');
        var update=document.getElementById('update');
        update.classList.toggle('active');
        

      }
      
    </script>
  </body>
</html>