<?php
/**
 * Our Story page. Used automatically for the page with slug "our-story".
 * Reproduces the static our-story.html design, including the corrected
 * founding callout (established in California, now in Nashville).
 */
get_header();
?>

	<section class="page-hero">
		<div class="container">
			<div class="breadcrumb">Home / Our Story</div>
			<h1>Four decades of accountable advertising</h1>
			<p>Creative Direct Marketing Group began more than 40 years ago with a simple conviction: marketing should be measured, and every dollar should be accountable.</p>
		</div>
	</section>

	<!-- Story -->
	<section class="section">
		<div class="container split">
			<div class="reveal">
				<span class="eyebrow">Our Story</span>
				<h2>From California in 1985 to Nashville today</h2>
				<p style="margin:16px 0;">CDMG was founded in 1985 in California and moved to Nashville, Tennessee in 2020. Across that history we have practiced direct response advertising with one focus: maximum response.</p>
				<p style="margin:0 0 16px;">Our approach is built on thoroughly tested copy and messaging, a comprehensive multi-pronged delivery strategy, and innovative yet cost-effective tactics. The goal is always the same. We increase your response, your market presence, and your profits through accountable advertising.</p>
				<p>Along the way we have won more than 100 marketing awards for breakthrough, profitable campaigns, and we have helped turn startups into corporations and established businesses into multibillion-dollar enterprises.</p>
			</div>
			<div class="split__media reveal"><div class="big">Est. 1985 in California<br />Now in Nashville</div></div>
		</div>
	</section>

	<!-- Timeline / milestones -->
	<section class="section section--navy">
		<div class="container">
			<div class="stats">
				<div class="reveal"><div class="stat__num">1985</div><div class="stat__label">Founded in California</div></div>
				<div class="reveal"><div class="stat__num">2020</div><div class="stat__label">Headquarters moved to Nashville</div></div>
				<div class="reveal"><div class="stat__num">40+</div><div class="stat__label">Years of direct response</div></div>
				<div class="reveal"><div class="stat__num">100+</div><div class="stat__label">Marketing awards won</div></div>
			</div>
		</div>
	</section>

	<!-- Leadership -->
	<section class="section" id="team">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Our Team</span>
				<h2>Leadership</h2>
				<p>The experience behind the campaigns.</p>
			</div>
			<div class="grid grid-3">
				<div class="card member reveal">
					<div class="member__photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/team/craig-huey.jpg' ); ?>" alt="Craig Huey, Founder and CEO" /></div>
					<h3>Craig Huey</h3>
					<div class="role">Founder &amp; CEO</div>
					<p>One of the world's leading experts in direct response marketing, direct mail, targeting, and data strategy. Winner of 126+ major marketing awards for breakthrough campaigns and a frequent guest on Fox News. Craig publishes the Direct Marketing Update newsletter.</p>
				</div>
				<div class="card member reveal">
					<div class="member__photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/team/caleb-huey.jpg' ); ?>" alt="Caleb Huey, President" /></div>
					<h3>Caleb Huey</h3>
					<div class="role">President</div>
					<p>An expert in direct marketing, digital marketing, video, television, radio, and integrated marketing solutions with more than a decade of industry experience. Caleb led the move to Tennessee and drove revenue to one of the best years in the company's history.</p>
				</div>
				<div class="card member reveal">
					<div class="member__photo">AC</div>
					<h3>Alicia Childers</h3>
					<div class="role">Chief Marketing Officer</div>
					<p>Seasoned marketing leader across enterprise and startup environments, integrating AI strategy, innovation, and emerging technology into direct response and omnichannel campaigns to drive smarter, faster results.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Wider team -->
	<section class="section section--light">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Specialists Under One Roof</span>
				<h2>A full team for full-service marketing</h2>
				<p>Our team spans operations, business development, creative direction, account management, design, data analysis, print production, and digital marketing, with decades of combined experience.</p>
			</div>
			<div class="grid grid-4">
				<div class="card member reveal"><div class="member__photo">BD</div><h3>Business Development</h3><div class="role">Growth &amp; Partnerships</div></div>
				<div class="card member reveal"><div class="member__photo">CD</div><h3>Creative Direction</h3><div class="role">Copy &amp; Concept</div></div>
				<div class="card member reveal"><div class="member__photo">DA</div><h3>Data &amp; Analytics</h3><div class="role">Testing &amp; Targeting</div></div>
				<div class="card member reveal"><div class="member__photo">PP</div><h3>Print Production</h3><div class="role">Direct Mail Delivery</div></div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="cta-banner reveal">
				<h2>Put four decades of experience to work</h2>
				<p>Let's talk about what we can make, build, and scale together.</p>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--light btn--lg">Let's Talk</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
