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
					<div class="member__photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/team/scott-sheppard.jpg' ); ?>" alt="Scott Sheppard, Chief Operating Officer" /></div>
					<h3>Scott Sheppard</h3>
					<div class="role">Chief Operating Officer</div>
					<p>Scott brings 20 years of experience as an entrepreneur and executive, from small businesses to the Fortune 200. As COO of Click Effects he grew it into a world leader in video content delivery, serving more than 70% of professional sports teams and major events like the Super Bowl and the Olympics, before managing its sale to ChyronHego.</p>
				</div>
				<div class="card member reveal">
					<div class="member__photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/team/alicia-childers.jpg' ); ?>" alt="Alicia Childers, Chief Marketing Officer" /></div>
					<h3>Alicia Childers</h3>
					<div class="role">Chief Marketing Officer</div>
					<p>Seasoned marketing leader across enterprise and startup environments, integrating AI strategy, innovation, and emerging technology into direct response and omnichannel campaigns to drive smarter, faster results.</p>
				</div>
				<div class="card member reveal">
					<div class="member__photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/team/michael-oppenheimer.jpg' ); ?>" alt="Michael Oppenheimer, Director of Business Development" /></div>
					<h3>Michael Oppenheimer</h3>
					<div class="role">Director of Business Development</div>
					<p>More than three decades of broadcast media experience with iHeartMedia and Comcast, plus leadership roles in numerous statewide and national organizations. Michael leads new business development and partnerships for CDMG.</p>
				</div>
				<div class="card member reveal">
					<div class="member__photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/team/brandon-brison.jpg' ); ?>" alt="Brandon Brison, Creative Director" /></div>
					<h3>Brandon Brison</h3>
					<div class="role">Creative Director</div>
					<p>An accomplished creative leader with a track record of award-winning work for clients from dynamic startups to billion-dollar corporations. Brandon pairs creativity, strategy, and leadership to deliver a modern brand experience that drives real marketing results.</p>
				</div>
				<div class="card member reveal">
					<div class="member__photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/team/jeremiah-dart.jpg' ); ?>" alt="Jeremiah Dart, Director of Data and Audiences" /></div>
					<h3>Jeremiah Dart</h3>
					<div class="role">Director of Data &amp; Audiences</div>
					<p>Sixteen years in marketing, data science, growth strategy, and audience profiling. Jeremiah connects clients with their most relevant prospects by combining profiling, transactional data, machine learning, and response messaging, so ad spend goes to the highest-return channels.</p>
				</div>
				<div class="card member reveal">
					<div class="member__photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/team/jorge-sandoval.jpg' ); ?>" alt="Jorge Sandoval, Director of Digital Marketing" /></div>
					<h3>Jorge Sandoval</h3>
					<div class="role">Director of Digital Marketing</div>
					<p>More than eight years enhancing clients' digital reach and engaging new customers. Jorge plans and monitors paid media and budgets day to day, focused on finding the most effective channels for the best return on digital investment.</p>
				</div>
				<div class="card member reveal">
					<div class="member__photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/team/nancy-gullette.jpg' ); ?>" alt="Nancy Gullette, Director of Print and Production" /></div>
					<h3>Nancy Gullette</h3>
					<div class="role">Director of Print &amp; Production</div>
					<p>A Nashville native and agency veteran who worked in the country music industry and at one of Tennessee's top agencies. Nancy delivers a world-class range of print and production, from advertisements and brochures to billboards and trade show displays.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Wider team -->
	<section class="section section--light">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">The Full Team</span>
				<h2>A full team for full-service marketing</h2>
				<p>Specialists across operations, account management, creative, design, and copy, working under one roof with decades of combined experience.</p>
			</div>
			<?php
			$team = array(
				array( 'alyssa-murphree',  'Alyssa Murphree',  'Senior Integrated Operations Manager' ),
				array( 'joe-hayden',       'Joe Hayden',       'Senior Account Executive' ),
				array( 'allison-lobel',    'Allison Lobel',    'Account Executive' ),
				array( 'suzanne-pfeil',    'Suzanne Pfeil',    'Senior Art Director' ),
				array( 'jessica-bourn',    'Jessica Bourn',    'Junior Art Director' ),
				array( 'brad-petersen',    'Brad Petersen',    'Copywriter' ),
			);
			echo '<div class="grid grid-3">';
			foreach ( $team as $m ) {
				printf(
					'<div class="card member reveal"><div class="member__photo"><img src="%s" alt="%s" /></div><h3>%s</h3><div class="role">%s</div></div>',
					esc_url( get_template_directory_uri() . '/assets/team/' . $m[0] . '.jpg' ),
					esc_attr( $m[1] ),
					esc_html( $m[1] ),
					esc_html( $m[2] )
				);
			}
			echo '</div>';
			?>
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
