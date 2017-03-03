<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cpinter
 */

get_header(); ?>


    <div class="page-hero container-fluid"> 
            <div class="row">
                <div class="overlay container-fluid">
                    <div class="container">
                        <div class="text">
                            <h1><?php the_title(); ?></h1>
                            <?php if(get_field('hero_sub_text')){ ?>
                                <p><?php the_field('hero_sub_text'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cp_content container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>
                </div>
            </div>
        </div>
    </div>

<?php
//get_sidebar();
get_footer();
