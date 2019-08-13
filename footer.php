<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" role="contentinfo" class="magimpact-footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="textwidget"><a href="/"><img class="footer_logo" src="<?php echo site_url();?>/wp-content/uploads/2015/11/magIMPACT-logos-556-100px.png" alt="magIMPACT, Inc." width="245"></a>

								<div class="top-10"></div>

								<a href="tel:800-576-9020">800-576-9020</a><br/>
								<a class="nowrap" href="mailto:marketing_assistance@magimpact.com">marketing_assistance@magimpact.com</a>
								<div class="top-20"></div>

								<figure class="social-footer">
									<span class="fa-stack fa-lg">
										<a href="https://www.facebook.com/magimpactmedia" target="_blank">
											<i class="fa fa-circle fa-stack-2x circle"></i>
											<i class="fa fa-facebook fa-stack-1x icon" ></i>
										</a>
									</span>

									<span class="fa-stack fa-lg">
										<a href="https://twitter.com/magimpact" target="_blank">
											<i class="fa fa-circle fa-stack-2x circle"></i>
											<i class="fa fa-twitter fa-stack-1x icon" ></i>
										</a>
									</span>

									<span class="fa-stack fa-lg">
										<a href="https://www.linkedin.com/company/magimpact" target="_blank">
											<i class="fa fa-circle fa-stack-2x circle"></i>
											<i class="fa fa-linkedin fa-stack-1x icon" ></i>
										</a>
									</span>
								</figure>

							</div>
						</div>
						<div class="top-50 visible-xs"></div>
						<div class="col-sm-6">

							<figure class="footer-search-box">
								<div class="row">
									<div class="col-sm-12">
										<p class="footer-title">SEARCH</p>
										<?php get_search_form(); ?>
									</div>
								</div>
							</figure>
							<div class="top-40"></div>
							<figure class="footer-explore">
								<div class="row">
									<div class="col-sm-12">
										<p class="footer-title bordered">EXPLORE</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<ul>
											<li>
												<a href="<?= get_home_url(); ?>">HOME</a>
											</li>
											<li>
												<a href="<?= get_home_url(); ?>/services">SERVICES</a>
											</li>
											<li>
												<a href="<?= get_home_url(); ?>/mytools">MYTOOLS</a>
											</li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul>
											<li>
												<a href="<?= get_home_url(); ?>/our-story">OUR STORY</a>
											</li>
											<li>
												<a href="<?= get_home_url(); ?>/faqs">FAQS</a>
											</li>
											<li>
												<a href="<?= get_home_url(); ?>/blog/marketing-101-basics-customers/">MARKETING 101</a>
											</li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul>
											<li>
												<a href="<?= get_home_url(); ?>/contact">CONTACT</a>
											</li>
											<li>
												<a href="<?= get_home_url(); ?>/blog">BLOG</a>
											</li>
											<li>
												<a href="<?= get_home_url(); ?>/cart">VIEW CART</a>
											</li>
										</ul>
									</div>
								</div>
							</figure>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
						</div>
					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							&copy; 2016 magIMPACT, Inc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="nowrap">
							<a href="http://magimpact.com/privacy-policy">Privacy Policy</a> |
							<a href="http://magimpact.com/terms-of-use">Terms of Use</a> |
							<a href="http://magimpact.com/refund-policy">Refund Policy</a>
						</span>

						</div>
					</div>
				</div>
			</div>

		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>