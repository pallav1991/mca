<?php 
    #start Session
   
    session_start();
       
    include('config/setup.php');
  
    if($_POST){
       
        $q="Select * from student Where Email='$_POST[email]'and Password=md5('$_POST[password]')";
        $dbc=mysqli_connect("localhost","root","root","stud_teach") or die("Error:.." .mysqli_connect_error);
        $r=mysqli_query($dbc, $q);
        if(mysqli_num_rows($r) == 1){
            $_SESSION['username']=$_POST['email'];
            header('LOCATION: index.php');
            //echo "success".$_SESSION['username'];
        }
    }
      
      
      
      ?>

<!DOCTYPE html>
<HTML>
    <head>
        <title>Student/Teacher Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php include('config/css.php');?>
        <?php include('config/js.php');?>
        
    </head>

    <body>
          
        <!--nevigation and slider-->
        <?php // include(D_Temp.'/nevigation.php'); ?>
            
        
        <div class="container-fluid">
           
            <div class="row">
              
                <div class="col-sm-4 col-md-offset-4">
            
                    <div class="panel panel-info">

                        <div class="panel-heading"><strong>LOGIN</strong></div>
                        <div class="panel-body">
                            <form action="login.php" method="post" role="form">

                              <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                              </div>

                              <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                              </div>
                              
                              <div class="form-group">
                              	<span class="star">*</span>
								<label class="radio-inline">
								  <input type="radio" name="RadioOptions" id="inlineRadio1" value="student"> Student 
								</label>
								<label class="radio-inline">
								  <input type="radio" name="RadioOptions" id="inlineRadio2" value="teacher"> Teacher
								</label>
                              </div>
              
                <!--
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Check me out
                                </label>
                              </div>
                -->
                              <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                     </div>
                  </div>
                </div>
              

            <?php //include(D_Temp.'/footer.php'); ?>
        </div>
        <?php //if( $debug == 1 ){ include('widgets/debug.php'); } ?>
    </body>

</HTML>