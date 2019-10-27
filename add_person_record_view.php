<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Person Record</title>
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
   
   #coltitle {font-size: 19px; margin-top: 0.5%; padding-left: 6%}
   
   #output {font-size: 19px;font-weight: bold}
   
   #dandt {font-size: 16px;margin-top: 0.7%;color:blue}
   
   txtarea {margin-left: -1%}
    
    .ylw {color:yellow;}
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
      <a class="navbar-brand" href="#">PDSS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="color:yellow;font-weight:bold">Add Record</a></li>
        <li><a href="index">Add user</a></li>
        <li><a href="select_record_control">View Record</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">     
 <center><h2>Add Record</h2></center>
 
  <table class="table table-hover">
    <thead>
      <tr>
		  <th>ID</th>        
        <th>Title</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone</th>
        <th>Relation</th>
      </tr>
    </thead>
    <tbody>
       
     <?php
     
     	$query = $this->db->get('person');
     	
     	 foreach ($query->result() as $row) {
				
				$pid = $row->pid;					
								
				$title = $row->title;
				
				$fname = $row->fname;
				
				$lname = $row->lname;
				
				$phone = $row->phone;
				
				$relation = $row->relation;
		   
		   echo "<tr><td><a href='fetch_person_control?myid=$pid' target='_blank'>$pid</a></td>";
		   echo "<td>$title</td><td>$fname</td><td>$lname</td><td>$phone</td>";
		   echo "<td>$relation</td></tr>";				        	 
     	 }
    ?>  
  </tbody>
  </table> 
  
</div>

</body>
</html>
