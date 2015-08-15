<?php

include('../../config/connection.php');


$label=mysqli_real_escape_string($dbc,$_POST['label']);
$url=mysqli_real_escape_string($dbc,$_POST['url']);

$q="UPDATE navigation SET id='$_POST[id]', label= '$label', url='$url', status=$_POST[status] WHERE ID='$_POST[openedid]'";
$r=mysqli_query($dbc,$q);  
if($r){
    echo 'Saved<br>';
}else{

    echo 'No Success <br>';
    echo $q.'<br>';
    echo mysqli_error($dbc);
}


?>