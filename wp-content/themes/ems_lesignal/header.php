<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport"
	      content="initial-scale=1, width=device-width, minimum-scale=1, user-scalable=no, maximum-scale=1, width=device-width, minimal-ui">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" href=""/>
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="icon" type="image/png" href=""/>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

	<a id="logo" href="/"></a>
	<a id="logo2" href="/"></a>

	<a id="logo_mobile" href="/"></a>
	<div id="burger"></div>


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
</header>

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

		?>

		<div class="oneimage"
		     style="background-image: url('<?php echo $image['sizes']['header-slide']; ?>')" data-width="1320"
		     data-height="<?php echo $height; ?>" data-height-mobile="600"></div>

	<?php else: ?>


		<div id="slides" class="slidesjs" data-size="<?php echo count( $images ); ?>"
		     data-height="<?php echo $height; ?>">
			<?php foreach ( $images as $image ): ?>
				<div style="background-image: url('<?php echo $image['sizes']['header-slide']; ?>')"></div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<div class="gradient"></div>

</section>
<?php endif; ?>