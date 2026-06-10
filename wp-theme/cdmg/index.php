<?php
/**
 * Fallback template.
 *
 * WordPress requires index.php. For this theme the blog listing is handled by
 * home.php and single articles by single.php, so this is only reached for
 * archives, search, and similar. It lists posts using the same card grid.
 */
get_header();
?>

	<section class="page-hero">
		<div class="container">
			<div class="breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:inherit;">Home</a> /
				<a href="<?php echo esc_url( cdmg_blog_url() ); ?>" style="color:inherit;">DMU Blog</a>
			</div>
			<h1>
				<?php
				if ( is_search() ) {
					echo 'Search results for &ldquo;' . esc_html( get_search_query() ) . '&rdquo;';
				} elseif ( is_category() ) {
					echo 'Topic: ' . single_cat_title( '', false );
				} elseif ( is_archive() ) {
					the_archive_title();
				} else {
					echo 'From the DMU Blog';
				}
				?>
			</h1>
			<?php
			global $wp_query;
			$found = (int) $wp_query->found_posts;
			if ( $found ) {
				echo '<p>' . esc_html( number_format_i18n( $found ) ) . ' ' . esc_html( _n( 'article', 'articles', $found, 'cdmg' ) ) . '</p>';
			}
			?>
		</div>
	</section>

	<section class="section section--light">
		<div class="container">
			<div style="margin-bottom:30px;"><?php cdmg_blog_toolbar(); ?></div>
			<?php if ( have_posts() ) : ?>
				<div class="grid grid-3">
					<?php while ( have_posts() ) : the_post(); ?>
						<article class="post reveal">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" class="post__img" style="display:block; background-size:cover; background-position:center; background-image:url('<?php echo esc_url( get_the_post_thumbnail_url( null, 'medium_large' ) ); ?>');"></a>
							<?php else : ?>
								<a href="<?php the_permalink(); ?>" class="post__img g3" style="text-decoration:none;"><?php echo esc_html( cdmg_primary_category() ); ?></a>
							<?php endif; ?>
							<div class="post__body">
								<?php echo cdmg_primary_category_link(); ?>
								<h3><a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none;"><?php the_title(); ?></a></h3>
								<p><?php echo esc_html( cdmg_card_excerpt( 20 ) ); ?></p>
								<a href="<?php the_permalink(); ?>" class="post__more">Read more &rarr;</a>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
				<div class="reveal" style="text-align:center; margin-top:40px;">
					<?php the_posts_pagination( array( 'mid_size' => 1, 'prev_text' => '&larr; Newer', 'next_text' => 'Older &rarr;' ) ); ?>
				</div>
			<?php else : ?>
				<div class="center"><p>Nothing found.</p></div>
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>
