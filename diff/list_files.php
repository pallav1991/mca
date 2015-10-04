
<html>
	<head>
	<title>Download</title>
	<style>
		body{
			background: rgba(255,255,255,1);
			background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(250,250,250,1) 10%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%);
			background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(10%, rgba(250,250,250,1)), color-stop(51%, rgba(237,237,237,1)), color-stop(100%, rgba(255,255,255,1)));
			background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(250,250,250,1) 10%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%);
			background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(250,250,250,1) 10%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%);
			background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(250,250,250,1) 10%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%);
			background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(250,250,250,1) 10%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff', GradientType=1 );
		}
	</style>
	</head>
	<body>
			<br />
			<div class="panel panel-default" style="max-width: 400px; -webkit-box-shadow: 10px 10px 33px 0px rgba(0,0,0,0.25); -moz-box-shadow: 10px 10px 33px 0px rgba(0,0,0,0.25); box-shadow: 10px 10px 33px 0px rgba(0,0,0,0.25);">
			<table border="1" class="table table-bordered" id="table1" cellpadding="0" cellspacing="0">
				<div class="panel-heading">
					Downloads From <?php if(isset($_GET['tname'])){ echo "Faculty";}else{echo "Students";} ?>
				</div>
				<div class="panel-body">
					<p>Click to Download</p>
				</div>
				<?php
				include("connection.php");
				if($_GET){
						if(isset($_GET['tname'])){
							$condition="select b.id,b.name,a.First_Name,b.fyear from teacher_details a,upload b,student c where a.Email=b.uname and b.fyear=c.Appearing_Year and b.sby='".$_GET['sby']."' and a.First_Name='".$_GET['tname']."'";
						}else{$condition="select * from upload where sby='".$_GET['sby']."' order by id desc";}
				}else{$condition="select * from upload order by id desc";}

				$select=mysql_query($condition);
				
				while($row1=mysql_fetch_array($select)){
					$name=$row1['name'];
					?>
					<tr align="center">
						<td>
							<img src="tick.png" width="14" height="14"><a href="download.php?filename=<?php echo $name;?>"><?php echo $name ;?></a>
						</td>
					</tr>
				<?php }?>
				</div>
		</table>
		</div>
	</body>
</html>