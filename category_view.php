<!DOCTYPE html>
<html lang="en">
<head>
  <title>Category</title>
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
    
   buttonD {width:50%}
     
  </style>
<script>
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
      <a id="title" class="navbar-brand" href="#">Basic Category System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a id="lnks" href="index">List Of People</a></li>
        <li><a id="lnks" href="add_person_control">Add Person</a></li>
        <li><a id="lnks" href="topic_control">Topic</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">
<div class="row">
 <div class="col-xs-4"></div>
 <div class="col-xs-4"><center><h3>Category</h3></center></div>
 <div class="col-xs-4"></div>
</div>
<br>
<div class="row">
 <div class="col-xs-2"></div>
 <div class="col-xs-8">
 
	 	<form class="form-horizontal" method="post" action="fetch_categ_control">
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email" style="font-size:21px">Select:</label>
	      <div class="col-sm-10">
	        <select class="form-control input-lg" name="mycateg" id="categ">
				<option value='Law'>Law</option> 
            <option value='Government'>Government</option>	         
 	         <option value='Employment'>Employment</option>
 	         <option value='Money'>Money</option>
 	         <option value='Information'>Information</option>
 	         <option value='Medical'>Medical</option>
 	         <option value='Travel'>Travel</option>
 	         <option value='Family'>Family</option>          
	        </select>
	      </div>
	    </div>
	    <div class="form-group">        
	      <div class="col-sm-offset-4 col-sm-5">
	        <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
	      </div>
	    </div>
	  </form>  

 </div>
 <div class="col-xs-2"></div>
</div>
</div> 
</body>
</html>





