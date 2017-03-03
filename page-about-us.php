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
<?php while ( have_posts() ) : the_post(); ?>
                        
<div class="page-hero container-fluid">
        <div class="row">
            <div class="overlay container-fluid">
                <div class="container">
                    <div class="text">
                        <h1><?php the_title(); ?></h1>
                        <!--<p><?php the_field('hero_sub_text'); ?></p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-content container-fluid cp_content">
        <div class="container">
            <div class="row">
                <div class="left col-md-4 col-lg-3">
                    <div class="img-wrap">
                        <div class="left-img-outter hidden-sm hidden-xs">
                            <div class="left-img-wrap">
                                <img src="<?php the_field('left_image'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right col-xs-12 col-sm-12 col-md-8 col-lg-9 ">
                    
                        <?php the_content(); ?>
                        
                </div>
            </div>
            <div class=" stat row">
                <div class="col-xs-12 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
                    <div class="stat-wrap col-xs-12">
                        <p class="header"><a href="http://www.topuniversities.com/university-rankings/university-subject-rankings/2016/computer-science-information-systems"><?php the_field('statistic_info_1'); ?></a></p>
                        <p class="description"><?php the_field('statistic_info_1_description'); ?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="stat-wrap col-xs-12">
                        <p class="header"><a href="http://www.topuniversities.com/university-rankings/asian-university-rankings/2016"><?php the_field('statistic_info_2'); ?></a></p>
                        <p class="description"><?php the_field('statistic_info_2_description'); ?></p>
                    </div>
                </div>
                <!--<p class="col-xs-12 text-right small">**according to <a href="https://www.reddit.com/r/AskReddit/comments/5njfi2/what_movie_changes_the_plot_if_you_add_a_random_r/" class="small">QS ranking</a> </p>-->

            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php
//get_sidebar();
get_footer();
