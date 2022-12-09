<?php
include 'connect.php';
$service="";
$description="";
$errorMessage="";
if(isset($_POST['submit'])){
        $service=$_POST['service'];
        $description=$_POST['description'];
        if(empty($service) || empty($description)){
            $errorMessage ="ALL THE FIELDS ARE REQUIRED";
        }
        if(!empty($service) && !empty($description)){
           $update=" UPDATE service SET description='$description'  WHERE  serviceName='$service'";
           $result= mysqli_query($conn,$update);
           header('Location:/ESAProject - Copy/Admin/services/service.php');
        }  
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD SERVICE</title>
</head>
<body>
    <div class="container">
            <img id="logo" src="news-animate.svg">
            <div class="content">
                <h2 class="title">Add  New Services</h2>
                <?php
                 if(!empty($errorMessage)){
                   echo '<span class="error">'.$errorMessage.'</span>';
                 }
                ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="div">
            <label class="label">Name Of Service:</label>
            <input type="text" class="input"  name="service" value="<?php echo $service;?>"><br>
            </div>
            <div class="div">
            <label class="labeli" >Description:</label>
            <textarea class="input" name="description" ><?php echo $description;?></textarea>
            </div>
            <div class="DIV">
            <button type="submit" class="btn" name="submit">ADD</button>
            <a type="cancel" class="btnc" href="/ESAProject - Copy/Admin/services/service.php">Cancel</a>
            </div>
        </div>  
        </form>
    </div>
    </div>
</body>
</html>
<style>
#logo{
    height: 500px;
    width: 500px;
    background-color:#16a08590;
}
.container{
    display: flex;
    justify-content: center;
    padding-top:30px;

}
.content{
    height: 500px;
    width: 500px;
    box-shadow:0 15px 30px rgba(0,0,0,0.1);
    text-align: center;
}
.input{
    height:25px;
    width: 400px;
    border:none;
    background-color:#E7DCE6;
    outline:0;
    padding:5px 10px;
    border-radius:5px;
}
.div{
    padding-top: 30px;
    
}
.title{
    padding-top: 50px;
    font-size: 40px;
   color: #16a085;
}
.btn{
    background-color: #16a085;
    color: white;
    width: 100px;
    height: 35px;
    border: none;
    border-radius: 10px;
  
}
.btnc{
    color:#16a085;
    padding: 6px 30px 7px 30px;
    border:2px solid #16a085;
    text-decoration:none;
    border-radius: 10px;
}
.DIV{
    padding-top: 30px;
}
.btn:hover{
   
    cursor: pointer;
}
.btnc:hover{
    background-color:#16a085;
    color: white;
    cursor: pointer;
}
.error{
    padding:5px 12px 5px 12px;
    border-radius:5px;
    background-color:#FF8A8A;
    color:white;
    font-size:20px;
   
}
.label{
    font-size:18px;
    color:#16a085;
    margin-right:280px;
    font-weight:600;
}
.labeli{
    font-size:18px;
    color:#16a085;
    margin-right:315px;
    font-weight:600;
}
</style>