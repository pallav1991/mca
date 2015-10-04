

<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\css\bootstrap.min.css">
		<style>
			body {background-color:#778899;
			color:#E6E6FA;}
			
		</style>
	</head>
			<body><br>
				<p><center><font size="9" color="#BDB76B" face="Script MT Bold"><u><b>Login<b></u></font></center></p>

				<center>
				<form method="post" action="validate.php">
					<table width="30%" border="0">
						<tr>
							<td>
									<center><label for="rollno/email">Roll No / Email:</label></center>
									
							</td>
						</tr>
						
						<tr>
							<td>
									<input type="text" class="form-control" name="username" placeholder="Username">
									
							</td>
						</tr>
						<tr>
							<td>
									<br><center><label for="exampleInputPassword1">Password:</label></center>
									
							</td>
						</tr>
						<tr>
							<td>
									<input type="password" class="form-control" name="password" placeholder="Password">
									
							</td>
						</tr>
						
						<tr>
							<td><br>
							<!--	<label class="radio-inline">
								  <input type="radio" name="studentlogin" id="student" value="option1"> Student Login 
								</label>
							
								<label class="radio-inline">
								  <input type="radio" name="teacherlogin" id="teacher" value="option2"> Teacher Login
								</label> -->
								
								<label class="radio-inline">
								  <input type="radio" name="RadioOptions" id="inlineRadio1" value="student"> Student 
								</label>
								<label class="radio-inline">
								  <input type="radio" name="RadioOptions" id="inlineRadio2" value="teacher"> Teacher
								</label>
							</td>
						</tr>
						
						<tr>
							<td><br>
								<button type="submit" class="btn btn-primary">Submit</button>			
							
								<button type="reset" class="btn btn-primary">Reset</button>
							</td>
						</tr>
						
						<tr>
							<td><br>
							<?php if(isset($_GET)){
								if(isset($_GET['msg'])){ ?>
									<center><p class="bg-warning" style="width:250px; background-color:#778899; height:25px;"><?php  echo $_GET['msg']; ?></p></center>
								<?php }
						}
						?>
							</td>
						</tr>
								
					</table>
					
				</form>
				</center>
			
			<body>
</html>