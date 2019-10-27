
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
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
   
   #coltitle {font-size: 19px}
   
   #output {font-size: 19px;font-weight: bold}
    
  </style>
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="person/index">Add Person</a></li>
        <li><a href="person/add_record">Add record</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">    
  
    <h3>The Following Person has been entered into Database:</h3><br> 
		  		
    <div class="row">
     <div id="coltitle" class="col-sm-1">Title:</div>
     <div id="output" class="col-sm-11"><? echo $title; ?></div>    
    </div>
    
    <div class="row">
     <div id="coltitle" class="col-sm-1">Name:</div>
     <div id="output" class="col-sm-11"><? echo $fname; ?></h4></div>    
    </div>
    
     <div class="row">
     <div id="coltitle" class="col-sm-1">Surname:</div>
     <div id="output" class="col-sm-11"><? echo $lname; ?></div>    
    </div>
    
    <div class="row">
     <div id="coltitle" class="col-sm-1">Telephone:</div>
     <div id="output" class="col-sm-11"><? echo $phone; ?></div>    
    </div>
    
    <div class="row">
     <div id="coltitle" class="col-sm-1">Date/Time</div>
     <div id="output" class="col-sm-11"> 
       <?php
         $mday = date("l");
	
			// Prints the date
			$mydate = date("j");
			
			// Prints the months
			 $mymonths = date("F"); 
			
			// Prints the year, time
			 $myyear = date("Y"); 
			
	      //prints the time	   
		    $mytime = gmdate("H:i:s");
		    
		    echo $mday . " " . $mydate . " " . $mymonths . " " . $myyear . " " . $mytime;
       ?>     
     </div>    
    </div>
    
    <div class="row">
     <div id="coltitle" class="col-sm-1">Realation:</div>
     <div id="output" class="col-sm-11"><? echo $relation; ?></div>    
    </div>
</form>
<br>
<h4><a href="person">Form Entry</a></h4> 
 
</div><!--container -->

</body>
</html>
