<?php

include_once 'classes/class.data.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$fdata = new fdata();
?>

<!DOCTYPE html> 
<html>
<head>
    <title>Asset Tracker</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">

    <body>
<div id="container">
    <div id="header"></div>
    <h3>ASSET TRACKER</h3>
    </div>
    <div id="wrapper">
            <div id="menu">
            <a href="main.php" class="home"> HOME |</a> 
                <a href="index.php?page=mc"><i class="mc"> MOVEMENT CHECKER |</a> 
                <a href="index.php?page=wc" class="wc"> WORKSTATION CHECKER |</a>
                <a href="ASSET_CHECKER?page=ac" class="ac"> ASSET CHECKER |</a>
                <a href="index.php?page=fdata" class="fdata"> FA DATA |</a>
                <a href="index.php?page=mc"><i class="mc"> MOVEMENT CHECKER |</a>
                <a href="index.php?page=emp" class="emp"> EMPLOYEES |</a>
              

                <a href="logout.php" class="move-right"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
            </div>
            <div id="content">
                <?php
                switch($page){
                            case 'fdata':
                                require_once 'fa-data/index.php';
                            break;
                }
                ?> 
    </div>
</div>
</body>
</html>

