<!doctype html>
<html>
<head>
    <title>HUGE</title>
    <!-- META -->
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css" />
</head>
<body>
    <!-- wrapper, to center website -->

    <div id="header" class="header">
        <a href="/index"><img src="../public/css/dinges.jpg" class="float"></a>

        <!-- navigation -->


        <!-- my account -->
        <div class="red_bar"></div>
    

</body>
<div class="dropdownbutton">
<ul class="navigation">
            <li <?php if (View::checkForActiveController($filename, "index")) { echo ' class="active" '; } ?> >
                <a class="topmenu" href="<?php echo Config::get('URL'); ?>index/index">Index</a>
            
            <li <?php if (View::checkForActiveController($filename, "profile")) { echo ' class="active" '; } ?> >
                <a class="topmenu" href="<?php echo Config::get('URL'); ?>profile/index">Profiles</a>
            
            <?php if (Session::userIsLoggedIn()) { ?>
                <li <?php if (View::checkForActiveController($filename, "dashboard")) { echo ' class="active" '; } ?> >
                    <a class="topmenu" href="<?php echo Config::get('URL'); ?>dashboard/index">Dashboard</a>
                
            <?php } else { ?>
                <!-- for not logged in users -->
                <li <?php if (View::checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
                    <a class="topmenu" href="<?php echo Config::get('URL'); ?>login/index">Login</a>
                
                <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index")) { echo ' class="active" '; } ?> >
                    <a class="topmenu" href="<?php echo Config::get('URL'); ?>register/index">Register</a>
            <?php } ?>
             <li>
             <div class="dropdiv"> 
            <button onclick="more()" class="icon caret-down dropbtn">Account</button>
            <div id="dropdownmore" class="dropdown-content">
                        <a class="topmenu2" href="<?php echo Config::get('URL'); ?>user/index">My Account</a>
                        <a class="topmenu2" href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>
                        <a class="topmenu2" href="<?php echo Config::get('URL'); ?>user/editAvatar">Edit your avatar</a>
                        <a class="topmenu2" href="<?php echo Config::get('URL'); ?>user/editusername">Edit my username</a>
                        <a class="topmenu2" href="<?php echo Config::get('URL'); ?>user/edituseremail">Edit my email</a>
                        <a class="topmenu2" href="<?php echo Config::get('URL'); ?>user/changePassword">Change Password</a>
                        <a class="topmenu2" href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
                        <a class="topmenu2" href="<?php echo Config::get('URL'); ?>note/index">My Notes</a>
            <?php if (Session::get("user_account_type") == 7) : ?>
                 <?php if (View::checkForActiveController($filename, "admin")) {
                    echo ' class="active" ';
                } ?>
                    <a class="topmenu2" href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
                    <a class="topmenu2" href="<?php echo Config::get('URL'); ?>platform/index">Add Platform</a>
                    </div>
                </div>
            <?php endif; ?>
        </li>
    </div>
</div>
        <script>
            /* When the user clicks on the button,
            toggle between hiding and showing the dropdown content */
                function more() {
                   document.getElementById("dropdownmore").classList.toggle("show");
                }

              // Close the dropdown if the user clicks outside of it
               window.onclick = function(event) {
                 if (!event.target.matches('.dropbtn')) {

           var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
             for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
                }
             }
         }
      }
</script>