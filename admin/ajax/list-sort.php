<?php

include('../../config/connection.php');

$list= $_GET['list'];

foreach($list as $position => $id){

    $q="UPDATE navigation  SET  position =$position  WHERE id=$id";
    $r=mysqli_query($dbc,$q);
    if($r){
        echo 'page deleted';
    }else{

        echo 'page not deleted <br>';
        echo $q.'<br>';
        echo mysqli_error($dbc);
    }


}


?>