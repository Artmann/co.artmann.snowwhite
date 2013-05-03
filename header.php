

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<div class="header">
			<div class="navigation"> 
				<ul>
					<?php
						$args = array(
							'title_li' => 'Blog',  	
						);
						wp_list_categories( $args );
					?>	
				</ul>
					<?php
						$args = array(
							'theme_location' => 'primary',
							 'container' => '',
							 'items_wrap' => '%3$s'
						); 
						wp_nav_menu( $args ); 
					?>
			</div>

		</div>
		<div class="content">
