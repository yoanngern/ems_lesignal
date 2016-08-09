<footer>

	<div class="content">
		<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>

			<nav id="site-navigation" class="main-navigation" role="navigation"
			     aria-label="<?php esc_attr_e( 'Footer Menu', 'twentysixteen' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
				) );
				?>
			</nav>

		<?php endif; ?>

		<div class="address">
			<h3>Nous trouver</h3>
			<p>EMS Le Signal<br/>
				Rte du Signal 6<br/>
				1080 Les Cullayes<br/>
				Suisse</p>
		</div>

		<div class="contact">
			<h3>Nous contacter</h3>
			<p>Tél:  021 903 11 66</p>
			<p>Fax: 021 903 38 18</p>
			<p><a href="/contact">info@ems-lesignal.ch</a></p>
		</div>

		<div class="partners">
			<a target="_blank" href="http://www.avdems.ch" id="avdems">Avdems</a>
			<a target="_blank" href="https://www.reseau-sante-region-lausanne.ch" id="rsrl">Réseau Santé Région Lausanne</a>
			<a target="_blank" href="http://palliative.ch" id="palliative">palliative.ch</a>
		</div>

	</div>

</footer>

<?php wp_footer(); ?>


</body>
</html>
