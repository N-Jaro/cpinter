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
                        <h1><a href="http://www.chula.ac.th/CUpanoV1/CuPano.html" target="_blank">EXPLORE CHULA IN 360 DEGREES</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content container-fluid">
        <div class="container">
            <div class="row">
                <div class="left col-lg-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <h3 class="section-header"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Address</h3>
                            <p><strong>Department of Computer Engineering, Faculty of Engineering,</strong></p>
                            <p>Chulalongkorn University</p> 
                            <p>17th floor, Engineering Building 4, Phayathai Road, Pathumwan</p>
                            <p>Bangkok 10330 Thailand</p>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-12">
                                <h3 class="section-header"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>Telephone</h3>
                                <p>+66 2218 6959</p>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="section-header"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Fax</h3>
                                <p>+66 2218 6955</p>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="section-header"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email</h3>
                                <p>grad@cp.eng.chula.ac.th</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map col-md-6">
                        <h3>Map to Engineering Building 4</h3>
                        <div id="map" style="width:100%;height:492px;"></div>
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1370.270246303739!2d100.5333503514112!3d13.736027580454373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc54dfd256ddf479!2z4Lit4Liy4LiE4Liy4Lij4LmA4LiI4Lij4Li04LiN4Lin4Li04Lio4Lin4LiB4Lij4Lij4LihICjguJXguLbguIEgNCk!5e0!3m2!1sen!2sth!4v1481984672689&language=ru"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                </div>
                <div class="map col-md-6">
                        <h3>Chulalongkorn Map</h3>
                         <a href="http://www.chula.ac.th/en/wp-content/uploads/sites/2/2014/03/CU-map2015.pdf" target="_blank"><img src="<?php echo $css_path."/"?>img/map.png"></a>
                </div>
</div>
</div>
</div>
<script>
      function initMap() {
        var uluru = {lat: 13.735956, lng: 100.533852};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
         var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUqi-C4pPRBEAae7QcVcY9PJ_FzlOeWXs&language=en&region=GB&callback=initMap"async defer></script>
<?php
//get_sidebar();
get_footer();



