<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>service</title>
</head>
<body>
    <div class="container my-5" >
        <h2 style="text-align:center;font-size:45px;text-shadow:2px 2px 2px gray;">List of Services</h2>
        <a class="btn btn-primary" href="/ESAProject - Copy/Admin/services/addServices.php" role="button" style=" background-color:#367952;color:#fff;font-size:18px;border:none;margin-top:20px;font-weight:500;">Add New Service</a>
        <br>
        <table class="table" style="margin-top:10px;">
            <thead class="titre">
                <tr class="jafar">
                    <th>ID</th>
                    <th>name Of Service</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //creation connection avec database
                $conn=mysqli_connect('localhost','root','','services');
                //check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                  }
                 
                  //select from data base
                  $select=" SELECT * FROM service";
                  $result= mysqli_query($conn, $select);
                  if (mysqli_num_rows($result) > 0) {
                    //read data of each row
                    while($row = mysqli_fetch_assoc($result)){
                        echo"<tr>
                        <td style='font-size:18px;font-weight:bold;color:#367952;'>$row[id]</td>
                        <td style='font-size:18px;font-weight:500;'>$row[serviceName]</td>
                        <td style='font-size:18px;font-weight:500;'>$row[description]</td>
                        <td style='font-size:18px;font-weight:500;'>$row[created_at]</td>
                        <td>
                            <a style='background-color:#367952;border:none;padding:5px 17px 5px 17px;' class='btn btn-primary btn-sm' href='/ESAProject - Copy/Admin/services/edit.php?id=$row[id]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/ESAProject - Copy/Admin/services/deletServices.php?id=$row[id]'>Delete</a>
             
                        </td>
                    </tr>";
                    }
                  }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>
<style>
  .jafar{
    background-color:#367952;
    color:#fff;
    font-size:18px;
  }
</style>