
<?php
        $css_path = get_template_directory_uri(); 
        
        

        while ( have_posts() ) : the_post();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <link href="<?php echo $css_path."/"?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $css_path."/"?>css/app_print.css" rel="stylesheet">
</head>

<body>

    <div class="container" style="border:solid 1px #000;">
        <div class="row header">
            <div class="col-xs-2 text-center">
                <div class="logo" style="padding-top: 20px;">
                    <img src="<?php echo $css_path."/"?>img/logo.gif">
                </div>
            </div>
            <div class="col-xs-8 text-center">
                <h1>
                    <b>
                            Application for Admission<br>Faculty of Engineering<br>Chulalongkorn  University
                        </b>
                </h1>
            </div>
            <div class="col-xs-2">
                <div class="image" style="padding-top: 10px;">
                    <?php 
                        $image = wp_get_attachment_image( get_post_meta( get_the_ID(), 'photo_id', 1 ), array('137', '176'), "", array( "class" => "photo" ) );

                        echo $image;
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 interesting text-center">

                <p>
                  <span class="app_label">Applied For</span>
                  <span class="app_msg">

                    <?php 
                      $degree = get_post_meta( get_the_ID(), 'degree', true );
                      
                      if($degree==="meng"){
                        echo "Master of Engineering in Computer Engineering";
                      } else {
                        echo "Doctor of Philosophy in Computer Engineering";
                      }
                    ?>
                  </span>
                <br>
                <span class="app_label">Apply for financial support: </span>
                <span class="app_msg"><?php echo get_post_meta( get_the_ID(), 'financial', true ); ?></span>

                </p>

                <small>last update: <?php the_time( "j F Y g:i a" ); ?></small>
            </div>

            <div class="col-xs-12 section"> 
                <h2>Personal Information</h2>
                <p>
                    <?php 
                      $prefix = get_post_meta( get_the_ID(), 'app_prefix', true );
                      $first_name = get_post_meta( get_the_ID(), 'app_name', true );
                      $middle_name = get_post_meta( get_the_ID(), 'app_mid_name', true );
                      $last_name = get_post_meta( get_the_ID(), 'app_last_name', true );

                      $full_name = "$prefix $first_name $middle_name $last_name";
                    ?> 

                    <span class="app_label">Name </span><span class="app_msg" style="min-width: 330px;"><?php echo $full_name; ?></span>
                    
                    <?php 
                      $gender = get_post_meta( get_the_ID(), 'gender', true );
                    ?>
                    <span class="app_label">Sex </span><span class="app_msg"><?php echo ucwords(strtolower($gender)); ?></span>

                    <?php 
                      $marital = get_post_meta( get_the_ID(), 'marital', true );
                    ?>
                    <span class="app_label">Marital Status </span><span class="app_msg"><?php echo $marital? ucwords(strtolower($marital)) : "-"; ?></span>

                    <br>

                    <?php 
                      $birthdate = get_post_meta( get_the_ID(), 'birthdate', true );
                    ?>
                    <span class="app_label">Birthdate </span><span class="app_msg" style="min-width: 250px;"><?php echo $birthdate; ?></span>

                    <?php 
                      $country = get_post_meta( get_the_ID(), 'country', true );
                    ?>
                    <span class="app_label">Country of Citizenship </span><span class="app_msg" style="min-width: 290px;"><?php echo get_country_name($country); ?></span>

                    <?php 
                      $nationality = get_post_meta( get_the_ID(), 'nationality', true );
                    ?>
                    <span class="app_label">Nationality </span><span class="app_msg"><?php echo $nationality; ?></span>
                    
                    <?php 
                      $citizen_id = get_post_meta( get_the_ID(), 'citizen_id', true );
                    ?>
                    <span class="app_label">Citizen ID </span><span class="app_msg" style="min-width: 200px;"><?php echo $citizen_id; ?></span>

                    <h3>Passport Information</h3>
                    <?php 
                      $passport_id = get_post_meta( get_the_ID(), 'passport_id', true );
                    ?>
                    <span class="app_label">Passport ID </span><span class="app_msg" style="min-width: 170px;"><?php echo $passport_id; ?></span>

                    <?php 
                      $p_issue = get_post_meta( get_the_ID(), 'p_issue', true );
                    ?>
                    <span class="app_label">Date of Issued </span><span class="app_msg" style="min-width: 120px;"><?php echo $p_issue; ?></span>

                    <?php 
                      $p_expire = get_post_meta( get_the_ID(), 'p_expire', true );
                    ?>
                    <span class="app_label">Date of Expiary </span><span class="app_msg" style="min-width: 120px;"><?php echo $p_expire; ?></span>

                    <?php 
                      $p_country = get_post_meta( get_the_ID(), 'p_country', true );
                    ?>
                    <span class="app_label">Country of Issue </span><span class="app_msg" style="min-width: 150px;"><?php echo get_country_name($p_country); ?></span>
                    
                </p>
            </div>

             <div class="col-xs-12 section"> 
                <h2>Contact Information</h2>
                <h3>Current Address</h3>
                <p>

                    <?php 
                      $current_adress = get_post_meta( get_the_ID(), 'current_adress', true );
                      $current_city = get_post_meta( get_the_ID(), 'current_city', true );
                      $current_province = get_post_meta( get_the_ID(), 'current_province', true );
                      $current_zip = get_post_meta( get_the_ID(), 'current_zip', true );
                      $current_country = get_post_meta( get_the_ID(), 'current_country', true );
                      $current_country_name = get_country_name($current_country);
                      $current_tel = get_post_meta( get_the_ID(), 'current_tel', true );

                     //$full_current_address = "$current_adress, $current_city, $current_province, $current_zip, $current_country_name";
                    ?> 


                    <span class="app_label">Address</span><span class="app_msg tel" style="min-width: 777px;"><?php echo $current_adress;?></span>
                    <span class="app_label">City</span><span class="app_msg tel"><?php echo $current_city;?></span>
                    <span class="app_label">Province</span><span class="app_msg tel"><?php echo $current_province;?></span>
                    <span class="app_label">Zip code</span><span class="app_msg tel"><?php echo $current_zip;?></span>
                    <span class="app_label">Country</span><span class="app_msg tel"><?php echo $current_country_name;?></span>
                    <span class="app_label">Phone Number </span><span class="app_msg tel"><?php echo $current_tel ? $current_tel : "-"; ?></span>
                    
                </p>
                <h3>Mailing Address</h3>
                <p>
                    <?php 
                      $second_adress = get_post_meta( get_the_ID(), 'second_adress', true );
                      $second_city = get_post_meta( get_the_ID(), 'second_city', true );
                      $second_province = get_post_meta( get_the_ID(), 'second_province', true );
                      $second_zip = get_post_meta( get_the_ID(), 'second_zip', true );
                      $second_country = get_post_meta( get_the_ID(), 'second_country', true );
                      $second_country_name = get_country_name($second_country);
                      $second_tel = get_post_meta( get_the_ID(), 'second_tel', true );

                      //$full_second_address = "$second_adress, $second_city, $second_province, $second_zip, $second_country_name";
                    ?> 

                    <span class="app_label">Address</span><span class="app_msg tel" style="min-width: 777px;"><?php echo $second_adress;?></span>
                    <span class="app_label">City</span><span class="app_msg tel"><?php echo $second_city;?></span>
                    <span class="app_label">Province</span><span class="app_msg tel"><?php echo $second_province;?></span>
                    <span class="app_label">Zip code</span><span class="app_msg tel"><?php echo $second_zip;?></span>
                    <span class="app_label">Country</span><span class="app_msg tel"><?php echo $second_country_name;?></span>
                    <span class="app_label">Phone Number </span><span class="app_msg tel"><?php echo $second_tel ? $second_tel :"-"; ?></span>
                    
                </p>
            </div>

            <div class="col-xs-12 section"> 
                <h2>Education Background</h2>

                <?php 

                   $entries = get_post_meta( get_the_ID(), 'education_bg_group', true );
                   $counter = 1;
                  foreach ( (array) $entries as $key => $entry ) {

                    $institution = $major = $gpa = $begin_date = $graduate_date = $transcript = '';

                    if ( isset( $entry['institution'] ) ) {
                        $institution = $entry['institution'] ;
                    }

                    if ( isset( $entry['institution_city'] ) ) {
                        $institution_city = $entry['institution_city'] ;
                    }

                    if ( isset( $entry['institution_Country'] ) ) {
                        $institution_Country = get_country_name($entry['institution_Country']) ;
                    }

                    if ( isset( $entry['institution_degree'] ) ) {
                        $institution_degree = $entry['institution_degree'] ;
                    }

                    if ( isset( $entry['institution_major'] ) ) {
                        $major = $entry['institution_major'] ;
                    }

                    if ( isset( $entry['institution_gpa'] ) ) {
                        $gpa = $entry['institution_gpa'] ;
                    }

                    if ( isset( $entry['institution_graduate_date'] ) ) {
                        $graduate_date = $entry['institution_graduate_date'] ;
                    }

                ?>
                <h3>Degree <?php echo $counter; ?></h3>
                <p>
                    <span class="app_label">Institute </span><span class="app_msg" style="min-width: 490px;"><?php echo "$institution,  $institution_city, $institution_Country"; ?></span>
                    <span class="app_label">Degree </span><span class="app_msg degree"><?php echo $institution_degree? $institution_degree: "-"; ?></span>
                    <span class="app_label">Major </span><span class="app_msg degree"><?php echo $major? $major : "-"; ?></span>
                    <span class="app_label">GPA </span><span class="app_msg edu"><?php echo $gpa; ?></span>
                    <span class="app_label">Year of graduation </span><span class="app_msg edu"><?php echo $graduate_date; ?></span>
                </p>
                    
                <?php   
                  $counter++; 
                  }
                ?>

            </div>

             <div class="col-xs-12 section"> 
                <h2>Publications</h2>
                <div class="award">

                    <?php 
                      $publication = get_post_meta( get_the_ID(), 'publication', true );

                      echo wpautop($publication);
                    ?>
                   
                </div>
            </div>
            
            <div class="col-xs-12 section"> 
                <h2>Awards/Honors/Scholarships</h2>
                <div class="award">

                    <?php 
                      $award = get_post_meta( get_the_ID(), 'award', true );

                      echo wpautop($award);
                    ?>
                   
                </div>
            </div>

             <div class="col-xs-12 section"> 
                <h2>Work Experiences</h2>
                <div class="award">

                    <?php 
                      $work_exp = get_post_meta( get_the_ID(), 'work_exp', true );

                      echo wpautop($work_exp);
                    ?>
                   
                </div>
            </div>

        </div>
    </div>

</body>

</html>

<?php 

	    endwhile;

?>






