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

<?php 

      $arg1 = array(
        'post_type' => 'academic_staff',
        'posts_per_page' => -1,
      );
      $my_query = null;
      $my_query = new WP_Query($arg1);

?>



<div class="page-hero container-fluid">
        <div class="row">
            <div class="overlay container-fluid">
                <div class="container">
                    <div class="text">
                        <h1>REASEARCH <strong>AREAS</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content container-fluid">
        <div class="container">
             <p>Department of Computer Engineering has prepared the unique environment for research and basic application in the world of computer technology. Our research compose of integrating development under computer science such as software, information system, computational methodology, mathematics for computation, hardware, computer system organization, data, computer application and other advanced science.</p>

                <p>We have many laboratories, specifically interesting in many computer science branches. All laboratories under our department are listed as follow.</p>

            <div class="row" id="research-parent">

               <?php
                $arg1 = array(
                    'post_type' => 'research_area',
                    'posts_per_page' => -1,
                );
                $my_query = null;
                $my_query = new WP_Query($arg1);
                $counter=1;

                while ( $my_query->have_posts() ) :  $my_query->the_post(); ?>   
                

                <div class="research-area col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="image col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            } ?>
                        </div>
                        <div class="text col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p><strong><?php the_title(); ?></strong></p>
                        </div>
                    </div>
                </div>
                        
                 <?php endwhile; ?>
                

            </div>
        </div>
    </div>

<?php
//get_sidebar();
get_footer();
