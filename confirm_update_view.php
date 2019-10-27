<!DOCTYPE html>
<html lang="en">
<head>
  <title>Confirmation</title>
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
   
   #output {font-size: 15px;font-weight: normal}
    
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
        <li class="active"><a href="index">Add User</a></li>
        <li><a href="select_record_control">List of People</a></li>
        <li><a href="select_person_control">Add Record</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">   
 
    
    <h3>Updated Record:</h3><br> 
     
     <div class="row">      
     <div id="coltitle" class="col-xs-1">Record:</div>
     <div id="output" class="col-xs-11"><?php echo "helo"; ?></div>
     </div>
     
    
     <div class="row">
     <div id="coltitle" class="col-xs-1">Subject</div>
     <div id="output" class="col-xs-11"><?php echo $dutopic; ?></h4></div>    
     </div>
     
     <div class="row">
     <div id="coltitle" class="col-xs-1">Category</div>
     <div id="output" class="col-xs-11"><?php echo $ducategory; ?></h4></div>    
     </div>
    
     <div class="row">
     <div id="coltitle" class="col-xs-1">Date:</div>
     <div id="output" class="col-xs-11">
     <h4><?php echo $duday . $dudates . $dumonths . $duyears; ?></h4></div>    
     </div>
     
     <div class="row">
     <div id="output" class="col-xs-12">
     <textarea readonly cols="60" rows="10"><?php echo $ducomments; ?></textarea></div>    
     </div>
        
</div><!--container -->

</body>
</html>
