<?php

function data_setting_value($dbc, $id){
    
    $q="SELECT * From settings where id= '$id'";
    $r=mysqli_query($dbc,$q);
    $data=mysqli_fetch_assoc($r);
    return $data['value'];
}


function data_post_type($dbc,$id){


    $q="SELECT * FROM post_types where id='$id'";
    $r=mysqli_query($dbc,$q);
    $data=mysqli_fetch_assoc($r);
    return $data;

}

function GenerateMenu($dbc, $id){

    if($id==" ")
	{
		$condin=" ";
	}
    else
	{
		$condin="where master= '$id'";
	}
	
    
    $q="SELECT * From side $condin";
    $r=mysqli_query($dbc,$q);
    $data=mysqli_fetch_assoc($r);
    $condin=" ";
    $output = "<ul>\n";
    foreach($data as $val){
	if ($val[child]=="yes") {
    		        $output .= "<li>\n" . GenerateMenu($dbc,$val['title']) . "</li>\n";
    	        }
    	        else {
    		        $output .= "<li>" . $val . "</li>\n";
    	        }
	}
            $output .= "</ul>\n";
            return $output;
 
}


function data_post($dbc, $id){
    
    if(is_numeric($id)){
        $cond="WHERE ID= $id";
    }else{
    
        $cond="WHERE slug= '$id'";
        
    }
    
    $q="SELECT * FROM posts $cond";
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