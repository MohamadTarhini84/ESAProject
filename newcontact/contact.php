<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email =$_POST['email'];
    $message=$_POST['message'];
    $mailTo="sasiallouch1234@gmail.com";
    $headers="From: ".$email;
    $txt="You Have recivied an e-mail from".$name.".\n\n".$message;
    mail($mailTo,$message,$txt,$headers);
    header("Location:contact.php?mailsend");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   
    <script src="https://kit.fontawesome.com/04fad89859.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <title>Contact us</title>
</head>
<body>
    <div class="boss">
        <div>
            <div class="navi">
                <div class="hed">
                    <div class="location">
                        <div class="loc">
                            <i class="fa-solid fa-map-location"></i>
                        </div>
        
                        <div class="parag">Nabatieh, Sabbeh street</div>
                    </div>
        
        
                    <div class="social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="btn-make">
                        <button class="bt" name="appoinment" id="make">Get Appoinment</button>
                    </div>
        
                </div>
            </div>
        
            <nav class="navbar">
                <div class="logo">MedCenter</div>
                <a href="#" class="toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
        <div class="menu">
            <ul>
                <li><a href="../index.html">Home</a>  </li>
                <li><a href="../services/ser.html">Services</a>  </li>
                <li><a href="../book/yasser.html">Book</a>  </li>
                <li><a href="../blog/blog.html">Blog</a>  </li>
                <li><a href="../doctors/Doctors23.html">Doctors</a>  </li>
                <li><a href="../about/About.html">About</a>  </li>
                <li><a href="#">Contact</a>  </li>
               
            </ul>
        </div>
        <div class="navbutton">
            <button onclick="loginbtt()"  class="login-butt">login</button>
        </div>
        
            </nav>
            
            <div class="navo">
                <div class="create">
                    <div class="cret">
                        <div class="cret2"><i class="fa-solid fa-calendar-days fa-custom"></i> </div>
                        <div class="creat3">
                            <div class="ze">Number 1 hospital</div>
                            <div class="wiht">In lebanon</div>
        
                        </div>
        
                    </div>
                   
                    <div class="cret">
                        <div class="cret2"><i class="fa-solid fa-user-doctor fa-custom"></i> </div>
                        <div class="creat3">
                            <div class="ze">Personal Cabinet</div>
        
                            <div class="wiht">Qualified Staff</div>
                        </div>
        
                    </div>
                    <div class="cret">
                        <div class="cret2"><i class="fa-solid fa-heart-pulse fa-custom"></i> </div>
                        <div class="creat3">
                            <div class="ze">Get Result Online</div>
        
                            <div class="wiht"> Satisfied Patients</div>
        
                        </div>
        
                    </div>
                    <div class="creat7">
                        <div class="crets">
                            <div class="cret22"><i class="fa-solid fa-phone fa-custom"></i> </div>
                            <div class="creat3">
                                <div class="number">Toll Free: 03/182256
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div> 
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>We are happy answer questions and get you acquainted with slack.</p>
        </div>
<div class="container1">
    <div class="ani"><img src="doctor-animate.svg" class="ani1"></div>
    <div class="containerinfo">
        <div class="box">
            <div class="icons"><i class="fa-solid fa-location-dot"></i></div>
             <div class="text">
               <h3>Address</h3>
               <p>Nabtieh,sabbah street</p>
             </div>
    </div>
         <div class="box">
             <div class="icons"><i class="fa-sharp fa-solid fa-phone"></i></div>
              <div class="text">
                <h3>Phone</h3>
                <p>+961 76123456</p>
              </div>
        </div>
            <div class="box">
                <div class="icons"> <i class="fa-sharp fa-solid fa-envelope"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>MedCenter111</p>
                </div>
            </div>
        
</div>
    <div class="contactForm" id="error">
        <form id="form" >
            <h2>Send Message</h2>
            <div class="inputbox">
                <input type="text" name="name" required="required" id="name"  onkeyup="validateName()">
                <span>Full Name</span>
                <pre id="errorname" style="text-align: end;width:100%;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: red;"></pre>
                
        </div>
                <div class="inputbox">
                <input type="text" name="email" required="required " id="email" onkeyup="validateEmail()">
                <span>Email</span>
                <pre id="erroremail" style="text-align: end;width:100%;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: red;" ></pre>
                </div>
            <div class="inputbox"> 
                <input type="text" required="required" id="message" name="message" onkeyup="validateText()">
                <span>Type your Message...</span>
                <pre id="errormessage"  style="text-align: end;width:100%;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: red;"></pre>
            </div>
            <div class="inputbox">
                <input   type="submit"  value="send" id="submit" name="submit" onclick="validateForm()">
                <diy id="errorsubmit" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color: red;"></div>
            </div> 
            
        </form>
    </div>

    </section>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26496.135290220027!2d35.5042823!3d33.889218299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slb!4v1666818779557!5m2!1sen!2slb"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="content31">
            <div class="icon">
                <div><img src="../images/linkedin.png"></div>
                <div><img src="../images/instagram.png"></div>
                <div><img src="../images/twitter.png"></div>
            </div>
       </div>
            <div class="content31">
                <div class="titre"><h2  class="about">About Us</h2></div>
                <div class="link1">
                    <div><img src="../images/location.png" class="as"><a href="#">Sabbah Street</a></div>
                    <div><img src="../images/phone-call_1.png" class="as"><a href="#">76123456</a></div>
                    <div><img src="../images/clock.png" class="as"><a href="#"> 8:00AM 3:00PM</a></div>
                </div>
            </div>
        <div class="content31">
            <div class="titre"><h2>Quik Links</h2></div>
            <div class="link">
                <a href="#">Make Appointment</a>
                <a href="#">Our Doctors</a>
                <a href="#">Customer Treatments</a>
            </div>
        </div>
        <div class="content31">
            <div class="titre"><h2>Our Services</h2></div>
            <div class="link">
                <a href="#">Cardiology</a>
                <a href="#">neurology</a>
                <a href="#">dental</a>
            </div>
        </div>
        <div class="form">
            <div class="titre"><h2>Newsletter</h2></div>
            <input type="Email" value="Email" class="email">
            <button class="bti">Subscribe</button>
        </div>
    </div>
    <div class="copy"><p>Copyright © 2019 Delmont Theme by ThemetechMount</p></div> 

    <!-- end footer -->
    <script  src="contact.js"></script>
    
    <script type="text/javascript">
        const toggle = document.getElementsByClassName('toggle')[0]
        const menu = document.getElementsByClassName('menu')[0]

        toggle.addEventListener('click' , ()=>{
            menu.classList.toggle('active')
        });

        function loginbtt(){
    const url = '../ESAProject/Login/newSignIN.html';
    window.location.replace(url);
}

        </script>
</body>
</html>