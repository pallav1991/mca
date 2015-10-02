<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<!-- jquery css  -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<!-- fontawesome css -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
        background-color: #DCDCDC;
        /* Move down content because we have a fixed navbar that is 50px tall */
        padding-top: 50px;
    }
    
    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        /* Set the fixed height of the footer here */
        height: 60px;
      	background-image:-webkit-linear-gradient(top,#3c3c3c 0,#222 100%);
    	background-image:-o-linear-gradient(top,#3c3c3c 0,#222 100%);
    	background-image:-webkit-gradient(linear,left top,left bottom,from(#3c3c3c),to(#222));
    	background-image:linear-gradient(to bottom,#3c3c3c 0,#222 100%);
    	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3c3c3c', endColorstr='#ff222222', GradientType=0);
    	filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);
    	background-repeat:repeat-x;
    }

    /*
     * Sidebar
     */

    /* Hide for mobile, show later */
    .sidebar {
        display: none;
    }
    @media (min-width: 768px) {

      .navbar-fixed-top .navbar-collapse {
            max-height: 50px;
        }
        
      .navbar-nav>li>a {
      line-height: 20px;
        }
        
        .container-fluid {
            margin-top: 10px;
        }
        
      .sidebar {
        position: fixed;
        height:100%;
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
    .navbar-nav > li > a {padding-top:20px !important; padding-bottom:25px !important;padding-right:30px} 
    .navbar {min-height:65px !important}

    /* Sidebar navigation */
   
   	.row.vdivide [class*='col-']:not(:last-child):after {
	  background: #e0e0e0;
	  width: 1px;
	  content: "";
	  display:block;
	  position: absolute;
	  top:0;
	  bottom: 0;
	  right: 0;
	  min-height: 70px;
	}
   
    .nav-sidebar {
    	padding-top:10px;
    	background-image:-webkit-linear-gradient(top,#3c3c3c 0,#222 100%);
    	background-image:-o-linear-gradient(top,#3c3c3c 0,#222 100%);
    	background-image:-webkit-gradient(linear,left top,left bottom,from(#3c3c3c),to(#222));
    	background-image:linear-gradient(to bottom,#3c3c3c 0,#222 100%);
    	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3c3c3c', endColorstr='#ff222222', GradientType=0);
    	filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);
    	background-repeat:repeat-x;
        margin-right: -21px; /* 20px padding + 1px border */
        margin-bottom: 10px;
        margin-left: -10px;
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

    #btn-debug{
        position: relative;

    }
    
    #console-debug{
        position:absolute;
        top:50px;
        left:0px;
        width:30%;
        height: 67%;
        z-index: 2000;
        overflow-y:scroll;
        overflow-x:scroll;
        background-color:white;
        box-shadow: 2px 2px 5px #CCCCCC;
    }
    
    #frame{
        position: absolute;
        top:30px;
        width:80%;
        height: 500px;
        z-index: 2000;
        overflow-y:scroll;
        overflow-x:scroll;
        background-color:white;
        box-shadow: 2px 2px 5px #CCCCCC;
    
    }
    
    
    .bg{
        position:fixed;
        padding:0;
        margin:0;

        top:0;
        left:0;
        
        width: 100%;
        height: 100%;
        
        background-color: Black;
        z-index: 1;
        /* These three lines are for transparency in all browsers. */
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
        filter: alpha(opacity=50);
        opacity: .5;
    }
    
    #accordion1 li.panel{
        margin-bottom: 0px;
    }
    
    .panel {
        margin-bottom: 20px;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 4px;
         -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05); 
         box-shadow: 0 1px 1px rgba(0,0,0,0); 
    }

  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  
  #expList ul, li {
    list-style: none;
    margin:0;
    padding:0;
    cursor: pointer;
    }
    #expList p {
        margin:0;
        display:block;
    }
    #expList p:hover {
        background-color:#121212;
    }
    #expList li {
        line-height:140%;
        text-indent:0px;
        background-position: 1px 8px;
        padding-left: 20px;
        background-repeat: no-repeat;
    }

    /* Collapsed state for list element */
    #expList .collapsed{
        background-image: url(img/collapsed.png);
        background-repeat:no-repeat;
        background-position:10px 16px;
       
    }
    /* Expanded state for list element
    /* NOTE: This class must be located UNDER the collapsed one */
    #expList .expanded{
        background-image: url(img/expanded.png);
        background-repeat:no-repeat;
        background-position:10px 16px;
    }
    #expList {
        clear: both;
    }
/*
    .listControl{
      margin-bottom: 15px;
    }
    .listControl a {
        border: 1px solid #555555;
        color: #555555;
        cursor: pointer;
        height: 1.5em;
        line-height: 1.5em;
        margin-right: 5px;
        padding: 4px 10px;
    }
    .listControl a:hover {
        background-color:#555555;
        color:#222222; 
        font-weight:normal;
    }
*/
</style>