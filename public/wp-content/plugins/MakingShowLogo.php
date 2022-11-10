<?php
/*
Plugin Name: MakingShowLogo
Description: Login Page Logo
Author: MakingShowAdmin
*/

add_action('login_head', function(){
    ?>
    <style>
        #login > h1 > a{
            background-image: url('http://m4.user15.skilljapan.info/wp-content/themes/making-show/images/logo2.svg');
        }
    </style>
    <?php
});