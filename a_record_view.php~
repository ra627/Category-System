<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $mynames . " " . $mylast ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/mystyles.css">  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    
    #btn {width: 40%;margin-top: 0.5%;}
    #butt {width:30%; margin-top: 1%; margin-left: 5%}
    
    
   div.scrollbars {
    max-height: 350px;
    overflow: auto;
 }
 
 div.toptext {text-align:center;font-size:30px;margin-top:2%}
  
</style>
<script>
	function goBack() {
    	window.history.back();
	}
</script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a id="title" class="navbar-brand">Basic Category System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li><a id="lnks" href="index">HOME PAGE</a></li>
       <li><a id="lnks" href="category_control">CATEGORY</a></li>
       <li><a id="lnks" href="topic_control">TOPIC</a></li>
       <li><a id="lnks" href="add_person_control">ADD PERSON</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">  
     
     <div class="toptext"><?php echo $mytopic . " " . "  (Record: $mysid) "; ?></div>     
     
     <div class="row">
     <div class="col-sm-4 col-md-4 col-lg-4"></div>
     <div id="coltitle" class="col-sm-4 col-md-4 col-lg-4">CATEGORY: <? echo $mycategory ?></div>
     <div class="col-sm-4 col-md-4 col-lg-4"></div>           
     </div>
     
     <div class="row">
     <div class="col-sm-4 col-md-4 col-lg-4"></div>
     <div id="coltitle" class="col-sm-4 col-md-4 col-lg-4">DATES: <? echo $mydays ." ". $mydates . " ". $mymonths ." ".$myyears ?></div>
     <div class="col-sm-4 col-md-4 col-lg-4"></div>  
          
         
     </div>
    
     <div class="row">
     <div class="col-sm-2 col-md-2 col-lg-2"></div>
     <div class="col-sm-8 col-md-8 col-lg-8">  
     <div class="panel panel-default">
     <div class="panel-heading" id="pnelhead"><?php echo $mynames . " " . $mylast . "  " . " (ID: $mypid)";  ?></div>
     <div class="scrollbars" id="coltitle"><?php echo $mycomment; ?></div>
     </div>         
     </div>
     <div class="col-sm-2 col-md-2 col-lg-2"></div>
     </div>       
</div><!--container -->

</body>
</html>
