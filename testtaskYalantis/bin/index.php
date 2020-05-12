<?require_once dirname(__FILE__).'./contollers/CalculatorController.php';
require_once dirname(__FILE__).'./contollers/LogController.php';
?>
<br>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Test task SiteCounter </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'><link rel="stylesheet" href="./bin/css/style.css">

</head>
<body>
  
<!-- partial:index.partial.html -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h1><span class="counter">1</span><br>

      </h1>
      <h3> Number Of Users</h3>
      <i class="fa fa-users"></i>
    </div>
    <div class="col-md-4">
      <h1><span class="counter">63,075</span></h1>
      <h3>Total Web Pages</h3>
      <i class="fa fa-desktop"></i>
    </div>
    <div class="col-md-4">
      <h1><span class="counter">12,218</span></h1>
      <h3>Cups Of Coffee</h3>
      <i class="fa fa-coffee"></i>
    </div>
  </div>
</div>
<h6>Change of Log</h6> <br>
<p>(users log)</p><br>
<?require_once dirname(__FILE__).'./view/stat.php';?>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js'></script><script  src="./bin/js/script.js"></script>

</body>
</html>
