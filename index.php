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

 <div class="hero container-fluid">
        <div class="row">
            <div class="overlay container-fluid">
                <div class="container">
                    <div class="hero-text row">
                        <div class="text col-xs-12 col-sm-8 col-md-7 col-lg-7">

                            <h1>
                                <strong>We are</strong> 
                                <span id="js-rotating"> No.1 Computer Engineering Program in Thailand, No.45 in Asia in QS World University Rankings</span>
                                </h1>
                                <p> <span id="js-rotating2"></span>
                            <p>
                               Computer Engineering at Chulalongkorn University is one of the most innovative departments in the Faculty of Engineering. There are more than 35 full-time faculty members and more than 500 students. We bring cutting-edge technology research, development and design into our classrooms to ensure that our students are top notch in the field.
                            </p>
                            
                            <a class="btn btn-default" href="<?php echo esc_url( get_permalink( get_page_by_title( 'APPLICATION PROCESS' ) ) ); ?>">HOW TO APPLY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php
//get_sidebar();
get_footer();
