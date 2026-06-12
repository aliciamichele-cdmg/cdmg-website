<?php
/**
 * 5 Dimensional Marketing page. Used automatically for the page with slug
 * "5-dimensions". Reproduces the static 5-dimensions.html design.
 */
get_header();
?>

	<section class="page-hero">
		<div class="container">
			<div class="breadcrumb">Home / 5 Dimensions</div>
			<h1>5 Dimensional Marketing</h1>
			<p>Our proprietary approach brings five disciplines together into one accountable growth engine. Each dimension is powerful on its own. Together they compound your response and your profit.</p>
		</div>
	</section>

	<!-- Dimension 1 -->
	<section class="section">
		<div class="container split">
			<div class="reveal">
				<span class="eyebrow">Dimension One</span>
				<h2>Load &amp; Aim</h2>
				<p style="margin:16px 0;">Before a single dollar is spent, we define your message, your market, and your offer. Strategic business storytelling gives the campaign a clear target and a reason to believe, so everything that follows is pointed in the right direction.</p>
				<ul class="check-list">
					<li>Positioning and message strategy</li>
					<li>Audience and offer definition</li>
					<li>The story that frames the whole campaign</li>
				</ul>
			</div>
			<div class="split__media reveal"><div class="big">01<br />Load &amp; Aim</div></div>
		</div>
	</section>

	<!-- Dimension 2 -->
	<section class="section section--light">
		<div class="container split">
			<div class="split__media reveal" style="order:-1;"><div class="big">02<br />Direct Mail Magic</div></div>
			<div class="reveal">
				<span class="eyebrow">Dimension Two</span>
				<h2>Direct Mail Magic</h2>
				<p style="margin:16px 0;">Direct mail still delivers response that digital alone cannot match. We leverage that power with targeting and data strategy refined over four decades, turning a mailbox into one of your most accountable channels.</p>
				<ul class="check-list">
					<li>List targeting and data strategy</li>
					<li>Tested copy and creative</li>
					<li>Print production managed end to end</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- Dimension 3 -->
	<section class="section">
		<div class="container split">
			<div class="reveal">
				<span class="eyebrow">Dimension Three</span>
				<h2>Digital Marketing</h2>
				<p style="margin:16px 0;">Integrated online strategies capture demand and convert attention into measurable action. From paid media and social to landing pages and email, every digital touch is built to perform and to be tracked. We also optimize every campaign for AI answer engines and actively promote our clients to the LLMs, so your brand shows up where buyers increasingly start their search.</p>
				<ul class="check-list">
					<li>Paid media and search</li>
					<li>Social media marketing</li>
					<li>Landing pages built to convert</li>
					<li>Email and marketing automation</li>
					<li>AI visibility and Answer Engine Optimization (AEO)</li>
				</ul>
			</div>
			<div class="split__media reveal"><div class="big">03<br />Digital Marketing</div></div>
		</div>
	</section>

	<!-- Dimension 4 -->
	<section class="section section--light">
		<div class="container split">
			<div class="split__media reveal" style="order:-1;"><div class="big">04<br />Media Revived</div></div>
			<div class="reveal">
				<span class="eyebrow">Dimension Four</span>
				<h2>Media Revived</h2>
				<p style="margin:16px 0;">Television, radio, and traditional channels still reach audiences at scale. We integrate them into the campaign and hold them to the same standard of accountability as every other dimension.</p>
				<ul class="check-list">
					<li>Television and radio</li>
					<li>Connected TV (CTV) and streaming ads</li>
					<li>Traditional channel integration</li>
					<li>Tracked, accountable media buys</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- Dimension 5 -->
	<section class="section">
		<div class="container split">
			<div class="reveal">
				<span class="eyebrow">Dimension Five</span>
				<h2>Test, Analyze, Tune</h2>
				<p style="margin:16px 0;">This is the discipline that ties the other four together. We test continuously, analyze what the data tells us, and tune the campaign so winning ideas get scaled and waste gets eliminated.</p>
				<ul class="check-list">
					<li>Structured testing at every stage</li>
					<li>Response and profit analysis</li>
					<li>Continuous optimization and scale</li>
				</ul>
			</div>
			<div class="split__media reveal"><div class="big">05<br />Test, Analyze, Tune</div></div>
		</div>
	</section>

	<section class="section section--navy">
		<div class="container center reveal" style="max-width:720px;">
			<h2>Five dimensions. One accountable system.</h2>
			<p style="margin:16px 0 28px;">When the dimensions work together, every channel reinforces the others and the whole campaign becomes measurable. That is how we increase your response, your market presence, and your profits.</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">Let's Talk</a>
		</div>
	</section>

<?php get_footer(); ?>
