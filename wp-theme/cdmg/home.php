<?php
/**
 * Blog index (the page assigned as "Posts page", slug: blog).
 *
 * Reproduces the DMU Blog layout from the static site: a featured article
 * (the most recent post) followed by a grid of cards (the rest). Content is
 * pulled automatically from published posts, so publishing a new post adds it
 * here with no manual editing.
 */
get_header();

$blog_page = (int) get_option( 'page_for_posts' );
$intro_title = $blog_page ? get_the_title( $blog_page ) : 'Learn from the pros';
?>

	<section class="page-hero">
		<div class="container">
			<div class="breadcrumb">Home / DMU Blog</div>
			<h1><?php echo esc_html( $intro_title ); ?></h1>
			<p>Strategy, testing, compliance, and the craft of accountable advertising from the CDMG team.</p>
		</div>
	</section>

	<!-- Newsletter signup (front and center) -->
	<section class="section" style="padding-top:48px; padding-bottom:24px;">
		<div class="container">
			<div class="newsletter-box reveal">
				<span class="eyebrow">DMU Newsletter</span>
				<h2>Subscribe to the DMU Newsletter</h2>
				<p>Get the Direct Marketing Update: strategy, testing, and what is working in direct response and digital marketing, delivered to your inbox. No noise, just what works.</p>
				<form data-lead class="newsletter-box__form">
					<input type="email" name="email" placeholder="you@company.com" required />
					<button type="submit" class="btn btn--primary btn--lg">Subscribe</button>
				</form>
				<p class="form-note">Join thousands of marketers. Unsubscribe anytime.</p>
			</div>
		</div>
	</section>

<?php if ( have_posts() ) : ?>

	<?php
	// The first post on page 1 is shown as the featured article.
	$is_first = ( ! is_paged() );
	$grid_open = false;
	while ( have_posts() ) :
		the_post();

		if ( $is_first ) :
			$is_first = false;
			?>
			<!-- Featured -->
			<section class="section" style="padding-bottom:32px;">
				<div class="container">
					<article class="split reveal" style="align-items:center;">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="post__img" style="display:block; height:240px; min-height:0; border-radius:var(--radius); background-size:cover; background-position:center; background-image:url('<?php echo esc_url( get_the_post_thumbnail_url( null, 'large' ) ); ?>');"></a>
						<?php else : ?>
							<a href="<?php the_permalink(); ?>" class="post__img g1" style="height:200px; min-height:0; border-radius:var(--radius); text-decoration:none;">Featured</a>
						<?php endif; ?>
						<div style="display:flex; flex-direction:column; justify-content:center;">
							<span class="post__tag">Featured<?php $c = cdmg_primary_category(); echo $c ? ' &middot; ' . esc_html( $c ) : ''; ?></span>
							<h2 style="margin:8px 0 12px;"><a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none;"><?php the_title(); ?></a></h2>
							<p style="margin-bottom:18px;"><?php echo esc_html( cdmg_card_excerpt( 28 ) ); ?></p>
							<a href="<?php the_permalink(); ?>" class="btn btn--primary" style="align-self:flex-start;">Read Article</a>
						</div>
					</article>
				</div>
			</section>
			<?php
		else :
			if ( ! $grid_open ) {
				echo '<section class="section section--light"><div class="container">';
				echo '<div class="section-head center reveal"><span class="eyebrow">The Full Library</span><h2>More from the DMU Blog</h2><p>Search by keyword or pick a topic to dig into thousands of articles of strategy, testing, and what is working.</p></div>';
				echo '<div style="margin-bottom:30px;">';
				cdmg_blog_toolbar();
				echo '</div>';
				echo '<div class="grid grid-3">';
				$grid_open = true;
			}
			?>
			<article class="post reveal">
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" class="post__img" style="display:block; background-size:cover; background-position:center; background-image:url('<?php echo esc_url( get_the_post_thumbnail_url( null, 'medium_large' ) ); ?>');"></a>
				<?php else : ?>
					<a href="<?php the_permalink(); ?>" class="post__img g2" style="text-decoration:none;"><?php echo esc_html( cdmg_primary_category() ); ?></a>
				<?php endif; ?>
				<div class="post__body">
					<?php echo cdmg_primary_category_link(); ?>
					<h3><a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none;"><?php the_title(); ?></a></h3>
					<p><?php echo esc_html( cdmg_card_excerpt( 20 ) ); ?></p>
					<a href="<?php the_permalink(); ?>" class="post__more">Read more &rarr;</a>
				</div>
			</article>
			<?php
		endif;
	endwhile;

	if ( $grid_open ) {
		echo '</div>';
		// Pagination under the grid.
		echo '<div class="reveal" style="text-align:center; margin-top:40px;">';
		the_posts_pagination( array(
			'mid_size'  => 1,
			'prev_text' => '&larr; Newer',
			'next_text' => 'Older &rarr;',
		) );
		echo '</div>';
		echo '</div></section>';
	}
	?>

<?php else : ?>

	<section class="section">
		<div class="container center">
			<p>No articles have been published yet. Check back soon.</p>
		</div>
	</section>

<?php endif; ?>

<?php get_footer(); ?>
