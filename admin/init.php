<?php
include 'connection.php';

//ROUTES======


$tpl = 'includes/templates/'; //templates directory
$css = 'layout/css/'; //css directory
$js = 'layout/js/'; //js directory
$lang = 'includes/languages/';


// include the important file

include $lang . 'english.php';
include $tpl . 'header.php';

// include navbar on all pages expect the one with $nonavbar variable

    if(!isset($noNavbar)){

        include $tpl . 'navbar.php';

    }
