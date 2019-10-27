<!DOCTYPE html>
<html lang="en">
<head>
  <title>Record Delete Confirm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    
   .container {margin-left: 25%}
   
   #coltitle {font-size: 20px}
   
   #output {font-size: 20px;font-weight: normal;}
    
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
      <a style="color:red" class="navbar-brand" href="#">PDSS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="index">Add Person</a></li> -->
         <!-- <li><a href="#"><?php echo $mynames . " " . $mylast . $mypid; ?></a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">  
       
     <h2>Confirm Deletion: <?php echo $sid; ?></h2>
     
     <?php echo form_open('person/confirm_delete_control'); ?>  
     
     <input type="hidden" name="mysid" value="<?php echo $sid; ?>">
     <input type="hidden" name="mypid" value="<?php echo $pid; ?>">
     
	  <div class="row">
     <div id="coltitle" class="col-xs-2">ID:</div>
     <div id="output" class="col-xs-10"><? echo $pid ?></h4></div>    
     </div>       
     
     <div class="row">
     <div id="coltitle" class="col-xs-2">Topic</div>
     <div id="output" class="col-xs-10"><? echo $topic ?></h4></div>    
     </div>
     
     <div class="row">
     <div id="coltitle" class="col-xs-2">Category</div>
     <div id="output" class="col-xs-10"><? echo $category ?></h4></div>    
     </div>
     
     <div class="row">
     <div id="coltitle" class="col-xs-2">Dates</div>
     <div id="output" class="col-xs-10"><? echo $day ." ". $dates . " ". $months ." ".$years?></h4></div>    
     </div>
    
     <div class="row">
     <div id="output" class="col-xs-12">
     <textarea readonly cols="55" rows="12"><? echo $comments ?></textarea>    
     </div>
     </div>
     
     <div class="row">
     <div id="output" class="col-xs-12">
     <input type="submit" value="Delete Record">   
     </div>
     </div>
     
     </form>
            
</div><!--container -->

</body>
</html>
