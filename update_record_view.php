<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/mystyles.css">  
  <script src="https://cdn.ckeditor.com/4.11.4/full-all/ckeditor.js"></script> 
  <style type="text/css">
        
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
      <a id="title" class="navbar-brand" href="#">Basic Storage System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a id="lnks" href="index">ADD PERSON</a></li>
        <li><a id="lnks" href="select_person_control">HOME PAGE</a></li>
        <li><a id="lnks" href="javascript:goBack();"> << Go Back << </a></li>
        <li><a id="lnks" href="select_record_control">CATEGORY</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">   
   
   <div class="row">
   <div class="col-xs-2"></div>
   <div class="col-xs-8"><h2>Record Update - (<?php echo $mynames . " " . $mylast . " ". $mysid;?>) </h2></div>
   <div class="col-xs-2"></div>
   </div>  
   
	<?php echo form_open('person/do_update_control'); ?>
     
     <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
      <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="form-group">
      <label>Topic</label>
      <input type="hidden" name="mysids" value="<?php echo $mysid; ?>"> <!-- hidden sid ID -->     
      <input type="hidden" name="mypids" value="<?php echo $mypid; ?>"> <!-- hidden pid ID -->     
      <input class="form-control input-md" type="text" name="tps" value="<?php echo $mytopic ?>">      
      </div>
      </div>    
      <div class="col-sm-3 col-md-3 col-lg-3"></div>        
     </div>
     
     <div class="row"> 
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
      <div class="col-sm-6 col-md-6 col-lg-6">
      <label>Category</label>
      <div class="form-group">
      <select class="form-control" required name="categss">				
      <option value="<?php echo $mycategory; ?> selected"><?php echo $mycategory; ?>
    </option>
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
      </select>
      </div>
      </div><!-- col-xs-6 -->    
     <div class="col-sm-3 col-md-3 col-lg-3"></div>  
     </div><!-- end row -->
     
    <!-- <div class="row">
     <div class="col-sm-3 col-md-3 col-lg-3"></div>
     <div class="col-sm-6 col-md-3 col-lg-3 ">
     <!-- <label>Dates:</label> -->      
     
     <div class="row"> 
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
      <div class="col-sm-6 col-md-6 col-lg-6">
       <h4>
        <?php echo $mydays . " " . $mydates . " " . $mymonths . " " . $myyears; ?>
       </h4>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3"></div>
     </div><!-- end row -->
    
     <div class="row">
     <div class="col-sm-2 col-md-2 col-lg-1"></div>
     <div class="col-sm-8 col-md-8 col-lg-10">    
     <textarea class="form-control" id="noise" name="editor1">
      <?php echo $mycomment; ?> 
     </textarea>    
     </div>
     <div class="col-sm-2 col-md-2 col-lg-1"></div>
     </div>
     
     <div class="row">
     <div class="col-sm-2 col-md-2 col-lg-2">w</div>
     <div class="col-sm-8 col-md-8 col-lg-8">
     <input type="submit" class="btn btn-info btn-lg btn-block" value="UPDATE THIS RECORD">     
     </div>
     <div class="col-sm-2 col-md-2 col-lg-2">w</div>
     </div>
     </form>
       
</div><!--container -->
<script>
   CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>
