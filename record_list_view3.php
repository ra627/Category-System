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

$b = 0;

?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/mystyles.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){

  $(".flip").click(function(){
    $(".panel").slideToggle("slow");
  });
  
   $(".flip2").click(function(){
   $(".panel2").slideToggle("slow");
  });

});
</script>
<style>
.panel, .flip {
  padding: 1px;
  background-color: #e5eecc;h
  border: solid 1px #c3c3c3;
  width:400px;
}

.panel {
  padding: 10px;
  display: none;
  width:400px;
}

.panel2, .flip2 {
  padding: 1px;
  background-color: #e5eecc;h
  border: solid 1px #c3c3c3;
  width:400px;
}

.panel2 {
  padding: 10px;
  display: none;
  width:400px;
}

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
      <a id="title" class="navbar-brand" href="#">Basic Category Systems</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- left links -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a id="lnks" href="index">People</a></li>       
        <li><a id="lnks" href="category_control">Select Category</a></li>
        <li><a id="lnks" href="topic_control">Topic</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">     
<div class="row">
<div class="col-sm-4 col-md-4 col-lg-4"><h3>List Of Records</h3></div>
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
        <th>Record IDs</th>
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
     		
         $this->db->select('*');
         $this->db->where('pid',$ids);
         $this->db->where('dates',$mydate);
         $this->db->where('months',$mymonths);
         $this->db->where('years',$myyear);
         $this->db->from('statements');
         $dtquery = $this->db->get();
         
         //makes the current date red     
       foreach ($dtquery->result() as $mydates) {
				
				$sids = $mydates->sid;		
				$categories = $mydates->category;
				$topics = $mydates->topic;
				$days = $mydates->day;
				$dates = $mydates->dates;
				$monthss = $mydates->months;
				$yearss = $mydates->years;
				
			  echo "<tr><td><a id='new_entry' href='a_record_control?recid=$sids'><b>$sids</b></a></td>";
		     echo "<td id='new_entry'><b>$categories</b></td>";
		     echo "<td id='new_entry'><b>$dates $monthss $yearss</b></td>";  		     

			  //echo "<td><a id='new_entry' href='a_record_control?recid=$sids'><strong></strong></a></td>";	   	     			  
			  
			  echo "<td><div class='flip'>Click to slide the panel down or up</div>
			        <div class='panel'>Hello world!</div></td>";	     
		     
		     echo "<td><a id='new_entry' href='update_record_control?updts=$sids' target=_'blank'><strong>Update</strong></a></td>";
           echo "<td><a id='new_entry' href='rec_delete_control?del=$sids' target=_'blank'><strong>Delete</strong></a></td>";		     			   
		     echo "<td><a id='new_entry' href='fetch_person_control?myid=$pids' target=_'blank'><strong>New Record</strong></a></td></tr>";		 
       }         
         
     	  
     	   $query = $this->db->select('*');
     	  
     	   $this->db->where('pid',$ids); //person id
     	  
     	   $this->db->from('statements');
        
         $this->db->order_by('topic');
     	  
     	   $query = $this->db->get();
     	
      foreach ($query->result() as $myauthor) {
				
				$sids = $myauthor->sid;		
				
				$categories = $myauthor->category;
				
				$topics = $myauthor->topic;
				
				$days = $myauthor->day;
				
				$dates = $myauthor->dates;
				
				$monthss = $myauthor->months;
				
				$yearss = $myauthor->years;
		    
		   //MAKES CURRENT DATE BOLD
		   
		    echo "<tr><td><a href='a_record_control?recid=$sids'>$sids</a></td>";
		    echo "<td>$categories</td>";
		    echo "<td>$dates $monthss $yearss</td>";
		    
		    //echo "<td class='topstext'><a href='a_record_control?recid=$sids'></a><br></td>"			    
		    
		    echo "<td><div class='flip'>Click to slide the panel down or up</div>
			        <div class='panel'>Hello world2!</div></td>";	 	      
		             
          echo "<td><a href='update_record_control?updts=$sids' target='_blank'>Update</a></td>";
		    echo "<td><a href='rec_delete_control?del=$sids' target='_blank'>Delete</a></td>"; 
		    echo "<td><a id='new_record' href='fetch_person_control?myid=$pids' target=_'blan'>New Record</a></td></tr>";
		  	    		        	 
     } //END foreach loop
 ?>  
  </tbody>
  </table> 
  
  </div>
</div>

</body>
</html>

			    	      
	