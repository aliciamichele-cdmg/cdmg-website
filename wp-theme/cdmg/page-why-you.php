<?php
/**
 * Why You page. Used automatically for the page with slug "why-you".
 * Reproduces the static why-you.html design.
 */
get_header();
?>

	<section class="page-hero">
		<div class="container">
			<div class="breadcrumb">Home / Why You</div>
			<h1>Built for your category</h1>
			<p>Whether you are a startup finding its first audience or an established brand scaling into new markets, our methodology adapts to your product, your buyer, and your numbers.</p>
		</div>
	</section>

	<!-- Who we serve -->
	<section class="section">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Who We Serve</span>
				<h2>Two kinds of growth, one proven approach</h2>
				<p>For more than 40 years we have helped transform startups into large corporations and scaled established businesses into multibillion-dollar enterprises.</p>
			</div>
			<div class="grid grid-2">
				<div class="card reveal">
					<div class="card__icon">&#9650;</div>
					<h3>Startups and challengers</h3>
					<p>You have a product the market needs to hear about. We build the message, the offer, and the channels that turn first response into repeatable, profitable growth.</p>
				</div>
				<div class="card reveal">
					<div class="card__icon">&#9632;</div>
					<h3>Established brands</h3>
					<p>You have momentum and a budget to protect. We make every channel accountable, find the next layer of response, and scale what is already working.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Verticals -->
	<section class="section section--light">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">Verticals</span>
				<h2>Industries we know how to grow</h2>
				<p>Deep experience in product-driven and regulated categories where the creative has to perform and stay compliant.</p>
			</div>
			<div class="grid grid-3">
				<div class="card reveal"><div class="card__icon">+</div><h3>Consumer Health</h3><p>Compliant, high-response campaigns for health and wellness products that have to clear review and still convert.</p></div>
				<div class="card reveal"><div class="card__icon">$</div><h3>Financial Products</h3><p>Direct response built for the trust, disclosure, and precision that financial offers demand.</p></div>
				<div class="card reveal"><div class="card__icon">&#9670;</div><h3>Nutrition &amp; Supplements</h3><p>Targeted acquisition and retention programs for nutrition brands and subscription products.</p></div>
				<div class="card reveal"><div class="card__icon">&#9679;</div><h3>Insurance</h3><p>Lead generation and conversion campaigns engineered around a measurable cost per acquisition.</p></div>
				<div class="card reveal"><div class="card__icon">&#9889;</div><h3>Energy</h3><p>Brand and response campaigns for energy and resource companies reaching investors and consumers.</p></div>
				<div class="card reveal"><div class="card__icon">&#9654;</div><h3>Media &amp; Broadcast</h3><p>Audience growth and direct response for media, broadcast, and content platforms.</p></div>
				<div class="card reveal"><div class="card__icon">&#9672;</div><h3>Apparel &amp; Lifestyle</h3><p>Direct-to-consumer acquisition and brand building for apparel and lifestyle products.</p></div>
				<div class="card reveal"><div class="card__icon">&starf;</div><h3>Emerging Brands</h3><p>Launch strategy and first-dollar response for new products entering the market.</p></div>
				<div class="card reveal" style="background:var(--navy); border-color:var(--navy); display:flex; flex-direction:column; justify-content:center;">
					<h3 style="color:#fff;">Don't see your category?</h3>
					<p style="color:#c2cee0; margin-bottom:16px;">Our methodology travels. Tell us about your product.</p>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary">Let's Talk</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Brands -->
	<section class="section">
		<div class="container">
			<div class="section-head center reveal">
				<span class="eyebrow">In Good Company</span>
				<h2>Brands that have trusted CDMG</h2>
			</div>
			<div class="logos__row reveal">
				<span>Sun Chlorella</span><span>Healwell AI</span><span>Yerbae</span><span>WeightWatchers</span>
				<span>Humana</span><span>Chevron</span><span>1-800 Contacts</span><span>The Weather Channel</span>
				<span>Prairie Operating Co.</span><span>Alkaline88</span><span>True Religion Jeans</span><span>Starfighters Space</span>
				<span>The Good Flour Co.</span>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="cta-banner reveal">
				<h2>Let's grow your category</h2>
				<p>Tell us where you are and where you want to be. We will show you what accountable advertising can do.</p>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--light btn--lg">Let's Talk</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
