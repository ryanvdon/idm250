<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title();?> | The Art of Ryan Van Dongen</title>
    <?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
</head>
<body>
	<!--Header-->
	<div>
		<div class="heading">
			<h1>Ryan Van Dongen</h1>
			<div class="icons"><!--Social Icons-->
				<ul class="social">
					<li><a href="https://www.instagram.com/ryanvandongen" target="_blank"><img src="<?php echo get_template_directory_uri();?>/dist/img/icon-ig.png" width="20" alt="Instagram"></a></li>
					<li><a href="https://www.artstation.com/ryan" target="_blank"><img src="<?php echo get_template_directory_uri();?>/dist/img/icon-as.png" width="20" alt="Artstation"></a></li>
					<li><a href="https://www.facebook.com/ryan.vandongen1" target="_blank"><img src="<?php echo get_template_directory_uri();?>/dist/img/icon-fb.png" width="20" alt="Facebook"></a></li>
					<li><a href="https://twitter.com/ryanjvandongen" target="_blank"><img src="<?php echo get_template_directory_uri();?>/dist/img/icon-twitter.png" width="20" alt="Twitter"></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--Navbar-->
	<div class="navbar">
		<ul>
			<li class="flex-item nav"><a href="<?php echo home_url() ?>">Home</a></li>
			<li class="flex-item nav"><a href="<?php echo home_url() ?>/portfolio">Portfolio</a></li>
			<li class="flex-item nav"><a href="<?php echo home_url() ?>/contact">Contact</a></li>
            <li class="flex-item nav"><a href="<?php echo home_url() ?>/general">General</a></li>
            <li class="flex-item nav"><a href="<?php echo home_url() ?>/generalSidebar">Sidebar</a></li>
		</ul>
            <!--<form class="search" action="results.html" method="get">
				<input type="text" placeholder="Search for Projects" name="searchInput"></input>
				<input type="submit" name="Submit" value="Search">
				<!--<a href="results.html" class="button">Search</a>-->
			<!--</form>-->
             <!--search form-->
          <?php
            get_search_form();
            
          
          // searchform.php is where you cutsomize the search form 
          ?>
          <!--/search form-->
      
      
	</div>