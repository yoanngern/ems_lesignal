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

			<div class="gradient_top"></div>
			<?php

			$images = get_sub_field( 'images' );

			if ( $images ):

				if ( count( $images ) == 1 ):

					$image = $images[0];

					?>

					<div class="oneimage"
					     style="background-image: url('<?php echo $image['sizes']['full-slide']; ?>')" data-width="1320"
					     data-height="388" data-height-mobile="500"></div>

				<?php else: ?>

					<div id="slides" class="slidesjs" data-size="<?php echo count( $images ); ?>" data-height="388"
					     data-nav="false" data-pag="true">
						<?php foreach ( $images as $image ): ?>
							<div style="background-image: url('<?php echo $image['sizes']['full-slide']; ?>')"></div>
						<?php endforeach; ?>
					</div>

				<?php endif; ?>


			<?php endif; ?>

			<div class="gradient_bottom"></div>

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

			if ( $images ):

				if ( count( $images ) == 1 ):

					$image = $images[0];

					?>

					<div class="oneimage"
					     style="background-image: url('<?php echo $image['sizes']['16_9-slide']; ?>')" data-width="1320"
					     data-height="742.5"></div>

				<?php else: ?>

					<div id="slides" class="slidesjs" data-size="<?php echo count( $images ); ?>" data-height="742.5"
					     data-nav="false" data-pag="true">
						<?php foreach ( $images as $image ): ?>


							<div style="background-image: url('<?php echo $image['sizes']['16_9-slide']; ?>')"></div>
						<?php endforeach; ?>
					</div>

				<?php endif; ?>

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

//if ( have_rows( 'map' ) ):

	$location = get_field( 'map' );

	if ( ! empty( $location ) ):

		//$lat = 46.575858;
		//$lng = 6.753039;

		$lat = $location['lat'];
		$lng = $location['lng'];


		?>
		<section class="map">
			<div class="acf-map oneimage" data-width="1320"
			     data-height="742.5">

				<div class="marker " data-lat="<?php echo $lat; ?>"
				     data-lng="<?php echo $lng; ?>"></div>
			</div>

			<article>
				<div class="text">
					<?php while ( have_rows( 'infos' ) ): the_row(); ?>

						<div>
							<h2><?php the_sub_field( 'title' ); ?></h2>
							<p><?php the_sub_field( 'text' ); ?></p>
						</div>
					<?php endwhile; ?>
				</div>
			</article>

		</section>

	<?php endif; ?>
<?php //endif; ?>


<?php if ( $post->post_name == "contact" ): ?>

	<section class="slogan">
		<div class="line left"></div>
		<h1>Nous écrire</h1>
		<div class="line right"></div>
	</section>

	<?php echo do_shortcode( '[contact-form-7 id="200" title="Contact"]' );

endif; ?>




<?php if ( $post->post_name == "accueil" ): ?>

	<div class="button"><a href="/contact/">Nous contacter</a></div>

<?php endif; ?>

<?php get_footer(); ?>
