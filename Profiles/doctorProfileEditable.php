<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newStyle.css">
    <link rel="stylesheet" href="./js/fullcalendar-5.11.3/lib/main.css">
    <script src="./js/fullcalendar-5.11.3/lib/main.js"></script>
    <script src="https://kit.fontawesome.com/4c2b37abf9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="page">
    <nav class="nav-bar">
        <div id="nav-bar">
            <div id="nav-left">
                MedCenter
            </div>
            <div id="nav-mid">
                <div class="mid-element">Home</div>
                <div class="mid-element">Services</div>
                <div class="mid-element">Book</div>
                <div class="mid-element">Blog</div>
                <div class="mid-element">Doctors</div>
                <div class="mid-element">About</div>
                <div class="mid-element">Contact</div>
            </div>
            <?php
                require("Resources/php/nav-bar.php");
                echo getNavBar();
            ?>
        </div>
    </nav>
    <div id="profile-container">
        <div id="profile-info">
            <?php
                require("Resources/php/edit.php");
                echo getDrInfo();
            ?>
            <button id="profile-edit-button" class="app-desc" onclick="toggle('edit-popup')">Edit Profile Info</button>
        </div>
        <div id="profile-details">
            <div id="botton-half">
                <div id="upper-section">
                    <button class="upper-button clicked" id="day-button" onclick="clickDay()">
                        <i class="fa-solid fa-book"></i>
                        My Appointments
                    </button>
                    <button class="upper-button" id="rev-button" onclick="clickRev()">
                        <i class="fa-regular fa-clock"></i>
                        My Schedule
                    </button>
                </div>
                <div id="lower-section">
                    <div id="option-1">
                        <button id="make-new-app" class="app-desc">Add appointment</button>              
                        <div id="appointments">
                            <?php 
                                require("Resources/php/app.php");
                                echo getDrApp();
                            ?>
                        </div>
                    </div>
                    <div id="option-2" style="display:none">
                        <fieldset>
                            <legend>Click day to save changes</legend>
                        <div id="schedule-grid">
                            <button class="grid-button" id="monday" onclick="validateTimes(0)">Monday</button>
                            <div class="grid-edit-times">
                                <label>Start time:</label>
                                <input type="time">
                                
                                <label>End time:</label>
                                <input type="time">
                            </div>
                            <button class="grid-button" id="tuesday" onclick="validateTimes(1)">Tuesday</button>
                            <div class="grid-edit-times">
                                <label>Start time:</label>
                                <input type="time">
                                
                                <label>End time:</label>
                                <input type="time">
                            </div>
                            <button class="grid-button" id="wednesday" onclick="validateTimes(2)">Wednesday</button>
                            <div class="grid-edit-times">
                                <label>Start time:</label>
                                <input type="time">
                                
                                <label>End time:</label>
                                <input type="time">
                            </div>
                            <button class="grid-button" id="thursday" onclick="validateTimes(3)">Thursday</button>
                            <div class="grid-edit-times">
                                <label>Start time:</label>
                                <input type="time">
                                
                                <label>End time:</label>
                                <input type="time">
                            </div>
                            <button class="grid-button" id="friday" onclick="validateTimes(4)">Friday</button>
                            <div class="grid-edit-times">
                                <label>Start time:</label>
                                <input type="time">
                                
                                <label>End time:</label>
                                <input type="time">
                            </div>
                            <button class="grid-button" id="saturday" onclick="validateTimes(5)">Saturday</button>
                            <div class="grid-edit-times">
                                <label>Start time:</label>
                                <input type="time">
                                
                                <label>End time:</label>
                                <input type="time">
                            </div>
                            <button class="grid-button" id="sunday" onclick="validateTimes(6)">Sunday</button>
                            <div class="grid-edit-times">
                                <label>Start time:</label>
                                <input type="time">
                                
                                <label>End time:</label>
                                <input type="time">
                            </div>
                        </div>
                    </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="profile-footer">
        <div style="margin:5px;color:var(--white)">
        <i class="fa-regular fa-copyright"></i> MedCenter 2022. All rights reserved.
        </div>
        <div id="profile-footer-links">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
</div>

<div id="edit-popup">
    <div id="app-popup-upper">
        <h3>Edit Profile</h3>
        <i onclick="toggle('edit-popup')" class="fa-solid fa-xmark"></i>
    </div>
    <div id="app-popup-lower">
        <div id="edit-popup-left">
            <div class="right-image">
                <img id="ep-img" src="./Resources/Images/doctor.jpg">
            </div>
            <div>
                <div id="ep-name" class="edit-name">
                    Batata 7arra
                </div>
                <div id="ep-mail" class="edit-info">
                    bobobob@gmail.com
                </div>
            </div>
        </div>
        <div id="edit-popup-right">
                <div class="edit-left-input">
                    <p>First Name:</p>
                    <input id="ep-fname" type="text">
                </div> 
                <div class="edit-left-input">
                    <p>Last Name:</p>
                    <input id="ep-lname" type="text">
                </div>
                <div class="edit-left-input">
                    <p>Email:</p>
                    <input id="ep-email" type="email">
                </div> 
                <div class="edit-left-input">
                    <p>Phone Number:</p>
                    <input id="ep-number" type="number">
                </div> 
                <div class="edit-left-input">
                    <p>Password:</p>
                    <input id="ep-password" type="password">
                </div>
                <div class="edit-left-input">
                    <p>Confirm Password:</p>
                    <input id="ep-confirm" type="password">
                </div>
                <div class="edit-left-input">
                    <p>Licence Card ID:</p>
                    <input id="ep-licence" type="number">
                </div>
                <div class="edit-left-input">
                    <p>Room:</p>
                    <input id="ep-room" type="text">
                </div>
                <div id="left-buttons">
                    <button class="app-desc" onclick="toggle('edit-popup')" style="margin-right:0">Save Settings</button>
                    <button class="app-desc" onclick="toggle('edit-popup')">Cancel</button>
                </div>
        </div>
    </div>
</div>
<div id="desc-popup" style="z-index:2">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur enim 
    culpa nobis debitis magni quae vel minima laboriosam error pariatur ipsa, 
    hic provident rem. Odio perferendis consectetur maxime officiis delectus!<br><br>
    <button class="app-desc" onclick="toggle('desc-popup')" style="align-self:center">Close</button>
</div>
<div id="notification-popup" style="z-index:1">
    <div class="appointment" style="border:1px solid var(--light)">
        <div class="app-top">
        <i class="fa-regular fa-clock"></i>
        Tue, 30 Sept at 4:00 PM
        </div>
        <div class="app-mid">
            <div class="name-desc">
                <div>
                    <div class="app-name">
                        batata me2leye
                    </div>
                    <div class="app-info">
                        +961 123 123
                    </div>
                </div>
                <button class="app-desc" onclick="toggle('desc-popup')">
                    show description
                </button>
            </div>
            <div class="app-triple">
                <div class="app-room">
                    <div class="app-name">
                        Room
                    </div>
                    <div class="app-info" style="font-size:10px">
                        adadadadsdadadadadad
                    </div>
                </div>
                <div class="app-status">
                    <div class="app-name">
                        Status
                    </div>
                    <div class="app-info">
                        Confirmed
                    </div>
                </div>
            </div>
        </div>
        <div class="app-edit-delete">
        <button class="app-button">
            <i class="fa fa-duotone fa-check"></i>
            Confirm
        </button>
        <button class="app-button delete-one-app" onclick="deleteApp()" style="border-left:1px solid var(--light)">
            <i class="fa-solid fa-trash"></i>
            Delete
        </button>
        </div>
    </div>
    <button class="app-desc" onclick="document.getElementById('notification-popup').classList.toggle('active')" style="align-self:center">Close</button>
</div>

</body>
<script src="../Profiles/Resources/JavaScript/toggle.js"></script>
<script src="../Profiles/Resources/JavaScript/switch.js"></script>
<script src="../Profiles/Resources/JavaScript/validateTimes.js"></script>
<script type="text/javascript">

    let likes=document.querySelectorAll('.review-likes'); 

    likes.forEach(function (e){
        e.addEventListener('click',function(a){
            if(e.firstElementChild.classList.contains('liked')){
                e.firstElementChild.setAttribute('class','fa-regular fa-heart');
                e.firstElementChild.setAttribute('style','color:white');
            } else{
                e.firstElementChild.setAttribute('class','fa-solid fa-heart liked');
                e.firstElementChild.setAttribute('style','color:red');
            }
        })
    })
</script>
<script>
$(document).ready(function() {
    // $('#profile-edit-button').click(function(){

        $.ajax({
            type:"GET",
            url:"./edit.php",
            dataType:"json",
            success:function(res){
                console.log(res);
                let data=JSON.parse(res);
                alert(data.test);
            }
        }).fail(alert("fail"));
    // });
});
    
</script>
</html>