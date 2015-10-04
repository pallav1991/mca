<?php
	$conn =@mysql_connect('localhost','root','')or die("Couldn't connect to server");
	$db =mysql_select_db("MCA_DB",$conn);
	$username = $_POST['username'];
	$password = $_POST['password'];
	@$radio = $_POST['RadioOptions'];
	
	session_start();
	
	if(isset($radio)&& $radio=="student")
	{
		$query="SELECT Roll_No,Email,Password FROM first_year WHERE Roll_No = $username OR Email = $username";
		$result=mysql_query($query);
		if($result)
		{
			$row = mysql_fetch_array($result);
			if($row["Roll_No"]==$username && $row["Password"]==$password)
			{
				
				$_SESSION['name'] = $username;
				header("Location:StudentHome.php");
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
		$query="SELECT Email, Password FROM teacher_details WHERE Email = $username";
		$result=mysql_query($query);
		if($result)
		{
			$row = mysql_fetch_array($result);
			if($row["Email"]==$username && $row["Password"]==$password)
			{
				$_SESSION['name'] = $username;
				header("Location:Teacher_Home.php");
			}
			else
			{
				header('Location: Login.php?msg=Username or Password is wrong');
			}
		}
	}
	else
	{
		header('Location: Login.php?msg=Username or Password is wrong');
	}
	mysql_close($conn);
?>