<?php
	$css_path = get_template_directory_uri(); 
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cpinter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $css_path."/"?>img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $css_path."/"?>img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $css_path."/"?>img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $css_path."/"?>img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $css_path."/"?>img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $css_path."/"?>img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $css_path."/"?>img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $css_path."/"?>img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $css_path."/"?>img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $css_path."/"?>img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $css_path."/"?>img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $css_path."/"?>img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $css_path."/"?>img/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $css_path."/"?>img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $css_path."/"?>img/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

<?php 
	wp_head(); 
?>

<!-- Bootstrap CSS -->
    <link href="<?php echo $css_path."/"?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $css_path."/"?>css/slicknav.min.css" rel="stylesheet">
    <link href="<?php echo $css_path."/"?>css/topbar.css" rel="stylesheet">
    <link href="<?php echo $css_path."/"?>css/navbar.css" rel="stylesheet">
    <link href="<?php echo $css_path."/"?>css/main.css" rel="stylesheet">
    <link href="<?php echo $css_path."/"?>css/footer.css" rel="stylesheet">
    <link href="<?php echo $css_path."/"?>css/morphext.css" rel="stylesheet">
    <link href="<?php echo $css_path."/"?>css/animate.css" rel="stylesheet">
	<?php 

    if ( is_home()) {
		echo '<link type="text/css" href="'.$css_path.'/css/home.css" rel="stylesheet">';
	} elseif (is_page('about-us')){
		echo '<link type="text/css" href="'.$css_path.'/css/about.css" rel="stylesheet">';
	}  elseif (is_page('contact')){
		echo '<link type="text/css" href="'.$css_path.'/css/contact.css" rel="stylesheet">';
	} elseif (is_page('how-to-apply')){
		echo '<link type="text/css" href="'.$css_path.'/css/appprocess.css" rel="stylesheet">';
	} elseif (is_page('facilities')){
		echo '<link type="text/css" href="'.$css_path.'/css/facilities.css" rel="stylesheet">';
	} elseif (is_page('master')||is_page('doctor')){
		echo '<link type="text/css" href="'.$css_path.'/css/degree.css" rel="stylesheet">';
	} elseif (is_page('prospective-students')){
		echo '<link type="text/css" href="'.$css_path.'/css/prospective.css" rel="stylesheet">';
	} elseif (is_post_type_archive('executive_staff')||is_post_type_archive('academic_staff')){
		echo '<link type="text/css" href="'.$css_path.'/css/executive.css" rel="stylesheet">';
	} elseif (is_post_type_archive('scholarship_funding')){
		echo '<link type="text/css" href="'.$css_path.'/css/scholarship.css" rel="stylesheet">';
	} elseif (is_post_type_archive('research_area')){
		echo '<link type="text/css" href="'.$css_path.'/css/research-area.css" rel="stylesheet">';
	} elseif (is_page('accomodation')){
		echo '<link type="text/css" href="'.$css_path.'/css/accommodation.css" rel="stylesheet">';
	} elseif (is_single()) {
		echo '<link type="text/css" href="'.$css_path.'/css/home.css" rel="stylesheet">';
    }
    
    if (is_page()){
		echo '<link type="text/css" href="'.$css_path.'/css/page.css" rel="stylesheet">';
	}
    
    
	?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body <?php body_class(); ?>>
    <div class="topbar container-fluid">
        <div class="container">
            <div class="col-sm-offset-1 col-sm-10 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 visible-sm visible-lg visible-md text-center">
                <div class="row">
                    <div class="col-sm-1 col-md-1 col-lg-1 col-lg-offset-1">
                        <div class="row">
                            <img class="gear" src="<?php echo $css_path."/"?>img/gear.png">
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-11 col-lg-10">
                        <img class="logo" src="<?php echo $css_path."/"?>img/logo-top.png">
                    </div>
                </div>
            </div>


            <!--<div class="right col-sm-3 col-lg-3 visible-sm visible-md visible-lg">
                <form class="form-inline search pull-right" method="POST" action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="" value="" name="s" id="s">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                        </span>
                    </div>
                </form>
            </div>-->


            <div class="left row visible-xs text-center">
                <div class="col-xs-2 col-xs-offset-5">
                    <div class="row">
                        <img class="gear" src="<?php echo $css_path."/"?>img/gear.png">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <img class="logo" src="<?php echo $css_path."/"?>img/logo-short.png">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="navigation container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
					<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav','menu_class' => 'main-nav visible-lg visible-md visible-sm' ) ); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
