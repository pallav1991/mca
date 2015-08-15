<?php
error_reporting(0);
$current=" ";
define('D_Temp','template');
define('D_VIEW','views');

//database connection
include('config/connection.php');

#functions
include("functions/sandbox.php");
include("functions/data.php");
include("functions/template.php");

#Site Setup
$debug=data_setting_value($dbc,'debug-status');

$path=get_path();

$site_title="MCOE MCA";

if(!isset($path['call_parts'][0]) || $path['call_parts'][0]==''){

    //$path['call_parts'][0] = 'home';
    header('LOCATION: home');
}

# page Setup:
$page=data_post($dbc,$path['call_parts'][0]);
$view=data_post_type($dbc,$page['type']);

?>