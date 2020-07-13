<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bigwigs
 */

get_header();
bigwigs_content_wrapper_start();
?>

	<div id="primary" class="content-area<?php bigwigs_content_class(); ?>">
		<main id="main" class="site-main" role="main">

	<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
			?>
				<header>
					<h1 class="page-title screen-reader-text">
						<?php single_post_title(); ?>
					</h1>
				</header>
			<?php
			endif;

			if( is_archive() ) :
			?>
				<header class="archive-header pb-4">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header>
			<?php
			endif;

			if ( get_theme_mod( 'blog_layout' ) == 'grid' ) {
				echo '<div class="grid row">';
			}

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
				
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;

			if ( get_theme_mod( 'blog_layout' ) == 'grid' ) {
				echo '</div>';
			}

			if( get_theme_mod( 'blog_pagination_mode' ) == 'numeric' ){
				the_posts_pagination();
			}
			else{
				the_posts_navigation();
			}

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
	?>

		</main>
	</div><!-- #primary -->

<?php
get_sidebar(); /* Get Sidebar #secondary */
bigwigs_content_wrapper_end();
get_footer();