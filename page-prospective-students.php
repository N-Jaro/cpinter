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

<?php  while ( have_posts() ) : the_post(); ?>

<div class="page-hero container-fluid">
        <div class="row">
            <div class="overlay container-fluid">
                <div class="container">
                    <div class="text">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

                        <?php
                       
                        
                       // the_content();
                        
                        endwhile; ?>

<div class="content container-fluid">
        <div class="container">
            <!--<div class="col-xs-12 open-text">
                <div class="row">
                    <p>Join the best community of Cumputer Engineering in Thailand. As a student in Computer Engineering at
                        Chulalongkorn University, you will find countless ways to explore your intellectual curiosity. However
                        you spend your time, you are sure to find every moment is unforgettable and valuable.</p>
                    <p>Department of Cumputer Engineering offers the best post-graduate courses for international students. Designed to combine both theoretical foundations of computing and the practical engineering knowledge,
                        these courses aim to empower students with the most required skillsets in the industry.</p>
                </div>
            </div>-->

            <div class="col-xs-12">
                <div class="row">
                    <h3 class="section-header">Degrees Offered</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="degree-wrap col-xs-12">
                    <div class="row text-center">
                        <h2><strong>Master of Engineering</strong> <br>in Computer Engineering</h2>
                        <a href="<?php echo esc_url( home_url('/application/') ); ?>" class="btn btn-default">HOW TO APPLY</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('master') ) ); ?>" class="btn btn-trans">MORE DETAILS</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="degree-wrap col-xs-12">
                    <div class="row text-center">
                        <h2><strong>Doctor of Philosophy</strong> <br>in Computer Engineering</h2>
                        <a href="<?php echo esc_url( home_url('/application/') ); ?>" class="btn btn-default">HOW TO APPLY</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path('doctor') ) ); ?>" class="btn btn-trans">MORE DETAILS</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="row">
                    <h3 class="section-header">OTHER INFORMATION</h3>
                    <ul class="other-info">
                        <li><a href="http://www.chula.ac.th/en/about/cu-at-a-glance"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> About Chulalongkorn University</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

            
<?php
//get_sidebar();
get_footer();
