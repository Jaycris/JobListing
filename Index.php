<?php
require_once("./Config/initialize.php");
$content = './Pages/home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) {
    case 'apply' :
    $title="Submit Application";
    $content='./Components/applicationform.php';
    break;
    
    default : 
    $active_home='active';
    $title="Home";
    $content = './Pages/home.php';
}
require_once("./Layout/Layout.php");
?>