<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Roselle Theme</title>
		<?php wp_head(); ?>
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$roselle_classes = array( 'roselle-class', 'my-class' );
		else:
			$roselle_classes = array( 'no-roselle-class' );
		endif;
		
	?>
	
	<body <?php body_class( $roselle_classes ); ?>>
		
		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>