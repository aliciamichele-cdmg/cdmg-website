<?php
/**
 * Site footer. Markup matches the static site; links point at WordPress pages.
 */
$theme = get_template_directory_uri();
?>
	<footer class="footer">
		<div class="container">
			<div class="footer__grid">
				<div>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
						<img src="<?php echo esc_url( $theme . '/assets/logo-c.png' ); ?>" alt="" class="logo__cmark" />
						<img src="<?php echo esc_url( $theme . '/assets/logo-light.png' ); ?>" alt="Creative Direct Marketing Group" />
					</a>
					<p class="footer__about">Creative Direct Marketing Group, Inc. A full-service direct response advertising and digital marketing agency. Compliant product marketing made easy.</p>
					<div class="footer__social"><a href="#">f</a><a href="#">X</a><a href="#">ig</a><a href="#">in</a></div>
				</div>
				<div>
					<h4>Explore</h4>
					<a href="<?php echo esc_url( home_url( '/5-dimensions/' ) ); ?>">5 Dimensions</a><br />
					<a href="<?php echo esc_url( home_url( '/why-you/' ) ); ?>">Why You</a><br />
					<a href="<?php echo esc_url( home_url( '/our-story/' ) ); ?>">Our Story</a><br />
					<a href="<?php echo esc_url( home_url( '/our-story/#team' ) ); ?>">Our Team</a><br />
					<a href="<?php echo esc_url( cdmg_blog_url() ); ?>">DMU Blog</a>
				</div>
				<div>
					<h4>Company</h4>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Let's Talk</a><br />
					<a href="<?php echo esc_url( home_url( '/why-you/' ) ); ?>">Verticals</a><br />
					<a href="#">Awards</a><br />
					<a href="#">Careers</a>
				</div>
				<div>
					<h4>Contact</h4>
					<a href="tel:6159334647">615.933.4647</a><br />
					<a href="mailto:info@cdmginc.com">info@cdmginc.com</a><br />
					<a href="#">1313 4th Ave North<br />Nashville, TN 37208</a>
				</div>
			</div>
			<div class="footer__bottom">
				<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Creative Direct Marketing Group, Inc. All rights reserved.</span>
				<div class="footer__legal"><a href="#">Accessibility Statement</a><a href="#">Privacy Policy for Clients</a><a href="#">Privacy Policy for Consumers</a></div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
