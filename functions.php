<?php
/**
 * cpinter functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cpinter
 */
require_once(ABSPATH . 'wp-admin/includes/screen.php');
if ( ! function_exists( 'cpinter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cpinter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cpinter, use a find and replace
	 * to change 'cpinter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'cpinter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'cpinter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'cpinter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'cpinter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cpinter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cpinter_content_width', 640 );
}
add_action( 'after_setup_theme', 'cpinter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cpinter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cpinter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cpinter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cpinter_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cpinter_scripts() {
	wp_enqueue_style( 'cpinter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cpinter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cpinter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cpinter_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function wpb_change_title_text( $title ){
     $screen = get_current_screen();
 
     if  ( 'academic_staff' == $screen->post_type ) {
          $title = 'Enter staff name with their academic position';
     }
	 elseif  ( 'executive_staff' == $screen->post_type ) {
          $title = 'Enter the Position';
     }
	 elseif  ( 'scholarship_funding' == $screen->post_type ) {
          $title = "Enter Scholaship's Name or Funding's Name";
     }
 
     return $title;
}
 
add_filter( 'enter_title_here', 'wpb_change_title_text' );

//admin column 

	// ADD NEW COLUMN
function v2008_c_head($defaults) {
	$column_name = 'type';//column slug
	$column_heading = 'Type';//column heading
	$defaults[$column_name] = $column_heading;
	return $defaults;
}
 
// SHOW THE COLUMN CONTENT
function v2008_c_content($name, $post_ID) {
    $column_name = 'type';//column slug	
    $column_field = 'type';//field slug	
    if ($name == $column_name) {
        $post_meta = get_post_meta($post_ID,$column_field,true);
        if ($post_meta) {
            echo $post_meta;
        }
    }
}

// ADD STYLING FOR COLUMN
function v2008_c_style(){
	$column_name = 'type';//column slug	
	echo "<style>.column-$column_name{width:10%;}</style>";
}

add_filter('manage_scholarship_funding_posts_columns', 'v2008_c_head');
add_action('manage_scholarship_funding_posts_custom_column', 'v2008_c_content', 10, 2);
add_filter('admin_head', 'v2008_c_style');
add_filter( 'manage_edit-scholarship_funding_sortable_columns', 'my_movie_sortable_columns' );

function my_movie_sortable_columns( $columns ) {

	$columns['type'] = 'type';

	return $columns;
}


//Add Applicant USer Role 

add_role(
	'Applicant',
	__( 'Applicant' ),
    array(
		 //somebody who can write and manage their own posts but cannot publish them.
        'edit_posts'     => true, 
        'delete_posts'   => true,
        'read' 			 => true, 
    )
);

require_once( dirname(__FILE__) . '/include/application-function.php');

/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function my_login_redirect( $redirect_to, $request, $user ) {
	//is there a user to check?
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		//check for admins
		if ( in_array( 'administrator', $user->roles ) ) {
			// redirect them to the default place
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

/**
 * Restrict access to the administration screens.
 *
 * Only administrators will be allowed to access the admin screens,
 * all other users will be automatically redirected to the front of
 * the site instead.
 *
 * We do allow access for Ajax requests though, since these may be
 * initiated from the front end of the site by non-admin users.
 */
function restrict_admin_with_redirect() {

	if ( ! current_user_can( 'manage_options' ) && ( ! wp_doing_ajax() ) ) {
		wp_redirect( site_url() ); 
		exit;
	}
}

add_action( 'admin_init', 'restrict_admin_with_redirect', 1 );




function remove_medialibrary_tab($strings) {
        if ( !current_user_can( 'administrator' ) ) {
            unset($strings["mediaLibraryTitle"]);
        return $strings;
        }
        else
        {
            return $strings;
        }
    }
    add_filter('media_view_strings','remove_medialibrary_tab');

function restrict_non_Admins(){

        if(!current_user_can('administrator')){
            exit;
        }
    }

add_action('wp_ajax_query-attachments','restrict_non_Admins',1);
add_action('wp_ajax_nopriv_query-attachments','restrict_non_Admins',1);



// Add Columns to support Admin works

add_filter('manage_application_info_posts_columns', 'ST4_columns_head_only_movies', 10);
add_action('manage_application_info_posts_custom_column', 'ST4_columns_content_only_movies', 10, 2);
 
// CREATE TWO FUNCTIONS TO HANDLE THE COLUMN
function ST4_columns_head_only_movies($defaults) {
    $defaults['title_new'] = 'Applicant Name';
    $defaults['email'] = 'Email';
    $defaults['apply_for'] = 'Apply For';
    $defaults['statement'] = 'Statement';
    $defaults['cv'] = 'CV';
    $defaults['passport'] = 'Passport';
    $defaults['lang_test'] = 'Language Test';
    $defaults['app_link'] = 'See Applicaition';
    return $defaults;
}
function ST4_columns_content_only_movies($column_name, $post_ID) {

	
	if ($column_name == 'title_new') {
		 echo get_the_title($post_ID); 
	}

	if ($column_name == 'email') {
		$app_email = get_post_meta( $post_ID, 'app_email', true );
		echo $app_email;
	}

	 if ($column_name == 'apply_for') {
		$text = get_post_meta( $post_ID, 'degree', true );

		if($text === "meng") {
			echo "Master's Degree";
		} elseif ( $text === "phd") {
			echo "Doctoral Degree";
		}
	}


	if ($column_name == 'passport') {
		$has_passport = get_post_meta( $post_ID, 'passport_copy', true );
		if($has_passport){
			echo "<a href='$has_passport' target='_blank'><span class='dashicons dashicons-yes'></span></a>";
		} else {
			echo "<span class='dashicons dashicons-no'></span>";
		}
	}

	if ($column_name == 'statement') {
        $has_sop = get_post_meta( $post_ID, 'sop', true );
		if($has_sop){
			echo "<a href='$has_sop' target='_blank'><span class='dashicons dashicons-yes'></span></a>";
		} else {
			echo "<span class='dashicons dashicons-no'></span>";
		}
	}


	 if ($column_name == 'cv') {
         $has_cv = get_post_meta( $post_ID, 'cv', true );
		if($has_cv){
			echo "<a href='$has_cv' target='_blank'><span class='dashicons dashicons-yes'></span></a>";
		} else {
			echo "<span class='dashicons dashicons-no'></span>";
		}
	}


	 if ($column_name == 'lang_test') {
         $has_eng = get_post_meta( $post_ID, 'test_result', true );
		if($has_eng){
			echo "<a href='$has_eng' target='_blank'><span class='dashicons dashicons-yes'></span></a>";
		} else {
			echo "<span class='dashicons dashicons-no'></span>";
		}
	}

	
    if ($column_name == 'app_link') {
		$url = get_permalink($post_ID);
        echo "<a href='$url' target='_blank'>here </a>";
	}

}

add_filter( 'post_row_actions', 'modify_list_row_actions', 10, 2 );
 
//add app_id var to query_var to pass to page
function add_query_vars_filter( $vars ){
  $vars[] = "app_id";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );


//remove action at title of application_info admin table
function modify_list_row_actions( $actions, $post ) {
		// Check for your post type.
		if ( $post->post_type == "application_info" ) {
			$actions = null;
        }
 
    return $actions;
}



//In order to customize admin bar we hook into admin_bar_menu function
add_action( 'admin_bar_menu', 'add_nodes_and_groups_to_toolbar', 999 );
add_filter('show_admin_bar', '__return_true', 1, 1 );

//This is the content creator for admin_bar in the case of Applicant User
function add_nodes_and_groups_to_toolbar( $wp_admin_bar ) {

	$user = wp_get_current_user();
	
	if(!is_user_logged_in()) {
		//remove all nodes of admin bar
		$wp_admin_bar->remove_node('wp-logo');
		$wp_admin_bar->remove_node('comments');
		$wp_admin_bar->remove_node('new-content');
		$wp_admin_bar->remove_node('search');
			//Add home link with home icon
		$wp_admin_bar->add_menu( array(
			'id'		=> 'site-name',
			'title'		=> '',
			'href'		=> esc_url(home_url()),
		) );	

		//Add greeting to personalise the feel
		$wp_admin_bar->add_node( array(
			'id'		=> 'greeting',
			'title'		=> '<span class="ab-label">Hello, Guest!</span>' ,
		) );
		
		$wp_admin_bar->add_menu( array(
			'parent'	=> 'top-secondary',
			'id'		=> 'log-in',
			'title'		=> '<span class="login">Login</span>',
			'href'		=> esc_url( wp_login_url( home_url() ) ),
		) );

		$wp_admin_bar->add_menu( array(
			'parent'	=> 'top-secondary',
			'id'		=> 'register',
			'title'		=> '<span class="register">Register</span>',
			'href'		=> esc_url( wp_registration_url() ),
		) );


	}

 	if ( in_array( 'Applicant', (array) $user->roles ) ) {

		//remove all nodes of admin bar
		$wp_admin_bar->remove_node('wp-logo');
		$wp_admin_bar->remove_node('comments');
		$wp_admin_bar->remove_node('new-content');
		$wp_admin_bar->remove_node('search');
		$wp_admin_bar->remove_menu('dashboard');
		$wp_admin_bar->remove_menu('my-account');
		$wp_admin_bar->remove_menu('user-info');
		$wp_admin_bar->remove_menu('edit-profile');
		$wp_admin_bar->remove_menu('site-name');

		//Add home link with home icon
		$wp_admin_bar->add_menu( array(
			'id'		=> 'site-name',
			'title'		=> '',
			'href'		=> esc_url(home_url()),
		) );

		//Add greeting to personalise the feel
		$wp_admin_bar->add_node( array(
			'id'		=> 'greeting',
			'title'		=> 'Hello, '. $user->user_login.'' ,
		) );

		//Add logout link to the bar
		$logout_url = wp_logout_url(site_url());

		$wp_admin_bar->add_menu( array(
			'parent'	=> 'top-secondary',
			'id'		=> 'logout',
			'title'		=> '<span class="logout">Logout</span>',
			'href'		=> esc_url( $logout_url ),
		) );

		//Count pending Application of the user
		$user_post_count = count_user_posts_by_status( $user->ID , 'application_info');

		//Add the Apllication link based on the pending application
		//if the user already has a pending application show "Eidt Appplication"link to edit pageof the pending applciation
		//if the user has 0 pending application show creat "New Applcaiton" link
		if($user_post_count==0) {

			$wp_admin_bar->add_menu( array(
				'parent'		=> 'top-secondary',
				'id'		=> 'new-application',
				'title'		=> '</span><span class="user-url">'.__( 'New Application' ).'</span>',
				'href'		=> esc_url( home_url( '/new-app/' ) ),
			) );

		} else {
		
			$args = array(
				'author'        =>  $user->ID, 
				'post_status' => 'pending',
				'post_type'   => 'application_info',
			);

			$current_user_posts = get_posts($args);

			$url = esc_url(add_query_arg('app_id', $current_user_posts[0]->ID , site_url( '/edit-application/' )));

			$wp_admin_bar->add_menu( array(
				'parent'		=> 'top-secondary',
				'id'		=> 'edit-application',
				'title'		=> '<span class="user-url">'.__( 'Edit Application' ).'</span>',
				'href'		=> esc_url($url),
			) );

		}
		
	} 
}




//Start initialize new metabox 
add_action("add_meta_boxes", "add_admin_action_box");

//This function romove the publishbox and add the new one with "Admin Action" header
//Then add new metabox with "Application" header
function add_admin_action_box()
{

    global $post;

	$post_title = $post->post_title;
	remove_meta_box( 'submitdiv', 'application_info', null );
	add_meta_box( 'submitdiv', __( 'Admin Actions' ), 'post_submit_meta_box', 'application_info', 'normal', 'high', null );
    add_meta_box("app-admin-meta-box", "Application of $post_title", "app_admin_action_box_markup", "application_info", "normal", "high", null);
}

//Application metabox content is created here
function app_admin_action_box_markup()
{ 
	global $post;

	$has_sop = get_post_meta( $post->ID, 'sop', true );
	$cv = get_post_meta( $post->ID, 'cv', true );
	$lang_test = get_post_meta( $post->ID, 'lang_cert', true );


?>
		<div>
           <div style="text-align:center;">
		   	<a class="button-primary" target="_blank" href="<?php echo get_permalink($post->ID); ?>">See the application form</a>
		  	<a class="button-primary" target="_blank" href="<?php echo $has_sop; ?>">Download Statement of Purpose</a>
		   	<a class="button-primary" target="_blank" href="<?php echo $cv; ?>">Download CV</a>
			<a class="button-primary" target="_blank" href="<?php echo $lang_test; ?>">Download Lagnuage Test Result</a>
		   </div>
		</div>
<?php
}


//If on Aplication_info edit page
//Remove all content other than move to trash and Save Button
function hide_publishing_actions(){
        $my_post_type = 'application_info';
        global $post;
        if($post->post_type == $my_post_type){
            echo '
                <style type="text/css">
                    #misc-publishing-actions,
                    #minor-publishing-actions{
                        display:none;
                    }
                </style>
            ';

			echo "<script type='text/javascript'>
			jQuery(document).ready(function(){
				jQuery('#publish').attr('value', 'Process Complete');
			});</script>";

        }
}
add_action('admin_head-post.php', 'hide_publishing_actions');
add_action('admin_head-post-new.php', 'hide_publishing_actions');


//This is to hide the Add New Apllcation button in admin page
function disable_new_posts() {
// Hide sidebar link
global $submenu;
unset($submenu['edit.php?post_type=application_info'][10]);

// Hide link on listing page
if (isset($_GET['post_type']) && $_GET['post_type'] == 'application_info') {
    echo '<style type="text/css">
    	#favorite-actions, .add-new-h2, .tablenav { display:none; }
    </style>';
}
}
add_action('admin_menu', 'disable_new_posts');



//Custom Logo in Register and login Page
function my_login_logo() { ?>
    <style type="text/css">
        #registerform h1 a, #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/gear.png);
            padding-bottom: 0px;
        }
		#login .button-primary {
			background: #ab161b;
			border-color: #b1171c #aa1419 #6f0f12;
			-webkit-box-shadow: 0 1px 0 #7b080c;
			box-shadow: 0 1px 0 #7b080c;
			color: #fff;
			text-decoration: none;
			text-shadow: 0 -1px 1px #bb1a1f, 1px 0 1px #bb1a1f, 0 1px 1px #bb1a1f, -1px 0 1px #bb1a1f;
		}
		#login .button-primary:hover {
			background: #b51b20;
			border-color: #931417;
			color: #fff;
		}
		.login #login_error, .login .message {
   			 border-left: 4px solid #ab161b !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// add pdf print support to post type 'product'
if(function_exists('set_pdf_print_support')) {
  set_pdf_print_support(array('post', 'page', 'product','application_info'));
}


function get_country_name( $country_code ) {

	$country_array = array (
		'AF' => 'Afghanistan',
		'AX'   => 'Åland Islands',
		'AL'     => 'Albania',
		'DZ' => 'Algeria',
		'AS'   => 'American Samoa',
		'AD'     => 'Andorra',
		'AO' => 'Angola',
		'AI'   => 'Anguilla',
		'AQ'     => 'Antarctica',
		'AG' => 'Antigua and Barbuda',
		'AR'   => 'Argentina',
		'AM'     => 'Armenia',
		'AW' => 'Aruba',
		'AU'   => 'Australia',
		'AT'     => 'Austria',
		'AZ' => 'Azerbaijan',
		'BS'   => 'Bahamas',
		'BH'     => 'Bahrain',
		'BD' => 'Bangladesh',
		'BB'   => 'Barbados',
		'BY'     => 'Belarus',
		'BE' => 'Belgium',
		'BZ'   => 'Belize',
		'BJ'     => 'Benin',
		'BM' => 'Bermuda',
		'BT'   => 'Bhutan',
		'BO'     => '"Bolivia, Plurinational State of"',
		'BQ' => 'Bonaire, Sint Eustatius and Saba',
		'BA'   => 'Bosnia and Herzegovina',
		'BW'     => 'Botswana',
		'BV' => 'Bouvet Island',
		'BR'   => 'Brazil',
		'IO'     => 'British Indian Ocean Territory',
		'BN' => 'Brunei Darussalam',
		'BG'   => 'Bulgaria',
		'BF'     => 'Burkina Faso',
		'BI' => 'Burundi',
		'KH'   => 'Cambodia',
		'CM'     => 'Cameroon',
		'CA' => 'Canada',
		'CV'   => 'Cape Verde',
		'KY'     => 'Cayman Islands',
		'CF' => 'Central African Republic',
		'TD'   => 'Chad',
		'CL'     => 'Chile',
		'CN' => 'China',
		'CX'   => 'Christmas Island',
		'CC'     => 'Cocos (Keeling) Islands',
		'CO' => 'Colombia',
		'KM'   => 'Comoros',
		'CG'     => 'Congo',
		'CD' => '"Congo, the Democratic Republic of the"',
		'CK'   => 'Cook Islands',
		'CR'     => 'Costa Rica',
		'CI' => 'Côte d\'Ivoire',
		'HR'   => 'Croatia',
		'CU'     => 'Cuba',
		'CW' => 'Curaçao',
		'CY'   => 'Cyprus',
		'CZ'     => 'Czech Republic',
		'DK' => 'Denmark',
		'DJ'   => 'Djibouti',
		'DM'     => 'Dominica',
		'DO' => 'Dominican Republic',
		'EC'   => 'Ecuador',
		'EG'     => 'Egypt',
		'SV' => 'El Salvador',
		'GQ'   => 'Equatorial Guinea',
		'ER'     => 'Eritrea',

		'EE' => 'Estonia',
		'ET'   => 'Ethiopia',
		'FK'     => 'Falkland Islands (Malvinas)',
		'FO' => 'Faroe Islands',
		'FJ'   => 'Fiji',
		'FI'     => 'Finland',

		'FR' => 'France',
		'GF'   => 'French Guiana',
		'PF'     => 'French Polynesia',

		'TF' => 'French Southern Territories',
		'GA'   => 'Gabon',
		'GM'     => 'Gambia',

		'GE' => 'Georgia',
		'DE'   => 'Germany',
		'GH'     => 'Ghana',

		'GT' => 'Gibraltar',
		'GR'   => 'Greece',
		'GL'     => 'Greenland',

		'GD' => 'Grenada',
		'GP'   => 'Guadeloupe',
		'GU'     => 'Guam',

		'GT' => 'Guatemala',
		'GG'   => 'Guernsey',
		'GN'     => 'Guinea',

		'GW' => 'Guinea-Bissau',
		'GY'   => 'Guyana',
		'HT'     => 'Haiti',

		'HM' => 'Heard Island and McDonald Islands',
		'VA'   => 'Holy See (Vatican City State)',
		'HN'     => 'Honduras',

		'HK' => 'Hong Kong',
		'HU'   => 'Hungary',
		'IS'     => 'Iceland',

		'IN' => 'India',
		'ID'   => 'Indonesia',
		'IR'     => 'Iran, Islamic Republic of',

		'IQ' => 'Iraq',
		'IE'   => 'Ireland',
		'IM'     => 'Isle of Man',

		'IT' => 'Italy',
		'JM'   => 'Jamaica',
		'JP'     => 'Japan',

		'JE' => 'Jersey',
		'JO'   => 'Jordan',
		'KZ'     => 'Kazakhstan',

		'KE' => 'Kenya',
		'KI'   => 'Kiribati',
		'KP'     => 'Korea, Democratic People\'s Republic of',

		'KR' => 'Korea, Republic of',
		'KW'   => 'Kuwait',
		'KG'     => 'Kyrgyzstan',

		'LA' => 'Lao People\'s Democratic Republic',
		'LV'   => 'Latvia',
		'LB'     => 'Lebanon',

		'LS' => 'Lesotho',
		'LR'   => 'Liberia',
		'LY'     => 'Libya',

		'LI' => 'Liechtenstein',
		'LT'   => 'Lithuania',
		'LU'     => 'Luxembourg',

		'MO' => 'Macao',
		'MK'   => 'Macedonia, the Former Yugoslav Republic of',
		'MG'     => 'Madagascar',

		'MW' => 'Malawi',
		'MY'   => 'Malaysia',
		'MV'     => 'Maldives',
		'ML' => 'Mali',
		'MT'   => 'Malta',
		'MH'     => 'Marshall Islands',

		'MQ' => 'Martinique',
		'MR'   => 'Mauritania',
		'MU'     => 'Mauritius',

		'YT' => 'Mayotte',
		'MX'   => 'Mexico',
		'FM'     => 'Micronesia, Federated States of',

		'MD' => 'Moldova, Republic of',
		'MC'   => 'Monaco',
		'MN'     => 'Mongolia',

		'ME' => 'Montenegro',
		'MS'   => 'Montserrat',
		'MA'     => 'Morocco',

		'MZ' => 'Mozambique',
		'MM'   => 'Myanmar',
		'NA'     => 'Namibia',

		'NR' => 'Nauru',
		'NP'   => 'Nepal',
		'NL'     => 'Netherlands',

		'NC' => 'New Caledonia',
		'NZ'   => 'New Zealand',
		'NI'     => 'Nicaragua',

		'NE' => 'Niger',
		'NG'   => 'Nigeria',
		'NU'     => 'Niue',

		'NF' => 'Norfolk Island',
		'MP'   => 'Northern Mariana Islands',
		'NO'     => 'Norway',

		'OM' => 'Oman',
		'PK'   => 'Pakistan',
		'PW'     => 'Palau',

		'PS' => 'Palestine, State of',
		'PA'   => 'Panama',
		'PG'     => 'Papua New Guinea',

		'PY' => 'Paraguay',
		'PE'   => 'Peru',
		'PH'     => 'Philippines',

		'PN' => 'Pitcairn',
		'PL'   => 'Poland',
		'PT'     => 'Portugal',

		'PR' => 'Puerto Rico',
		'QA'   => 'Qatar',
		'RE'     => 'Réunion',

		'RO' => 'Romania',
		'RU'   => 'Russian Federation',
		'RW'     => 'Rwanda',

		'BL' => 'Saint Barthélemy',
		'SH'   => 'Saint Helena, Ascension and Tristan da Cunha',
		'KN'     => 'Saint Kitts and Nevis',

		'LC' => 'Saint Lucia',
		'MF'   => 'Saint Martin (French part)',
		'PM'     => 'Saint Pierre and Miquelon',


		'VC' => 'Saint Vincent and the Grenadines',
		'WS'   => 'Samoa',
		'SM'     => 'San Marino',

		'ST' => 'Sao Tome and Principe',
		'SA'   => 'Saudi Arabia',
		'SN'     => 'Senegal',

		'RS' => 'Serbia',
		'SC'   => 'Seychelles',
		'SL'     => 'Sierra Leone',

		'SG' => 'Singapore',
		'SX'   => 'Sint Maarten (Dutch part)',
		'SK'     => 'Slovakia',

		'SI' => 'Slovenia',
		'SB'   => 'Solomon Islands',

		'SO' => 'Somalia',
		'ZA'   => 'South Africa',
		'GS'     => 'South Georgia and the South Sandwich Islands',

		'SS' => 'South Sudan',
		'ES'   => 'Spain',
		'LK'     => 'Sri Lanka',

		'SD' => 'Sudan',
		'SR'   => 'Suriname',
		'SJ'     => 'Svalbard and Jan Mayen',

		'SZ' => 'Swaziland',
		'SE'   => 'Sweden',
		'CH'     => 'Switzerland',

		'SY' => 'Syrian Arab Republic',
		'TW'   => 'Taiwan, Province of China',
		'TJ'     => 'Tajikistan',

		'TZ' => 'Tanzania, United Republic of',
		'TH'   => 'Thailand',
		'TL'     => 'Timor-Leste',

		'TG' => 'Togo',
		'TK'   => 'Tokelau',
		'TO'     => 'Tonga',

		'TT' => 'Trinidad and Tobago',
		'TN'   => 'Tunisia',
		'TR'     => 'Turkey',

		'TM' => 'Turkmenistan',
		'TC'   => 'Turks and Caicos Islands',
		'TV'     => 'Tuvalu',

		'UG' => 'Uganda',
		'UA'   => 'Ukraine',
		'AE'     => 'United Arab Emirates',

		'GB' => 'United Kingdom',
		'US'   => 'United States',
		'UM'     => 'United States Minor Outlying Islands',

		'UY' => 'Uruguay',
		'UZ'   => 'Uzbekistan',
		'VU'     => 'Vanuatu',

		'VE' => 'Venezuela, Bolivarian Republic of',
		'VN'   => 'Viet Nam',
		'VG'     => 'Virgin Islands, British',

		'VI' => 'Virgin Islands, U.S',
		'WF'   => 'Wallis and Futuna',
		'EH'     => 'Western Sahara',

		'YE' => 'Yemen',
		'ZM'   => 'Zambia',
		'ZW'     => 'Zimbabwe'
	);

		return $country_array["$country_code"];

}


//disable autosave for application_info type
add_action( 'admin_enqueue_scripts', 'my_admin_enqueue_scripts' );
function my_admin_enqueue_scripts() {
    if ( 'application_info' == get_post_type() )
        wp_dequeue_script( 'autosave' );
}