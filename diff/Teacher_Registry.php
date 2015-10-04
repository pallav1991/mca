<?php

	$conn = @mysql_connect('localhost','root','')or die("Couldn't connect to server");
	$db =mysql_select_db("MCA_DB",$conn);
	
	$Fname=$_POST['FnameInput'];
	$Mname=$_POST['MnameInput'];
	$Lname=$_POST['LnameInput'];
	$DOB=$_POST['DOB'];
	$Gender=$_POST['gender'];
	$Email=$_POST['email'];
	$Designation=$_POST['designation'];
	$Password=$_POST['password'];
	$P_Add=$_POST['p-add'];
	$C_Add=$_POST['c-add'];
	$State=$_POST['state'];
	$Contact=$_POST['contact'];
	
	
		$query="INSERT INTO teacher_details (First_Name,Middle_Name,Last_Name,DOB,Gender,Designation,Email,Password,P_Add,C_Add,State,Contact) VALUES('$Fname','$Mname','$Lname','$DOB','$Gender','$Designation','$Email','$Password','$P_Add','$C_Add','$State',$Contact)";
	
		$result=mysql_query($query);
		if($result)
		{
			header('Location: Teacher_Registration.html?msg=success');
		}
		else
		{
			 header('Location: Teacher_Registration.html?msg=Unsuccess'');
		}
			
	mysql_close($conn);
	
?>