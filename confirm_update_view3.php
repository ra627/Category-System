<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
          
  <table class="table table-responsive table-bordered">
    <thead>
      <tr>
        <th colspan="2">
        <center><h3>Updated Record: <?php echo $sid; ?></h3></center>	
        <h4><center><?php echo $tls . " " . $first . " " . $last; ?></center></h4>			        
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Topic:</td><td><?php echo $details['topic']; ?></td>
      </tr>
      <tr>        
        <td>Day:</td><td><?php echo $details['day']; ?></td>
      </tr>        
      <tr>        
        <td>Dates:</td><td><?php echo $details['dates']; ?></td>
      </tr>
      <tr>        
        <td>Months</td><td><?php echo $details['months']; ?></td>
      </tr>        
      <tr>        
        <td>Years:</td><td><?php echo $details['years']; ?></td>
      </tr>
      <tr>
      <td colspan="2">     
      <textarea cols="138" rows="12"><?php echo $details['comments']; ?></textarea>
      </td>
      </tr>
    </tbody>
  </table> 
  
  </div>  
</body>
</html>
