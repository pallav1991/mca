<?php

function data_setting_value($dbc, $id){
    
    $q="SELECT * From settings where id= '$id'";
    $r=mysqli_query($dbc,$q);
    $data=mysqli_fetch_assoc($r);
    return $data['value'];
}

function data_user($dbc, $id){

    if(is_numeric($id)){
        $cond="Where id='$id'";
    }else{
        $cond="Where email='$id'";
    }
    $q="Select * from users $cond";
    $r=mysqli_query($dbc, $q);
    $data=mysqli_fetch_assoc($r);
    $data['fullname']=$data['first'].' '.$data['last'];
    $data['fullname_rev']=$data['last'].', '.$data['first'];
    return $data;

}

function data_post($dbc, $id){
$q="SELECT * FROM posts WHERE ID= $id";
$r=mysqli_query($dbc,$q);
$data=mysqli_fetch_assoc($r);

$data['body_nohtml'] = strip_tags($data['body']);

if($data['body'] == $data['body_nohtml']) {
    
    $data['body_formatted'] = '<p>'.$data['body'].'</p>';
    
} else {
    
    $data['body_formatted'] = $data['body'];
    
}

return $data;
}


function data_side($dbc, $id){
$q="SELECT * FROM sidebar WHERE id= $id";
$r=mysqli_query($dbc,$q);
$data=mysqli_fetch_assoc($r);

$data['body_nohtml'] = strip_tags($data['body']);

if($data['body'] == $data['body_nohtml']) {
    
    $data['body_formatted'] = '<p>'.$data['body'].'</p>';
    
} else {
    
    $data['body_formatted'] = $data['body'];
    
}

return $data;
}
?>