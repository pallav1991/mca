<?php

	$conn = @mysql_connect('localhost','root','')or die("Couldn't connect to server");
	$db =mysql_select_db("MCA_DB",$conn);
	
	$Fname=$_POST['FnameInput'];
	$Mname=$_POST['MnameInput'];
	$Lname=$_POST['LnameInput'];
	$DOB=$_POST['DOB'];
	$Gender=$_POST['gender'];
	$Email=$_POST['email'];
	$A_Year=$_POST['A-year'];
	$Rollno=$_POST['rollno'];
	$Password=$_POST['password'];
	$P_Add=$_POST['p-add'];
	$C_Add=$_POST['c-add'];
	$State=$_POST['state'];
	$Contact=$_POST['contact'];
	
	if($A_Year=="First Year")
	{
		$query="INSERT INTO first_year VALUES('$Fname','$Mname','$Lname','$DOB','$Gender','$Email','$A_Year',$Rollno,'$Password','$P_Add','$C_Add','$State',$Contact)";
	}
	
	else if($A_Year=="Second Year")
	{
		$query="INSERT INTO second_year VALUES('$Fname','$Mname','$Lname','$DOB','$Gender','$Email','$A_Year',$Rollno,'$Password','$P_Add','$C_Add','$State',$Contact)";
	}
	
	else if($A_Year=="Third Year")
	{
		$query="INSERT INTO third_year VALUES('$Fname','$Mname','$Lname','$DOB','$Gender','$Email','$A_Year',$Rollno,'$Password','$P_Add','$C_Add','$State',$Contact)";
	}
	
		$result=mysql_query($query);
		if($result)
		{
			echo "<script type='text/javascript'>alert('Registration success')</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Registration failed. Try again')</script>";	
		}
			
	mysql_close($conn);
?>