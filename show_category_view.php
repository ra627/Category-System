<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<title>Category</title>";
?>
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
    
   .container {margin-left: 25%}
   
   #coltitle {font-size: 19px; margin-top: 0.5%; padding-left: 6%}
   
   #output {font-size: 19px;font-weight: bold}
   
   #dandt {font-size: 16px;margin-top: 0.7%;color:blue}
   
   txtarea {margin-left: -1%}
   
   #add_record {border-radius: 8px;padding:3px;width:155px;background-color:purple;color:white}
    
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
      <a id="title" class="navbar-brand" href="#">Basic Data Storage System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in color:yellow"></span>Add New Record</a></li> -->
      <li><a id="lnks" href="index">List Of People</a></li>       
      <li><a id="lnks" href="category_control">Category</a></li> 
      <li><a id="lnks" href="add_person_control">Topic</a></li>       
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
<div class="row">
<div class="col-sm-4 col-md-4 col-lg-4"></div>
<div class="col-sm-6 col-md-6 col-lg-6">
<?php

   $mycateg = ""; $value = "";
  
   $this->db->select('*');
   $this->db->where('category', $cats);
   $this->db->from('statements');
   $category = $this->db->get();  
   
   foreach ($category->result() as $value) {
   $mycateg = $value->category;

   }   
   
  echo "<h1>Category: <b>$mycateg</b></h1>";

?>
</div>

</div><!-- end row --> 
  <div class="table-responsive">
  <table class="table table-hover">
  
    <thead>
      <tr>              
        <th>PERSON</th>
        <th>TOPIC</th>
        <th>RECORD ID:</th>
        <th>DAY & DATE:</th>       
        <th>UPDATE</th>
        <th>DELETE</th>
        <th>ADD</th>
      </tr>
    </thead>
    <tbody>
       
 <?php
     
   $this->db->select('*');
   $this->db->where('category', $cats);
   $this->db->from('statements');
   $category = $this->db->get();  
  
  foreach ($category->result() as $categs) {
  	 
     $dbsid = ""; $dbpid = ""; $dbtopic = ""; 
     $dbcomm = ""; $dbday = ""; $dbdates = ""; $dbmonths = ""; 
     $dbyears = ""; $dbtimes = "";
   
   		$dbsid = $categs->sid; $dbpid = $categs->pid;
   		$dbtopic = $categs->topic; $dbcateg = $categs->category;
   		$dbday = $categs->day;
   		$dbdates = $categs->dates; $dbmonths = $categs->months;   		 
   		$dbyears = $categs->years; $dbtimes = $categs->times;
	    
       $this->db->select('*');
       $this->db->where('pid',$dbpid);
       $this->db->from('person');
       $aperson = $this->db->get();
       
       foreach ($aperson->result() as $pervalue) {
       	
       	$perfname = $pervalue->fname;
       	$perlname = $pervalue->lname;
       	
       	echo "<td>$perfname $perlname</a></td>";
       	 
       }  
       
       //echo "<tr><td><a href='a_record_control?recid=$dbsid' target='_blank'>$dbsid</a></td>";
       echo "<td>$dbtopic</td>";
       echo "<td><a href='a_record_control?recid=$dbsid' target='_blank'>$dbsid</a></td>";
	    echo "<td>$dbday $dbmonths $dbyears</td>";
	    echo "<td><a href='update_record_control?updts=$dbsid' target='_blank'>Update</a></td>";
	    echo "<td><a href='rec_delete_control?del=$dbsid' target='_blank'>Delete</a></td>";    
       echo "<td><a href='fetch_person_control?myid=$dbpid' target='_blank'>New Record</a></td></tr>";  
  } 

?>  
  </tbody>
  </table> 
  </div>
</div>

</body>
</html>

			    	      
	