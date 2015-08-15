<?php

function nav_main($dbc, $pageid){
$q = "SELECT * FROM pages";
$r= mysqli_query($dbc,$q);
while($nav = mysqli_fetch_assoc($r)){?>
    <li<?php if($pageid==$nav['ID']){ echo ' class="active"'; } ?>><a href="?page=<?php echo $nav['ID'] ?>"><?php echo $nav['label'] ?></a></li>
<?php }
}
?>