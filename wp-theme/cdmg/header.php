<?php
/**
 * Site header and primary navigation.
 *
 * The markup matches the static site exactly. Links point at WordPress pages
 * by slug, so the pages should use these slugs: 5-dimensions, why-you,
 * our-story, contact, and the Posts page set to "blog".
 */
$theme = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="header">
		<div class="container nav">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				<img src="<?php echo esc_url( $theme . '/assets/logo-c.png' ); ?>" alt="" class="logo__cmark" />
				<img src="<?php echo esc_url( $theme . '/assets/logo-wordmark.png' ); ?>" alt="Creative Direct Marketing Group" />
			</a>
			<nav class="nav__menu">
				<ul class="nav__links">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo is_front_page() ? ' class="active"' : ''; ?>>Home</a></li>
					<li><a href="<?php echo esc_url( home_url( '/5-dimensions/' ) ); ?>"<?php echo is_page( '5-dimensions' ) ? ' class="active"' : ''; ?>>5 Dimensions</a></li>
					<li><a href="<?php echo esc_url( home_url( '/why-you/' ) ); ?>"<?php echo is_page( 'why-you' ) ? ' class="active"' : ''; ?>>Why You</a></li>
					<li class="has-sub">
						<a href="<?php echo esc_url( home_url( '/our-story/' ) ); ?>"<?php echo is_page( 'our-story' ) ? ' class="active"' : ''; ?>>Our Story</a>
						<div class="subnav">
							<a href="<?php echo esc_url( home_url( '/our-story/' ) ); ?>">Our Story</a>
							<a href="<?php echo esc_url( home_url( '/our-story/#team' ) ); ?>">Our Team</a>
							<a href="<?php echo esc_url( home_url( '/why-you/' ) ); ?>">Verticals</a>
						</div>
					</li>
					<li><a href="<?php echo esc_url( cdmg_blog_url() ); ?>"<?php echo ( is_home() || is_singular( 'post' ) || is_category() || is_tag() ) ? ' class="active"' : ''; ?>>DMU Blog</a></li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary">Let's Talk</a>
			</nav>
			<button class="nav__toggle" aria-label="Menu"><span></span><span></span><span></span></button>
		</div>
	</header>
