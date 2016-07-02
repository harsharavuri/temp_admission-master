<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid" style="margin-left:75%">
    
    <ul class="nav navbar-nav">
      <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admitted Members <span class="caret"></span></a>
        <ul class="dropdown-menu" id="dropdownMembers">
          <li><a href="#">Page 1-1</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url().'auth/logout' ?>">LogOut</a></li>
     </ul>
  </div>
</nav>
  


</body>
</html>

