<?php 
if ( !is_user_logged_in() ) {

   wp_redirect(wp_login_url( home_url('/new-app/')));

} else {

    // Current user
	$user_id = get_current_user_id();

    // check if the user has pending application 
    $user_post_count = count_user_posts_by_status( $user_id , 'application_info');

    //echo "$user_id $user_post_count";

    get_header('application');
    
    if($user_post_count == 0) { 

     ?>

    <div class="bs-callout bs-callout-warning hidden">
    <h4>Oh snap!</h4>
    <p>This form seems to be invalid :(</p>
    </div>

    <div class="bs-callout bs-callout-info hidden">
    <h4>Yay!</h4>
    <p>Everything seems to be ok :)</p>
    </div>

        <div class="cp_content container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                <?php
                while ( have_posts() ) : the_post();

                    the_content();

                endwhile; // End of the loop.
                ?>
                    </div>
                </div>
            </div>
        </div>
        
    <?php



    //End check already apply.
    } else {

        $args = array(
        'author'        =>  $user_id, 
        'post_status' => 'pending',
        'post_type'   => 'application_info',
        );

        $current_user_posts = get_posts( $args );

        //var_dump($current_user_posts); 

        $url = esc_url( add_query_arg( 'app_id', $current_user_posts[0]->ID , site_url( '/edit-application/' ) ) );

         $output .= '<div class="container">

			<div style="padding: 10% 0px;color: #750606;">

			<h1 class="text-center"><img src="'.$css_path.'/img/gear.png"></h1>
			
			<h1 class="text-center">You have created an application!<br>You can edit it <a href="'.$url.'"> here!</a></h1>
            
            <br>
            
            <h3 class="text-center">If you have any question, please contact grad@cp.eng.chula.ac.th.</h3>

			</div>

			</div>';

			echo $output;

    }


    //get_sidebar();
    get_footer('application');

//end check is Authen.
}