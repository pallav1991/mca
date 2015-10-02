<div class="container">
<center><h1>Student Activation</h1></center>

<div class="row">
 <div class="col-md-12">
 	
 	<ul class="nav nav-tabs">
	  <li class="active"><a data-toggle="tab" href="#fy">First Year</a></li>
	  <li><a data-toggle="tab" href="#sy">Secon Year</a></li>
	  <li><a data-toggle="tab" href="#ty">Thir Year</a></li>
	</ul>
 	
 	<div class="tab-content">
	  <div id="fy" class="tab-pane fade in active">
	    <h3>First Year</h3>
	    <table align="center" class="table">
 		<thead>
 		<tr align="center">
 			<th>Roll No.</th>
 			<th>Name</th>
 			<th>Year</th>
 			<th>Status</th>
 			<th>Action</th>
 		</tr>
 		</thead>
 		<tbody>
        <?php if(isset($message)){ echo $message;} ?>
                  
        <?php
                    
        $q="Select * from student where Appearing_Year='First Year' ORDER BY Roll_No ASC";

        $r=mysqli_query($dbc, $q);
		
        while($opened=mysqli_fetch_assoc($r)){?>
        	
        	 <form class="form-inline" action="index.php?page=studentact&id=<?php echo $opened['Roll_No']; ?>" method="post" role="form">
           
            <tr> 
            	<td>   
                <div class="form-group">
                <label class="sr-only" for="id">Roll No:</label>
                <input type="text" name="id" class="form-control" readonly value="<?php echo $opened['Roll_No']; ?>" id="id" placeholder="Roll_No" autocomplete="off">
                </div>
				</td>
				<td>
                 <div class="form-group">
                <label  class="sr-only" for="Name">Name:</label>
                <input type="text" name="Name" class="form-control" readonly value="<?php echo $opened['First_Name']." ".$opened['Last_Name']; ?>" id="Name" placeholder="Name" autocomplete="off">
                </div>
				</td>
				<td>
                <div class="form-group">
                <label class="sr-only" for="Year">Year:</label>
                <input type="text" name="Year" class="form-control" readonly value="<?php echo $opened['Appearing_Year']; ?>" id="Year" placeholder="Year" autocomplete="off">
                </div>
                </td>
                <td>
                <div class="form-group">
                <label class="sr-only" for="status">Status:</label>
                	<?php if ($opened['status']==0) { ?>
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>			
					<?php }
					else {
					 ?>
					 	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					 <?php } ?>
                </div>
                </td>
                <td>
                	<?php if ($opened['status']==0) { ?>
							<button type="submit" class="btn btn-default">Activate</button>
                			<input type="hidden" name="submitted" value="1"/>	
                			<input type="hidden" name="stat" value="1"/>		
					<?php }
					else {
					 ?>
					 		<button type="submit" class="btn btn-default">Dectivate</button>
                			<input type="hidden" name="submitted" value="1"/>	
                			<input type="hidden" name="stat" value="0"/>
					 	
					 <?php } ?>
                

                <input type="hidden" name="openedid" value="<?php echo $opened['Roll_No']; ?>"/>
				</td>
            </tr>
            </form>
        	

		<?php } ?>
		</tbody>
		</table>
	  </div>
	  
	  <div id="sy" class="tab-pane fade">
	    <h3>Second Year</h3>
	    <p><table align="center" class="table">
 		<thead>
 		<tr align="center">
 			<th>Roll No.</th>
 			<th>Name</th>
 			<th>Year</th>
 			<th>Status</th>
 			<th>Action</th>
 		</tr>
 		</thead>
 		<tbody>
        <?php if(isset($message)){ echo $message;} ?>
                  
        <?php
                    
        $q="Select * from student where Appearing_Year='Second Year' ORDER BY Roll_No ASC";

        $r=mysqli_query($dbc, $q);
		
        while($opened=mysqli_fetch_assoc($r)){?>
        	
        	 <form class="form-inline" action="index.php?page=studentact&id=<?php echo $opened['Roll_No']; ?>" method="post" role="form">
           
            <tr> 
            	<td>   
                <div class="form-group">
                <label class="sr-only" for="id">Roll No:</label>
                <input type="text" name="id" class="form-control" readonly value="<?php echo $opened['Roll_No']; ?>" id="id" placeholder="Roll_No" autocomplete="off">
                </div>
				</td>
				<td>
                 <div class="form-group">
                <label  class="sr-only" for="Name">Name:</label>
                <input type="text" name="Name" class="form-control" readonly value="<?php echo $opened['First_Name']." ".$opened['Last_Name']; ?>" id="Name" placeholder="Name" autocomplete="off">
                </div>
				</td>
				<td>
                <div class="form-group">
                <label class="sr-only" for="Year">Year:</label>
                <input type="text" name="Year" class="form-control" readonly value="<?php echo $opened['Appearing_Year']; ?>" id="Year" placeholder="Year" autocomplete="off">
                </div>
                </td>
                <td>
                <div class="form-group">
                <label class="sr-only" for="status">Status:</label>
                	<?php if ($opened['status']==0) { ?>
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>			
					<?php }
					else {
					 ?>
					 	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					 <?php } ?>
                </div>
                </td>
                <td>
                	<?php if ($opened['status']==0) { ?>
							<button type="submit" class="btn btn-default">Activate</button>
                			<input type="hidden" name="submitted" value="1"/>	
                			<input type="hidden" name="stat" value="1"/>		
					<?php }
					else {
					 ?>
					 		<button type="submit" class="btn btn-default">Dectivate</button>
                			<input type="hidden" name="submitted" value="1"/>	
                			<input type="hidden" name="stat" value="0"/>
					 	
					 <?php } ?>
                

                <input type="hidden" name="openedid" value="<?php echo $opened['Roll_No']; ?>"/>
				</td>
            </tr>
            </form>
        	

		<?php } ?>
		</tbody>
		</table></p>
	  </div>
	  
	  
	  <div id="ty" class="tab-pane fade">
	    <h3>Third Year</h3>
	    <p><table align="center" class="table">
 		<thead>
 		<tr align="center">
 			<th>Roll No.</th>
 			<th>Name</th>
 			<th>Year</th>
 			<th>Status</th>
 			<th>Action</th>
 		</tr>
 		</thead>
 		<tbody>
        <?php if(isset($message)){ echo $message;} ?>
                  
        <?php
                    
        $q="Select * from student where Appearing_Year='Third Year' ORDER BY Roll_No ASC";

        $r=mysqli_query($dbc, $q);
		
        while($opened=mysqli_fetch_assoc($r)){?>
        	
        	 <form class="form-inline" action="index.php?page=studentact&id=<?php echo $opened['Roll_No']; ?>" method="post" role="form">
           
            <tr> 
            	<td>   
                <div class="form-group">
                <label class="sr-only" for="id">Roll No:</label>
                <input type="text" name="id" class="form-control" readonly value="<?php echo $opened['Roll_No']; ?>" id="id" placeholder="Roll_No" autocomplete="off">
                </div>
				</td>
				<td>
                 <div class="form-group">
                <label  class="sr-only" for="Name">Name:</label>
                <input type="text" name="Name" class="form-control" readonly value="<?php echo $opened['First_Name']." ".$opened['Last_Name']; ?>" id="Name" placeholder="Name" autocomplete="off">
                </div>
				</td>
				<td>
                <div class="form-group">
                <label class="sr-only" for="Year">Year:</label>
                <input type="text" name="Year" class="form-control" readonly value="<?php echo $opened['Appearing_Year']; ?>" id="Year" placeholder="Year" autocomplete="off">
                </div>
                </td>
                <td>
                <div class="form-group">
                <label class="sr-only" for="status">Status:</label>
                	<?php if ($opened['status']==0) { ?>
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>			
					<?php }
					else {
					 ?>
					 	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					 <?php } ?>
                </div>
                </td>
                <td>
                	<?php if ($opened['status']==0) { ?>
							<button type="submit" class="btn btn-default">Activate</button>
                			<input type="hidden" name="submitted" value="1"/>	
                			<input type="hidden" name="stat" value="1"/>		
					<?php }
					else {
					 ?>
					 		<button type="submit" class="btn btn-default">Dectivate</button>
                			<input type="hidden" name="submitted" value="1"/>	
                			<input type="hidden" name="stat" value="0"/>
					 	
					 <?php } ?>
                

                <input type="hidden" name="openedid" value="<?php echo $opened['Roll_No']; ?>"/>
				</td>
            </tr>
            </form>
        	

		<?php } ?>
		</tbody>
		</table></p>
	  </div>
	</div>
 	
 	
	  </div>

</div>