<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bloge
 */
 global $bloge_theme_options;
 $bloge_read_more = esc_html( $bloge_theme_options['bloge-read-more-text'] );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('boxed'); ?>>
	<div class="bloge-post-wrapper">
		<div class="row reletive">
			<!--post thumbnal options-->
			<div class="bloge-post-thumb post-thumb">
				<?php
					if ( ! is_single() && get_the_post_thumbnail() ) {
			    		echo '<div class="bloge-image-section">' . the_post_thumbnail() . '</div>';
				}
				?>
			</div><!-- .post-thumb-->
		</div>
		<div class="content-box">
			<div class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</div><!-- .entry-header -->

			<div class="post-meta-wrapper">
				<?php
				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php bloge_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</div>

			<div class="entry-content">
					<?php the_excerpt(); ?>
			</div><!-- .entry-content -->

			<div class="entry-footer">
				<div class="row">
					<div class="col-sm-6 col-md-6 more-area text-left">
						<a href="<?php the_permalink(); ?>">
						<?php echo $bloge_read_more; ?>  <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
