<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
$fname = ""; $lname = "";

$this->db->select('*');
     	  
  $this->db->where('pid',$ids);
  	  
  $this->db->from('person');
  	  
  $query = $this->db->get();
  	
  foreach ($query->result() as $row) {
		
		$pids = $row->pid;		
		
		$fname = $row->fname;
		
		$lname = $row->lname; 
		
  }

echo "<head>";

echo "<title>$fname $lname</title>";
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/mystyles.css"> 
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
      <a id="title" class="navbar-brand" href="#">Data Storage System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- left links -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a id="lnks" href="index">PEOPLE</a></li>       
        <li><a id="lnks" href="category_control">CATEGORY</a></li>
        <li><a id="lnks" href="topic_control">TOPIC</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">     
<div class="row">
<div class="col-sm-4 col-md-4 col-lg-4"><h3 class="testing">List Of Records</h3></div>
<div class="col-sm-6 col-md-6 col-lg-6">
<?php
  $this->db->select('*');
     	  
  $this->db->where('pid',$ids);
  	  
  $this->db->from('person');
  	  
  $query = $this->db->get();
  	
  foreach ($query->result() as $row) {
		
		$pids = $row->pid;		
		
		$fname = $row->fname;
		
		$lname = $row->lname; 
		
		$rela = $row->relation;
		
		//echo "<h2>List of Records</h2>";
		echo "<h3>$fname $lname (ID: $pids) ($rela)</h3>"; 
  }
?>
</div>
<div class="col-sm-2 col-md-2 col-lg-2">

</div>
</div><!-- end row --> 
  <div class="table-responsive">
  <table class="table table-hover">
  
    <thead>
      <tr>        
        <th>Record ID</th>
        <th>Category</th>
        <th>Day & Date:</th>        
        <th>Topic</th>        
        <th>Update</th>
        <th>Delete</th>
        <th>Add</th>
      </tr>
    </thead>
    <tbody>
       
 <?php
         
         $mydate = date("j");
         $mymonths = date("F");
     		 $myyear = date("Y");
	     	   
	     	    $query = $this->db->select('*');
	     	    $this->db->where('pid',$ids); //person id
	     	    $this->db->from('statements');
	        
	     	    $query = $this->db->get();
	     	
	       foreach ($query->result() as $myauthor) {
	       	
	       	$sids = $myauthor->sid;		
					$categories = $myauthor->category; $topics = $myauthor->topic;
				  $days = $myauthor->day; $dates = $myauthor->dates;
				  $monthss = $myauthor->months; $yearss = $myauthor->years;
					
          if ($dates == $mydate && $monthss == $mymonths && $yearss == $myyear) {
	                
	            echo "<tr><td><a href='a_record_control?recid=$sids'>$sids</a></td>";
					    
              echo "<td>$categories</td>";
	            
              echo "<td><b>$dates $monthss $yearss</b></td>";
	            
              echo "<td class='topstext'><a href='a_record_control?recid=$sids'>$topics</a><br></td>";        
			        
              echo "<td><a href='update_record_control?updts=$sids'target='_blank'>Update</a></td>";
					    echo "<td><a href='rec_delete_control?del=$sids' target='_blank'>Delete</a></td>"; 
					    echo "<td><a id='new_record' href='fetch_person_control?myid=$pids' target=_'blan'>New Record</a></td></tr>";                
           } //highlight text 
              
           else {					
			   
				    echo "<tr><td><a href='a_record_control?recid=$sids'>$sids</a></td>";
				    echo "<td>$categories</td>";
                echo "<td>$dates $monthss $yearss</td>";               
               				    
				    echo "<td class='topstext'><a href='a_record_control?recid=$sids'>$topics</a><br></td>";        
		          echo "<td><a href='update_record_control?updts=$sids' target='_blank'>Update</a></td>";
				    echo "<td><a href='rec_delete_control?del=$sids' target='_blank'>Delete</a></td>"; 
				    echo "<td><a id='new_record' href='fetch_person_control?myid=$pids' target=_'blan'>New Record</a></td></tr>";
			   }
			
			} //end foreach loop
 ?>  
  </tbody>
  </table> 
  
  </div>
</div>

</body>
</html>

			    	      
	