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
                        <h1><strong>ACCOMMODATION</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content container-fluid cp_content">
        <div class="acco-content container">

            <h3>ON CAMPUS</h3>
            <p>On campus accommodation for international students is available at Chulalongkorn University International House
                (CU iHouse).</p>
            <p>Chulalongkorn University International House ( CU iHouse) is a 26-storey, 846-unit, on campus residence for international
                students and lecturers. Rooms come fully furnished with air conditioning, modern conveniences, 24-hour security
                and safety systems. The residence is included in the university’s shuttle bus services.</p>

            <div class="image col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <img src="<?php echo $css_path."/"?>img/Ihouse.jpg">
            </div>
            <div class="image col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <img src="<?php echo $css_path."/"?>img/Ihouse-1.jpg">
            </div>
            <div class="image col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <img src="<?php echo $css_path."/"?>img/Ihouse-2.jpg">
            </div>
            <div class="image col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <img src="<?php echo $css_path."/"?>img/Ihouse-4.jpg">
            </div>
            <div class="image col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <img src="<?php echo $css_path."/"?>img/Ihouse-5.jpg">
            </div>
            <div class="image col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <img src="<?php echo $css_path."/"?>img/Ihouse-6.jpg">
            </div>

            <h4>Monthly Accommodation Fee (Utility charges not included)</h4>

            <table class="table">
                <tbody>
                    <thead>
                        <th class="text">
                            <strong>Type of Room</strong>
                        </th>
                        <th>
                            <strong>Baht/room/month</strong>
                        </th>
                        <th>
                            <strong>Units</strong>
                        </th>
                    </thead>
                    <tr>
                        <td valign="top">
                            Studio 25 sq. m. <br class="visible-xs">(1 bed)
                        </td>
                        <td valign="top">
                            14,000 THB
                        </td>
                        <td valign="top">
                            180
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Studio 25 sq. m. <br class="visible-xs">(2 bed)
                        </td>
                        <td valign="top">
                            14,000 THB
                        </td>
                        <td valign="top">
                            546
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            1 Bedroom 50 sq. m. <br class="visible-xs">(1 bed)
                        </td>
                        <td valign="top">
                            22,000 THB
                        </td>
                        <td valign="top">
                            36
                        </td>
                    </tr>
                </tbody>
            </table>


            <p><strong>Remark:</strong></p>
            <ul>
                <li>Two-months room deposit and one-month rental fee must be paid in advance.</li>
                <li>Daily Rental Fee (including room service) for visitors /guests: 900 THB/ Day</li>
            </ul>


            <p><strong>Service and Facilities</strong></p>
            <ul class="col-xs-12 col-md-6 col-lg-3">
                <li>24-hour convenience store</li>
                <li>24-hour reception service</li>
                <li>24-hour technician service</li>
            </ul>
            <ul class="col-xs-12 col-md-6 col-lg-3">
                <li>Coffee shop &amp; Bakery</li>
                <li>Free Internet Wi-Fi</li>
                <li>Free TV connection</li>
            </ul>
            <ul class="col-xs-12 col-md-6 col-lg-3">
                <li>Laundry</li>
                <li>Lobby and Garden</li>
                <li>Retail Shop</li>
            </ul>
            <ul class="col-xs-12 col-md-6 col-lg-3">
                <li>Shuttle Bus to the University</li>
                <li>Stationary</li>
                <li>Study Room</li>
            </ul>
            <h4>Contact Information</h4>
            <p><strong>Address:</strong> CU iHouse 268 Chulalongkorn Soi9, Charasmuang road, Wangmai, Pathumwan, Bangkok, Thailand</p>
            <p><strong>Tel:</strong> +662 217 3188</p>
            <p><strong>Fax:</strong> +662 217 3111</p>
            <p><strong>Email:</strong> cuh.remsthailand@colliers.com</p>




            <h3 class="section-header">OFF CAMPUS</h3>
            <p>Please contact Office of International Affairs for more information at int.off@chula.ac.th (Tel: +662 218 3334-5)
                or check out the following lists :</p>

            <ul>
                <li><a href="http://www.nonsiresidence.com" target="_blank">Nonsi Residence</a></li>
                <li><a href="http://www.kobayashi.co.th/Thaigo/silom/apartment/Silom2093.html" target="_blank">Thada Court&nbsp;Apartment</a></li>
                <li><a href="http://www.hotelthailand.com/bangkok/theblooms/" target="_blank">The Blooms Residence</a></li>
                <li><a href="http://www.renohotel.co.th" target="_blank">Reno Hotel</a></li>
                <li><a href="http://www.thenarathiwas.com/" target="_blank">The Narathiwas</a></li>
            </ul>

        </div>
    </div>

<?php
//get_sidebar();
get_footer();
