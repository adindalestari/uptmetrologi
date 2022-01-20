<?php 
		if ( is_active_sidebar('footer-col-1') || is_active_sidebar('footer-col-2') || is_active_sidebar('footer-col-3') ) { ?>

		<footer id="site-footer" class="site-section site-section-footer">
			<div class="site-section-wrapper site-section-wrapper-footer">

				<div class="site-columns site-columns-footer site-columns-3 clearfix">

					<?php
					$i = 0;
					$max = 3;
					while ($i < $max) { 
						$i++; 
						if ( is_active_sidebar('footer-col-' . esc_attr($i) ) ) {
						?><div class="site-column site-column-<?php echo esc_attr($i); ?>">
						<div class="site-column-wrapper clearfix">
							<?php if (is_active_sidebar('footer-col-' . esc_attr($i) )) { ?>
								<?php dynamic_sidebar( 'footer-col-' . esc_attr($i) ); ?>
							<?php } ?>
						</div><!-- .site-column-wrapper .clearfix -->
					</div><!-- .site-column .site-column-<?php echo esc_attr($i); ?> --><?php } } ?>

				</div><!-- .site-columns .site-columns-footer .site-columns-3 .clearfix -->

			</div><!-- .site-section-wrapper .site-section-wrapper-footer -->

		</footer><!-- #site-footer .site-section-footer --><?php 
		}
		?>

		<div id="site-footer-credit">
			<div class="site-section-wrapper site-section-wrapper-footer-credit">
				<p class="site-credit"><?php 
				$copyright_default = __('Copyright &copy; ','museo') . date("Y",time()) . ' ' . get_bloginfo('name') . '. '; 
				echo esc_html(get_theme_mod( 'museo_copyright_text', $copyright_default )); 
				if ( get_theme_mod('theme-display-footer-credit', 1 ) == 1) { ?> <span class="theme-credit"><?php esc_html_e('Theme by', 'museo'); ?> <a href="https://www.academiathemes.com/" rel="nofollow designer noopener" target="_blank">AcademiaThemes</a></span><?php } ?></p>
			</div><!-- .site-section-wrapper .site-section-wrapper-footer-credit -->
		</div><!-- #site-footer-credit -->

	</div><!-- .site-wrapper-all .site-wrapper-boxed -->

</div><!-- #container -->

<?php 
wp_footer(); 
?>
</body>
</html>