<?php
/**
 * Contact page. Used automatically for the page with slug "contact".
 * Reproduces the static contact.html design. The form keeps the data-lead
 * hook, so it submits through the same lead handler as the rest of the site.
 */
get_header();
?>

	<section class="page-hero">
		<div class="container">
			<div class="breadcrumb">Home / Let's Talk</div>
			<h1>Let's talk</h1>
			<p>Let's talk about what we can make, build, and scale together. Send us your information to receive a free consultation.</p>
		</div>
	</section>

	<section class="section">
		<div class="container contact-grid">
			<div class="reveal">
				<span class="eyebrow">Get In Touch</span>
				<h2 style="margin-bottom:24px;">Reach the CDMG team</h2>
				<ul class="contact-info">
					<li>
						<div class="ci-ico">&#9990;</div>
						<div><h4>Phone</h4><a href="tel:6159334647">615.933.4647</a></div>
					</li>
					<li>
						<div class="ci-ico">&#9993;</div>
						<div><h4>Email</h4><a href="mailto:info@cdmginc.com">info@cdmginc.com</a></div>
					</li>
					<li>
						<div class="ci-ico">&#8982;</div>
						<div><h4>Office</h4><p>1313 4th Ave North<br />Nashville, TN 37208</p></div>
					</li>
					<li>
						<div class="ci-ico">&#9719;</div>
						<div><h4>Business Development</h4><p>Michael Oppenheimer, Director of Business Development</p></div>
					</li>
				</ul>
			</div>

			<div class="lead-card reveal">
				<h3>Request your free consultation</h3>
				<p>Tell us a little about your business and we will be in touch.</p>
				<form data-lead>
					<div class="field"><label for="c-name">Name</label><input id="c-name" name="name" type="text" placeholder="Your full name" required /></div>
					<div class="field"><label for="c-phone">Phone</label><input id="c-phone" name="phone" type="tel" placeholder="(615) 000-0000" required /></div>
					<div class="field"><label for="c-email">Email</label><input id="c-email" name="email" type="email" placeholder="you@company.com" required /></div>
					<div class="field"><label for="c-company">Company</label><input id="c-company" name="company" type="text" placeholder="Company name" /></div>
					<div class="field"><label for="c-msg">How can we help?</label><textarea id="c-msg" name="message" rows="4" placeholder="Tell us about your product and your goals"></textarea></div>
					<button type="submit" class="btn btn--primary btn--block btn--lg">Send My Request</button>
					<p class="form-note">No obligation. Compliant product marketing made easy.</p>
				</form>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
