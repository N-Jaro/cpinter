<?php
$css_path = get_template_directory_uri(); 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                        <h1>EXECUTIVE <strong>STAFFS</strong></h1>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet faucibus enim, eget
                            posuere ante. </p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrap container-fluid">
        <div class="container">
            <div class="row" id="staff-parent">

                <?php while ( have_posts() ) : the_post(); ?>
                
                <?php 
                $staff_object = get_field('staff');
                if( $staff_object ):                
                ?>

                <div class="staff-wrap col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="image col-xs-12 col-sm-12 col-md-5 col-lg-4">
                        <img src="<?php echo the_field('image', $staff_object->ID); ?>">
                    </div>
                    <div class="text col-xs-12 col-sm-12 col-md-7 col-lg-8">
                        <h2 class="name"><?php echo $staff_object->post_title; ?></h2>
                        <p class="position"><?php the_title(); ?></p>

                        <div class="contact">
                            <?php if(get_field('phone_number', $staff_object->ID)) : ?>
                            <div class="phone col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <p><?php echo the_field('phone_number', $staff_object->ID); ?></p>
                            </div>
                            <?php endif; ?>

                            <?php if(get_field('email', $staff_object->ID)) : ?>
                            <div class="email col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <p><?php echo the_field('email', $staff_object->ID); ?></p>
                            </div>
                            <?php endif; ?>

                            <?php if(get_field('location', $staff_object->ID)) : ?>
                            <div class="addr col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p><?php echo the_field('location', $staff_object->ID); ?></p>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
                        
                 <?php endwhile; ?>
                

            </div>
        </div>
    </div>

<?php
//get_sidebar();
get_footer();
