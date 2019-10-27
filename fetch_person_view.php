<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fetch Person View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.11.4/full-all/ckeditor.js"></script> 
  <style type="text/css"> 
   
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
    
   
   
   .diff-date {font-weight:bold;font-size: 17px;}
   
   #recent {color:yellow;font-size: 18px;font-weight: bold;}
   
   #addrec {color:white;font-size: 17px}
   
   #addusr {color:white;font-size: 17px;}
     
   #viewrec {color:white;font-size: 17px;}
    
  </style>
<script>
$(document).ready(function(){
    $("#reveal").hide();
    $("#datebtns").hide();
    
    $("#datebtn").click(function(){
    	
        $("#reveal").toggle();
        $("#mydates").hide();
        $("#datebtn").hide();
        $("#datebtns").show();
       
    });
    
     $("#datebtns").click(function(){
    	
        $("#mydates").show();
        $("#reveal").hide();
        $("#datebtn").show();
        $("#datebtns").hide();
       
    });
    
});
</script> 
<script type="text/javascript" src="<?php echo base_url();?>/scripts/widgEditor.js"></script> 
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
        
        <li><a id="addrec" href="select_person_control">Add Record</a></li>
        <li><a id="addusr" href="index">Add User</a></li>
        <li><a id="viewrec" href="select_record_control">View Records</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">    
  
<?php echo form_open('person/add_record_control'); ?>    
    <div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-sm-6 col-md-6 col-lg-6">    
    <h3><?php echo $dfname . " " . $dlname . " (ID: $dpid)";?> - <strong>Record Entry Form</strong></h3><br> 
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3"></div>
    </div> 
	  
	  <div class="row">
     <div class="col-sm-4 col-md-4 col-lg-4"></div>
     <div class="col-sm-4 col-md-4 col-lg-4">
     <input type="hidden" name="mypid" value="<?php echo $dpid; ?>">
     </div>
     <div class="col-sm-4 col-md-4 col-lg-4"></div>
    </div>    
    
    <div class="row">
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
     <div class="col-sm-6 col-md-6 col-lg-6">     
     <h4>Telephone:<?php echo $dphone; ?></h4>
     </div>
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    
    <div class="row">
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
     <div class="col-sm-6 col-md-6 col-lg-6">
      <h4>Relation: <?php echo $drelation; ?></h4>
     </div>
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    
    <div class="row">
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
     <div class="col-sm-6 col-md-6 col-lg-6" id="mydates">     
     <h4>Date: <?php echo $dmday . " " . $dmydate . " " . $dmymonth . " " . $dmyyear . " " . $dmytime; ?></h4>
     </div>     
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
     </div>
    
    <div class="row">
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
     <div class="col-sm-6 col-md-6 col-lg-6"><br>    
     <a href="#" style="background-color:red;color:white;font-size:22px" id="datebtn">
      Another Date</a>
     <a href="#" style="background-color:red;color:white;font-size:22px" id="datebtns">Todays Date</a>     
     </div>
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    
    <div id="reveal" class="row">
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
      <div class="col-sm-6 col-md-6 col-lg-6">
       <h4>Select Date:</h4>
       <div class="form-group">
         <select class="form-control" required name="ndays" id="idays">				
            <option value="None">None</option>				
				<option value="Monday">Monday</option>
				<option value="Tuesday">Tuesday</option>
				<option value="Wednesday">Wednesday</option>
				<option value="Thursday">Thursday</option>
				<option value="Friday">Friday</option>
				<option value="Saturday">Saturday</option>
				<option value="Sunday">Sunday</option>      
      	</select>     		
     		<select class="form-control" required name="ndates" id="idates">
          <?php 
          	 $y =  "None";				
			   for ($i=0; $i<31; $i++) {
			   	if ($i == 0) {
					 echo "<option value=$y>$y</option>";			   	
			   	}else {
				  	  echo "<option value=$i>$i</option>";
				   }	
			   }			
			?>      
      	</select>
      	</div>
      	<select class="form-control" required name="nmonths" id="imonths">							
            <option value="None">None</option>				
				<option value="January">January</option> 
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>                
      	</select>
      	<select class="form-control" required name="nyears" id="iyears">
           <?php
             $x = "None";
             $u = "Unknown";
            for ($i=1978; $i<2050; $i++) {				
              if ($i == 1978) {
					 echo "<option value=$x>$x</option>";              
              }
              else {				 
				    echo "<option value=$i>$i</option>";
			      }
			    }
				?>      
      	</select>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
    </div><!--end row -->
    <br>
    
    <div id="reveal" class="row">
      <div class="col-sm-3 col-md-3 col-lg-3"></div> 
      <div class="col-sm-6 col-md-6 col-lg-6">
       <h4>Category:</h4>
        <div class="form-group">
         <select class="form-control" required name="categ" id="idays">				
            <option value="None">None</option>
            <option value="Government">Government</option>				
				<option value="Law">Law</option>
				<option value="Education">Education</option>
				<option value="Money">Money</option>
				<option value="Employment">Employment</option>
				<option value="Medical">Medical</option>
				<option value="Family">Family</option>
				<option value="Travel">Travel</option> 
				<option value="Information">Information</option>
				<option value="Other">Other</option>          
      	</select>
      	</div>     		
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
    </div> 
   
    <div class="row">  
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
     <div class="col-sm-6 col-md-6 col-lg-6">     
       <div class="form-group">		  
  		  <input required class="form-control input-lg" name="sbjec" type="text" placeholder="Topic optional">
		 </div>
		 </div>
		<div class="col-sm-3 col-md-3 col-lg-3"></div>
     </div>
    
    <div class="row">
     <div class="col-sm-1 col-md-1 col-lg-1"></div>
      <div class="col-sm-10 col-md-10 col-lg-10">		
		<div class="form-group"> 
       <textarea class="form-control" id="noise" name="editor1">Enter text</textarea>  		 	    
	    </div>
		 </div>
		 <div class="col-sm-1 col-md-1 col-lg-1"></div>    
     </div>
    
    <div class="row">
     <div class="col-sm-2 col-md-2 col-lg-2">s</div>     
      <div class="col-sm-8 col-md-8 col-lg-8">      
       <input type="submit" class="btn btn-info btn-md btn-block" name="submit" value="SUBMIT" />
      </div>
     <div class="col-sm-2 col-md-2 col-lg-2">s</div> 
    </div>
    
</form>
</div><!--container -->
</p>
<script>
   CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>
