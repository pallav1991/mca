
<html>
	<head>
	<title>Download</title>
	</head>
	<body>
			<br />
			<table border="1" class="table table-bordered" align="center" id="table1" cellpadding="0" cellspacing="0">
				<tr><td align="center">Click to Download</td></tr>
				<?php
				include("connection.php");
				if($_GET){
						if(isset($_GET['tname'])){
							$condition="select b.id,b.name,a.First_Name,b.fyear from teacher_details a,upload b,student c where a.Email=b.uname and b.fyear=c.Appearing_Year and b.sby='".$_GET['sby']."' and a.First_Name='".$_GET['tname']."'";
						}else{$condition="select * from upload where sby='".$_GET['sby']."' order by id desc";}
				}else{$condition="select * from upload order by id desc";}
				
				echo $condition;
				
				$select=mysql_query($condition);
				
				while($row1=mysql_fetch_array($select)){
					$name=$row1['name'];
					?>
					<tr>
						<td width="300">
							<img src="tick.png" width="14" height="14"><a href="download.php?filename=<?php echo $name;?>"><?php echo $name ;?></a>
						</td>
					</tr>
				<?php }?>
		</table>
	</body>
</html>