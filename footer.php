<?php
/** footer.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

				tha_footer_before(); ?>
			
		<footer id="colophon" role="contentinfo">
			<div class="footer-content container">
				<div class="location row">
					<div class="span4 location-item">
		             <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Location Footer one Widget') ) : ?>
		                 <?php endif; ?>
		            </div>
					
					<div class="span4 location-item">
		             <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Location Footer two Widget') ) : ?>
		                 <?php endif; ?>
		            </div>
		            <div class="span4 location-item">
		             <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Location Footer three Widget') ) : ?>
		                 <?php endif; ?>
		            </div>
				</div><!-- .location .row -->
				<div class="social row">
					<div class="span12 social-icons">
		             <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Social icons Footer Widget') ) : ?>
		                 <?php endif; ?>
		            </div>
				</div><!-- .location .row -->
			</div><!-- .footer-content -->
			<div class="foot-bottom">
				<div class="container">
					<div class="footer-menu row">
					<?php tha_footer_top(); ?>
						<div class="site-logo span5"></div>
						<div class="verified span2"></div>
						<div id="page-footer" class="clearfix span5">
							<?php wp_nav_menu( array(
								'container'			=>	'nav',
								'container_class'	=>	'subnav',
								'theme_location'	=>	'footer-menu',
								'menu_class'		=>	'credits nav nav-pills pull-left',
								'depth'				=>	3,
								'fallback_cb'		=>	'the_bootstrap_credits',
								'walker'			=>	new The_Bootstrap_Nav_Walker,
							) );
							?>
							<!-- #remove the wordpress generator link
							<div id="site-generator"<?php echo has_nav_menu('footer-menu') ? ' class="footer-nav-menu"' : ''; ?>>
								
								<a	href="<?php echo esc_url( __( 'http://wordpress.org/', 'the-bootstrap' ) ); ?>"
									title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'the-bootstrap' ); ?>"
									target="_blank"
									rel="generator"><?php printf( _x( 'Proudly powered by %s', 'WordPress', 'the-bootstrap' ), 'WordPress' ); ?></a>
							</div> -->
						</div><!-- #page-footer .well .clearfix -->
					</div><!-- .footer-menu .row -->
					<div class="copyright row">
						<div class="span12">
			             <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Copyright Footer Widget') ) : ?>
			                 <?php endif; ?>
			            </div>
					</div><!-- .copyright .row -->
				</div><!-- .container -->
			</div><!-- .foot-bottom -->
			<div id="page-footer" class="clearfix">
			<?php tha_footer_bottom(); ?>
			</div><!-- #page-footer -->
		</footer><!-- #colophon -->
		<?php tha_footer_after(); ?>
			
	<!-- <?php printf( __( '%d queries. %s seconds.', 'the-bootstrap' ), get_num_queries(), timer_stop(0, 3) ); ?> -->
	<?php wp_footer(); ?>
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */