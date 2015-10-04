<html>
	<head>
		<title>STUDENT REGISTRATION</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\css\bootstrap.min.css">
		<style>
			body {background-color:#3c3c3c;
			color:white;}
			select{color:black}
			.star{color:red}
		</style>
	</head>
			<body><br>
			<div>
				<legend><center><font size="8" color="#B0E0E6" face="Comic Sans MS"><u><b>Notification<b></u></font></center></legend>
			</div>
			<center>
			
			<form name="registration" method="post" action="registry.php">
			
			<table width="75%" border="0" cellpadding="15" cellspacing="15">
					
					<tr>
						<td>
							<br><label for="notification"><span class="star">*</span>Notification:</label>
						</td>
						
					</tr>
					<tr>
						<td>
							<textarea type="text" class="form-control" rows="4" placeholder="Write Notification" name="notification" required> </textarea>
						</td>
					</tr>
				
					<tr>
						<td>
							<br><label for="year"><span class="star">*</span> Notification For:</label>
						</td>
					</tr>
					<tr>
						<td>
							<select type="text" class="form-control" name="n-year" style="" required>
								<option>First Year</option>
								<option>Second Year
								<option>Third Year
							</select>
							
						</td>
					</tr>
				
					<tr>
						<td>
							<br><input class="btn btn-primary " type="submit" value="Submit">
						</td>
						<td>
							<br><input class="btn btn-primary " type="reset" value="Reset">
						</td>
					</tr>

					
				</table>
				
		</form>
		
	</body>
</html>