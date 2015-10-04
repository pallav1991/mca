			
		<br />
		<br />
		<br />
		<center>
		<div class="panel panel-default" style="max-width: 500px; -webkit-box-shadow: 10px 10px 33px 0px rgba(0,0,0,0.25); -moz-box-shadow: 10px 10px 33px 0px rgba(0,0,0,0.25); box-shadow: 10px 10px 33px 0px rgba(0,0,0,0.25);">
		<div class="panel-heading">
			<h3><p align="center">Files Upload</p></h3> 
		</div>
		<div class="panel-body"> File Uploading Selecter</div>
		<form enctype="multipart/form-data" action="upload1.php" id="form" name="form" method="post" target="hiddenFrame">

			<table class="table table-bordered" align="center" border="0" cellspacing="0" cellpadding="5" id="table" style="color:#000000 ">
				<tr align="center">
					
					<th align="center" style="color:#000000 ">Chosse Files</th>
					<td >
						<label for="photo"></label><input type="file" name="photo" id="photo" />
					</td>
				</tr>
				<tr align="center" style="color:#000000 ">
					<th colspan="2" scope="row" align="center">
						<select id="forsem" name="forsem">
						
							<option value="First Year">Year 1</option>
							<option value="Second Year">Year 2</option>
							<option value="Third Year">year 3</option>
						
						</select>
					</th>
				</tr>
				<tr align="center">
					<th colspan="2" scope="row" align="center">
					<input type="submit" name="submit" id="submit" value="Submit" />
					</th>
				</tr>
			</table>
			
		</form>
			<br />
		</center>
			<iframe name="hiddenFrame" class="hide">
				pallav
			</iframe>
