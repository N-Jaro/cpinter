<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cpinter
 */

get_header(); ?>

<div class="content-section container-fluid">
        <div class="container">
            <div class="row">

                <div class="left col-md-6 col-lg-9">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

						<?php
							while ( have_posts() ) : the_post();
						?>
							<div class="content">
								<h2 class="content-header"><?php the_title(); ?></h2>
								<p class="post-date text-right"><i class="fa fa-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?></p>
								<?php the_content();?>
							</div>
						<?php 
							endwhile; // End of the loop.
						?>

						</main><!-- #main -->
					</div><!-- #primary -->
				</div>
				<div class="col-lg-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
