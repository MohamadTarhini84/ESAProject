<?php
session_start();
// if(isset($_SESSION['logged_in'])){
//     if($_SESSION['logged_in'] == false)
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./index.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.min.css">
    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <title>Home Page</title>
</head>

<body>
    <div class="container">
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
                            <button onclick="makebtt()" class="bt" name="appoinment" id="make">Get Appoinment</button>
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
                            <li><a class="link-home" href="./index.php">Home</a> </li>
                            <li><a class="link-home" href="./services/ser.html">Services</a> </li>
                            <li><a class="link-home" href="./book/book.php">Book</a> </li>
                            <li><a class="link-home" href="./blog/blog.html">Blog</a> </li>
                            <li><a class="link-home" href="./doctors/Doctors23.html">Doctors</a> </li>
                            <li><a class="link-home" href="./about/About.html">About</a> </li>
                            <li><a class="link-home" href="./newcontact/contact.php">Contact</a> </li>

                        </ul>
                    </div>
                    <div id="name-picture"></div>
                    <?php
                    $userType = 101;
                    $userType = 102;
                    if (isset($_SESSION['name']) && $userType === 101) {
                        echo "<a href='./loginn/logout.php' class='logout'>Logout</a>";
                    } elseif (isset($_SESSION['name']) && $userType === 102) {
                        echo "<a href='./loginn/logout.php' class='logout'>Logout</a>";
                    } else {
                        echo "<a href='./loginn/newSignIN.php' class='login-butt' style='text-decoration:none;'>Login</a>";
                    } ?>
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





        <!-- nass w soura -->
        <div class="banner-card">
            <div class="back1"><img src="./images/doctors-animate.svg" class="doctor-back"></div>
            <div class="banner-text">
                <div class="cont">
                    <div class="text-h4">WE GIVE YOU THE BEST</div>
                </div>
                <div class="medical">
                    <div class="medical-dv">Medical Services That You Can Turst</div>
                    <div class="ned">
                        Arepudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt
                        fugit,
                        deserunt rem suscipit placeat</div>
                    <div class="makebutton"> <button onclick="makebtt()" class="butt" type="button">Make
                            Appoinment</button></div>
                </div>
            </div>
        </div>


        <!-- search -->
        <div class="searchyasser">
            <div id="tarhini-search-container">
                <div id="tarhini-upper">
                    <div id="tarhini-head-1" class="tarhini-heading tarhini-button tarhini-selected"
                        onclick="clickFind()">
                        Find
                        a doctor</div>
                    <div id="tarhini-head-2" class="tarhini-heading tarhini-button" onclick="clickName()">Search by
                        name
                    </div>
                </div>
                <div id="tarhini-lower" class="bg-primary">
                    <div id="option-1" style="display:flex">
                        <form class="tarhini-form">

                            <select class="sel" id="fetchval">
                                <option disabled="" selected="">select filtres</option>

                            </select>

                            <input type="date" class="tarhini-input" placeholder="Select Date (Optional)">
                            <input type="time" name="start_time" class="tarhini-input" class="form-control" />
                            <input type="time" class="tarhini-input" class="form-control" />

                            <button type="button" name="btnselect" onclick="btnbook()"
                                class="tarhini-search">Search</button>
                        </form>
                    </div>
                    <div id="option-2" style="display:none">
                        <form class="tarhini-form">
                            <input type="text" name="user" class="tarhini-input" placeholder="Enter Name">
                            <input type="date" class="tarhini-input" placeholder="Select Date (Optional)">

                            <input type="time" class="tarhini-input" name="timefrom" class="form-control" />
                            <input type="time" class="tarhini-input" class="form-control" />

                            <button type="button" onclick="btnbook()" class="tarhini-search">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="searchyasser">
            <div id="tarhini-search-container">
                <div id="tarhini-upper">
                    <div id="tarhini-head-1" class="tarhini-heading tarhini-button tarhini-selected"
                        onclick="clickFind()">Find a doctor</div>
                    <div id="tarhini-head-2" class="tarhini-heading tarhini-button" onclick="clickName()">Search by name
                    </div>
                </div>
                <div id="tarhini-lower" class="bg-primary">
                    <div id="option-1" style="display:flex">
                        <form class="tarhini-form">
                            <input type="text" class="tarhini-input" placeholder="Select Speciality">
                            <input type="date" class="tarhini-input" placeholder="Select Date (Optional)">
                            <input type="time" class="tarhini-input" placeholder="Select start time (Optional)">
                            <input type="time" class="tarhini-input" placeholder="Select start time (Optional)">
                            <button type="button" class="tarhini-search">Search</button>
                        </form>
                    </div>
                    <div id="option-2" style="display:none">
                        <form class="tarhini-form">
                            <input type="text" class="tarhini-input" placeholder="Enter Name">
                            <input type="date" class="tarhini-input" placeholder="Select Date (Optional)">
                            <button type="button" class="tarhini-search">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- end search -->


        <!-- 3 cards -->
        <div class="flex1">
            <div class="flex2">
                <div class="contr1"><i class="fa-solid fa-medal fa-custom"></i></div>
                <div class="flex3">
                    <div class="titreone">
                        <h3>Qualified Doctors</h3>
                    </div>
                    <div class="fon">
                        Our brivona hospital utilizes state-of-the-art technology and employs a team of true
                        experts.
                    </div>
                </div>
            </div>
            <div class="flex2">
                <div class="contr1"><i class="fa-solid fa-clock fa-custom"></i></div>

                <div class="flex3">
                    <div class="titreone">
                        <h3>Work Improvements</h3>
                    </div>
                    <div class="fon">Improve the productivity & performance improvement systems that are
                        time-consuming process.</div>
                </div>
            </div>
            <div class="flex2">
                <div class="contr1"><i class="fa-solid fa-heart-pulse fa-custom"></i></div>
                <div class="flex3">
                    <div class="titreone">
                        <h3>Restoring Confidence</h3>
                    </div>
                    <div class="fon">We can learn to rebuild and sustain confidence through its natural ebbs and
                        flow life.</div>
                </div>
            </div>
        </div>

        <!-- end 3 cards -->

        <!-- soura ma3 list w nas -->
        <div class="pict">
            <div class="text1">
                <div class="titel2">
                    <h4>We’re Setting the Standards in</h4>
                    <h4> Research & Clinical Care</h4>
                </div>
                <div class="prh">We provide the most full medical services, so every person could have the opportunity
                    to
                    receive
                    qualitative medical help. Our Clinic has grown to provide a world class facility for the treatment
                    of
                    tooth loss, dental cosmetics and bore advanced restorative dentistry. We are among the most
                    qualified
                    implant providers in the USA with over 35 years of quality training and experience.</div>

                <div>
                    <div class="titel3">Brivona Special Features:</div>

                    <div class="list2">
                        <ul class="ul1">
                            <li>Adult Trauma Center</li>
                            <li> Birthing and Lactation Classes</li>
                            <li> Dental and Oral Surgery</li>
                        </ul>
                        <ul class="ul2">
                            <li>Children's Trauma Center</li>
                            <li> Heart and Vascular Institute</li>
                            <li> Plastic Surgery</li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="pic"> <img src="./images/medicine-animate.svg"> </div>
        </div>
        <!-- end soura ma3 list w nas -->


        <!-- table and pic -->
        <div class="pic-table">


            <div class="soura">
                <img src="./images/animation3.svg">
            </div>

            <div class="private">

                <div class="bag">
                    <div class="upper">
                        About Medical
                    </div>
                    <br>

                    <div class="par">Powerd By Over 1,530 Patients Trust Us
                        With Their Sweet Love.</div>
                </div>
                <div class="alfa-container">

                    <div class="parent1">
                        <div class="inheer"><i class="fa-solid fa-trophy fa-custom"></i></div>
                        <div class="inhl">
                            <div class="ra2em1">201</div>
                            <div class="haki1"> Award Win</div>
                        </div>
                    </div>



                    <div class="parent1">
                        <div class="inheer"><i class="fa-solid fa-user-large fa-custom"></i></i></div>
                        <div class="inhl">
                            <div class="ra2em1">354</div>
                            <div class="haki1"> Qualified Staff</div>
                        </div>
                    </div>



                    <div class="parent1">
                        <div class="inheer"><i class="fa-solid fa-heart-pulse fa-custom"></i></div>
                        <div class="inhl">
                            <div class="ra2em1">124</div>
                            <div class="haki1"> Machines</div>
                        </div>
                    </div>



                    <div class="parent1">
                        <div class="inheer"><i class="fa-solid fa-hospital fa-custom"></i></div>
                        <div class="inhl">
                            <div class="ra2em1">402</div>
                            <div class="haki1"> Center Rooms</div>
                        </div>
                    </div>



                    <div class="parent1">
                        <div class="inheer"><i class="fa-solid fa-thumbs-up fa-custom"></i></div>
                        <div class="inhl">
                            <div class="ra2em1">7163</div>
                            <div class="haki1"> Happy Patients</div>
                        </div>
                    </div>



                    <div class="parent1">
                        <div class="inheer"><i class="fa-solid fa-person fa-custom"></i></div>
                        <div class="inhl">
                            <div class="ra2em1">254</div>
                            <div class="haki1">Suppliers</div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- end the table and pic -->

        <!-- table kbir -->
        <div class="pry">

            <div class="flag">
                <div class="upper">
                    <div class="details"> WE OFFER SERVICES</div>
                    <div class="kalam">We Provide Assistance in Various Directions</div>
                </div>


                <div class="second">
                    <div class="par"> Powerd By Over 1,530 Patients Trust Us
                        With Their Sweet Love.
                    </div>
                    <div class="moresev">
                        <button onclick="divservice()" class="more"> More Services</button>
                    </div>
                </div>
            </div>


            <div class="primary">

                <div class="parent">
                    <div class="ness">
                        <div class="icon-text">
                            <div class="beo"><i class="fa-solid fa-brain fa-custom"></i></div>
                            <div class="details1">Neurology Sargery</div>
                        </div>
                        <div class="haki">Saepe nulla praesentium eaque omnis perferendis a doloremque.</div>
                    </div>
                </div>



                <div class="parent">

                    <div class="ness">
                        <div class="icon-text">
                            <div class="beo"><i class="fa-solid fa-hand-holding-heart fa-custom"></i></div>

                            <div class="details1">Cardiology</div>
                        </div>
                        <div class="haki">Your heart is in the best hands at our state-of-the-art cardiovascular of
                            the
                            cardiology institute.</div>
                    </div>
                </div>




                <div class="parent">
                    <div class="ness">

                        <div class="icon-text">
                            <div class="beo"><i class="fa-solid fa-baby fa-custom"></i></div>

                            <div class="details1">Paediatric</div>
                        </div>
                        <div class="haki">Our paediatric services utilizes state art the technology and employs a
                            team
                            of
                            true experts for paediatric.</div>
                    </div>
                </div>



                <div class="parent">
                    <div class="ness">

                        <div class="icon-text">
                            <div class="beo"><i class="fa-solid fa-tooth fa-custom"></i></div>

                            <div class="details1">Dentel Care</div>
                        </div>
                        <div class="haki">We offers great t dental care including cosmetic and oral dental implants
                            and
                            emergency care.</div>
                    </div>
                </div>



                <div class="parent">
                    <div class="ness">

                        <div class="icon-text">
                            <div class="beo"><i class="fa-solid fa-wheelchair fa-custom"></i></div>

                            <div class="details1">Pulmonary</div>
                        </div>
                        <div class="haki">Our endoscopic procedures include bronchoscopy, thoracentesis, and chest
                            tube
                            insertion.</div>
                    </div>
                </div>



                <div class="parent">
                    <div class="ness">

                        <div class="icon-text">
                            <div class="beo"><i class="fa-solid fa-flask-vial fa-custom"></i></div>

                            <div class="details1">Laboratory</div>
                        </div>
                        <div class="haki">In our laboratory, You can pass wide range of the tests that allows us to
                            put
                            right the diagnosis tests.</div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <!-- end table kbir  -->

    <!-- nas -->

    <div class="news">
        <div class="deticated">
            <div class="title">MEET OUR EXPERIENCED TEAM</div>

            <h4 class="title1">Our Dedicated Doctors Team</h4>


            <div class="paragraph1">We offer extensive medical procedures to outbound and inbound patients what it
                is
                and we
                are very proud of
                achievement of our staff, We are all work together to help our all patients for recovery
            </div>
        </div>
    </div>
    <!-- end nas -->




    <!-- scroll one -->
    <div class="asasi">
        <div class="main-scroll-div">
            <div>
                <button class="icon clickable"><i class="fas fa-angle-double-left"></i></button>
            </div>
            <div class="cover">
                <div class="scroll-images">
                    <div class="child">
                        <div class="flek">
                            <div class="picture-scroll"><img src="./images/img1.jpg" class="child-img"></div>

                            <div class="name1">
                                Senior photologist
                            </div>
                            <div class="speciality">Dr. Amani Colman</div>
                            <div class="social-doctor">
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""> <i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="child">
                        <div class="flek">
                            <div><img src="./images/img2.jpg" class="child-img"></div>

                            <div class="name1">
                                Senior photologist
                            </div>
                            <div class="speciality">Dr. ali colman</div>
                            <div class="social-doctor">
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""> <i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="child">
                        <div class="flek">
                            <div><img src="./images/img3.jpg" class="child-img"></div>

                            <div class="name1">
                                Senior photologist
                            </div>
                            <div class="speciality">Dr. Robort Btrum</div>
                            <div class="social-doctor">
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""> <i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="child">
                        <div class="flek">
                            <div><img src="./images/img4.jpg" class="child-img"></div>

                            <div class="name1">
                                Senior photologist
                            </div>
                            <div class="speciality">Dr. Robort Btrum</div>
                            <div class="social-doctor">
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""> <i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="child">
                        <div class="flek">
                            <div><img src="./images/img5.jpg" class="child-img"></div>

                            <div class="name1">
                                Senior photologist
                            </div>
                            <div class="speciality">Dr. Robort Btrum</div>
                            <div class="social-doctor">
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""> <i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="child">
                        <div class="flek">
                            <div><img src="./images/img6.jpg" class="child-img"></div>

                            <div class="name1">
                                Senior photologist
                            </div>
                            <div class="speciality">Dr. Robort Btrum</div>
                            <div class="social-doctor">
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""> <i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>


                    <div class="child">
                        <div class="flek">
                            <div><img src="./images/img1.jpg" class="child-img"></div>

                            <div class="name1">
                                yasser traboulsi
                            </div>
                            <div class="speciality">Dr. Robort Btrum</div>
                            <div class="social-doctor">
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                <a href=""> <i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <button class="icon" onclick="scrolle()"><i class="fas fa-angle-double-right"></i></button>
            </div>

        </div>
    </div>


    <!-- end scrol news -->



    <!-- nas w soura -->


    <div class="banner">
        <div class="ground1"><img src="./images/medical-research-animate.svg" class="backgr"></div>

        <div class="benntex">
            <div class="conter">
                <h3 class="test">SPECIALIZED HEALTH NEEDS</h3>
            </div>

            <div class="need">
                More Pediatric Specialists, Strong
                Partnerships, and The Power to
                Care Your Child's and your parent's.
            </div>

            <div class="make-buttel"><button class="buttel" type="button">Make Appoinment</button></div>
            <div class="call">
                OR CALL: 1(234) 567-8910
            </div>
        </div>
    </div>


    <!-- end nas w soura -->


    <!-- feedback -->

    <div class="newgrid">

        <div class="fulk">

            <div class="boll">CLIENTS</div>
            <div class="leader">
                Happy with Customers & Clients
            </div>
            <div class="colead">
                If you need any medical help we are available for you. Lorem ipsum dolor sit amet, sectetur
                adipiscingelit, sed do eiusmod tempor the incididunt ut labore et dolore.
            </div>

        </div>

        <div class="fulki">

            <div class="bosses">

                <div class="one-flex">
                    <div class="profile-flex"><img src="./images/img4.jpg" class="profile-image"> </div>
                    <div class="name-flex">yasser traboulsi</div>
                </div>

                <div class="leaders">
                    <div class="feedback">The Obesity Society (TOS) on-demand education is a great way to gain an
                        in-depth
                        understanding of essential aspects of obesity. Learn from opinion leaders and influencers in
                        the obesity field and access the latest obesity-related information. All TOS CME events
                        count towards Group One on the American Board of Obesity Medicine Exam Application.</div>
                </div>
            </div>

            <div class="coleads">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>

            </div>
        </div>
    </div>

    <!-- end feedback -->




    <!-- scroll two -->

    <div class="newsscroll">
        <div class="scrolling-div">
            <div>
                <button class="icones-dreis clickables"><i class="fas fa-angle-double-left"></i></button>
            </div>
            <div class="coverting">
                <div class="scroll-pictures">
                    <div class="childes-pic"><img class="childes-imges" src="./images/images (1).png" alt="image">
                    </div>
                    <div class="childes-pic"><img class="childes-imges" src="./images/images (3).png" alt="image">
                    </div>
                    <div class="childes-pic"><img class="childes-imges" src="./images/images.png" alt="image"> </div>
                    <div class="childes-pic"><img class="childes-imges" src="./images/images (1).png" alt="image">
                    </div>
                    <div class="childes-pic"><img class="childes-imges" src="./images/images (3).png" alt="image">
                    </div>
                    <div class="childes-pic"><img class="childes-imges" src="./images/images4.jpg" alt="image"> </div>
                    <div class="childes-pic"><img class="childes-imges" src="./images/images (1).png" alt="image">
                    </div>
                    <div class="childes-pic"><img class="childes-imges" src="./images/images (3).png" alt="image">
                    </div>
                    <div class="childes-pic"><img class="childes-imges" src="./images/images4.jpg" alt="image"> </div>

                </div>
            </div>
            <div>
                <button class="icones-dreis" onclick="scrollets()"><i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </div>

    <!-- end scrolltwo -->


    <!-- blog part -->
    <div class="blog-part">
        <div class="blog-cont">
            <div class="blog-section">
                <div class="title-blog">
                    <div class="blog-title">
                        <h1>Our Blog</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero molestias modi aliquid
                            aliquam
                            debitis
                            ea ut et, quae praesentium deleniti quis animi beatae quisquam facere asperiores?
                            Tempora
                            modi
                            nesciunt recusandae?
                        </p>

                    </div>
                    <div class="more-blog"><button onclick="morearticl()" class="button-blog">More Article</button>
                    </div>
                </div>
                <div class="contants">
                    <div class="blog-card">
                        <img src="./animation/dentel.svg" class="blog-images">
                        <h4>lorem ipsum dolor sit amet</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ipsam, repellat laboriosam
                            eos
                            animi impedit laborum aperiam a voluptates reprehenderit voluptas cupiditate nemo aut
                            facere
                            velit architecto, perferendis tenetur reiciendis!</p>
                    </div>
                    <div class="blog-card">
                        <img src="./animation/lab.svg" class="blog-images">
                        <h4>lorem ipsum dolor sit amet</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ipsam, repellat laboriosam
                            eos
                            animi impedit laborum aperiam a voluptates reprehenderit voluptas cupiditate nemo aut
                            facere
                            velit architecto, perferendis tenetur reiciendis!</p>
                    </div>
                    <div class="blog-card">
                        <img src="./animation//neur.svg" class="blog-images">
                        <h4>lorem ipsum dolor sit amet</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ipsam, repellat laboriosam
                            eos
                            animi impedit laborum aperiam a voluptates reprehenderit voluptas cupiditate nemo aut
                            facere
                            velit architecto, perferendis tenetur reiciendis!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog end -->

    <!-- footer -->
    <div class="footer">
        <div class="content31">
            <div class="icon-footer">
                <div><img src="./images/linkedin.png"></div>
                <div><img src="./images/instagram.png"></div>
                <div><img src="./images/twitter.png"></div>
            </div>
        </div>
        <div class="content31">
            <div class="titre">
                <h2 class="about">About Us</h2>
            </div>
            <div class="link1">
                <div><img src="./images/location.png" class="as"><a href="#">Sabbah Street</a></div>
                <div><img src="./images/phone-call_1.png" class="as"><a href="#">76123456</a></div>
                <div><img src="./images/clock.png" class="as"><a href="#"> 8:00AM 3:00PM</a></div>
            </div>
        </div>
        <div class="content31">
            <div class="titre">
                <h2>Quik Links</h2>
            </div>
            <div class="link">
                <a href="#">Make Appointment</a>
                <a href="#">Our Doctors</a>
                <a href="#">Customer Treatments</a>
            </div>
        </div>
        <div class="content31">
            <div class="titre">
                <h2>Our Services</h2>
            </div>
            <div class="link">
                <a href="#">Cardiology</a>
                <a href="#">neurology</a>
                <a href="#">dental</a>
            </div>
        </div>
        <div class="form">
            <div class="titre">
                <h2>Newsletter</h2>
            </div>
            <input type="Email" value="Email" class="email">
            <button class="bti">Subscribe</button>
        </div>
    </div>
    <div class="copy">
        <p>Copyright © 2022 Delmont Theme by ThemetechMount</p>
    </div>

    <!-- end footer -->
    <span class="up">up</span>

    </div>
    <link rel="stylesheet" type="text/css" href="/ESAProject/Profiles/nav.css">
    <script src="/ESAProject/Profiles/Resources/JavaScript/globalNavBar.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script type="text/javascript">
    const toggle = document.getElementsByClassName('toggle')[0]
    const menu = document.getElementsByClassName('menu')[0]

    toggle.addEventListener('click', () => {
        menu.classList.toggle('active')
    })


    let btn = document.querySelector(".clickable");
    btn.addEventListener("click", function() {
        var left = document.querySelector(".scroll-images");
        left.scrollBy(-400, 0)
    })

    function scrolle() {
        var right = document.querySelector(".scroll-images");
        right.scrollBy(400, 0)
    }

    // new scroll
    let botn = document.querySelector(".clickables");
    botn.addEventListener("click", function() {
        var left = document.querySelector(".scroll-pictures");
        left.scrollBy(-350, 0)
    })

    function scrollets() {
        var right = document.querySelector(".scroll-pictures");
        right.scrollBy(350, 0)
    }


    // serach


    function clickFind() {
        document.getElementById("option-1").setAttribute("style", "display:flex");
        document.getElementById("tarhini-head-1").setAttribute("class",
            "tarhini-heading tarhini-button tarhini-selected");
        document.getElementById("option-2").setAttribute("style", "display:none");
        document.getElementById("tarhini-head-2").setAttribute("class", "tarhini-heading tarhini-button");
    }

    function clickName() {
        document.getElementById("option-2").setAttribute("style", "display:flex");
        document.getElementById("tarhini-head-2").setAttribute("class",
            "tarhini-heading tarhini-button tarhini-selected");
        document.getElementById("option-1").setAttribute("style", "display:none");
        document.getElementById("tarhini-head-1").setAttribute("class", "tarhini-heading tarhini-button");
    }


    //   service

    function divservice() {
        const url = './services/ser.html';
        window.location.replace(url);
    }


    // articl

    function morearticl() {
        const url = './blog/blog.html';
        window.location.replace(url);
    }

    // make 
    function makebtt() {
        const url = './book/book.php';
        window.location.replace(url);
    }


    //login
    function loginbtt() {
        const url = './ESAProject/loginn/newSignIN.php';
        window.location.replace(url);
    }

    // btnserach

    function btnbook() {
        const url = './book/book.php';
        window.location.replace(url);
    }


    // get app
    function btnbook() {
        const url = './book/book.php';
        window.location.replace(url);
    }


    // up

    let span = document.querySelector(".up")
    window.onscroll = function() {

        this.scrollY >= 1000 ? span.classList.add("show") : span.classList.remove("show");
    };
    span.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    };
    </script>
</body>

</html>