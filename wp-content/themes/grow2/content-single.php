<?php
/**
 * The Single Post content template file.
 *
 * @package ThinkUpThemes
 */
?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php thinkup_input_postmedia(); ?>
		<?php thinkup_input_postmeta(); ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		
		<div class="social">
		<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink()?>&t=<?php the_title()?>" title="Share this post on Facebook" onclick="window.open(this.href); return false;">Share ke Facebook</a>
		<a class="twitter" href="https://twitter.com/share?text=<?php the_title()?>&url=<?php the_permalink()?>" title="Share this post on Twitter" target="_blank">Share ke Twitter</a>
		<a class="whatsapp" href="whatsapp://send?text=<?php the_permalink()?>" title="Share this post on Whatsapp">Share ke WhatsApp</a>
		</div>


		</article>

		<div class="clearboth"></div>