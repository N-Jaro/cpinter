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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $css_path."/"?>img/icon/favicon-16x16.png">
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="<?php echo $css_path."/"?>css/page.css" rel="stylesheet">
    <link href="<?php echo $css_path."/"?>css/application.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body <?php body_class(); ?>>
   