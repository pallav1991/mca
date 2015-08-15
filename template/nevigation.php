<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 1px; margin-right: 0.25px;">
    

    <?php if($debug==1){ ?>      
        <button  id="btn-debug" class="btn btn-link" > <i class="fa fa-bug"></i></button> 
    <?php } ?>
    
    
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
       <a class="navbar-brand" href="admin/index.php">  <img class="img-responsive" style="max-width:150px; margin-top: -7px;" src="/mca/mca/admin/images/newlogo.png"> </a>
    </div>
    
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">

            <?php nav_main($dbc, $path);?>

            <!--<li><a href="#">GALARY</a></li>
            <li><a href="#">CONTACT US </a></li>-->
        </ul>
    </div>
</nav>

