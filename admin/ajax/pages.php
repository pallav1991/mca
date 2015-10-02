<?php

include('../../config/connection.php');

$id= $_GET['id'];

$q="DELETE FROM posts where ID= $id";
$qn="select label from posts where ID= $id";
$r=mysqli_query($dbc,$q);
if($r){
    echo 'page deleted';
}else{

    echo 'page not deleted <br>';
    echo $q.'<br>';
    echo mysqli_error($dbc);
}
$rn=mysqli_query($dbc,$qn);

if($rn){
    echo 'page deleted';
}else{

    echo 'page not deleted <br>';
    echo $qn.'<br>';
    echo mysqli_error($dbc);
}
$row=mysqli_fetch_assoc($rn);
echo $row['label'];
$qn="DELETE FROM navigation where label='". $row['label'] ."'";
$rn=mysqli_query($dbc,$qn);

if($rn){
    echo 'page deleted';
}else{

    echo 'page not deleted <br>';
    echo $qn.'<br>';
    echo mysqli_error($dbc);
}

?>