<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta >
		<title>Image Resizing with Canvas</title>
		<meta name="description" content="Learn how to resize images using JavaScript and the HTML5 Canvas element using controls, commonly seen in photo editing applications." />
		<meta name="keywords" content="canvas, javascript, HTML5, resizing, images" />
		<meta name="author" content="Codrops" />
		<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="component">
					<div class="overlay">
						<div class="overlay-inner">
						</div>
					</div>
					<!-- This image must be on the same domain as the demo or it will not work on a local file system -->
					<!-- http://en.wikipedia.org/wiki/Cross-origin_resource_sharing -->
					<img crossOrigin="Anonymous" id="size_img" class="resize-image" src="<?php echo base_url();?>/files/<?php echo $_GET['src'];?>" alt="image for resizing">
					<button class="btn-crop js-crop">Crop<img class="icon-crop" src="<?=base_url(); ?>assets/images/crop.svg"></button>
				</div>
			</div><!-- /content -->
			<!-- Related demos -->
		</div> <!-- /container -->
		<script src="<?=base_url(); ?>assets/jquery.min.js"></script>
		<script src="<?=base_url(); ?>assets/component.js"></script>
	</body>
</html>