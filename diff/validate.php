<?php
	include("connection.php");
	$conn =$db;
	$db =mysql_select_db("mca",$conn);
	$username = $_POST['username'];
	$password = $_POST['password'];
	@$radio = $_POST['RadioOptions'];
	
	session_start();
	
	if(isset($radio)&& $radio=="student")
	{
		
		$query="SELECT Roll_No,Email,Password,status FROM student WHERE Roll_No = $username OR Email = $username";
		$result=mysql_query($query);
		if($result)
		{
			$row = mysql_fetch_array($result);
			if($row["Roll_No"]==$username && $row["Password"]==$password)
			{
				if($row["status"]==1){
					$_SESSION['name'] = $username;
					header("Location:StudentHome.php");
				}elseif($row['status']==0){
					echo "Wait for Admin To Activate you";
				}
			}
			else
			{
				 echo "Sorry, your credentials are not valid, Please try again.";
				 header('Location: Login.php?msg=Username or Password is wrong');
			}
		}
		
			
	}
	else if(isset($radio) && $radio=="teacher")
	{
	
		if(is_numeric($username))
		{
			header('Location: Login.php?msg=Please select correct stream Student or Teacher');
		}
		else
		{
		$query="SELECT Email,Password FROM teacher_details WHERE Email = '$username'";
		$result=mysql_query($query);
		print_r($result);
		if($result)
			echo "Success";
		else
			echo "Failed"; 
		if($result)
		{
			$row = mysql_fetch_array($result);
			if($row["Password"]==$password)
			{
				$_SESSION['name'] = $username;
				header("Location:TeacherMain.php");
				
			}
			else
			{
				header('Location: Login.php?msg=Username or Password is wrong');
			}
		}
		}
	}
	else
	{
		header('Location: Login.php?msg=Please select stream Student or Teacher');
	}

?>