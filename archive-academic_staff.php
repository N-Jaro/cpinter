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
                        <h1>RESEARCH AREAS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrap container-fluid">
        <div class="container">

            <div class="row" id="staff-parent">

                <?php while ($my_query -> have_posts() ) : $my_query->the_post(); ?>

                <div class="staff-wrap col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="image col-xs-12 col-sm-12 col-md-5 col-lg-4">
                        <img src="<?php echo the_field('image'); ?>">
                    </div>
                    <div class="text col-xs-12 col-sm-12 col-md-7 col-lg-8">
                        <h2 class="name"><?php the_title(); ?></h2>
                        <p class="position"><?php echo the_field('position'); ?></p>

                        <div class="contact">
                            <?php //if(get_field('phone_number')) : ?>
                                <!--<div class="phone col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <p><?php echo the_field('phone_number'); ?></p>
                                </div>-->
                            <?php //endif; ?>

                            <?php if(get_field('email')) : ?>
                                <div class="email col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <p><?php echo the_field('email'); ?></p>
                                </div>
                            <?php endif; ?>
                            
                            <?php //if(get_field('website')) : ?>
                            <!--<div class="website col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="<?php echo the_field('website'); ?>"><p>Personal website</p></a>
                            </div>-->
                            <?php //endif; ?>

                            <?php if(get_field('location')) : ?>
                            <div class="addr col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p><?php echo the_field('location'); ?></p>
                            </div>
                            <?php endif; ?>

                            
                            <div class="interest col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <p><strong>Research Interests</strong></p>
                                    <p>
                                        <?php
                                        $terms = get_the_terms( $post->ID , 'research_interest');
                                        $num_terms =  count($terms);
                                        $counter = 0;
                                        if($terms) {
                                            foreach ( $terms as $term ) {
                                                $term_link = get_term_link( $term );
                                                //echo "<a href=\"".$term_link."\">";
                                                echo $term->name;
                                                //echo "</a>";
                                                if(++$counter !== $num_terms) {
                                                    echo ", ";
                                                }
                                            }
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                        
                 <?php endwhile; ?>
                

            </div>
        </div>
    </div>

<?php
//get_sidebar();
get_footer('academic-staff');
