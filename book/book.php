<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./yasser.css">
    <link rel="stylesheet" type="text/css" href="./my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/4c2b37abf9.js" crossorigin="anonymous"></script>
    <title>Book Appoinment</title>

</head>

<body>

    <!-- navbar -->
    <div id="page">
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
                            <li><a href="../index.php">Home</a> </li>
                            <li><a href="../services/ser.html">Services</a> </li>
                            <li><a href="./book.php">Book</a> </li>
                            <li><a href="../blog/blog.html">Blog</a> </li>
                            <li><a href="../doctors/Doctors23.html">Doctors</a> </li>
                            <li><a href="../about/About.html">About</a> </li>
                            <li><a href="../newcontact/contact.php">Contact</a> </li>

                        </ul>
                    </div>
                    <div class="navbutton">
                        <button onclick="loginbtt()" class="login-butt">login</button>
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
        <!-- end navbar -->
        <div class="bgImage">
            <div class="content">
                <h1>Medical<span>Center</span></h1>

                <button class="explore">Appoinment now</button>
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
                            <form class="tarhini-form" id="datausers">

                                <select class="sel" id="fetchval">
                                    <option disabled="" selected="">select filtres</option>

                                </select>

                                <input type="date" id="donedate" class="tarhini-input"
                                    placeholder="Select Date (Optional)">
                                <input type="time" name="start_time" class="tarhini-input" id="starttime"
                                    class="form-control" />
                                <input type="time" id="closetime" class="tarhini-input" class="form-control" />

                                <button type="button" id="btnselect" name="btnselect"
                                    class="tarhini-search">Search</button>
                            </form>
                        </div>



                        <div id="option-2" style="display:none">
                            <form class="tarhini-form" id="userdata">
                                <input type="text" id="users" name="user" class="tarhini-input"
                                    placeholder="Enter Name">
                                <input type="date" id="datenow" class="tarhini-input"
                                    placeholder="Select Date (Optional)">

                                <input type="time" id="timefrom" class="tarhini-input" name="timefrom"
                                    class="form-control" />
                                <input type="time" id="findtime" class="tarhini-input" class="form-control" />

                                <button type="button" id="btn" name="btn" class="tarhini-search">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="bgImage">
        <div class="overlay"></div>
        <div class="content">
            <h1>Medical<span>Center</span></h1>
           
                 <button class="explore">Appoinment now</button>
                 <div id="tarhini-search-container">
                    <div id="tarhini-upper">
                        <div id="tarhini-head-1" class="tarhini-heading tarhini-button tarhini-selected" onclick="clickFind()">Find a doctor</div>
                        <div id="tarhini-head-2" class="tarhini-heading tarhini-button" onclick="clickName()">Search by name</div>
                    </div>
                    <div id="tarhini-lower" class="bg-primary">
                        <div id="option-1" style="display:flex">
                            <form class="tarhini-form">
                                <input type="text" class="tarhini-input" placeholder="Select Speciality">
                                <input type="time" class="tarhini-input" placeholder="Select time (Optional)">
                                <button type="button" onclick="divtext()" class="tarhini-search">Search</button>
                            </form>
                        </div>
                        <div id="option-2" style="display:none">
                            <form class="tarhini-form">
                                <input type="text" class="tarhini-input" placeholder="Enter Name">
                                <input type="time" class="tarhini-input" placeholder="Select time (Optional)">
                                <button type="button"  onclick="divtext()" class="tarhini-search">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                   
        </div>
        
    </div> -->



        <!-- search  info -->

        <!-- end book  -->

        <div class="alldivs" id="als">

        </div>

        <!-- earch info end -->


        <!-- footter -->


        <div class="footer">
            <div class="content31">
                <div class="icon">
                    <div><img src="../images/linkedin.png"></div>
                    <div><img src="../images/instagram.png"></div>
                    <div><img src="../images/twitter.png"></div>
                </div>
            </div>
            <div class="content31">
                <div class="titre">
                    <h2 class="about">About Us</h2>
                </div>
                <div class="link1">
                    <div><img src="../images/location.png" class="as"><a href="#">Sabbah Street</a></div>
                    <div><img src="../images/phone-call_1.png" class="as"><a href="#">76123456</a></div>
                    <div><img src="../images/clock.png" class="as"><a href="#"> 8:00AM 3:00PM</a></div>
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
    </div>

    <!-- end footr -->

    <div class="app-popup">
        <div id="app-popup-upper">
            <h3>Appointment Information</h3>
            <i onclick="toggleApp()" class="fa-solid fa-xmark"></i>
        </div>
        <div id="app-popup-lower">
            <div id="app-popup-left">
                <div class="left-input">
                    <p>Choose day:</p>
                    <input type="date">
                </div>
                <div class=left-input>
                    <p>Choose Time:</p>
                    <input type="time">
                </div>
                <p>Appointment Description:</p>
                <textarea placeholder="Description"></textarea>
                <div id="left-buttons">
                    <button class="app-desc" onclick="toggleApp()">Cancel</button>
                    <button class="app-desc" onclick="toggleApp()" style="margin-right:0">Make Appointment</button>
                </div>
            </div>
            <div id="app-popup-right">
                <div class="right-image">
                    <img src="../images/img1.jpg">
                </div>
                <div>
                    <div class="app-name">
                        Dr. Batata ma2loube
                    </div>
                    <div class="app-info">
                        archeologist
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end footer -->

</body>
<style>
/* INCLUDE THIS !!!!!!
        <script src="https://kit.fontawesome.com/4c2b37abf9.js" crossorigin="anonymous"></script>
    */

:root {
    --green: #16a085;
    --white: #f7f7f7;
}

#page.active {
    filter: blur(20px);
    pointer-events: none;
    user-select: none;
    transition: 0.1s;
    height: auto;
}

.app-popup {
    width: 700px;
    height: 400px;
    display: flex;
    flex-direction: column;
    border-radius: 5px;
    border: 1px solid silver;
    position: fixed;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 5px 30px rgba(0 0 0 0.3);
    background: var(--white);
    visibility: hidden;
    opacity: 0;
    transition: 0.5s;
}

.app-popup.active {
    top: 50%;
    visibility: visible;
    opacity: 1;
    transition: 0.5s;
}

#app-popup-upper {
    height: 50px;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid silver;
    padding: 0 20px;
    background-color: #16a085;
    color: #f7f7f7;
    align-items: center;
}

.fa-xmark:hover {
    scale: 1.5;
    color: red;
    cursor: pointer;
    transition: 0.2s ease-in-out;
}

#app-popup-lower {
    height: 100%;
    display: flex;
}

#app-popup-left {
    height: 360px;
    border-right: 1px solid silver;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

#app-popup-left textarea {
    width: 450px;
    height: 80px;
    resize: none;
    border-radius: 5px;
    border: 1px solid silver;
    padding: 10px;
}

textarea:focus {
    outline: none !important;
}

input:focus {
    outline: none !important;
}

#app-popup-right {
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-bottom: 50px;
}

.left-input {
    width: 80%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.left-input>input {
    width: 200px;
    height: 20px;
    border-radius: 5px;
    border: 1px solid silver;
}

#left-buttons {
    display: flex;
    justify-content: right;
    margin: 10px 0;
    font-size: 10px;
}

.right-image img {
    width: 100px;
    height: 100px;
    border-radius: 500px;
    border: 1px solid var(--green);
}

.app-desc {
    height: 30px;
    width: 120px;
    margin: 10px;
    background-color: var(--green);
    color: var(--white);
    padding: 5px;
    border: none;
    border-radius: 5px;
    font-size: 12px;
}

.app-desc:hover {
    cursor: pointer;
    background-color: rgba(22, 160, 133, 0.4);
    transition: 0.2s;
}

.app-name {
    font-size: 15px;
    text-transform: capitalize;
    font-weight: 500;
}

.app-info {
    color: var(--green);
    text-transform: capitalize;
    margin-bottom: 12px;
}

.name-desc {
    display: flex;
    justify-content: space-between;
    padding-top: 10px;
}
</style>
<script src="./new.js"></script>
<script src="./my.js"></script>

<script src="./sel.js"></script>
<script>
// buutt

let blur = document.getElementById('page');

function toggleApp() {
    blur.classList.toggle('active');
    let appPopup = document.getElementsByClassName("app-popup");
    appPopup[0].classList.toggle('active');
}




// navbar

const toggle = document.getElementsByClassName('toggle')[0]
const menu = document.getElementsByClassName('menu')[0]

toggle.addEventListener('click', () => {
    menu.classList.toggle('active')
});


// button search


// function divtext(){
//     document.querySelector('.nesk').style.display = 'inline';
// }



// search
function clickFind() {
    document.getElementById("option-1").setAttribute("style", "display:flex");
    document.getElementById("tarhini-head-1").setAttribute("class", "tarhini-heading tarhini-button tarhini-selected");
    document.getElementById("option-2").setAttribute("style", "display:none");
    document.getElementById("tarhini-head-2").setAttribute("class", "tarhini-heading tarhini-button");
}

function clickName() {
    document.getElementById("option-2").setAttribute("style", "display:flex");
    document.getElementById("tarhini-head-2").setAttribute("class", "tarhini-heading tarhini-button tarhini-selected");
    document.getElementById("option-1").setAttribute("style", "display:none");
    document.getElementById("tarhini-head-1").setAttribute("class", "tarhini-heading tarhini-button");
}


// login
function loginbtt() {
    const url = '../ESAProject/Login/newSignIN.html';
    window.location.replace(url);
}
</script>


</html>