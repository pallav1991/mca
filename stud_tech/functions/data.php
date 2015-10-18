<?php

function data_setting_value($id){
    $dbc1=mysqli_connect("localhost","root","root","MCA") or die("Error:.." .mysqli_connect_error);
    $q="SELECT * From settings where id= '$id'";
    $r=mysqli_query($dbc1,$q);
    $data=mysqli_fetch_assoc($r);
    mysqli_close($dbc1);
    return $data['value'];
	
}

function data_user($dbc, $id){

    if(is_numeric($id)){
        $cond="Where id='$id'";
    }else{
        $cond="Where Email='$id'";
    }
    $q="Select * from student $cond";
    $r=mysqli_query($dbc, $q);
    $data=mysqli_fetch_assoc($r);
    $data['fullname']=$data['First_Name'].' '.$data['Last_Name'];
    $data['fullname_rev']=$data['Last_Name'].', '.$data['First_Name'];
    return $data;

}
?>