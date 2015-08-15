<?php

define('D_Temp','template');

error_reporting(0);


//database connection
include('../config/connection.php');



//functions
include("functions/data.php");
include("functions/template.php");
include("functions/sandbox.php");

$debug=data_setting_value($dbc,'debug-status');

$site_title="MCOE MCA";

if(isset($_GET['page'])){

    $page = $_GET['page'];
}else{

    $page = 'dashboard';
}
include("config/query.php");



$user= data_user($dbc,$_SESSION['username']);


?>