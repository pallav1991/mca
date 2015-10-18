<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 1px; margin-right: 0.25px;">
    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           <!-- <a class="navbar-brand" href="http://www.moderncoe.edu.in">Modern College</a>-->
        </div>
    
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">


                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=upload">Upload</a></li>
                <li><a href="?page=Download">Download</a></li>
            
            </ul>
            
            <div class="pull-right">
                <ul class="nav navbar-nav">

                    <li>
                        <?php if($debug==1){ ?>      
                        <button id="btn-debug" type="button" class="btn btn-link navbar-btn"><i class="fa fa-bug"></i></button>
                        <?php } ?>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $user['fullname']; ?> <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="logout.php">LOGOUT</a></li>
                      </ul>
                    </li>
                
                </ul>
            </div>
        </div>
</nav>

