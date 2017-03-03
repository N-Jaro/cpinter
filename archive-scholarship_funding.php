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
                        <h1>SCHOLARSHIP AND <strong>FUNDING</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content container-fluid">
        <div class="container">

            <div class="col-xs-12">
                <div class="row">
                    <h3 class="section-header">Scholarships</h3>
                </div>
            </div>

            <?php
            $arg1 = array(
                'post_type' => 'scholarship_funding',
                'posts_per_page' => -1,
                'meta_key' => 'type',
                'meta_value' => 'scholarship'
            );
            $my_query = null;
            $my_query = new WP_Query($arg1);
            $counter=1;

            while ( $my_query->have_posts() ) :  $my_query->the_post(); ?>   

            <div class="scholarship col-xs-12">
                <div class="row">
                    <div class="col-lg-8">
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                    </div>
                    <div class="col-lg-4 btn-wrap">
                        <a class="btn btn-default" href="<?php the_field('details_url'); ?>" target="_new">More Details</a>
                        <?php if( get_field('application_form')) { ?>
                            <a class="btn btn-trans" href="<?php the_field('application_form'); ?>" target="_new">Application Form</a>
                        <?php } elseif(get_field('application_form_url')) { ?>
                            <a class="btn btn-trans" href="<?php the_field('application_form_url'); ?>" target="_new">Application Form</a>
                         <?php } else {}?>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
			<div class="scholarship col-xs-12">
				<div class="row">
                    <div class="col-lg-8">
					<h4>Computer Engineering PhD Honours Program Scholarship (to be confirmed)</h4>
                   <p> will be awarded to successful applicants who recieve the scholarship equivalent to 100th Anniversary Chulalongkorn University Fund for Doctoral Scholarship.</p>
                    </div>
				</div>
			</div>


            <div class="col-xs-12">
                <div class="row">
                    <h3 class="section-header">Research Funding</h3>
                </div>
            </div>

             <?php
                $arg1 = array(
                    'post_type' => 'scholarship_funding',
                    'posts_per_page' => -1,
                    'meta_key' => 'type',
                    'meta_value' => 'funding'
                );
                $my_query = null;
                $my_query = new WP_Query($arg1);
                $counter=1;

                while ( $my_query->have_posts() ) :  $my_query->the_post(); ?>   

            <div class="scholarship col-xs-12">
                <div class="row">
                    <div class="col-lg-8">
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                    </div>
                    <div class="col-lg-4 btn-wrap">

                         <a class="btn btn-default" href="<?php the_field('details_url'); ?>" target="_new">More Details</a>
                        <?php if( get_field('application_form')) { ?>
                            <a class="btn btn-trans" href="<?php the_field('application_form'); ?>" target="_new">Application Form</a>
                        <?php } elseif(get_field('application_form_url')) { ?>
                            <a class="btn btn-trans" href="<?php the_field('application_form_url'); ?>" target="_new">Application Form</a>
                         <?php } else {}?>
                    </div>
                </div>
            </div>


            <?php endwhile; ?>

        </div>
    </div>


<?php
//get_sidebar();
get_footer();
