<?php get_header(); ?>


<?php if ( have_rows( 'icons' ) ): ?>

	<ul class="icons">

		<?php while ( have_rows( 'icons' ) ): the_row(); ?>

			<li>
				<?php if ( get_sub_field( 'link' ) != null ): ?>
				<a href="<?php the_sub_field( 'link' ); ?>">
					<?php endif; ?>
					<img src="<?php the_sub_field( 'image' ); ?>" alt=""/>
					<h2><?php the_sub_field( 'text' ); ?></h2>
					<?php if ( get_sub_field( 'link' ) != null ): ?>
				</a>
			<?php endif; ?>
			</li>

		<?php endwhile; ?>

	</ul>

<?php endif; ?>

<?php if ( have_rows( 'our_values' ) ): ?>

	<section class="col3_text">
		<?php while ( have_rows( 'our_values' ) ): the_row(); ?>
			<article>
				<img src="<?php the_sub_field( 'image' ); ?>" alt=""/>
				<h2><?php the_sub_field( 'title' ); ?></h2>
				<p><?php the_sub_field( 'text' ); ?></p>
			</article>

		<?php endwhile; ?>
	</section>

<?php endif; ?>

<?php if ( get_field( 'slogan' ) ):

	$slogan = get_field( 'slogan' ); ?>

	<section class="slogan">
		<div class="line left"></div>
		<h1><?php echo $slogan; ?></h1>
		<div class="line right"></div>
		<div class="gradient"></div>
	</section>
<?php endif; ?>


<?php if ( have_rows( 'slides' ) ): ?>

	<?php while ( have_rows( 'slides' ) ): the_row(); ?>
		<section class="slide_full">
			<?php

			$images = get_sub_field( 'images' );

			if ( $images ): ?>

				<div id="slides" class="slidesjs" data-size="<?php echo count( $images ); ?>" data-height="388"
				     data-nav="false" data-pag="true">
					<?php foreach ( $images as $image ): ?>
						<div style="background-image: url('<?php echo $image['url']; ?>')"></div>
					<?php endforeach; ?>
				</div>

			<?php endif; ?>

			<article>
				<div class="text">
					<?php the_sub_field( 'title' ); ?>
					<a href="<?php the_sub_field( 'link' ); ?>">En savoir plus</a>
				</div>
			</article>

		</section>

	<?php endwhile; ?>

<?php endif; ?>

<?php if ( have_rows( 'sections' ) ): ?>

	<?php while ( have_rows( 'sections' ) ): the_row(); ?>
		<section class="slide_text">
			<?php

			$images = get_sub_field( 'images' );

			if ( $images ): ?>

				<div id="slides" class="slidesjs" data-size="<?php echo count( $images ); ?>" data-height="742.5"
				     data-nav="false" data-pag="true">
					<?php foreach ( $images as $image ): ?>
						<div style="background-image: url('<?php echo $image['url']; ?>')"></div>
					<?php endforeach; ?>
				</div>

			<?php endif; ?>

			<article>
				<div class="text">
					<h2><?php the_sub_field( 'title' ); ?></h2>
					<p><?php the_sub_field( 'text' ); ?></p>
				</div>
			</article>

		</section>

	<?php endwhile; ?>

<?php endif; ?>

<?php

$location = get_field('map');

if( !empty($location) ):
	?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
<?php endif; ?>

<?php if ( $post->post_name == "accueil" ): ?>

	<div class="button"><a href="/contact/">Nous contacter</a></div>

<?php endif; ?>

<?php get_footer(); ?>
