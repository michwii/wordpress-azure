<?php
/**
 * Page for Posts Template as defined in Settings->Reading
 *
 * Used to display blog archive.
 *
 * @see http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scaffolding
 */

get_header(); 

global $sc_layout_class;
?>

<div id="inner-content" class="container">

	<div class="row <?php echo $sc_layout_class['row']; ?>">

		<div id="main" class="<?php echo $sc_layout_class['main']; ?> clearfix" role="main">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

						<header class="entry-header">

							<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							<p class="entry-meta vcard"><?php printf( __( 'Posted <time class="updated" datetime="%1$s"><a href="%5$s" title="%6$s">%2$s</a></time> by <span class="author">%3$s</span> <span class="amp">&amp;</span> filed under %4$s.', 'scaffolding' ), get_the_time( 'Y-m-d' ), get_the_time( get_option( 'date_format' ) ), scaffolding_get_the_author_posts_link(), get_the_category_list( ', ' ), get_permalink(), the_title_attribute( array( 'echo' => false ) ) ); ?></p>

						</header>

						<section class="entry-content clearfix">

							<?php
								the_content( sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'scaffolding' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'scaffolding' ),
									'after'  => '</div>',
								) );
							?>

						</section>

						<?php if ( get_the_tag_list() ) : ?>

							<footer class="entry-footer clearfix">

								<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

							</footer>

						<?php endif; ?>

					</article>

				<?php endwhile; ?>

				<?php get_template_part( 'template-parts/pager' ); // WordPress template pager/pagination ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/error' ); // WordPress template error message ?>

			<?php endif; ?>
			
		</div><?php // END #main ?>
		
		<?php get_sidebar(); ?>
		
	</div><?php // END .row ?>
	
</div><?php // END #inner-content ?>

<?php
get_footer();