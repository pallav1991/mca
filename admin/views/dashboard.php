
<h1>Dash Board</h1>
<hr />
<hr />
<a href="#" class="btn btn-default btn-lg" style:"padding:10px;"><span class="glyphicon glyphicon-user"  aria-hidden="true"></span><br/>Faculty<br/>Registration</a>
<a href="#" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><br/>Year Wise<br/>Grouping</a>
<hr />
<a href="?page=studentact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span><br/>Student<br/>Activation</a>
<hr />
<?php
 if ($handle = opendir('../uploads')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != "..")
	  {
          	$thelist .= '<a href="'.$file.'">'.$file.'</a><br/>';
          }
       }
  closedir($handle);
  }       
?>
<h3>Right click and click "save link as"</h3>
<P>List of files:</p>
<P><?=$thelist?></p>

