<?php

switch($page){
    
    case 'dashboard':
        
        break;

    case 'pages':
        
            if(isset($_POST['submitted']) == 1){
            
                $title=mysqli_real_escape_string($dbc,$_POST['title']);
                $label=mysqli_real_escape_string($dbc,$_POST['label']);
                $header=mysqli_real_escape_string($dbc,$_POST['header']);
                $body=mysqli_real_escape_string($dbc,$_POST['body']);
            
				if (isset($_GET['id'])) {
				
					if($_GET['id'] != ' '){
	                    $action='Update';
	                    $q="UPDATE posts SET user = $_POST[user], slug='$_POST[slug]', title='$title', label= '$label', header='$header', body='$body' WHERE ID=$_GET[id]";
	                }else{
	                    $action='Added';
	                    $q="INSERT INTO posts (type, user,slug,title,label,header,body) Values(1, $_POST[user],'$_POST[slug]','$title','$label','$header','$body')";
						$n="INSERT INTO navigation (label,url,target,position,status) Values('$label','$_POST[slug]','',1,1)";
	                }
					
				} else {
					
				}
				
                
            
            
                $r=mysqli_query($dbc,$q);
                if($r){
                    $message = '<p class="bg-success"> Page was '. $action .'</p>';
                }else{
                
                    $message = '<p class="bg-danger"> Page Counld not be '. $action .' because. </p>'.mysqli_error($dbc);
                    $message .= '<p class="bg-warning">'.$q.'</p>';
                }
				$r=mysqli_query($dbc,$n);
                if($r){
                    $message = '<p class="bg-success"> Nav was '. $action .'</p>';
                }else{
                
                    $message = '<p class="bg-danger"> Nav Counld not be '. $action .' because. </p>'.mysqli_error($dbc);
                    $message .= '<p class="bg-warning">'.$n.'</p>';
                }
            
            }
            
            if(isset($_GET['id'])){ $opened=data_post($dbc,$_GET['id']); }

        
        break;

    case 'users':
        
        if(isset($_POST['submitted']) == 1){
            
            $first=mysqli_real_escape_string($dbc,$_POST['first']);
            $last=mysqli_real_escape_string($dbc,$_POST['last']);
           
            if($_POST['password'] != ''){
                
                if($_POST['password'] == $_POST['passwordv']){
                    
                    $password = "password=SHA1('$POST[password]'),";
                    $verify = true;
                }
                else{
                
                    $verify = false;
                    
                }
            
            }else{
            
                $verify = false;
                
            }
            
            
            if(isset($_GET['id']) != ''){
                $action='Update';
                $q="UPDATE users SET first='$first', last= '$last', email='$_POST[email]', $password status=$_POST[status] WHERE ID=$_GET[id]";
                $r=mysqli_query($dbc,$q);  
            }else{
                $action='Added';
                $q="INSERT INTO users (first,last,email,password,status) Values('$first','$last','$_POST[email]',SHA1('$POST[password]'),$_POST[status])";
                if($verify == true){
                    $r=mysqli_query($dbc,$q);  
                }
                
                
            }
            
            
            
            if($r){
                $message = '<p class="alert alert-success"> user was '. $action .'</p>';
            }else{
                
                $message = '<p class="alert alert-danger"> user was not '. $action .' because. </p>'.mysqli_error($dbc);
                if($verify == false){
                    
                    $message .= '<p class="alert alert-danger">Passwords Donot Match</p>';
                
                }
                $message .= '<p class="alert alert-warning"> Query: '.$q.'</p>';
            }
            
        }
        
        if(isset($_GET['id'])){ $opened=data_user($dbc,$_GET['id']); }


        
        break;

   
    case 'settings':
        
        
        if(isset($_POST['submitted']) == 1){
            
            $label=mysqli_real_escape_string($dbc,$_POST['label']);
            $value=mysqli_real_escape_string($dbc,$_POST['value']);
            
            if(isset($_GET['id']) != ''){
                $action='Update';
                $q="UPDATE settings SET id='$_POST[id]', label= '$label', value='$value' WHERE ID='$_POST[openedid]'";
                $r=mysqli_query($dbc,$q);  
            }
            
            
            
            if($r){
                $message = '<p class="alert alert-success"> Setting was '. $action .'</p>';
            }else{
                
                $message = '<p class="alert alert-danger"> Setting was not '. $action .' because. </p>'.mysqli_error($dbc);
                $message .= '<p class="alert alert-warning"> Query: '.$q.'</p>';
            }
            
        }
        


        
        break;
		
		case 'studentact':
        
        
        if(isset($_POST['submitted']) == 1){
            
            $value=mysqli_real_escape_string($dbc,$_POST['stat']);
            
            if(isset($_GET['id']) != ''){
                if ($value==0) {
				$action="Deactivated";
			} else {
				$action="Activated";
			}
                $q="UPDATE student SET status=$value WHERE Roll_No='$_POST[openedid]'";
                $r=mysqli_query($dbc,$q);  
            }
            
            
            
            if($r){
                $message = '<p class="alert alert-success"> Student '.$_POST['Name'].' was '.$action.'</p>';
            }else{
                
                $message = '<p class="alert alert-danger"> Setting'. $_POST['Name'] .' was not '. $action .' because. </p>'.mysqli_error($dbc);
                $message .= '<p class="alert alert-warning"> Query: '.$q.'</p>';
            }
            
        }
        


        
        break;

    case 'sidebar':
        if(isset($_POST['submitted']) == 1){
            
                $title=mysqli_real_escape_string($dbc,$_POST['title']);
                $master=mysqli_real_escape_string($dbc,$_POST['master']);
                $body=mysqli_real_escape_string($dbc,$_POST['body']);
				$pat=mysqli_real_escape_string($dbc,$_POST['pathof']);
              
				if($_POST['master']!= null){
					$result = mysqli_query($dbc,"SELECT a.id,a.master, a.title, a.body, a.path, Deriv1.Count FROM  sidebar a LEFT OUTER JOIN (SELECT parent_id, COUNT( * ) AS Count FROM  sidebar GROUP BY parent_id)Deriv1 ON a.id = Deriv1.parent_id WHERE a.parent_id ='". $master ."'")or die('Invalid query is : ' .mysql_error());

				while ($row = $result->fetch_assoc()/*mysql_fetch_assoc($result)*/) {
					$pid=$row['id'];
				}
				}else {
					$pid=0;
				}
				$pid=mysqli_real_escape_string($dbc,$pid);
            
                if(isset($_POST['id']) != ''){
                    $action='Update';
                    $q="UPDATE sidebar SET  title='$title', master= '$master', body='$body', parent_id= $pid, path= '$pat' WHERE id =$_POST[id]";
                }else{
                    $action='Added';
                    $q="INSERT INTO sidebar (title, master,body,parent_id,path) Values('$title','$master','$body',$pid,'$pat')";
                
                }
            
            
                $r=mysqli_query($dbc,$q);
                if($r){
                    $message = '<p class="bg-success"> entery was '. $action .'</p>';
                }else{
                
                    $message = '<p class="bg-danger"> Entry Counld not be '. $action .' because. </p>'.mysqli_error($dbc);
                    $message .= '<p class="bg-warning">'.$q.'</p>';
                }
            
            }
            
            if(isset($_GET['id'])){ $opened=data_side($dbc,$_GET['id']); }

        
        break;    
        


    default:
        
        break;

}
?>