<?php

include('../../config/connection.php');

$id= $_GET['id'];

$q="DELETE FROM sidebar where id= $id";
$r=mysqli_query($dbc,$q);
if($r){
    echo 'page deleted';
}else{

    echo 'page not deleted <br>';
    echo $q.'<br>';
    echo mysqli_error($dbc);
}


?>