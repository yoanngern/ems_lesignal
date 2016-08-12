<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport"
	      content="initial-scale=1, width=device-width, minimum-scale=1, user-scalable=no, maximum-scale=1, width=device-width, minimal-ui">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon_57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon_72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon_76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon_114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon_120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon_144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon_152.png" />

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php if ( $post->post_name == "contact" ): ?>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-KefdnvHYruJR7sGAOolnbNMMdA2z_uA"></script>

	<?php endif; ?>
	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<header>

	<div class="content">
		<a id="logo" href="/"></a>
		<a id="logo2" href="/"></a>

		<a id="logo_mobile" href="/">
			<div class="icon"></div>
		</a>
		<div id="burger">
			<div class="icon"></div>
		</div>


		<?php if ( has_nav_menu( 'header-menu' ) ) : ?>

			<nav id="site-navigation" class="main-navigation" role="navigation"
			     aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-menu',
				) );
				?>
			</nav>

		<?php endif; ?>

	</div>
</header>

<div class="content">
<?php if ( get_field( 'header' ) ): ?>
<section class="slideheader">

	<?php if ( $post->post_name == "accueil" ): ?>

		<div class="logowhite"></div>

	<?php endif; ?>

	<?php

	$images = get_field( 'header' );

	$body_class = get_body_class();

	$height = 452;


	if ( in_array( "home", $body_class ) ) {
		$height = 559;
	}

	if ( count( $images ) == 1 ):

		$image = $images[0];

		$thumb = $image['sizes']['header-slide'];

		if ( in_array( "home", $body_class ) ) {
			$thumb = $image['sizes']['header-home'];
		}

		?>

		<div class="oneimage"
		     style="background-image: url('<?php echo $thumb; ?>')" data-width="1320"
		     data-height="<?php echo $height; ?>" data-height-mobile="600"></div>

	<?php else: ?>


		<div id="slides" class="slidesjs" data-size="<?php echo count( $images ); ?>"
		     data-height="<?php echo $height; ?>">
			<?php foreach ( $images as $image ):

				$thumb = $image['sizes']['header-slide'];

				if ( in_array( "home", $body_class ) ) {
					$thumb = $image['sizes']['header-home'];
				}

				?>

				<div style="background-image: url('<?php echo $thumb; ?>')"></div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<div class="gradient"></div>

</section>
<?php endif; ?>