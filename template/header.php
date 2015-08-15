<?php include('config/setup.php');?>

<HTML>
    <head>
        <title><?php echo $page['title'] .' | '.$site_title;  ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php include('config/css.php');?>
        <?php include('config/js.php');?>
        
    </head>

    <body>
          
        <!--nevigation and slider-->
        <?php include(D_Temp.'/nevigation.php'); ?>