<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( have_rows( 'icones' ) ): ?>

		<ul>

			<?php while ( have_rows( 'icones' ) ): the_row(); ?>

				<li>
					<a href="<?php the_sub_field( 'link' ); ?>">
						<img src="<?php the_sub_field( 'image' ); ?>" alt=""/>
						<h2><?php the_sub_field( 'text' ); ?></h2>
					</a>
				</li>

			<?php endwhile; ?>

		</ul>

	<?php endif; ?>

	<?php if ( have_rows( 'slides' ) ): ?>

		<ul>

			<?php while ( have_rows( 'slides' ) ): the_row(); ?>

				<li>
					<img src="<?php the_sub_field( 'image' ); ?>" alt=""/>
					<h2><?php the_sub_field( 'title' ); ?></h2>
					<a href="<?php the_sub_field( 'link' ); ?>">En savoir plus</a>
				</li>

			<?php endwhile; ?>

		</ul>

	<?php endif; ?>



	<?php
	edit_post_link(
		sprintf(
		/* translators: %s: Name of current post */
			__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
			get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->'
	);
	?>

</article><!-- #post-## -->
