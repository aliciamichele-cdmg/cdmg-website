<?php
/**
 * Single blog article.
 *
 * This is the page that gets optimized for answer engines. The article body
 * (the_content) is whatever the editor writes, including RankMath FAQ blocks,
 * which render the dropdowns and emit FAQ schema automatically. RankMath also
 * adds the Article schema. The title tag and meta description come from
 * RankMath as well, so nothing about AEO needs to be coded per post.
 */
get_header();

while ( have_posts() ) :
	the_post();
	$cat = cdmg_primary_category();
	?>

	<section class="page-hero">
		<div class="container">
			<div class="breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:inherit;">Home</a> /
				<a href="<?php echo esc_url( cdmg_blog_url() ); ?>" style="color:inherit;">DMU Blog</a>
				<?php echo $cat ? ' / ' . esc_html( $cat ) : ''; ?>
			</div>
			<h1><?php the_title(); ?></h1>
			<div class="post-meta">
				<?php if ( $cat ) : ?><span class="post__tag"><?php echo esc_html( $cat ); ?></span><?php endif; ?>
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				<span><?php echo esc_html( get_the_author() ); ?></span>
			</div>
		</div>
	</section>

	<article class="section">
		<div class="container">
			<?php if ( has_post_thumbnail() ) : ?>
				<div style="max-width:760px; margin:0 auto 36px;">
					<?php the_post_thumbnail( 'large', array( 'class' => 'post-hero-img' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="post-content">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<p>Pages: ',
					'after'  => '</p>',
				) );
				?>
			</div>

			<div style="max-width:760px; margin:48px auto 0; padding-top:28px; border-top:1px solid var(--line);">
				<a href="<?php echo esc_url( cdmg_blog_url() ); ?>" class="post__more">&larr; Back to the DMU Blog</a>
			</div>
		</div>
	</article>

	<!-- Newsletter -->
	<section class="section section--light">
		<div class="container">
			<div class="cta-banner reveal">
				<h2>Get the Direct Marketing Update</h2>
				<p>Strategy and insight from CDMG delivered to your inbox. No noise, just what is working.</p>
				<form data-lead style="max-width:440px; margin:0 auto; display:flex; gap:10px; flex-wrap:wrap; justify-content:center;">
					<input type="email" name="email" placeholder="you@company.com" required style="flex:1; min-width:220px; padding:15px 18px; border-radius:50px; border:none; font-family:var(--font-body); font-size:1rem;" />
					<button type="submit" class="btn btn--light">Subscribe</button>
				</form>
			</div>
		</div>
	</section>

	<?php
endwhile;

get_footer();
