<?php
				session_start();
				if(isset($_SESSION['name'])){
					$uname=$_SESSION['name'];
					if(!is_numeric($uname)){
						$sby="teacher";
					}else{
						$sby="Student";
					}
				}else{
					$uname=" ";
					$sby=" ";
				}
				$conn=mysqli_connect("localhost","root","root","mca") or die(mysqli_error());
				if(isset($_POST['submit'])!=""){
					$name=$_FILES['photo']['name'];
					$size=$_FILES['photo']['size'];
					$type=$_FILES['photo']['type'];
					$temp=$_FILES['photo']['tmp_name'];
					$forsem=$_POST['forsem'];
					move_uploaded_file($temp,"files/".$name);
					$insert=mysqli_query($conn,"insert into upload(name, uname, fyear, sby)VALUES('$name', '$uname', '$forsem', '$sby')");
					if($insert){
						echo "successfull";
					}
					else{
						echo "Unsuccessfull";
						die(mysqli_error($conn));
					}
				}
			?>