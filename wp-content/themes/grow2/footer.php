<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id="main-core".
 *
 * @package ThinkUpThemes
 */
?>

		</div><!-- #main-core -->
		</div><!-- #main -->
		<?php /* Sidebar */ thinkup_sidebar_html(); ?>
	</div>
	</div><!-- #content -->

	<footer>
		<?php /* Custom Footer Layout */ thinkup_input_footerlayout();
		echo	'<!-- #footer -->'; ?>
		<div id="sub-footer">
		<div id="sub-footer-core">
		
			<div>
                <center><h4 style="color:white"><marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10">metrologie.pekanbaru@gmail.com   |   Jl. Jend. Ahmad Yani No. 128 Kota Pekanbaru 28127   |   (0761) 23902</marquee</h4></center>
            </div>

		</div>
		</div>
	</footer><!-- footer -->

</div><!-- #body-core -->

<?php wp_footer(); ?>

</body>
</html>