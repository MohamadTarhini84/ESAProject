<?php 
function getNavBar(){
    return '
    <div id="nav-right">
                <i class="fa-solid fa-bell" onclick="document.getElementById(\'notification-popup\').classList.toggle(\'active\')"></i>
                <div id="name-picture">
                    <a href="#"><img src="./Resources/Images/doctor.jpg"></a>
                    <a href="#">Batata Maslou2a</a>
                </div>
                <button id="nav-logout" onclick="location.href=\'#\';">Logout</button>
            </div>
    ';
}
?>