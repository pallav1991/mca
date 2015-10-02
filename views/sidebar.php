
              
              
<?php
// include your database connection file here (if available)
// for example require_once("../../db.php");
//include_once('dbconn.php');

function display_children($parent, $level,$id) {
	$dbc=mysqli_connect("localhost","root","root","mca") or die("Error:.." .mysqli_connect_error);
    $result = mysqli_query($dbc,"SELECT a.id, a.title, a.body, Deriv1.Count FROM  sidebar a LEFT OUTER JOIN (SELECT parent_id, COUNT( * ) AS Count FROM  sidebar GROUP BY parent_id)Deriv1 ON a.id = Deriv1.parent_id WHERE a.parent_id =".$parent."")or die('Invalid query: ' .mysql_error());

	
	echo "<ul ". $id ." class='nav nav-sidebar'>";
    while ($row = $result->fetch_assoc()/*mysql_fetch_assoc($result)*/) {
        if ($row['Count'] > 0) {
            echo "<li><a href='#' class='side-btn'>" . $row['title'] . "</a>";
            display_children($row['id'], $level + 1," ");
            echo "</li>";
        } elseif ($row['Count']==0 || $row['Count']==NULL) {
            echo "<li><a href='#' class='side-btn'>" . $row['title'] . "</a></li>";
        } else;
    }
    echo "</ul>";
}

?>


<!-- Function call is here -->
<div class="col-sm-3 col-md-2  border-right vdivide" id="sidebar" role="navigation">
   <div id="listContainer"> 
        <?php
         display_children(0,1,"id='expList'");
        ?>
    </div>
</div>
<!--
<div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
    <ul class="nav nav-sidebar">
        <li ><a href="#" class="side-btn"  >Overview <span class="sr-only">(current)</span> </a></li>
        <li><a href="#" class="side-btn" >HOD Profile</a></li>
        <li><a href="#" class="side-btn" >Faculty Details</a></li>
        <li><a href="#" class="side-btn" >Research</a></li>
        <li>
            <a  href="#" class="side-btn">Curriculum</a>
            <ul class="nav nav-sidebar">
                        <li><a href="#" class="side-btn" >Time Table</a></li>
                        <li><a href="#" class="side-btn" >Academic Calendar</a></li>
            </ul>
        </li>
        <li><a href="#" class="side-btn">LABS</a></li>
        <li><a href="#" class="side-btn">Achivements</a></li>
        <li><a href="#" class="side-btn">Activities</a></li>
    </ul>
</div>
                
-->