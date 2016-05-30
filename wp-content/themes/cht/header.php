<!DOCTYPE html>
<html>
<head>
<!--[if IE]>
<link rel="stylesheet" href="http://192.168.88.250/cafe/wp-content/themes/cafe/css/ie-only.css" type="text/css" />
<h1>This page is only availabe using IE 10 or Chrome</h1>

<![endif]--> 
    	<title><?php bloginfo( 'description' ); ?></title>
        <link rel="icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/img/fx-favicon.ico">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/masonry.js"></script>

        <meta charset="UTF-8">

        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
 
    </head>
<body>

<header>

	<div id="header">

		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.gif">

		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>

		<nav>
			<?php 

				$defaults = array(
					'menu'            => 'main',
					'container'       => 'false',
					'items_wrap'      => '<ul>%3$s</ul>'
				);

				wp_nav_menu( $defaults ); 

			?>
		</nav>

		<div tabindex="0" class="onclick-menu">
    		<?php 

				$defaults = array(
					'menu'            => 'main',
					'container'       => 'false',
					'items_wrap'      => '<ul class="onclick-menu-content">%3$s</ul>'
				);

				wp_nav_menu( $defaults ); 

			?>
		</div>

	</div>
	
</header><!-- /header -->