
    <?php	
    global $current_user;
    get_currentuserinfo();

    $object_id = get_query_var( 'app_id' );
    
    $application = get_post($object_id );

    //var_dump($application);

    //check if user is logged in already
    //if not redirect login page
    if ( !is_user_logged_in() ) {

        wp_redirect(wp_login_url( home_url('/new-app/')));

    //if current user cannot edit this application_id
    //(application is in pending status)
    //show error message
    } elseif ( ($current_user->ID != $application->post_author) || $application->post_status != 'pending') {

        get_header('application');

        //echo current_user_can( 'edit_post', $object_id );

        $output .= '<div class="container">

			<div style="padding: 10% 0px;color: #750606;">

			<h1 class="text-center"><img src="'.$css_path.'/img/gear.png"></h1>
			
			<h1 class="text-center">Sorry! you cannot edit this application.</h1>
            
            <br>
            
            <h3 class="text-center">If you have any question, please contact grad@cp.eng.chula.ac.th.</h3>
            
            </div>
            
            </div>';

			echo $output;

    //if the user can edit the application show application form
    } else {

        //$test = cmb2_get_metabox_sanitized_values('application-form',$_POST);

        get_header('application');

        //echo "$application->ID   $current_user->ID != $application->post_author";
	?>
        
    	<div class="cp_content container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">	

                        <?php   
                            cmb2_print_metabox_form( 'application-form', $object_id);
                        ?>

                    </div>
                </div>
            </div>
        </div>

    <?php 
        get_footer('application');

    }
	?>

