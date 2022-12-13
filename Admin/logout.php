<?php
    require('../config/constants.php');
    // distroy the session and redirect to login page
    session_destroy();//unset $_SESSION['user']

    header("location:".SITEURL.'admin/index.php');
 ?>