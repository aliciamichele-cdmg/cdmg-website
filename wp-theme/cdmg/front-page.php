<?php
/**
 * Home page.
 *
 * Used automatically when a static page is set as the site homepage
 * (Settings > Reading). Reproduces the static index.html design. The blog
 * teaser near the bottom pulls the three most recent posts automatically.
 */
get_header();
?>

	<!-- ===== Hero ===== -->
	<section class="hero">
		<div class="container hero__grid">
			<div>
				<span class="hero__badge">&starf; <b>100+</b> Marketing Awards Won</span>
				<h1>The art of marketing meets the <span>science of sales</span></h1>
				<p class="hero__lead">CDMG is a full-service direct response advertising and digital marketing agency. For more than 40 years we have built breakthrough, profitable campaigns that turn startups into corporations and scale established businesses into multibillion-dollar enterprises.</p>
				<div class="hero__cta">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">Let's Talk</a>
					<a href="<?php echo esc_url( home_url( '/5-dimensions/' ) ); ?>" class="btn btn--light btn--lg">See How It Works</a>
				</div>
			</div>
			<div class="lead-card">
				<h3>Request a Free Consultation</h3>
				<p>Let's talk about what we can make, build, and scale together.</p>
				<form data-lead>
					<div class="field">
						<label for="h-name">Name</label>
						<input id="h-name" name="name" type="text" placeholder="Your full name" required />
					</div>
					<div class="field">
						<label for="h-phone">Phone</label>
						<input id="h-phone" name="phone" type="tel" placeholder="(615) 000-0000" required />
					</div>
					<div class="field">
						<label for="h-email">Email</label>
						<input id="h-email" name="email" type="email" placeholder="you@company.com" required />
					</div>
					<button type="submit" class="btn btn--primary btn--block btn--lg">Get My Free Consultation</button>
					<p class="form-note">No obligation. Compliant product marketing made easy.</p>
				</form>
			</div>
		</div>
	</section>

	<!-- ===== Client logo strip ===== -->
	<section class="logos">
		<div class="container">
			<p>Trusted by brands and category leaders</p>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/client-logos.png' ); ?>" alt="Brands that trust CDMG, including True Religion, TheStreet, Humana, The Motley Fool, Chevron, The Weather Channel, 1-800 Contacts, WeightWatchers, Skechers, Alkaline88, Zacks, and Truth" style="display:block; max-width:620px; width:100%; height:auto; margin:6px auto 0;" />
			<a href="#more" class="scroll-cue" aria-label="Scroll for more"></a>
		</div>
	</section>

	<!-- ===== Value proposition ===== -->
	<section class="section" id="more" style="padding-top:40px;">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Accountable Advertising</span>
				<h2>Marketing that is built to be measured</h2>
				<p>Every campaign we create is designed to increase your response, your market presence, and your profits. We pair thoroughly tested copy with a multi-pronged delivery strategy and innovative, cost-effective tactics.</p>
			</div>
			<div class="grid grid-3">
				<div class="card reveal">
					<div class="card__icon">&#9678;</div>
					<h3>Tested Messaging</h3>
					<p>Decades of direct response experience produce copy and creative that is proven to move people to act, not just to admire.</p>
				</div>
				<div class="card reveal">
					<div class="card__icon">&#8646;</div>
					<h3>Multi-Channel Delivery</h3>
					<p>Direct mail, digital, and traditional media work together as one integrated system so your message reaches the right buyer everywhere.</p>
				</div>
				<div class="card reveal">
					<div class="card__icon">&#8599;</div>
					<h3>Measurable Profit</h3>
					<p>We test, analyze, and tune continuously. You see what is working, what to scale, and where every dollar of spend is going.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== 5 Dimensional Marketing cards ===== -->
	<section class="section section--light">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Our Methodology</span>
				<h2>5 Dimensional Marketing</h2>
				<p>Our proprietary approach brings five disciplines together into one accountable growth engine.</p>
			</div>
			<div class="grid grid-3">
				<div class="card dim reveal"><span class="dim__num">1</span>
					<h3>Load &amp; Aim</h3>
					<p>Strategic business storytelling that defines your message, your market, and your offer before a single dollar is spent.</p>
				</div>
				<div class="card dim reveal"><span class="dim__num">2</span>
					<h3>Direct Mail Magic</h3>
					<p>We leverage the unmatched response power of direct mail with targeting and data strategy refined over four decades.</p>
				</div>
				<div class="card dim reveal"><span class="dim__num">3</span>
					<h3>Digital Marketing</h3>
					<p>Integrated online strategies that capture demand and convert attention into measurable, profitable action.</p>
				</div>
				<div class="card dim reveal"><span class="dim__num">4</span>
					<h3>Media Revived</h3>
					<p>Television, radio, and traditional channels are integrated and made accountable as part of the full campaign.</p>
				</div>
				<div class="card dim reveal"><span class="dim__num">5</span>
					<h3>Test, Analyze, Tune</h3>
					<p>Data-driven optimization at every stage so winning campaigns get scaled and waste gets eliminated.</p>
				</div>
				<div class="card dim reveal" style="background:var(--navy); border-color:var(--navy); display:flex; flex-direction:column; justify-content:center;">
					<h3 style="color:#fff;">Ready to put all five to work?</h3>
					<p style="color:#c2cee0; margin-bottom:18px;">See the full methodology and how the dimensions combine.</p>
					<a href="<?php echo esc_url( home_url( '/5-dimensions/' ) ); ?>" class="btn btn--primary">Explore 5 Dimensions</a>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== Stats ===== -->
	<section class="section section--navy">
		<div class="container">
			<div class="stats">
				<div class="reveal"><div class="stat__num">40+</div><div class="stat__label">Years of experience</div></div>
				<div class="reveal"><div class="stat__num">100+</div><div class="stat__label">Marketing awards won</div></div>
				<div class="reveal"><div class="stat__num">2,000+</div><div class="stat__label">Industry articles published</div></div>
				<div class="reveal"><div class="stat__num">7x</div><div class="stat__label">Revenue growth led for clients</div></div>
			</div>
		</div>
	</section>

	<!-- ===== Split: Why CDMG ===== -->
	<section class="section">
		<div class="container split">
			<div class="reveal">
				<span class="eyebrow">Why CDMG</span>
				<h2>Compliant product marketing made easy</h2>
				<p style="margin:16px 0 26px;">We are a full-service direct response and digital marketing agency built on accountable advertising. Here is what working with us delivers.</p>
				<ul class="check-list">
					<li>Campaigns engineered for maximum response and measurable return</li>
					<li>Compliant creative for regulated and product-driven categories</li>
					<li>Targeting and data strategy refined across four decades</li>
					<li>A full team of strategists, creatives, analysts, and producers under one roof</li>
					<li>A proven track record turning startups into market leaders</li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/why-you/' ) ); ?>" class="btn btn--primary" style="margin-top:10px;">Why You, Why Now</a>
			</div>
			<div class="split__media reveal">
				<div class="big">"Increase your response, market presence, and profits through accountable advertising."</div>
			</div>
		</div>
	</section>

	<!-- ===== Process steps ===== -->
	<section class="section section--light">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">How We Work</span>
				<h2>From strategy to scale in three steps</h2>
			</div>
			<div class="steps">
				<div class="step reveal">
					<div class="step__circle">1</div>
					<h3>Discover</h3>
					<p>We learn your business, your buyer, and your numbers, then build the strategy and story that will carry the campaign.</p>
				</div>
				<div class="step reveal">
					<div class="step__circle">2</div>
					<h3>Build &amp; Launch</h3>
					<p>Our team produces tested creative across direct mail, digital, and media, then launches an integrated campaign.</p>
				</div>
				<div class="step reveal">
					<div class="step__circle">3</div>
					<h3>Measure &amp; Scale</h3>
					<p>We track response, tune what works, and scale the winners so your profit grows predictably over time.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== Testimonials ===== -->
	<section class="section">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Results That Speak</span>
				<h2>What partnership with CDMG looks like</h2>
			</div>
			<div class="testi-track">
					<div class="testi reveal">
						<div class="testi__stars">&starf;&starf;&starf;&starf;&starf;</div>
						<p class="testi__text">"You helped turn our finances around with your website redesign and successful launch of our premium product."</p>
						<div class="testi__who">Jim Cramer<small>Founder, TheStreet.com</small></div>
					</div>
					<div class="testi reveal">
						<div class="testi__stars">&starf;&starf;&starf;&starf;&starf;</div>
						<p class="testi__text">"If I want a unique out-of-the-box-thinking marketing experience that aligns with my message and the direction of my company, then CDMG is the ONLY company that comes to mind. They keep up with every marketing trend, they study their industries, and the people of CDMG have formed a super-team of excellence. The result is the top marketing company out there."</p>
						<div class="testi__who">James Altucher<small>Entrepreneur</small></div>
					</div>
					<div class="testi reveal">
						<div class="testi__stars">&starf;&starf;&starf;&starf;&starf;</div>
						<p class="testi__text">"My launch and growth successes: your CDMG team is the best."</p>
						<div class="testi__who">Jeff Lobell<small>Founder, True Religion Jeans</small></div>
					</div>
					<div class="testi reveal">
						<div class="testi__stars">&starf;&starf;&starf;&starf;&starf;</div>
						<p class="testi__text">"CDMG gave me phenomenal results. ROAS over 20X on many occasions. We worked with them from start up, to over $70M in sales."</p>
						<div class="testi__who">Ricky Write<small>Former President/CEO, Alkaline88</small></div>
					</div>
					<div class="testi reveal">
						<div class="testi__stars">&starf;&starf;&starf;&starf;&starf;</div>
						<p class="testi__text">"We saw a 10.5X Return on Ad Spend for sales that year and over 25X when you add our pipeline. The campaign was so effective we sold through our inventory and had back orders."</p>
						<div class="testi__who">Derek Cahill<small>Former CSO, Paladin Power</small></div>
					</div>
					<div class="testi reveal">
						<div class="testi__stars">&starf;&starf;&starf;&starf;&starf;</div>
						<p class="testi__text">"CDMG brought us leads that converted at a high dollar value. Their copy and targeting were the key. We worked together for many years as a quality flow of high end sales."</p>
						<div class="testi__who">Mary Boston<small>Chief Marketing Officer, Lear Capital</small></div>
					</div>
					<div class="testi reveal">
						<div class="testi__stars">&starf;&starf;&starf;&starf;&starf;</div>
						<p class="testi__text">"He's a marketing genius. Craig Huey took my idea and created a dream come true. From the launch, CDMG has helped me grow into one of the largest publishers and supplement companies in America."</p>
						<div class="testi__who">Dr. Bruce West<small>Founder, Health Alert</small></div>
					</div>
				</div>
		</div>
	</section>

	<!-- ===== Award recognition ===== -->
	<section class="section" style="padding-top:24px; padding-bottom:48px;">
		<div class="container center">
			<p class="reveal" style="font-family:var(--font-head); font-weight:700; font-size:.82rem; letter-spacing:.16em; text-transform:uppercase; color:var(--muted); margin-bottom:22px;">Award-winning work, recognized by</p>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/award-logos.png' ); ?>" alt="ANA International ECHO Awards, Web Marketing Association, B2 Awards, and MarCom Awards" class="reveal" style="display:block; max-width:560px; width:100%; height:auto; margin:0 auto;" />
		</div>
	</section>

	<!-- ===== Gallery / awards ===== -->
	<section class="section section--light">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Selected Work</span>
				<h2>Campaigns built for category leaders</h2>
				<p>A look at the brands and industries we have helped make, build, and scale.</p>
			</div>
			<div class="gallery">
				<div class="gallery__item g1 reveal">Consumer Health</div>
				<div class="gallery__item g2 reveal">Financial Products</div>
				<div class="gallery__item g3 reveal">Nutrition &amp; Supplements</div>
				<div class="gallery__item g4 reveal">Insurance</div>
				<div class="gallery__item g5 reveal">Energy</div>
				<div class="gallery__item g6 reveal">Media &amp; Broadcast</div>
				<div class="gallery__item g7 reveal">Apparel</div>
				<div class="gallery__item g8 reveal">Emerging Brands</div>
			</div>
		</div>
	</section>

	<!-- ===== FAQ ===== -->
	<section class="section">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Questions</span>
				<h2>Common questions, answered</h2>
			</div>
			<div class="faq">
				<div class="faq__item">
					<button class="faq__q">What is direct response advertising? <span class="ico">+</span></button>
					<div class="faq__a"><p>Direct response advertising is built to produce a measurable action from the audience, such as a call, a click, or a purchase. Every campaign is tracked so you can see exactly what it returns, which is the foundation of the accountable advertising we practice.</p></div>
				</div>
				<div class="faq__item">
					<button class="faq__q">What does "compliant product marketing" mean? <span class="ico">+</span></button>
					<div class="faq__a"><p>We build campaigns for product and regulated categories where the creative must perform and stay within the rules. We pair persuasive, tested messaging with the required disclosures and review so your marketing is both effective and compliant.</p></div>
				</div>
				<div class="faq__item">
					<button class="faq__q">What size of business do you work with? <span class="ico">+</span></button>
					<div class="faq__a"><p>Both. Over more than 40 years we have helped transform startups into large corporations and scaled established businesses into multibillion-dollar enterprises. The methodology adapts to where you are.</p></div>
				</div>
				<div class="faq__item">
					<button class="faq__q">Where is CDMG located? <span class="ico">+</span></button>
					<div class="faq__a"><p>CDMG was founded in California in 1985 and moved to Nashville, Tennessee in 2020. Our office is at 1313 4th Ave North, Nashville, TN 37208.</p></div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== Blog teaser (latest posts) ===== -->
	<section class="section section--light">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Learn From The Pros</span>
				<h2>Insights from the CDMG team</h2>
			</div>
			<?php
			$teaser = new WP_Query( array(
				'post_type'           => 'post',
				'posts_per_page'      => 3,
				'ignore_sticky_posts' => true,
			) );
			if ( $teaser->have_posts() ) :
				?>
				<div class="grid grid-3">
					<?php while ( $teaser->have_posts() ) : $teaser->the_post(); ?>
						<article class="post reveal">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" class="post__img" style="display:block; background-size:cover; background-position:center; background-image:url('<?php echo esc_url( get_the_post_thumbnail_url( null, 'medium_large' ) ); ?>');"></a>
							<?php else : ?>
								<a href="<?php the_permalink(); ?>" class="post__img g1" style="text-decoration:none;"><?php echo esc_html( cdmg_primary_category() ); ?></a>
							<?php endif; ?>
							<div class="post__body">
								<?php echo cdmg_primary_category_link(); ?>
								<h3><a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none;"><?php the_title(); ?></a></h3>
								<p><?php echo esc_html( cdmg_card_excerpt( 18 ) ); ?></p>
								<a href="<?php the_permalink(); ?>" class="post__more">Read more &rarr;</a>
							</div>
						</article>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			<?php else : ?>
				<p class="center">New articles are on the way. Check the DMU Blog soon.</p>
			<?php endif; ?>
			<div class="center" style="margin-top:40px;">
				<a href="<?php echo esc_url( cdmg_blog_url() ); ?>" class="btn btn--ghost">Visit the DMU Blog</a>
			</div>
		</div>
	</section>

	<!-- ===== CTA banner ===== -->
	<section class="section">
		<div class="container">
			<div class="cta-banner reveal">
				<h2>Let's make, build, and scale together</h2>
				<p>Tell us about your product and your goals. We will show you what accountable advertising can do for your response and your profit.</p>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--light btn--lg">Let's Talk</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
