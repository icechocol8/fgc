<?php

include_once 'fa_Data/fa_Data.php';

include 'config/config.php';


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

    <body1>
<div id="container">
    <div id="header"></div>
    <h2>ASSET TRACKER</h2>
    </div>
    <div id="wrapper">
            <div id="menu">
            <a href="main.php" class="home"><i class="fa-sharp fa-solid fa-house-chimney"></i> HOME</a> 
                <a href="index.php?page=mc"><i class="mc"></i> MOVEMENT CHECKER</a>
                <a href="index.php?page=wc" class="wc"><i class="fa-solid fa-calendar"></i> WORKSTATION CHECKER</a>
                <a href="ASSET_CHECKER?page=ac" class="ac"><i class="fa-solid fa-wallet"></i> ASSET CHECKER</a>
                <a href="FA_DATA/fdata.php" class="fdata"><i class="fa-solid fa-hand-holding-dollar"></i> FA DATA</a>
                <a href="logout.php" class="move-right"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
            </div>
            
    </div>
</div>
</body1>
</html>

