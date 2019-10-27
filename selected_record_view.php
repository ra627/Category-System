<!DOCTYPE html>
<html lang="en">
<head>
  <title>Conformation</title>
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
   
   #output {font-size: 15px;font-weight: normal;}
    
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container">
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
        <li><a style="color:white" href="select_person_control">Add Records</a></li>
        <li><a style="color:white" href="select_record_control">View Record</a></li>
        <li><a style="color:white" href="index">Add User</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">   
 
    
    <h3>Information Entered into Database:</h3><br> 
     
     <div class="row">      
     <div id="coltitle" class="col-xs-1">Person ID:</div>
     <div id="output" class="col-xs-11"><? echo $pid; ?></div>
     </div>
     
    
     <div class="row">
     <div id="coltitle" class="col-xs-1">Subject</div>
     <div id="output" class="col-xs-11"><? echo $topic ?></h4></div>    
     </div>
     
     <div class="row">
     <div id="coltitle" class="col-xs-1">Category</div>
     <div id="output" class="col-xs-11"><? echo $category ?></h4></div>    
     </div>
    
     <div class="row">
     
     <div id="output" class="col-xs-12">
     <textarea cols="65" rows="12" readonly><? echo $comments ?></textarea>    
     </div>
     </div>
     
     
     <div class="row">
     <div id="coltitle" class="col-xs-1">Date: </div> 
     <div id="output" class="col-xs-11">
      <?     
         echo $day . " " . $dates . " ". $months . " " . $years . " " . $times;     
      ?> 
    </div>
    </div>
        
	
</div><!--container -->

</body>
</html>
