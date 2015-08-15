<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<!-- jquery css  -->

<link rel="stylesheet" href="../css/jquery-ui.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">


<!-- fontawesome css -->
<link rel="stylesheet" href="../css/font-awesome-4.4.0/font-awesome-4.4.0/css/font-awesome.min.css">
<!-- DropZone css  -->
<link rel="stylesheet" href="css/dropzone.css" />
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

<?php
//css

?>
<style>

html {
position: relative;
min-height: 100%;
}
body {
/* Margin bottom by footer height */
margin-bottom: 60px;
/* Move down content because we have a fixed navbar that is 50px tall */
padding-top: 50px;

}
.footer {
position: absolute;
bottom: 0;
width: 100%;
/* Set the fixed height of the footer here */
height: 60px;
background-color: #f5f5f5;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}

/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
  
  margin-right: auto;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}

/*
 *  Image Slide show
 */
.fadein { 
position:relative; height:332px; width:500px; margin:0 auto;
background: url("slideshow-bg.png") repeat-x scroll left top transparent;
padding: 10px;
 }
.fadein img { position:absolute; left:10px; top:10px; }

#btn-debug{
    position: absolute;
    right:5px;
}
#console-debug{
    position:absolute;
    top:50px;
    left:0px;
    width:30%;
    height: 500px;
    z-index: 2000;
    overflow-y:scroll;
    background-color:white;
    box-shadow: 2px 2px 5px #CCCCCC;
}
    #console-debug pre {
        
        
    }
    .dropdown-menu {

 display: compact; 

}

    .avatar-container{
        width:100px;
        height:100px;
        border-radius: 3px;
        background-size:cover;
        background-position:center center;
    }
    
    
  
</style>

