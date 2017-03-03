<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cpinter
 */

get_header(); ?>

	<div id="primary" class="content-area" style="padding:50px 0;">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cpinter', convert_smilies( ':)' )  ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content text-center">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cpinter' ); ?></p>

					<?php
						get_search_form();

						/* translators: %1$s: smiley */
						// $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'cpinter' ), convert_smilies( ':)' ) ) . '</p>';
						// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						//the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
