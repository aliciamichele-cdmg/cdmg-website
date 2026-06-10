<?php
/**
 * Generic page template.
 *
 * Used for any WordPress page that does not have its own custom template yet.
 * The designed marketing pages (Home, 5 Dimensions, Why You, Our Story,
 * Contact) get their own templates that reproduce their exact layouts. Until
 * then, a page renders inside the site chrome with its title and content.
 */
get_header();

while ( have_posts() ) :
	the_post();
	?>

	<section class="page-hero">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

	<?php
endwhile;

get_footer();
