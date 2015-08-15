

<?php
#session start
session_start();
if(!isset($_SESSION['username'])){
    header('LOCATION: login.php');
}


?>

<?php include('config/setup.php');?>

<!DOCTYPE html>
<HTML>
    <head>
        <title><?php echo $page['title'] .' | '.$site_title;  ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php include('config/css.php');?>
        <?php include('config/js.php');?>
        
    </head>

    <body>
          
        <!--nevigation-->
        <?php include(D_Temp.'/nevigation.php'); ?>
            
        
        <div class="container-fluid">