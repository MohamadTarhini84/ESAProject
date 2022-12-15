<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   
    <script src="https://kit.fontawesome.com/4c2b37abf9.js" crossorigin="anonymous"></script>
    <title>Document</title>
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
<<<<<<< HEAD:about/About.html
        <div class="menu">
            <ul>
                <li><a href="../index.php">Home</a>  </li>
                <li><a href="../services/ser.html">Services</a>  </li>
                <li><a href="../book/book.php">Book</a>  </li>
                <li><a href="../blog/blog.html">Blog</a>  </li>
                <li><a href="../doctors/Doctors23.html">Doctors</a>  </li>
                <li><a href="./About.html">About</a>  </li>
                <li><a href="../newcontact/contact.php">Contact</a>  </li>
               
            </ul>
        </div>
        <div id="name-picture"></div>
        <div class="navbutton">
            <button onclick="loginbtt()" class="login-butt">login</button>
        </div>
        
=======
                <div class="menu">
                    <ul>
                        <li><a class="link-home" href="/ESAProject/index.php">Home</a> </li>
                        <li><a class="link-home" href="/ESAProject/services/ser.php">Services</a> </li>
                        <li><a class="link-home" href="/ESAProject/book/book.php">Book</a> </li>
                        <li><a class="link-home" href="/ESAProject/blog/blog.php">Blog</a> </li>
                        <li><a class="link-home" href="/ESAProject/doctors/Doctors23.php">Doctors</a> </li>
                        <li><a class="link-home" href="/ESAProject/about/About.php">About</a> </li>
                        <li><a class="link-home" href="/ESAProject/newcontact/contact.php">Contact</a></li>
                    </ul>
                </div>
                <div id="name-picture"></div>
                <?php
                session_start();
                if (isset($_SESSION['name']) && $_SESSION['userType']= '100') {
                    echo "<a href='/ESAProject/loginn/logout.php' class='logout'>Logout</a>";
                }elseif (isset($_SESSION['name']) && $_SESSION['userType'] = '101') {
                    echo "<a href='/ESAProject/loginn/logout.php' class='logout'>Logout</a>";
                }else{
                    echo "<a href='/ESAProject/Loginn/newSignIN.php' class='login-butt' style='text-decoration:none;'>Login</a>";
                }?>
>>>>>>> 21b1d78baf9e3f21937d3c559db48d6cf4aff5d1:about/About.php
            </nav>
            <link rel="stylesheet" type="text/css" href="/ESAProject/Profiles/nav.css">
            <script src="/ESAProject/Profiles/Resources/JavaScript/globalNavBar.js"></script>
            
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
    <div class="ee">
        <div><img src="./images/health-professional-team-animate.svg"></div>
        <div class="jaafar">
            <h1>About <span>MedCenter</span></h1>
            <div class="paragabout">MedCenter is designed to offer patirnts themost innovite treatments and technolog avaible in the region in a safe and compassionte environment.

            Our patients will be among the first to benefit from avant-grade treatments and technology since MedCenter is fully equipped with the most modern and advanced medical equipment ,the first of its kind in the surrounding region.</div>

        </div>
    </div>
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
                    <div><img src="../images/phone-call_1.png  " class="as"><a href="#">76123456</a></div>
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
    
    <script type="text/javascript">
        const toggle = document.getElementsByClassName('toggle')[0]
        const menu = document.getElementsByClassName('menu')[0]

        toggle.addEventListener('click' , ()=>{
            menu.classList.toggle('active')
        });
        function loginbtt(){
    const url = '../ESAProject/Loginn/newSignIN.php';
    window.location.replace(url);
}

        </script>
</body>
</html>