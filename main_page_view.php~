<!DOCTYPE html>
<html lang="en">
<head>
  <title>List Of People</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/mystyles.css">
</head>
<body>
<?php  //$lnks = base_url('index.php/person'); ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a id="title" class="navbar-brand">Basic Category System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a id="lnks" href="category_control">CATEGORY</a></li>
        <li><a id="lnks" href="topic_control">TOPIC</a> 
        <li><a id="lnks" href="add_person_control">ADD PERSON</a> 
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">     
 <h2>List of People</h2>
 
  <table class="table table-hover">
    <thead>
      <tr>   
        <th>ID</th>        
        <th>Title</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Add</th>
        <th>Telephone</th>
        <th>Relation</th>        
      </tr>
    </thead>
    <tbody>        
    <?php    
     foreach ($authors as $author) {      
        echo "<tr>";        
        echo "<td>$author->pid</td>";
        echo "<td>$author->title</td>";
        echo "<td><a href='https://localhost/ci/index.php/person/fetch_record_control?myid=$author->pid'>$author->fname</a></td>";
        echo "<td><a href='https://localhost/ci/index.php/person/fetch_record_control?myid=$author->pid'>$author->lname</a></td>";
        echo "<td><a href='https://localhost/ci/index.php/person/fetch_person_control?myid=$author->pid'>Record</a></td>";
        echo "<td>$author->phone</td>";
        echo "<td>$author->relation</td>";
        echo "</tr>";
     }     
    ?>
  </tbody>tt
  </table> 
   <center><p><h4><?php echo $links; ?></h4></p></center>
</div>

</body>
</html>

			    	      
	