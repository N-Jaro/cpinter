<?php
	$css_path = get_template_directory_uri(); 
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
                        <h1><strong>FACILITIES</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content container-fluid">
        <div class="container">

            <div class="row" id="fac-parent">

                <div class="facility-wrap col-md-6 col-lg-4">
                    <h3 class="fac-header">Libraries</h3>
                    <div class="fac-image">
                        <img src="<?php echo $css_path."/"?>img/library_icon.png">
                    </div>
                    <div class="fac-description">
                        <p>Students can access every library on campus. For examples, </p>
                        <p><a href="http://www.library.eng.chula.ac.th/">Engineering Library</a></p>
                        <p><a href="http://www.library.chula.ac.th/">Chulalongkorn University Library</a></p>
                    </div>
                </div>

                <div class="facility-wrap col-md-6  col-lg-4">
                    <h3 class="fac-header">Computer Centers</h3>
                    <div class="fac-image">
                        <img src="<?php echo $css_path."/"?>img/comcen_icon.png">
                    </div>
                    <div class="fac-description">
                        <p>Our major computer center is located in the Faculty of Engineering, while students have acces to other computer centers around the campus.</p>
                        <p><a href="http://www.ecc.eng.chula.ac.th/">Engineering Computer Center</a></p>
                    </div>
                </div>

                <div class="facility-wrap col-md-6  col-lg-4">
                    <h3 class="fac-header">Internet Lounge</h3>
                    <div class="fac-image">
                        <img src="<?php echo $css_path."/"?>img/lounge_icon.png">
                    </div>
                    <div class="fac-description">
                        <p>The Faculty promotes bring-your-own-device (BYOD) by providing spaces as internet lounge.</p>
                    </div>
                </div>

                <div class="facility-wrap col-md-6  col-lg-4">
                    <h3 class="fac-header">Shuttle Bus</h3>
                    <div class="fac-image">
                        <img src="<?php echo $css_path."/"?>img/bus_icon.png">
                    </div>
                    <div class="fac-description">
                        <p>Free shuttle buses are available to connect main campus with major public transport hubs including MRT and BTS.
                        </p>

                        <p><a href="http://www.chula.ac.th/en/our-campus/cu-shuttle-bus">Shuttle Bus</a></p>
                    </div>
                </div>

                <div class="facility-wrap col-md-6  col-lg-4">
                    <h3 class="fac-header">Sports Complex</h3>
                    <div class="fac-image">
                        <img src="<?php echo $css_path."/"?>img/sport_icon.png">
                    </div>
                    <div class="fac-description">
                        <p>The university sports complex is equiped with wide range of sport facilities including football stadium, athletic tracks, an indoor gymnasium for volleyball, badminton, and gymnastics, tennis courts, swimming pools, and fitness center.
                        </p>
                        <p><a href="http://www.cusc.chula.ac.th/wordpress/">Chulalongkorn University Sports Center</a></p>
                    </div>
                </div>

                <div class="facility-wrap col-md-6  col-lg-4">
                    <h3 class="fac-header">Canteen</h3>
                    <div class="fac-image">
                        <img src="<?php echo $css_path."/"?>img/canteen_icon.png">
                    </div>
                    <div class="fac-description">
                        <p>Student can enjoy their meals at any canteen on campus at reasonable price.</p>
                    </div>
                </div>

                <div class="facility-wrap col-md-6  col-lg-4">
                    <h3 class="fac-header">Health Care Services</h3>
                    <div class="fac-image">
                        <img src="<?php echo $css_path."/"?>img/health_icon.png">
                    </div>
                    <div class="fac-description">
                        <p>The university healthcare unit is staffed by Chulalongkorn Memorial Hospital doctors and nurses where students and staffs can access from 9 a.m. to 4 p.m. </p>
                        <p><a href="http://www.cuhc.chula.ac.th/hospital/">Chulalongkorn University Health Service Center</a>
                    </div>
                </div>

                <div class="facility-wrap col-md-6  col-lg-4">
                    <h3 class="fac-header">Accomodation</h3>
                    <div class="fac-image">
                        <img src="<?php echo $css_path."/"?>img/accomodation_icon.png">
                    </div>
                    <div class="fac-description">
                        <p>On campus accommodation for international students is available at Chulalongkorn University International House (CU iHouse).</p>

                        <p><a href="#">CU i-House</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
//get_sidebar();
get_footer('facilities');
