

<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\css\bootstrap.min.css">
		<style>
			body {background-color:#778899;
			color:#E6E6FA;}
			.star{color:red}
			
			
		</style>
	</head>
			<body><br>
				<p><center><font size="9" color="#BDB76B" face="Script MT Bold"><u><b>Login<b></u></font></center></p>

				<center>
				<form method="post" action="validate.php">
					<table width="30%" border="0">
						<tr>
							<td>
									<center><label for="rollno/email"><span class="star">*</span> Roll No / Email:</label></center>
									
							</td>
						</tr>
						
						<tr>
							<td>
									<input type="text" class="form-control" name="username" placeholder="Username" required>
									
							</td>
						</tr>
						<tr>
							<td>
									<br><center><label for="exampleInputPassword1"><span class="star">*</span> Password:</label></center>
									
							</td>
						</tr>
						<tr>
							<td>
									<input type="password" class="form-control" name="password" placeholder="Password" required>
									
							</td>
						</tr>
						
						<tr>
							<td><br><span class="star">*</span>
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
							<td>
								<br><a href="Registration_Form.html" style="color:#00FF7F;">New Student Registration </a>
							</td>
						</tr>
						
						<tr>
							<td><br>
							<?php if(isset($_GET)){
								if(isset($_GET['msg'])){ ?>
									<center><p class="bg-warning" style="width:250px; font-size:1.4em; background-color:#778899; color:#FFFAF0;height:30px; width:100%"><?php  echo $_GET['msg']; ?></p></center>
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