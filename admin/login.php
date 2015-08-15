<?php 
    #start Session
    session_start();
    
    include('config/setup.php');
    
    if($_POST){
       
        
          $q="Select * from users Where email='$_POST[email]'and password=SHA1('$_POST[password]')";
        
        $r=mysqli_query($dbc, $q);
        if(mysqli_num_rows($r) == 1){
            $_SESSION['username']=$_POST['email'];
            header('LOCATION: index.php');
            
            
        }
    }
      
      
      
      
      ?>

<!DOCTYPE html>
<HTML>
    <head>
        <title>Admin Login</title>
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