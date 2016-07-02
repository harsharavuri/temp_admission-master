<!DOCTYPE html>
<html>
<head>
    <title>
		
	</title>
    <!-- SEO -->

    <link rel="stylesheet" href="<?=base_url(); ?>assets/bootstrap.min.css"; >
    <link rel="stylesheet" href="<?=base_url(); ?>assets/signup.css">
	 <script src="<?php echo base_url(); ?>assets/jquery.js"></script>
</head>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid" style="margin-left:75%">
    
    <ul class="nav navbar-nav">
      <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admitted Members <span class="caret"></span></a>
        <ul class="dropdown-menu" id="dropdownMembers">
        </ul>
      </li>
      <li><a href="<?php echo base_url().'auth/logout' ?>">LogOut</a></li>
     </ul>
  </div>
</nav>