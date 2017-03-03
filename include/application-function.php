<?php
$css_path = get_template_directory_uri();
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'cpinter_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

function  app_form_set_email_default($field_args, $field ) {
	$user_info = get_userdata(get_current_user_id());
	return $user_info->user_email;
}

/**
 * Register the form and fields for our front-end submission form
 */
function wds_frontend_form_register() {
	$cmb = new_cmb2_box( array(
		'id'           => 'application-form',
		'object_types' => array( 'application_info' ),
		'hookup'       => false,
		'save_fields'  => true,
	) );

//Interested Degree 
	$cmb->add_field( array(
		'name'             => 'Program',
		'id'               => 'degree',
		'type'             => 'select',
		'classes' => 'form-group col-xs-12',
		'show_option_none' => false,
		'default'          => 'meng',
		'before_row' => '<h2>Select your program</h2>',
		'options'          => array(
			'meng' => __( 'Master of Engineering in Computer Engineering', 'cmb2' ),
			'phd'   => __( 'Doctor of Philosophy in Computer Engineering', 'cmb2' ),
		),
		'attributes'  => array(
			'required'    => 'required',
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Apply for financial support?',
		'after_field' => '<div class="financial_error_container"></div>',
		'id'      => 'financial',
		'classes' => 'form-group col-xs-12 col-md-12',
		'type'    => 'radio_inline',
		'after_row' => '<h3></h3>',
		'show_option_none' => false,
		'default' => 'No',
		'options' => array(
			'Yes' => __( 'Yes', 'cmb2' ),
			'No'   => __( 'No', 'cmb2' ),
		),
		'attributes'  => array( 
			'data-parsley-error-message'=>"Please indicatewhether you need financial support or not.",
			'data-parsley-errors-container'=>".financial_error_container",
			'data-parsley-class-handler'=>".financial_error_container",
			'required' => '',
		),
	) );

//show the user email uneditable
	$cmb->add_field( array(
		'name' => 'Email',
		'classes' => 'form-group col-xs-12',
		'desc' => 'We will contact you via this email.',
		'id'   => 'app_email',
		'type' => 'text_email',
		'before_row' => '<h2>Email</h2>',
		'after_row' => '<h3></h3>',
		'default' => 'app_form_set_email_default',
	) );



	//Personal Information Section

	
	$cmb->add_field(array(
		'before_row' => '<h2>Personal Information</h2>',
		'name'    => 'Photo (optional)',
		'classes' => 'form-group col-xs-12 col-md-12',
		'desc'    => '',
		'id'      => 'photo',
		'type'    => 'file',
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Photo' // Change upload button text. Default: "Add or Upload File"
		),
		'after_row' => '<div class="errorMsg_photo" style="padding-left: 21%;"></div>',
		'attributes'  => array(
			'required'    => '',
			'data-parsley-fileextension' => 'jpg',
			'data-parsley-errors-container'=>".errorMsg_photo"
		),
	) );

	$cmb->add_field( array(
		'name'    => 'First name',
		'classes' => 'form-group col-xs-12 col-md-12',
		'id'      => 'app_name',
		'type'    => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Middle name',
		'classes' => 'form-group col-xs-12 col-md-12',
		'id'      => 'app_mid_name',
		'type'    => 'text',
	) );

	$cmb->add_field( array(
		'name'    => 'Last name',
		'classes' => 'form-group col-xs-12 col-md-12',
		'id'      => 'app_last_name',
		'type'    => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );


	$cmb->add_field( array(
		'name'    => 'Title/Prefix',
		'classes' => 'form-group col-xs-12 col-md-12',
		'id'      => 'app_prefix',
		'type'    => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Gender',
		// 'after_field' => '<div class="gender_error_container"></div>',
		'id'      => 'gender',
		'classes' => 'form-group col-xs-12 col-md-12',
		'type'    => 'select',
		'show_option_none' => false,
		'default' => 'male',
		'options' => array(
			'male' => __( 'Male', 'cmb2' ),
			'female'   => __( 'Female', 'cmb2' ),
		),
		'attributes'  => array(
			//	attribue for radio_iline type
			//'data-parsley-mincheck'=>1, 
			// 'data-parsley-error-message'=>"Please choose at least 1",
			// 'data-parsley-errors-container'=>".gender_error_container",
			// 'data-parsley-class-handler'=>".gender_error_container",
			'required'    => '',
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Marital Status',
		// 'after_field' => '<div class="marital_error_container"></div>',
		'id'      => 'marital',
		'classes' => 'form-group col-xs-12 col-md-12',
		'type'    => 'select',
		'show_option_none' => false,
		'default' => 'single',
		'options' => array(
			'single' => __( 'Single', 'cmb2' ),
			'married'   => __( 'Married', 'cmb2' ),
			'divorced' => __( 'Divorced', 'cmb2' ),
			'widowed'   => __( 'Widowed', 'cmb2' ),
			'other'   => __( 'Other', 'cmb2' ),
		),
		'attributes'  => array(
			//	attribue for radio_iline type
			//'data-parsley-mincheck'=>1, 
			// 'data-parsley-error-message'=>"Please choose at least 1",
			// 'data-parsley-errors-container'=>".marital_error_container",
			// 'data-parsley-class-handler'=>".marital_error_container",
			'required'    => '',
		),
	) );

	$cmb->add_field( array(
		'name' => 'Birthdate',
		'id'   => 'birthdate',
		'type' => 'text_date',
		'classes' => 'form-group col-xs-12 col-md-12',
		'attributes'  => array(
			'required'    => 'required',
			// CMB2 checks for datepicker override data here:
			'data-datepicker' => json_encode( array(
			
				// yearRange: http://api.jqueryui.com/datepicker/#option-yearRange
				// and http://stackoverflow.com/a/13865256/1883421
				'yearRange' => '-60:+0',
				// Get 1990 through 10 years from now.
				// 'yearRange' => '1990:'. ( date( 'Y' ) + 10 ),
			) ),
		),
		// 'timezone_meta_key' => 'wiki_test_timezone',
		// 'date_format' => 'l jS \of F Y',
	) );

	$cmb->add_field( array(
		'name'       => 'Country of Citizenship',
		'id'         => 'country',
		'classes' => 'form-group col-xs-12 col-md-12',
		'type'             => 'select',
		'default'	=> 'TH',
		'show_option_none' => false,
		'attributes'  => array(
			'required'    => 'required',
		),
		'options'          => array(
			'AF' => esc_html__( 'Afghanistan', 'cmb2' ),
			'AX'   => esc_html__( 'Åland Islands', 'cmb2' ),
			'AL'     => esc_html__( 'Albania', 'cmb2' ),			
			'DZ' => esc_html__( 'Algeria', 'cmb2' ),
			'AS'   => esc_html__( 'American Samoa', 'cmb2' ),
			'AD'     => esc_html__( 'Andorra', 'cmb2' ),			
			'AO' => esc_html__( 'Angola', 'cmb2' ),
			'AI'   => esc_html__( 'Anguilla', 'cmb2' ),
			'AQ'     => esc_html__( 'Antarctica', 'cmb2' ),			
			'AG' => esc_html__( 'Antigua and Barbuda', 'cmb2' ),
			'AR'   => esc_html__( 'Argentina', 'cmb2' ),
			'AM'     => esc_html__( 'Armenia', 'cmb2' ),			
			'AW' => esc_html__( 'Aruba', 'cmb2' ),
			'AU'   => esc_html__( 'Australia', 'cmb2' ),
			'AT'     => esc_html__( 'Austria', 'cmb2' ),			
			'AZ' => esc_html__( 'Azerbaijan', 'cmb2' ),
			'BS'   => esc_html__( 'Bahamas', 'cmb2' ),
			'BH'     => esc_html__( 'Bahrain', 'cmb2' ),			
			'BD' => esc_html__( 'Bangladesh', 'cmb2' ),
			'BB'   => esc_html__( 'Barbados', 'cmb2' ),
			'BY'     => esc_html__( 'Belarus', 'cmb2' ),			
			'BE' => esc_html__( 'Belgium', 'cmb2' ),
			'BZ'   => esc_html__( 'Belize', 'cmb2' ),
			'BJ'     => esc_html__( 'Benin', 'cmb2' ),			
			'BM' => esc_html__( 'Bermuda', 'cmb2' ),
			'BT'   => esc_html__( 'Bhutan', 'cmb2' ),
			'BO'     => esc_html__( '"Bolivia, Plurinational State of"', 'cmb2' ),			
			'BQ' => esc_html__( 'Bonaire, Sint Eustatius and Saba', 'cmb2' ),
			'BA'   => esc_html__( 'Bosnia and Herzegovina', 'cmb2' ),
			'BW'     => esc_html__( 'Botswana', 'cmb2' ),			
			'BV' => esc_html__( 'Bouvet Island', 'cmb2' ),
			'BR'   => esc_html__( 'Brazil', 'cmb2' ),
			'IO'     => esc_html__( 'British Indian Ocean Territory', 'cmb2' ),			
			'BN' => esc_html__( 'Brunei Darussalam', 'cmb2' ),
			'BG'   => esc_html__( 'Bulgaria', 'cmb2' ),
			'BF'     => esc_html__( 'Burkina Faso', 'cmb2' ),			
			'BI' => esc_html__( 'Burundi', 'cmb2' ),
			'KH'   => esc_html__( 'Cambodia', 'cmb2' ),
			'CM'     => esc_html__( 'Cameroon', 'cmb2' ),			
			'CA' => esc_html__( 'Canada', 'cmb2' ),
			'CV'   => esc_html__( 'Cape Verde', 'cmb2' ),
			'KY'     => esc_html__( 'Cayman Islands', 'cmb2' ),			
			'CF' => esc_html__( 'Central African Republic', 'cmb2' ),
			'TD'   => esc_html__( 'Chad', 'cmb2' ),
			'CL'     => esc_html__( 'Chile', 'cmb2' ),			
			'CN' => esc_html__( 'China', 'cmb2' ),
			'CX'   => esc_html__( 'Christmas Island', 'cmb2' ),
			'CC'     => esc_html__( 'Cocos (Keeling) Islands', 'cmb2' ),			
			'CO' => esc_html__( 'Colombia', 'cmb2' ),
			'KM'   => esc_html__( 'Comoros', 'cmb2' ),
			'CG'     => esc_html__( 'Congo', 'cmb2' ),			
			'CD' => esc_html__( '"Congo, the Democratic Republic of the"', 'cmb2' ),
			'CK'   => esc_html__( 'Cook Islands', 'cmb2' ),
			'CR'     => esc_html__( 'Costa Rica', 'cmb2' ),
			
			'CI' => esc_html__( 'Côte d\'Ivoire', 'cmb2' ),
			'HR'   => esc_html__( 'Croatia', 'cmb2' ),
			'CU'     => esc_html__( 'Cuba', 'cmb2' ),
			
			'CW' => esc_html__( 'Curaçao', 'cmb2' ),
			'CY'   => esc_html__( 'Cyprus', 'cmb2' ),
			'CZ'     => esc_html__( 'Czech Republic', 'cmb2' ),
			
			'DK' => esc_html__( 'Denmark', 'cmb2' ),
			'DJ'   => esc_html__( 'Djibouti', 'cmb2' ),
			'DM'     => esc_html__( 'Dominica', 'cmb2' ),
			
			'DO' => esc_html__( 'Dominican Republic', 'cmb2' ),
			'EC'   => esc_html__( 'Ecuador', 'cmb2' ),
			'EG'     => esc_html__( 'Egypt', 'cmb2' ),
			
			'SV' => esc_html__( 'El Salvador', 'cmb2' ),
			'GQ'   => esc_html__( 'Equatorial Guinea', 'cmb2' ),
			'ER'     => esc_html__( 'Eritrea', 'cmb2' ),
			
			'EE' => esc_html__( 'Estonia', 'cmb2' ),
			'ET'   => esc_html__( 'Ethiopia', 'cmb2' ),
			'FK'     => esc_html__( 'Falkland Islands (Malvinas)', 'cmb2' ),
			'FO' => esc_html__( 'Faroe Islands', 'cmb2' ),
			'FJ'   => esc_html__( 'Fiji', 'cmb2' ),
			'FI'     => esc_html__( 'Finland', 'cmb2' ),
			
			'FR' => esc_html__( 'France', 'cmb2' ),
			'GF'   => esc_html__( 'French Guiana', 'cmb2' ),
			'PF'     => esc_html__( 'French Polynesia', 'cmb2' ),
			
			'TF' => esc_html__( 'French Southern Territories', 'cmb2' ),
			'GA'   => esc_html__( 'Gabon', 'cmb2' ),
			'GM'     => esc_html__( 'Gambia', 'cmb2' ),
			
			'GE' => esc_html__( 'Georgia', 'cmb2' ),
			'DE'   => esc_html__( 'Germany', 'cmb2' ),
			'GH'     => esc_html__( 'Ghana', 'cmb2' ),
			
			'GT' => esc_html__( 'Gibraltar', 'cmb2' ),
			'GR'   => esc_html__( 'Greece', 'cmb2' ),
			'GL'     => esc_html__( 'Greenland', 'cmb2' ),
			
			'GD' => esc_html__( 'Grenada', 'cmb2' ),
			'GP'   => esc_html__( 'Guadeloupe', 'cmb2' ),
			'GU'     => esc_html__( 'Guam', 'cmb2' ),
			
			'GT' => esc_html__( 'Guatemala', 'cmb2' ),
			'GG'   => esc_html__( 'Guernsey', 'cmb2' ),
			'GN'     => esc_html__( 'Guinea', 'cmb2' ),
			
			'GW' => esc_html__( 'Guinea-Bissau', 'cmb2' ),
			'GY'   => esc_html__( 'Guyana', 'cmb2' ),
			'HT'     => esc_html__( 'Haiti', 'cmb2' ),
			
			'HM' => esc_html__( 'Heard Island and McDonald Islands', 'cmb2' ),
			'VA'   => esc_html__( 'Holy See (Vatican City State)', 'cmb2' ),
			'HN'     => esc_html__( 'Honduras', 'cmb2' ),
			
			'HK' => esc_html__( 'Hong Kong', 'cmb2' ),
			'HU'   => esc_html__( 'Hungary', 'cmb2' ),
			'IS'     => esc_html__( 'Iceland', 'cmb2' ),
			
			'IN' => esc_html__( 'India', 'cmb2' ),
			'ID'   => esc_html__( 'Indonesia', 'cmb2' ),
			'IR'     => esc_html__( 'Iran, Islamic Republic of', 'cmb2' ),
			
			'IQ' => esc_html__( 'Iraq', 'cmb2' ),
			'IE'   => esc_html__( 'Ireland', 'cmb2' ),
			'IM'     => esc_html__( 'Isle of Man', 'cmb2' ),
			
			'IT' => esc_html__( 'Italy', 'cmb2' ),
			'JM'   => esc_html__( 'Jamaica', 'cmb2' ),
			'JP'     => esc_html__( 'Japan', 'cmb2' ),
			
			'JE' => esc_html__( 'Jersey', 'cmb2' ),
			'JO'   => esc_html__( 'Jordan', 'cmb2' ),
			'KZ'     => esc_html__( 'Kazakhstan', 'cmb2' ),
			
			'KE' => esc_html__( 'Kenya', 'cmb2' ),
			'KI'   => esc_html__( 'Kiribati', 'cmb2' ),
			'KP'     => esc_html__( 'Korea, Democratic People\'s Republic of', 'cmb2' ),
			
			'KR' => esc_html__( 'Korea, Republic of', 'cmb2' ),
			'KW'   => esc_html__( 'Kuwait', 'cmb2' ),
			'KG'     => esc_html__( 'Kyrgyzstan', 'cmb2' ),
			
			'LA' => esc_html__( 'Lao People\'s Democratic Republic', 'cmb2' ),
			'LV'   => esc_html__( 'Latvia', 'cmb2' ),
			'LB'     => esc_html__( 'Lebanon', 'cmb2' ),
			
			'LS' => esc_html__( 'Lesotho', 'cmb2' ),
			'LR'   => esc_html__( 'Liberia', 'cmb2' ),
			'LY'     => esc_html__( 'Libya', 'cmb2' ),
			
			'LI' => esc_html__( 'Liechtenstein', 'cmb2' ),
			'LT'   => esc_html__( 'Lithuania', 'cmb2' ),
			'LU'     => esc_html__( 'Luxembourg', 'cmb2' ),
			
			'MO' => esc_html__( 'Macao', 'cmb2' ),
			'MK'   => esc_html__( 'Macedonia, the Former Yugoslav Republic of', 'cmb2' ),
			'MG'     => esc_html__( 'Madagascar', 'cmb2' ),
			
			'MW' => esc_html__( 'Malawi', 'cmb2' ),
			'MY'   => esc_html__( 'Malaysia', 'cmb2' ),
			'MV'     => esc_html__( 'Maldives', 'cmb2' ),			
			'ML' => esc_html__( 'Mali', 'cmb2' ),
			'MT'   => esc_html__( 'Malta', 'cmb2' ),
			'MH'     => esc_html__( 'Marshall Islands', 'cmb2' ),
			
			'MQ' => esc_html__( 'Martinique', 'cmb2' ),
			'MR'   => esc_html__( 'Mauritania', 'cmb2' ),
			'MU'     => esc_html__( 'Mauritius', 'cmb2' ),
			
			'YT' => esc_html__( 'Mayotte', 'cmb2' ),
			'MX'   => esc_html__( 'Mexico', 'cmb2' ),
			'FM'     => esc_html__( 'Micronesia, Federated States of', 'cmb2' ),
			
			'MD' => esc_html__( 'Moldova, Republic of', 'cmb2' ),
			'MC'   => esc_html__( 'Monaco', 'cmb2' ),
			'MN'     => esc_html__( 'Mongolia', 'cmb2' ),
			
			'ME' => esc_html__( 'Montenegro', 'cmb2' ),
			'MS'   => esc_html__( 'Montserrat', 'cmb2' ),
			'MA'     => esc_html__( 'Morocco', 'cmb2' ),
			
			'MZ' => esc_html__( 'Mozambique', 'cmb2' ),
			'MM'   => esc_html__( 'Myanmar', 'cmb2' ),
			'NA'     => esc_html__( 'Namibia', 'cmb2' ),
			
			'NR' => esc_html__( 'Nauru', 'cmb2' ),
			'NP'   => esc_html__( 'Nepal', 'cmb2' ),
			'NL'     => esc_html__( 'Netherlands', 'cmb2' ),
			
			'NC' => esc_html__( 'New Caledonia', 'cmb2' ),
			'NZ'   => esc_html__( 'New Zealand', 'cmb2' ),
			'NI'     => esc_html__( 'Nicaragua', 'cmb2' ),
			
			'NE' => esc_html__( 'Niger', 'cmb2' ),
			'NG'   => esc_html__( 'Nigeria', 'cmb2' ),
			'NU'     => esc_html__( 'Niue', 'cmb2' ),
			
			'NF' => esc_html__( 'Norfolk Island', 'cmb2' ),
			'MP'   => esc_html__( 'Northern Mariana Islands', 'cmb2' ),
			'NO'     => esc_html__( 'Norway', 'cmb2' ),
			
			'OM' => esc_html__( 'Oman', 'cmb2' ),
			'PK'   => esc_html__( 'Pakistan', 'cmb2' ),
			'PW'     => esc_html__( 'Palau', 'cmb2' ),
			
			'PS' => esc_html__( 'Palestine, State of', 'cmb2' ),
			'PA'   => esc_html__( 'Panama', 'cmb2' ),
			'PG'     => esc_html__( 'Papua New Guinea', 'cmb2' ),
			
			'PY' => esc_html__( 'Paraguay', 'cmb2' ),
			'PE'   => esc_html__( 'Peru', 'cmb2' ),
			'PH'     => esc_html__( 'Philippines', 'cmb2' ),
			
			'PN' => esc_html__( 'Pitcairn', 'cmb2' ),
			'PL'   => esc_html__( 'Poland', 'cmb2' ),
			'PT'     => esc_html__( 'Portugal', 'cmb2' ),
			
			'PR' => esc_html__( 'Puerto Rico', 'cmb2' ),
			'QA'   => esc_html__( 'Qatar', 'cmb2' ),
			'RE'     => esc_html__( 'Réunion', 'cmb2' ),
			
			'RO' => esc_html__( 'Romania', 'cmb2' ),
			'RU'   => esc_html__( 'Russian Federation', 'cmb2' ),
			'RW'     => esc_html__( 'Rwanda', 'cmb2' ),
			
			'BL' => esc_html__( 'Saint Barthélemy', 'cmb2' ),
			'SH'   => esc_html__( 'Saint Helena, Ascension and Tristan da Cunha', 'cmb2' ),
			'KN'     => esc_html__( 'Saint Kitts and Nevis', 'cmb2' ),
			
			'LC' => esc_html__( 'Saint Lucia', 'cmb2' ),
			'MF'   => esc_html__( 'Saint Martin (French part)', 'cmb2' ),
			'PM'     => esc_html__( 'Saint Pierre and Miquelon', 'cmb2' ),
			
			
			'VC' => esc_html__( 'Saint Vincent and the Grenadines', 'cmb2' ),
			'WS'   => esc_html__( 'Samoa', 'cmb2' ),
			'SM'     => esc_html__( 'San Marino', 'cmb2' ),
			
			'ST' => esc_html__( 'Sao Tome and Principe', 'cmb2' ),
			'SA'   => esc_html__( 'Saudi Arabia', 'cmb2' ),
			'SN'     => esc_html__( 'Senegal', 'cmb2' ),
			
			'RS' => esc_html__( 'Serbia', 'cmb2' ),
			'SC'   => esc_html__( 'Seychelles', 'cmb2' ),
			'SL'     => esc_html__( 'Sierra Leone', 'cmb2' ),
			
			'SG' => esc_html__( 'Singapore', 'cmb2' ),
			'SX'   => esc_html__( 'Sint Maarten (Dutch part)', 'cmb2' ),
			'SK'     => esc_html__( 'Slovakia', 'cmb2' ),
			
			'SI' => esc_html__( 'Slovenia', 'cmb2' ),
			'SB'   => esc_html__( 'Solomon Islands', 'cmb2' ),
			
			'SO' => esc_html__( 'Somalia', 'cmb2' ),
			'ZA'   => esc_html__( 'South Africa', 'cmb2' ),
			'GS'     => esc_html__( 'South Georgia and the South Sandwich Islands', 'cmb2' ),
			
			'SS' => esc_html__( 'South Sudan', 'cmb2' ),
			'ES'   => esc_html__( 'Spain', 'cmb2' ),
			'LK'     => esc_html__( 'Sri Lanka', 'cmb2' ),
			
			'SD' => esc_html__( 'Sudan', 'cmb2' ),
			'SR'   => esc_html__( 'Suriname', 'cmb2' ),
			'SJ'     => esc_html__( 'Svalbard and Jan Mayen', 'cmb2' ),
			
			'SZ' => esc_html__( 'Swaziland', 'cmb2' ),
			'SE'   => esc_html__( 'Sweden', 'cmb2' ),
			'CH'     => esc_html__( 'Switzerland', 'cmb2' ),
			
			'SY' => esc_html__( 'Syrian Arab Republic', 'cmb2' ),
			'TW'   => esc_html__( 'Taiwan, Province of China', 'cmb2' ),
			'TJ'     => esc_html__( 'Tajikistan', 'cmb2' ),
			
			'TZ' => esc_html__( 'Tanzania, United Republic of', 'cmb2' ),
			'TH'   => esc_html__( 'Thailand', 'cmb2' ),
			'TL'     => esc_html__( 'Timor-Leste', 'cmb2' ),
			
			'TG' => esc_html__( 'Togo', 'cmb2' ),
			'TK'   => esc_html__( 'Tokelau', 'cmb2' ),
			'TO'     => esc_html__( 'Tonga', 'cmb2' ),
			
			'TT' => esc_html__( 'Trinidad and Tobago', 'cmb2' ),
			'TN'   => esc_html__( 'Tunisia', 'cmb2' ),
			'TR'     => esc_html__( 'Turkey', 'cmb2' ),
			
			'TM' => esc_html__( 'Turkmenistan', 'cmb2' ),
			'TC'   => esc_html__( 'Turks and Caicos Islands', 'cmb2' ),
			'TV'     => esc_html__( 'Tuvalu', 'cmb2' ),
			
			'UG' => esc_html__( 'Uganda', 'cmb2' ),
			'UA'   => esc_html__( 'Ukraine', 'cmb2' ),
			'AE'     => esc_html__( 'United Arab Emirates', 'cmb2' ),
			
			'GB' => esc_html__( 'United Kingdom', 'cmb2' ),
			'US'   => esc_html__( 'United States', 'cmb2' ),
			'UM'     => esc_html__( 'United States Minor Outlying Islands', 'cmb2' ),
			
			'UY' => esc_html__( 'Uruguay', 'cmb2' ),
			'UZ'   => esc_html__( 'Uzbekistan', 'cmb2' ),
			'VU'     => esc_html__( 'Vanuatu', 'cmb2' ),
			
			'VE' => esc_html__( 'Venezuela, Bolivarian Republic of', 'cmb2' ),
			'VN'   => esc_html__( 'Viet Nam', 'cmb2' ),
			'VG'     => esc_html__( 'Virgin Islands, British', 'cmb2' ),
			
			'VI' => esc_html__( 'Virgin Islands, U.S', 'cmb2' ),
			'WF'   => esc_html__( 'Wallis and Futuna', 'cmb2' ),
			'EH'     => esc_html__( 'Western Sahara', 'cmb2' ),
			
			'YE' => esc_html__( 'Yemen', 'cmb2' ),
			'ZM'   => esc_html__( 'Zambia', 'cmb2' ),
			'ZW'     => esc_html__( 'Zimbabwe', 'cmb2' ),
			
		),
	) );	

	$cmb->add_field( array(
		'name'    => 'Nationality ',
		'classes' => 'form-group col-xs-12 col-md-12',
		'id'      => 'nationality',
		'type'    => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Citizen ID ',
		'id'      => 'citizen_id',
		'classes' => 'form-group col-xs-12 col-md-12',
		'type'    => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Passport ID',
		'id'      => 'passport_id',
		'before_row' => '<h4>Passport Information</h4>',
		'classes' => 'form-group col-xs-12 col-md-12',
		'type'    => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );
	
	$cmb->add_field( array(
		'name' => 'Date of Issued',
		'id'   => 'p_issue',
		'type' => 'text_date',
		'classes' => 'form-group col-xs-12 col-md-12',
		// 'timezone_meta_key' => 'wiki_test_timezone',
		// 'date_format' => 'l jS \of F Y',
	) );

	$cmb->add_field( array(
		'name' => 'Date of Expiary',
		'id'   => 'p_expire',
		'type' => 'text_date',
		'classes' => 'form-group col-xs-12 col-md-12',
		// 'timezone_meta_key' => 'wiki_test_timezone',
		// 'date_format' => 'l jS \of F Y',
	) );

	
	$cmb->add_field( array(
		'name'       => 'Country of Issue',
		'id'         => 'p_country',
		'classes' => 'form-group col-xs-12 col-md-12',
		'type'             => 'select',
		'default'	=> 'TH',
		'attributes'  => array(
			'required'    => 'required',
		),
		'show_option_none' => false,
		'options'          => array(
			'AF' => esc_html__( 'Afghanistan', 'cmb2' ),
			'AX'   => esc_html__( 'Åland Islands', 'cmb2' ),
			'AL'     => esc_html__( 'Albania', 'cmb2' ),			
			'DZ' => esc_html__( 'Algeria', 'cmb2' ),
			'AS'   => esc_html__( 'American Samoa', 'cmb2' ),
			'AD'     => esc_html__( 'Andorra', 'cmb2' ),			
			'AO' => esc_html__( 'Angola', 'cmb2' ),
			'AI'   => esc_html__( 'Anguilla', 'cmb2' ),
			'AQ'     => esc_html__( 'Antarctica', 'cmb2' ),			
			'AG' => esc_html__( 'Antigua and Barbuda', 'cmb2' ),
			'AR'   => esc_html__( 'Argentina', 'cmb2' ),
			'AM'     => esc_html__( 'Armenia', 'cmb2' ),			
			'AW' => esc_html__( 'Aruba', 'cmb2' ),
			'AU'   => esc_html__( 'Australia', 'cmb2' ),
			'AT'     => esc_html__( 'Austria', 'cmb2' ),			
			'AZ' => esc_html__( 'Azerbaijan', 'cmb2' ),
			'BS'   => esc_html__( 'Bahamas', 'cmb2' ),
			'BH'     => esc_html__( 'Bahrain', 'cmb2' ),			
			'BD' => esc_html__( 'Bangladesh', 'cmb2' ),
			'BB'   => esc_html__( 'Barbados', 'cmb2' ),
			'BY'     => esc_html__( 'Belarus', 'cmb2' ),			
			'BE' => esc_html__( 'Belgium', 'cmb2' ),
			'BZ'   => esc_html__( 'Belize', 'cmb2' ),
			'BJ'     => esc_html__( 'Benin', 'cmb2' ),			
			'BM' => esc_html__( 'Bermuda', 'cmb2' ),
			'BT'   => esc_html__( 'Bhutan', 'cmb2' ),
			'BO'     => esc_html__( '"Bolivia, Plurinational State of"', 'cmb2' ),			
			'BQ' => esc_html__( 'Bonaire, Sint Eustatius and Saba', 'cmb2' ),
			'BA'   => esc_html__( 'Bosnia and Herzegovina', 'cmb2' ),
			'BW'     => esc_html__( 'Botswana', 'cmb2' ),			
			'BV' => esc_html__( 'Bouvet Island', 'cmb2' ),
			'BR'   => esc_html__( 'Brazil', 'cmb2' ),
			'IO'     => esc_html__( 'British Indian Ocean Territory', 'cmb2' ),			
			'BN' => esc_html__( 'Brunei Darussalam', 'cmb2' ),
			'BG'   => esc_html__( 'Bulgaria', 'cmb2' ),
			'BF'     => esc_html__( 'Burkina Faso', 'cmb2' ),			
			'BI' => esc_html__( 'Burundi', 'cmb2' ),
			'KH'   => esc_html__( 'Cambodia', 'cmb2' ),
			'CM'     => esc_html__( 'Cameroon', 'cmb2' ),			
			'CA' => esc_html__( 'Canada', 'cmb2' ),
			'CV'   => esc_html__( 'Cape Verde', 'cmb2' ),
			'KY'     => esc_html__( 'Cayman Islands', 'cmb2' ),			
			'CF' => esc_html__( 'Central African Republic', 'cmb2' ),
			'TD'   => esc_html__( 'Chad', 'cmb2' ),
			'CL'     => esc_html__( 'Chile', 'cmb2' ),			
			'CN' => esc_html__( 'China', 'cmb2' ),
			'CX'   => esc_html__( 'Christmas Island', 'cmb2' ),
			'CC'     => esc_html__( 'Cocos (Keeling) Islands', 'cmb2' ),			
			'CO' => esc_html__( 'Colombia', 'cmb2' ),
			'KM'   => esc_html__( 'Comoros', 'cmb2' ),
			'CG'     => esc_html__( 'Congo', 'cmb2' ),			
			'CD' => esc_html__( '"Congo, the Democratic Republic of the"', 'cmb2' ),
			'CK'   => esc_html__( 'Cook Islands', 'cmb2' ),
			'CR'     => esc_html__( 'Costa Rica', 'cmb2' ),
			
			'CI' => esc_html__( 'Côte d\'Ivoire', 'cmb2' ),
			'HR'   => esc_html__( 'Croatia', 'cmb2' ),
			'CU'     => esc_html__( 'Cuba', 'cmb2' ),
			
			'CW' => esc_html__( 'Curaçao', 'cmb2' ),
			'CY'   => esc_html__( 'Cyprus', 'cmb2' ),
			'CZ'     => esc_html__( 'Czech Republic', 'cmb2' ),
			
			'DK' => esc_html__( 'Denmark', 'cmb2' ),
			'DJ'   => esc_html__( 'Djibouti', 'cmb2' ),
			'DM'     => esc_html__( 'Dominica', 'cmb2' ),
			
			'DO' => esc_html__( 'Dominican Republic', 'cmb2' ),
			'EC'   => esc_html__( 'Ecuador', 'cmb2' ),
			'EG'     => esc_html__( 'Egypt', 'cmb2' ),
			
			'SV' => esc_html__( 'El Salvador', 'cmb2' ),
			'GQ'   => esc_html__( 'Equatorial Guinea', 'cmb2' ),
			'ER'     => esc_html__( 'Eritrea', 'cmb2' ),
			
			'EE' => esc_html__( 'Estonia', 'cmb2' ),
			'ET'   => esc_html__( 'Ethiopia', 'cmb2' ),
			'FK'     => esc_html__( 'Falkland Islands (Malvinas)', 'cmb2' ),
			'FO' => esc_html__( 'Faroe Islands', 'cmb2' ),
			'FJ'   => esc_html__( 'Fiji', 'cmb2' ),
			'FI'     => esc_html__( 'Finland', 'cmb2' ),
			
			'FR' => esc_html__( 'France', 'cmb2' ),
			'GF'   => esc_html__( 'French Guiana', 'cmb2' ),
			'PF'     => esc_html__( 'French Polynesia', 'cmb2' ),
			
			'TF' => esc_html__( 'French Southern Territories', 'cmb2' ),
			'GA'   => esc_html__( 'Gabon', 'cmb2' ),
			'GM'     => esc_html__( 'Gambia', 'cmb2' ),
			
			'GE' => esc_html__( 'Georgia', 'cmb2' ),
			'DE'   => esc_html__( 'Germany', 'cmb2' ),
			'GH'     => esc_html__( 'Ghana', 'cmb2' ),
			
			'GT' => esc_html__( 'Gibraltar', 'cmb2' ),
			'GR'   => esc_html__( 'Greece', 'cmb2' ),
			'GL'     => esc_html__( 'Greenland', 'cmb2' ),
			
			'GD' => esc_html__( 'Grenada', 'cmb2' ),
			'GP'   => esc_html__( 'Guadeloupe', 'cmb2' ),
			'GU'     => esc_html__( 'Guam', 'cmb2' ),
			
			'GT' => esc_html__( 'Guatemala', 'cmb2' ),
			'GG'   => esc_html__( 'Guernsey', 'cmb2' ),
			'GN'     => esc_html__( 'Guinea', 'cmb2' ),
			
			'GW' => esc_html__( 'Guinea-Bissau', 'cmb2' ),
			'GY'   => esc_html__( 'Guyana', 'cmb2' ),
			'HT'     => esc_html__( 'Haiti', 'cmb2' ),
			
			'HM' => esc_html__( 'Heard Island and McDonald Islands', 'cmb2' ),
			'VA'   => esc_html__( 'Holy See (Vatican City State)', 'cmb2' ),
			'HN'     => esc_html__( 'Honduras', 'cmb2' ),
			
			'HK' => esc_html__( 'Hong Kong', 'cmb2' ),
			'HU'   => esc_html__( 'Hungary', 'cmb2' ),
			'IS'     => esc_html__( 'Iceland', 'cmb2' ),
			
			'IN' => esc_html__( 'India', 'cmb2' ),
			'ID'   => esc_html__( 'Indonesia', 'cmb2' ),
			'IR'     => esc_html__( 'Iran, Islamic Republic of', 'cmb2' ),
			
			'IQ' => esc_html__( 'Iraq', 'cmb2' ),
			'IE'   => esc_html__( 'Ireland', 'cmb2' ),
			'IM'     => esc_html__( 'Isle of Man', 'cmb2' ),
			
			'IT' => esc_html__( 'Italy', 'cmb2' ),
			'JM'   => esc_html__( 'Jamaica', 'cmb2' ),
			'JP'     => esc_html__( 'Japan', 'cmb2' ),
			
			'JE' => esc_html__( 'Jersey', 'cmb2' ),
			'JO'   => esc_html__( 'Jordan', 'cmb2' ),
			'KZ'     => esc_html__( 'Kazakhstan', 'cmb2' ),
			
			'KE' => esc_html__( 'Kenya', 'cmb2' ),
			'KI'   => esc_html__( 'Kiribati', 'cmb2' ),
			'KP'     => esc_html__( 'Korea, Democratic People\'s Republic of', 'cmb2' ),
			
			'KR' => esc_html__( 'Korea, Republic of', 'cmb2' ),
			'KW'   => esc_html__( 'Kuwait', 'cmb2' ),
			'KG'     => esc_html__( 'Kyrgyzstan', 'cmb2' ),
			
			'LA' => esc_html__( 'Lao People\'s Democratic Republic', 'cmb2' ),
			'LV'   => esc_html__( 'Latvia', 'cmb2' ),
			'LB'     => esc_html__( 'Lebanon', 'cmb2' ),
			
			'LS' => esc_html__( 'Lesotho', 'cmb2' ),
			'LR'   => esc_html__( 'Liberia', 'cmb2' ),
			'LY'     => esc_html__( 'Libya', 'cmb2' ),
			
			'LI' => esc_html__( 'Liechtenstein', 'cmb2' ),
			'LT'   => esc_html__( 'Lithuania', 'cmb2' ),
			'LU'     => esc_html__( 'Luxembourg', 'cmb2' ),
			
			'MO' => esc_html__( 'Macao', 'cmb2' ),
			'MK'   => esc_html__( 'Macedonia, the Former Yugoslav Republic of', 'cmb2' ),
			'MG'     => esc_html__( 'Madagascar', 'cmb2' ),
			
			'MW' => esc_html__( 'Malawi', 'cmb2' ),
			'MY'   => esc_html__( 'Malaysia', 'cmb2' ),
			'MV'     => esc_html__( 'Maldives', 'cmb2' ),			
			'ML' => esc_html__( 'Mali', 'cmb2' ),
			'MT'   => esc_html__( 'Malta', 'cmb2' ),
			'MH'     => esc_html__( 'Marshall Islands', 'cmb2' ),
			
			'MQ' => esc_html__( 'Martinique', 'cmb2' ),
			'MR'   => esc_html__( 'Mauritania', 'cmb2' ),
			'MU'     => esc_html__( 'Mauritius', 'cmb2' ),
			
			'YT' => esc_html__( 'Mayotte', 'cmb2' ),
			'MX'   => esc_html__( 'Mexico', 'cmb2' ),
			'FM'     => esc_html__( 'Micronesia, Federated States of', 'cmb2' ),
			
			'MD' => esc_html__( 'Moldova, Republic of', 'cmb2' ),
			'MC'   => esc_html__( 'Monaco', 'cmb2' ),
			'MN'     => esc_html__( 'Mongolia', 'cmb2' ),
			
			'ME' => esc_html__( 'Montenegro', 'cmb2' ),
			'MS'   => esc_html__( 'Montserrat', 'cmb2' ),
			'MA'     => esc_html__( 'Morocco', 'cmb2' ),
			
			'MZ' => esc_html__( 'Mozambique', 'cmb2' ),
			'MM'   => esc_html__( 'Myanmar', 'cmb2' ),
			'NA'     => esc_html__( 'Namibia', 'cmb2' ),
			
			'NR' => esc_html__( 'Nauru', 'cmb2' ),
			'NP'   => esc_html__( 'Nepal', 'cmb2' ),
			'NL'     => esc_html__( 'Netherlands', 'cmb2' ),
			
			'NC' => esc_html__( 'New Caledonia', 'cmb2' ),
			'NZ'   => esc_html__( 'New Zealand', 'cmb2' ),
			'NI'     => esc_html__( 'Nicaragua', 'cmb2' ),
			
			'NE' => esc_html__( 'Niger', 'cmb2' ),
			'NG'   => esc_html__( 'Nigeria', 'cmb2' ),
			'NU'     => esc_html__( 'Niue', 'cmb2' ),
			
			'NF' => esc_html__( 'Norfolk Island', 'cmb2' ),
			'MP'   => esc_html__( 'Northern Mariana Islands', 'cmb2' ),
			'NO'     => esc_html__( 'Norway', 'cmb2' ),
			
			'OM' => esc_html__( 'Oman', 'cmb2' ),
			'PK'   => esc_html__( 'Pakistan', 'cmb2' ),
			'PW'     => esc_html__( 'Palau', 'cmb2' ),
			
			'PS' => esc_html__( 'Palestine, State of', 'cmb2' ),
			'PA'   => esc_html__( 'Panama', 'cmb2' ),
			'PG'     => esc_html__( 'Papua New Guinea', 'cmb2' ),
			
			'PY' => esc_html__( 'Paraguay', 'cmb2' ),
			'PE'   => esc_html__( 'Peru', 'cmb2' ),
			'PH'     => esc_html__( 'Philippines', 'cmb2' ),
			
			'PN' => esc_html__( 'Pitcairn', 'cmb2' ),
			'PL'   => esc_html__( 'Poland', 'cmb2' ),
			'PT'     => esc_html__( 'Portugal', 'cmb2' ),
			
			'PR' => esc_html__( 'Puerto Rico', 'cmb2' ),
			'QA'   => esc_html__( 'Qatar', 'cmb2' ),
			'RE'     => esc_html__( 'Réunion', 'cmb2' ),
			
			'RO' => esc_html__( 'Romania', 'cmb2' ),
			'RU'   => esc_html__( 'Russian Federation', 'cmb2' ),
			'RW'     => esc_html__( 'Rwanda', 'cmb2' ),
			
			'BL' => esc_html__( 'Saint Barthélemy', 'cmb2' ),
			'SH'   => esc_html__( 'Saint Helena, Ascension and Tristan da Cunha', 'cmb2' ),
			'KN'     => esc_html__( 'Saint Kitts and Nevis', 'cmb2' ),
			
			'LC' => esc_html__( 'Saint Lucia', 'cmb2' ),
			'MF'   => esc_html__( 'Saint Martin (French part)', 'cmb2' ),
			'PM'     => esc_html__( 'Saint Pierre and Miquelon', 'cmb2' ),
			
			
			'VC' => esc_html__( 'Saint Vincent and the Grenadines', 'cmb2' ),
			'WS'   => esc_html__( 'Samoa', 'cmb2' ),
			'SM'     => esc_html__( 'San Marino', 'cmb2' ),
			
			'ST' => esc_html__( 'Sao Tome and Principe', 'cmb2' ),
			'SA'   => esc_html__( 'Saudi Arabia', 'cmb2' ),
			'SN'     => esc_html__( 'Senegal', 'cmb2' ),
			
			'RS' => esc_html__( 'Serbia', 'cmb2' ),
			'SC'   => esc_html__( 'Seychelles', 'cmb2' ),
			'SL'     => esc_html__( 'Sierra Leone', 'cmb2' ),
			
			'SG' => esc_html__( 'Singapore', 'cmb2' ),
			'SX'   => esc_html__( 'Sint Maarten (Dutch part)', 'cmb2' ),
			'SK'     => esc_html__( 'Slovakia', 'cmb2' ),
			
			'SI' => esc_html__( 'Slovenia', 'cmb2' ),
			'SB'   => esc_html__( 'Solomon Islands', 'cmb2' ),
			
			'SO' => esc_html__( 'Somalia', 'cmb2' ),
			'ZA'   => esc_html__( 'South Africa', 'cmb2' ),
			'GS'     => esc_html__( 'South Georgia and the South Sandwich Islands', 'cmb2' ),
			
			'SS' => esc_html__( 'South Sudan', 'cmb2' ),
			'ES'   => esc_html__( 'Spain', 'cmb2' ),
			'LK'     => esc_html__( 'Sri Lanka', 'cmb2' ),
			
			'SD' => esc_html__( 'Sudan', 'cmb2' ),
			'SR'   => esc_html__( 'Suriname', 'cmb2' ),
			'SJ'     => esc_html__( 'Svalbard and Jan Mayen', 'cmb2' ),
			
			'SZ' => esc_html__( 'Swaziland', 'cmb2' ),
			'SE'   => esc_html__( 'Sweden', 'cmb2' ),
			'CH'     => esc_html__( 'Switzerland', 'cmb2' ),
			
			'SY' => esc_html__( 'Syrian Arab Republic', 'cmb2' ),
			'TW'   => esc_html__( 'Taiwan, Province of China', 'cmb2' ),
			'TJ'     => esc_html__( 'Tajikistan', 'cmb2' ),
			
			'TZ' => esc_html__( 'Tanzania, United Republic of', 'cmb2' ),
			'TH'   => esc_html__( 'Thailand', 'cmb2' ),
			'TL'     => esc_html__( 'Timor-Leste', 'cmb2' ),
			
			'TG' => esc_html__( 'Togo', 'cmb2' ),
			'TK'   => esc_html__( 'Tokelau', 'cmb2' ),
			'TO'     => esc_html__( 'Tonga', 'cmb2' ),
			
			'TT' => esc_html__( 'Trinidad and Tobago', 'cmb2' ),
			'TN'   => esc_html__( 'Tunisia', 'cmb2' ),
			'TR'     => esc_html__( 'Turkey', 'cmb2' ),
			
			'TM' => esc_html__( 'Turkmenistan', 'cmb2' ),
			'TC'   => esc_html__( 'Turks and Caicos Islands', 'cmb2' ),
			'TV'     => esc_html__( 'Tuvalu', 'cmb2' ),
			
			'UG' => esc_html__( 'Uganda', 'cmb2' ),
			'UA'   => esc_html__( 'Ukraine', 'cmb2' ),
			'AE'     => esc_html__( 'United Arab Emirates', 'cmb2' ),
			
			'GB' => esc_html__( 'United Kingdom', 'cmb2' ),
			'US'   => esc_html__( 'United States', 'cmb2' ),
			'UM'     => esc_html__( 'United States Minor Outlying Islands', 'cmb2' ),
			
			'UY' => esc_html__( 'Uruguay', 'cmb2' ),
			'UZ'   => esc_html__( 'Uzbekistan', 'cmb2' ),
			'VU'     => esc_html__( 'Vanuatu', 'cmb2' ),
			
			'VE' => esc_html__( 'Venezuela, Bolivarian Republic of', 'cmb2' ),
			'VN'   => esc_html__( 'Viet Nam', 'cmb2' ),
			'VG'     => esc_html__( 'Virgin Islands, British', 'cmb2' ),
			
			'VI' => esc_html__( 'Virgin Islands, U.S', 'cmb2' ),
			'WF'   => esc_html__( 'Wallis and Futuna', 'cmb2' ),
			'EH'     => esc_html__( 'Western Sahara', 'cmb2' ),
			
			'YE' => esc_html__( 'Yemen', 'cmb2' ),
			'ZM'   => esc_html__( 'Zambia', 'cmb2' ),
			'ZW'     => esc_html__( 'Zimbabwe', 'cmb2' ),
			
		),
	) );	

	$cmb->add_field( array(
		'name'    => 'Photocopy of passport',
		'desc'    => '',
		'classes' => 'form-group col-xs-12 col-md-12',
		'id'      => 'passport_copy',
		'after_row' => '<h3></h3>',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		'after_row' => '<div class="errorMsg_passport" style="padding-left: 21%;"></div><h3></h3>',
		'attributes'  => array(
			'required'    => '',
			'data-parsley-fileextension' => 'jpg',
			'data-parsley-errors-container'=>".errorMsg_passport"
		),
	) );




//Current Contact Information Section

	$cmb->add_field( array(
		'name' => 'Address',
		'id' => 'current_adress',
		'classes' => 'form-group col-xs-12 col-md-12',
		'type' => 'textarea',
		'before_row' => '<h2>Contact Information</h2><h4>Current Address Information</h4>',
		'attributes'  => array(
			'rows'        => 3,
			'data-parsley-minlength' => 20,
			'required'    => 'required',
		),
	) );



	$cmb->add_field( array(
		'name'    => 'City',
		'id'      => 'current_city',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'    => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Province/State',
		'id'      => 'current_province',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'    => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Zip Code',
		'id'      => 'current_zip',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'    => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );
	
	$cmb->add_field( array(
		'name'       => 'Country ',
		'id'         => 'current_country',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'             => 'select',
		'default'	=> 'TH',
		'show_option_none' => false,
		'options'          => array(
			'AF' => esc_html__( 'Afghanistan', 'cmb2' ),
			'AX'   => esc_html__( 'Åland Islands', 'cmb2' ),
			'AL'     => esc_html__( 'Albania', 'cmb2' ),			
			'DZ' => esc_html__( 'Algeria', 'cmb2' ),
			'AS'   => esc_html__( 'American Samoa', 'cmb2' ),
			'AD'     => esc_html__( 'Andorra', 'cmb2' ),			
			'AO' => esc_html__( 'Angola', 'cmb2' ),
			'AI'   => esc_html__( 'Anguilla', 'cmb2' ),
			'AQ'     => esc_html__( 'Antarctica', 'cmb2' ),			
			'AG' => esc_html__( 'Antigua and Barbuda', 'cmb2' ),
			'AR'   => esc_html__( 'Argentina', 'cmb2' ),
			'AM'     => esc_html__( 'Armenia', 'cmb2' ),			
			'AW' => esc_html__( 'Aruba', 'cmb2' ),
			'AU'   => esc_html__( 'Australia', 'cmb2' ),
			'AT'     => esc_html__( 'Austria', 'cmb2' ),			
			'AZ' => esc_html__( 'Azerbaijan', 'cmb2' ),
			'BS'   => esc_html__( 'Bahamas', 'cmb2' ),
			'BH'     => esc_html__( 'Bahrain', 'cmb2' ),			
			'BD' => esc_html__( 'Bangladesh', 'cmb2' ),
			'BB'   => esc_html__( 'Barbados', 'cmb2' ),
			'BY'     => esc_html__( 'Belarus', 'cmb2' ),			
			'BE' => esc_html__( 'Belgium', 'cmb2' ),
			'BZ'   => esc_html__( 'Belize', 'cmb2' ),
			'BJ'     => esc_html__( 'Benin', 'cmb2' ),			
			'BM' => esc_html__( 'Bermuda', 'cmb2' ),
			'BT'   => esc_html__( 'Bhutan', 'cmb2' ),
			'BO'     => esc_html__( '"Bolivia, Plurinational State of"', 'cmb2' ),			
			'BQ' => esc_html__( 'Bonaire, Sint Eustatius and Saba', 'cmb2' ),
			'BA'   => esc_html__( 'Bosnia and Herzegovina', 'cmb2' ),
			'BW'     => esc_html__( 'Botswana', 'cmb2' ),			
			'BV' => esc_html__( 'Bouvet Island', 'cmb2' ),
			'BR'   => esc_html__( 'Brazil', 'cmb2' ),
			'IO'     => esc_html__( 'British Indian Ocean Territory', 'cmb2' ),			
			'BN' => esc_html__( 'Brunei Darussalam', 'cmb2' ),
			'BG'   => esc_html__( 'Bulgaria', 'cmb2' ),
			'BF'     => esc_html__( 'Burkina Faso', 'cmb2' ),			
			'BI' => esc_html__( 'Burundi', 'cmb2' ),
			'KH'   => esc_html__( 'Cambodia', 'cmb2' ),
			'CM'     => esc_html__( 'Cameroon', 'cmb2' ),			
			'CA' => esc_html__( 'Canada', 'cmb2' ),
			'CV'   => esc_html__( 'Cape Verde', 'cmb2' ),
			'KY'     => esc_html__( 'Cayman Islands', 'cmb2' ),			
			'CF' => esc_html__( 'Central African Republic', 'cmb2' ),
			'TD'   => esc_html__( 'Chad', 'cmb2' ),
			'CL'     => esc_html__( 'Chile', 'cmb2' ),			
			'CN' => esc_html__( 'China', 'cmb2' ),
			'CX'   => esc_html__( 'Christmas Island', 'cmb2' ),
			'CC'     => esc_html__( 'Cocos (Keeling) Islands', 'cmb2' ),			
			'CO' => esc_html__( 'Colombia', 'cmb2' ),
			'KM'   => esc_html__( 'Comoros', 'cmb2' ),
			'CG'     => esc_html__( 'Congo', 'cmb2' ),			
			'CD' => esc_html__( '"Congo, the Democratic Republic of the"', 'cmb2' ),
			'CK'   => esc_html__( 'Cook Islands', 'cmb2' ),
			'CR'     => esc_html__( 'Costa Rica', 'cmb2' ),
			
			'CI' => esc_html__( 'Côte d\'Ivoire', 'cmb2' ),
			'HR'   => esc_html__( 'Croatia', 'cmb2' ),
			'CU'     => esc_html__( 'Cuba', 'cmb2' ),
			
			'CW' => esc_html__( 'Curaçao', 'cmb2' ),
			'CY'   => esc_html__( 'Cyprus', 'cmb2' ),
			'CZ'     => esc_html__( 'Czech Republic', 'cmb2' ),
			
			'DK' => esc_html__( 'Denmark', 'cmb2' ),
			'DJ'   => esc_html__( 'Djibouti', 'cmb2' ),
			'DM'     => esc_html__( 'Dominica', 'cmb2' ),
			
			'DO' => esc_html__( 'Dominican Republic', 'cmb2' ),
			'EC'   => esc_html__( 'Ecuador', 'cmb2' ),
			'EG'     => esc_html__( 'Egypt', 'cmb2' ),
			
			'SV' => esc_html__( 'El Salvador', 'cmb2' ),
			'GQ'   => esc_html__( 'Equatorial Guinea', 'cmb2' ),
			'ER'     => esc_html__( 'Eritrea', 'cmb2' ),
			
			'EE' => esc_html__( 'Estonia', 'cmb2' ),
			'ET'   => esc_html__( 'Ethiopia', 'cmb2' ),
			'FK'     => esc_html__( 'Falkland Islands (Malvinas)', 'cmb2' ),
			'FO' => esc_html__( 'Faroe Islands', 'cmb2' ),
			'FJ'   => esc_html__( 'Fiji', 'cmb2' ),
			'FI'     => esc_html__( 'Finland', 'cmb2' ),
			
			'FR' => esc_html__( 'France', 'cmb2' ),
			'GF'   => esc_html__( 'French Guiana', 'cmb2' ),
			'PF'     => esc_html__( 'French Polynesia', 'cmb2' ),
			
			'TF' => esc_html__( 'French Southern Territories', 'cmb2' ),
			'GA'   => esc_html__( 'Gabon', 'cmb2' ),
			'GM'     => esc_html__( 'Gambia', 'cmb2' ),
			
			'GE' => esc_html__( 'Georgia', 'cmb2' ),
			'DE'   => esc_html__( 'Germany', 'cmb2' ),
			'GH'     => esc_html__( 'Ghana', 'cmb2' ),
			
			'GT' => esc_html__( 'Gibraltar', 'cmb2' ),
			'GR'   => esc_html__( 'Greece', 'cmb2' ),
			'GL'     => esc_html__( 'Greenland', 'cmb2' ),
			
			'GD' => esc_html__( 'Grenada', 'cmb2' ),
			'GP'   => esc_html__( 'Guadeloupe', 'cmb2' ),
			'GU'     => esc_html__( 'Guam', 'cmb2' ),
			
			'GT' => esc_html__( 'Guatemala', 'cmb2' ),
			'GG'   => esc_html__( 'Guernsey', 'cmb2' ),
			'GN'     => esc_html__( 'Guinea', 'cmb2' ),
			
			'GW' => esc_html__( 'Guinea-Bissau', 'cmb2' ),
			'GY'   => esc_html__( 'Guyana', 'cmb2' ),
			'HT'     => esc_html__( 'Haiti', 'cmb2' ),
			
			'HM' => esc_html__( 'Heard Island and McDonald Islands', 'cmb2' ),
			'VA'   => esc_html__( 'Holy See (Vatican City State)', 'cmb2' ),
			'HN'     => esc_html__( 'Honduras', 'cmb2' ),
			
			'HK' => esc_html__( 'Hong Kong', 'cmb2' ),
			'HU'   => esc_html__( 'Hungary', 'cmb2' ),
			'IS'     => esc_html__( 'Iceland', 'cmb2' ),
			
			'IN' => esc_html__( 'India', 'cmb2' ),
			'ID'   => esc_html__( 'Indonesia', 'cmb2' ),
			'IR'     => esc_html__( 'Iran, Islamic Republic of', 'cmb2' ),
			
			'IQ' => esc_html__( 'Iraq', 'cmb2' ),
			'IE'   => esc_html__( 'Ireland', 'cmb2' ),
			'IM'     => esc_html__( 'Isle of Man', 'cmb2' ),
			
			'IT' => esc_html__( 'Italy', 'cmb2' ),
			'JM'   => esc_html__( 'Jamaica', 'cmb2' ),
			'JP'     => esc_html__( 'Japan', 'cmb2' ),
			
			'JE' => esc_html__( 'Jersey', 'cmb2' ),
			'JO'   => esc_html__( 'Jordan', 'cmb2' ),
			'KZ'     => esc_html__( 'Kazakhstan', 'cmb2' ),
			
			'KE' => esc_html__( 'Kenya', 'cmb2' ),
			'KI'   => esc_html__( 'Kiribati', 'cmb2' ),
			'KP'     => esc_html__( 'Korea, Democratic People\'s Republic of', 'cmb2' ),
			
			'KR' => esc_html__( 'Korea, Republic of', 'cmb2' ),
			'KW'   => esc_html__( 'Kuwait', 'cmb2' ),
			'KG'     => esc_html__( 'Kyrgyzstan', 'cmb2' ),
			
			'LA' => esc_html__( 'Lao People\'s Democratic Republic', 'cmb2' ),
			'LV'   => esc_html__( 'Latvia', 'cmb2' ),
			'LB'     => esc_html__( 'Lebanon', 'cmb2' ),
			
			'LS' => esc_html__( 'Lesotho', 'cmb2' ),
			'LR'   => esc_html__( 'Liberia', 'cmb2' ),
			'LY'     => esc_html__( 'Libya', 'cmb2' ),
			
			'LI' => esc_html__( 'Liechtenstein', 'cmb2' ),
			'LT'   => esc_html__( 'Lithuania', 'cmb2' ),
			'LU'     => esc_html__( 'Luxembourg', 'cmb2' ),
			
			'MO' => esc_html__( 'Macao', 'cmb2' ),
			'MK'   => esc_html__( 'Macedonia, the Former Yugoslav Republic of', 'cmb2' ),
			'MG'     => esc_html__( 'Madagascar', 'cmb2' ),
			
			'MW' => esc_html__( 'Malawi', 'cmb2' ),
			'MY'   => esc_html__( 'Malaysia', 'cmb2' ),
			'MV'     => esc_html__( 'Maldives', 'cmb2' ),			
			'ML' => esc_html__( 'Mali', 'cmb2' ),
			'MT'   => esc_html__( 'Malta', 'cmb2' ),
			'MH'     => esc_html__( 'Marshall Islands', 'cmb2' ),
			
			'MQ' => esc_html__( 'Martinique', 'cmb2' ),
			'MR'   => esc_html__( 'Mauritania', 'cmb2' ),
			'MU'     => esc_html__( 'Mauritius', 'cmb2' ),
			
			'YT' => esc_html__( 'Mayotte', 'cmb2' ),
			'MX'   => esc_html__( 'Mexico', 'cmb2' ),
			'FM'     => esc_html__( 'Micronesia, Federated States of', 'cmb2' ),
			
			'MD' => esc_html__( 'Moldova, Republic of', 'cmb2' ),
			'MC'   => esc_html__( 'Monaco', 'cmb2' ),
			'MN'     => esc_html__( 'Mongolia', 'cmb2' ),
			
			'ME' => esc_html__( 'Montenegro', 'cmb2' ),
			'MS'   => esc_html__( 'Montserrat', 'cmb2' ),
			'MA'     => esc_html__( 'Morocco', 'cmb2' ),
			
			'MZ' => esc_html__( 'Mozambique', 'cmb2' ),
			'MM'   => esc_html__( 'Myanmar', 'cmb2' ),
			'NA'     => esc_html__( 'Namibia', 'cmb2' ),
			
			'NR' => esc_html__( 'Nauru', 'cmb2' ),
			'NP'   => esc_html__( 'Nepal', 'cmb2' ),
			'NL'     => esc_html__( 'Netherlands', 'cmb2' ),
			
			'NC' => esc_html__( 'New Caledonia', 'cmb2' ),
			'NZ'   => esc_html__( 'New Zealand', 'cmb2' ),
			'NI'     => esc_html__( 'Nicaragua', 'cmb2' ),
			
			'NE' => esc_html__( 'Niger', 'cmb2' ),
			'NG'   => esc_html__( 'Nigeria', 'cmb2' ),
			'NU'     => esc_html__( 'Niue', 'cmb2' ),
			
			'NF' => esc_html__( 'Norfolk Island', 'cmb2' ),
			'MP'   => esc_html__( 'Northern Mariana Islands', 'cmb2' ),
			'NO'     => esc_html__( 'Norway', 'cmb2' ),
			
			'OM' => esc_html__( 'Oman', 'cmb2' ),
			'PK'   => esc_html__( 'Pakistan', 'cmb2' ),
			'PW'     => esc_html__( 'Palau', 'cmb2' ),
			
			'PS' => esc_html__( 'Palestine, State of', 'cmb2' ),
			'PA'   => esc_html__( 'Panama', 'cmb2' ),
			'PG'     => esc_html__( 'Papua New Guinea', 'cmb2' ),
			
			'PY' => esc_html__( 'Paraguay', 'cmb2' ),
			'PE'   => esc_html__( 'Peru', 'cmb2' ),
			'PH'     => esc_html__( 'Philippines', 'cmb2' ),
			
			'PN' => esc_html__( 'Pitcairn', 'cmb2' ),
			'PL'   => esc_html__( 'Poland', 'cmb2' ),
			'PT'     => esc_html__( 'Portugal', 'cmb2' ),
			
			'PR' => esc_html__( 'Puerto Rico', 'cmb2' ),
			'QA'   => esc_html__( 'Qatar', 'cmb2' ),
			'RE'     => esc_html__( 'Réunion', 'cmb2' ),
			
			'RO' => esc_html__( 'Romania', 'cmb2' ),
			'RU'   => esc_html__( 'Russian Federation', 'cmb2' ),
			'RW'     => esc_html__( 'Rwanda', 'cmb2' ),
			
			'BL' => esc_html__( 'Saint Barthélemy', 'cmb2' ),
			'SH'   => esc_html__( 'Saint Helena, Ascension and Tristan da Cunha', 'cmb2' ),
			'KN'     => esc_html__( 'Saint Kitts and Nevis', 'cmb2' ),
			
			'LC' => esc_html__( 'Saint Lucia', 'cmb2' ),
			'MF'   => esc_html__( 'Saint Martin (French part)', 'cmb2' ),
			'PM'     => esc_html__( 'Saint Pierre and Miquelon', 'cmb2' ),
			
			
			'VC' => esc_html__( 'Saint Vincent and the Grenadines', 'cmb2' ),
			'WS'   => esc_html__( 'Samoa', 'cmb2' ),
			'SM'     => esc_html__( 'San Marino', 'cmb2' ),
			
			'ST' => esc_html__( 'Sao Tome and Principe', 'cmb2' ),
			'SA'   => esc_html__( 'Saudi Arabia', 'cmb2' ),
			'SN'     => esc_html__( 'Senegal', 'cmb2' ),
			
			'RS' => esc_html__( 'Serbia', 'cmb2' ),
			'SC'   => esc_html__( 'Seychelles', 'cmb2' ),
			'SL'     => esc_html__( 'Sierra Leone', 'cmb2' ),
			
			'SG' => esc_html__( 'Singapore', 'cmb2' ),
			'SX'   => esc_html__( 'Sint Maarten (Dutch part)', 'cmb2' ),
			'SK'     => esc_html__( 'Slovakia', 'cmb2' ),
			
			'SI' => esc_html__( 'Slovenia', 'cmb2' ),
			'SB'   => esc_html__( 'Solomon Islands', 'cmb2' ),
			
			'SO' => esc_html__( 'Somalia', 'cmb2' ),
			'ZA'   => esc_html__( 'South Africa', 'cmb2' ),
			'GS'     => esc_html__( 'South Georgia and the South Sandwich Islands', 'cmb2' ),
			
			'SS' => esc_html__( 'South Sudan', 'cmb2' ),
			'ES'   => esc_html__( 'Spain', 'cmb2' ),
			'LK'     => esc_html__( 'Sri Lanka', 'cmb2' ),
			
			'SD' => esc_html__( 'Sudan', 'cmb2' ),
			'SR'   => esc_html__( 'Suriname', 'cmb2' ),
			'SJ'     => esc_html__( 'Svalbard and Jan Mayen', 'cmb2' ),
			
			'SZ' => esc_html__( 'Swaziland', 'cmb2' ),
			'SE'   => esc_html__( 'Sweden', 'cmb2' ),
			'CH'     => esc_html__( 'Switzerland', 'cmb2' ),
			
			'SY' => esc_html__( 'Syrian Arab Republic', 'cmb2' ),
			'TW'   => esc_html__( 'Taiwan, Province of China', 'cmb2' ),
			'TJ'     => esc_html__( 'Tajikistan', 'cmb2' ),
			
			'TZ' => esc_html__( 'Tanzania, United Republic of', 'cmb2' ),
			'TH'   => esc_html__( 'Thailand', 'cmb2' ),
			'TL'     => esc_html__( 'Timor-Leste', 'cmb2' ),
			
			'TG' => esc_html__( 'Togo', 'cmb2' ),
			'TK'   => esc_html__( 'Tokelau', 'cmb2' ),
			'TO'     => esc_html__( 'Tonga', 'cmb2' ),
			
			'TT' => esc_html__( 'Trinidad and Tobago', 'cmb2' ),
			'TN'   => esc_html__( 'Tunisia', 'cmb2' ),
			'TR'     => esc_html__( 'Turkey', 'cmb2' ),
			
			'TM' => esc_html__( 'Turkmenistan', 'cmb2' ),
			'TC'   => esc_html__( 'Turks and Caicos Islands', 'cmb2' ),
			'TV'     => esc_html__( 'Tuvalu', 'cmb2' ),
			
			'UG' => esc_html__( 'Uganda', 'cmb2' ),
			'UA'   => esc_html__( 'Ukraine', 'cmb2' ),
			'AE'     => esc_html__( 'United Arab Emirates', 'cmb2' ),
			
			'GB' => esc_html__( 'United Kingdom', 'cmb2' ),
			'US'   => esc_html__( 'United States', 'cmb2' ),
			'UM'     => esc_html__( 'United States Minor Outlying Islands', 'cmb2' ),
			
			'UY' => esc_html__( 'Uruguay', 'cmb2' ),
			'UZ'   => esc_html__( 'Uzbekistan', 'cmb2' ),
			'VU'     => esc_html__( 'Vanuatu', 'cmb2' ),
			
			'VE' => esc_html__( 'Venezuela, Bolivarian Republic of', 'cmb2' ),
			'VN'   => esc_html__( 'Viet Nam', 'cmb2' ),
			'VG'     => esc_html__( 'Virgin Islands, British', 'cmb2' ),
			
			'VI' => esc_html__( 'Virgin Islands, U.S', 'cmb2' ),
			'WF'   => esc_html__( 'Wallis and Futuna', 'cmb2' ),
			'EH'     => esc_html__( 'Western Sahara', 'cmb2' ),
			
			'YE' => esc_html__( 'Yemen', 'cmb2' ),
			'ZM'   => esc_html__( 'Zambia', 'cmb2' ),
			'ZW'     => esc_html__( 'Zimbabwe', 'cmb2' ),
			
		),
		'attributes'  => array(
			'required'    => 'required',
		),
	) );	

	$cmb->add_field( array(
		'name'    => 'Phone Number',
		'id'      => 'current_tel',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'    => 'text',
	) );


//Contact Information Section

	$cmb->add_field( array(
		'name' => 'Address',
		'id' => 'second_adress',
		'classes' => 'form-group col-xs-12 col-md-12',
		'type' => 'textarea',
		'before_row' => '<h4>Mailing Address Information</h4>',
		'attributes'  => array(
			'rows'        => 3,
			'data-parsley-minlength' => 20
		),
	) );



	$cmb->add_field( array(
		'name'    => 'City',
		'id'      => 'second_city',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'    => 'text',
	) );

	$cmb->add_field( array(
		'name'    => 'Province/State',
		'id'      => 'second_province',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'    => 'text',
	) );

	$cmb->add_field( array(
		'name'    => 'Zip Code',
		'id'      => 'second_zip',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'    => 'text',
	) );
	
	$cmb->add_field( array(
		'name'       => 'Country ',
		'id'         => 'second_country',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'             => 'select',
		'show_option_none' => false,
		'default' => 'TH',
		'options'          => array(
			'AF' => esc_html__( 'Afghanistan', 'cmb2' ),
			'AX'   => esc_html__( 'Åland Islands', 'cmb2' ),
			'AL'     => esc_html__( 'Albania', 'cmb2' ),			
			'DZ' => esc_html__( 'Algeria', 'cmb2' ),
			'AS'   => esc_html__( 'American Samoa', 'cmb2' ),
			'AD'     => esc_html__( 'Andorra', 'cmb2' ),			
			'AO' => esc_html__( 'Angola', 'cmb2' ),
			'AI'   => esc_html__( 'Anguilla', 'cmb2' ),
			'AQ'     => esc_html__( 'Antarctica', 'cmb2' ),			
			'AG' => esc_html__( 'Antigua and Barbuda', 'cmb2' ),
			'AR'   => esc_html__( 'Argentina', 'cmb2' ),
			'AM'     => esc_html__( 'Armenia', 'cmb2' ),			
			'AW' => esc_html__( 'Aruba', 'cmb2' ),
			'AU'   => esc_html__( 'Australia', 'cmb2' ),
			'AT'     => esc_html__( 'Austria', 'cmb2' ),			
			'AZ' => esc_html__( 'Azerbaijan', 'cmb2' ),
			'BS'   => esc_html__( 'Bahamas', 'cmb2' ),
			'BH'     => esc_html__( 'Bahrain', 'cmb2' ),			
			'BD' => esc_html__( 'Bangladesh', 'cmb2' ),
			'BB'   => esc_html__( 'Barbados', 'cmb2' ),
			'BY'     => esc_html__( 'Belarus', 'cmb2' ),			
			'BE' => esc_html__( 'Belgium', 'cmb2' ),
			'BZ'   => esc_html__( 'Belize', 'cmb2' ),
			'BJ'     => esc_html__( 'Benin', 'cmb2' ),			
			'BM' => esc_html__( 'Bermuda', 'cmb2' ),
			'BT'   => esc_html__( 'Bhutan', 'cmb2' ),
			'BO'     => esc_html__( '"Bolivia, Plurinational State of"', 'cmb2' ),			
			'BQ' => esc_html__( 'Bonaire, Sint Eustatius and Saba', 'cmb2' ),
			'BA'   => esc_html__( 'Bosnia and Herzegovina', 'cmb2' ),
			'BW'     => esc_html__( 'Botswana', 'cmb2' ),			
			'BV' => esc_html__( 'Bouvet Island', 'cmb2' ),
			'BR'   => esc_html__( 'Brazil', 'cmb2' ),
			'IO'     => esc_html__( 'British Indian Ocean Territory', 'cmb2' ),			
			'BN' => esc_html__( 'Brunei Darussalam', 'cmb2' ),
			'BG'   => esc_html__( 'Bulgaria', 'cmb2' ),
			'BF'     => esc_html__( 'Burkina Faso', 'cmb2' ),			
			'BI' => esc_html__( 'Burundi', 'cmb2' ),
			'KH'   => esc_html__( 'Cambodia', 'cmb2' ),
			'CM'     => esc_html__( 'Cameroon', 'cmb2' ),			
			'CA' => esc_html__( 'Canada', 'cmb2' ),
			'CV'   => esc_html__( 'Cape Verde', 'cmb2' ),
			'KY'     => esc_html__( 'Cayman Islands', 'cmb2' ),			
			'CF' => esc_html__( 'Central African Republic', 'cmb2' ),
			'TD'   => esc_html__( 'Chad', 'cmb2' ),
			'CL'     => esc_html__( 'Chile', 'cmb2' ),			
			'CN' => esc_html__( 'China', 'cmb2' ),
			'CX'   => esc_html__( 'Christmas Island', 'cmb2' ),
			'CC'     => esc_html__( 'Cocos (Keeling) Islands', 'cmb2' ),			
			'CO' => esc_html__( 'Colombia', 'cmb2' ),
			'KM'   => esc_html__( 'Comoros', 'cmb2' ),
			'CG'     => esc_html__( 'Congo', 'cmb2' ),			
			'CD' => esc_html__( '"Congo, the Democratic Republic of the"', 'cmb2' ),
			'CK'   => esc_html__( 'Cook Islands', 'cmb2' ),
			'CR'     => esc_html__( 'Costa Rica', 'cmb2' ),
			
			'CI' => esc_html__( 'Côte d\'Ivoire', 'cmb2' ),
			'HR'   => esc_html__( 'Croatia', 'cmb2' ),
			'CU'     => esc_html__( 'Cuba', 'cmb2' ),
			
			'CW' => esc_html__( 'Curaçao', 'cmb2' ),
			'CY'   => esc_html__( 'Cyprus', 'cmb2' ),
			'CZ'     => esc_html__( 'Czech Republic', 'cmb2' ),
			
			'DK' => esc_html__( 'Denmark', 'cmb2' ),
			'DJ'   => esc_html__( 'Djibouti', 'cmb2' ),
			'DM'     => esc_html__( 'Dominica', 'cmb2' ),
			
			'DO' => esc_html__( 'Dominican Republic', 'cmb2' ),
			'EC'   => esc_html__( 'Ecuador', 'cmb2' ),
			'EG'     => esc_html__( 'Egypt', 'cmb2' ),
			
			'SV' => esc_html__( 'El Salvador', 'cmb2' ),
			'GQ'   => esc_html__( 'Equatorial Guinea', 'cmb2' ),
			'ER'     => esc_html__( 'Eritrea', 'cmb2' ),
			
			'EE' => esc_html__( 'Estonia', 'cmb2' ),
			'ET'   => esc_html__( 'Ethiopia', 'cmb2' ),
			'FK'     => esc_html__( 'Falkland Islands (Malvinas)', 'cmb2' ),
			'FO' => esc_html__( 'Faroe Islands', 'cmb2' ),
			'FJ'   => esc_html__( 'Fiji', 'cmb2' ),
			'FI'     => esc_html__( 'Finland', 'cmb2' ),
			
			'FR' => esc_html__( 'France', 'cmb2' ),
			'GF'   => esc_html__( 'French Guiana', 'cmb2' ),
			'PF'     => esc_html__( 'French Polynesia', 'cmb2' ),
			
			'TF' => esc_html__( 'French Southern Territories', 'cmb2' ),
			'GA'   => esc_html__( 'Gabon', 'cmb2' ),
			'GM'     => esc_html__( 'Gambia', 'cmb2' ),
			
			'GE' => esc_html__( 'Georgia', 'cmb2' ),
			'DE'   => esc_html__( 'Germany', 'cmb2' ),
			'GH'     => esc_html__( 'Ghana', 'cmb2' ),
			
			'GT' => esc_html__( 'Gibraltar', 'cmb2' ),
			'GR'   => esc_html__( 'Greece', 'cmb2' ),
			'GL'     => esc_html__( 'Greenland', 'cmb2' ),
			
			'GD' => esc_html__( 'Grenada', 'cmb2' ),
			'GP'   => esc_html__( 'Guadeloupe', 'cmb2' ),
			'GU'     => esc_html__( 'Guam', 'cmb2' ),
			
			'GT' => esc_html__( 'Guatemala', 'cmb2' ),
			'GG'   => esc_html__( 'Guernsey', 'cmb2' ),
			'GN'     => esc_html__( 'Guinea', 'cmb2' ),
			
			'GW' => esc_html__( 'Guinea-Bissau', 'cmb2' ),
			'GY'   => esc_html__( 'Guyana', 'cmb2' ),
			'HT'     => esc_html__( 'Haiti', 'cmb2' ),
			
			'HM' => esc_html__( 'Heard Island and McDonald Islands', 'cmb2' ),
			'VA'   => esc_html__( 'Holy See (Vatican City State)', 'cmb2' ),
			'HN'     => esc_html__( 'Honduras', 'cmb2' ),
			
			'HK' => esc_html__( 'Hong Kong', 'cmb2' ),
			'HU'   => esc_html__( 'Hungary', 'cmb2' ),
			'IS'     => esc_html__( 'Iceland', 'cmb2' ),
			
			'IN' => esc_html__( 'India', 'cmb2' ),
			'ID'   => esc_html__( 'Indonesia', 'cmb2' ),
			'IR'     => esc_html__( 'Iran, Islamic Republic of', 'cmb2' ),
			
			'IQ' => esc_html__( 'Iraq', 'cmb2' ),
			'IE'   => esc_html__( 'Ireland', 'cmb2' ),
			'IM'     => esc_html__( 'Isle of Man', 'cmb2' ),
			
			'IT' => esc_html__( 'Italy', 'cmb2' ),
			'JM'   => esc_html__( 'Jamaica', 'cmb2' ),
			'JP'     => esc_html__( 'Japan', 'cmb2' ),
			
			'JE' => esc_html__( 'Jersey', 'cmb2' ),
			'JO'   => esc_html__( 'Jordan', 'cmb2' ),
			'KZ'     => esc_html__( 'Kazakhstan', 'cmb2' ),
			
			'KE' => esc_html__( 'Kenya', 'cmb2' ),
			'KI'   => esc_html__( 'Kiribati', 'cmb2' ),
			'KP'     => esc_html__( 'Korea, Democratic People\'s Republic of', 'cmb2' ),
			
			'KR' => esc_html__( 'Korea, Republic of', 'cmb2' ),
			'KW'   => esc_html__( 'Kuwait', 'cmb2' ),
			'KG'     => esc_html__( 'Kyrgyzstan', 'cmb2' ),
			
			'LA' => esc_html__( 'Lao People\'s Democratic Republic', 'cmb2' ),
			'LV'   => esc_html__( 'Latvia', 'cmb2' ),
			'LB'     => esc_html__( 'Lebanon', 'cmb2' ),
			
			'LS' => esc_html__( 'Lesotho', 'cmb2' ),
			'LR'   => esc_html__( 'Liberia', 'cmb2' ),
			'LY'     => esc_html__( 'Libya', 'cmb2' ),
			
			'LI' => esc_html__( 'Liechtenstein', 'cmb2' ),
			'LT'   => esc_html__( 'Lithuania', 'cmb2' ),
			'LU'     => esc_html__( 'Luxembourg', 'cmb2' ),
			
			'MO' => esc_html__( 'Macao', 'cmb2' ),
			'MK'   => esc_html__( 'Macedonia, the Former Yugoslav Republic of', 'cmb2' ),
			'MG'     => esc_html__( 'Madagascar', 'cmb2' ),
			
			'MW' => esc_html__( 'Malawi', 'cmb2' ),
			'MY'   => esc_html__( 'Malaysia', 'cmb2' ),
			'MV'     => esc_html__( 'Maldives', 'cmb2' ),			
			'ML' => esc_html__( 'Mali', 'cmb2' ),
			'MT'   => esc_html__( 'Malta', 'cmb2' ),
			'MH'     => esc_html__( 'Marshall Islands', 'cmb2' ),
			
			'MQ' => esc_html__( 'Martinique', 'cmb2' ),
			'MR'   => esc_html__( 'Mauritania', 'cmb2' ),
			'MU'     => esc_html__( 'Mauritius', 'cmb2' ),
			
			'YT' => esc_html__( 'Mayotte', 'cmb2' ),
			'MX'   => esc_html__( 'Mexico', 'cmb2' ),
			'FM'     => esc_html__( 'Micronesia, Federated States of', 'cmb2' ),
			
			'MD' => esc_html__( 'Moldova, Republic of', 'cmb2' ),
			'MC'   => esc_html__( 'Monaco', 'cmb2' ),
			'MN'     => esc_html__( 'Mongolia', 'cmb2' ),
			
			'ME' => esc_html__( 'Montenegro', 'cmb2' ),
			'MS'   => esc_html__( 'Montserrat', 'cmb2' ),
			'MA'     => esc_html__( 'Morocco', 'cmb2' ),
			
			'MZ' => esc_html__( 'Mozambique', 'cmb2' ),
			'MM'   => esc_html__( 'Myanmar', 'cmb2' ),
			'NA'     => esc_html__( 'Namibia', 'cmb2' ),
			
			'NR' => esc_html__( 'Nauru', 'cmb2' ),
			'NP'   => esc_html__( 'Nepal', 'cmb2' ),
			'NL'     => esc_html__( 'Netherlands', 'cmb2' ),
			
			'NC' => esc_html__( 'New Caledonia', 'cmb2' ),
			'NZ'   => esc_html__( 'New Zealand', 'cmb2' ),
			'NI'     => esc_html__( 'Nicaragua', 'cmb2' ),
			
			'NE' => esc_html__( 'Niger', 'cmb2' ),
			'NG'   => esc_html__( 'Nigeria', 'cmb2' ),
			'NU'     => esc_html__( 'Niue', 'cmb2' ),
			
			'NF' => esc_html__( 'Norfolk Island', 'cmb2' ),
			'MP'   => esc_html__( 'Northern Mariana Islands', 'cmb2' ),
			'NO'     => esc_html__( 'Norway', 'cmb2' ),
			
			'OM' => esc_html__( 'Oman', 'cmb2' ),
			'PK'   => esc_html__( 'Pakistan', 'cmb2' ),
			'PW'     => esc_html__( 'Palau', 'cmb2' ),
			
			'PS' => esc_html__( 'Palestine, State of', 'cmb2' ),
			'PA'   => esc_html__( 'Panama', 'cmb2' ),
			'PG'     => esc_html__( 'Papua New Guinea', 'cmb2' ),
			
			'PY' => esc_html__( 'Paraguay', 'cmb2' ),
			'PE'   => esc_html__( 'Peru', 'cmb2' ),
			'PH'     => esc_html__( 'Philippines', 'cmb2' ),
			
			'PN' => esc_html__( 'Pitcairn', 'cmb2' ),
			'PL'   => esc_html__( 'Poland', 'cmb2' ),
			'PT'     => esc_html__( 'Portugal', 'cmb2' ),
			
			'PR' => esc_html__( 'Puerto Rico', 'cmb2' ),
			'QA'   => esc_html__( 'Qatar', 'cmb2' ),
			'RE'     => esc_html__( 'Réunion', 'cmb2' ),
			
			'RO' => esc_html__( 'Romania', 'cmb2' ),
			'RU'   => esc_html__( 'Russian Federation', 'cmb2' ),
			'RW'     => esc_html__( 'Rwanda', 'cmb2' ),
			
			'BL' => esc_html__( 'Saint Barthélemy', 'cmb2' ),
			'SH'   => esc_html__( 'Saint Helena, Ascension and Tristan da Cunha', 'cmb2' ),
			'KN'     => esc_html__( 'Saint Kitts and Nevis', 'cmb2' ),
			
			'LC' => esc_html__( 'Saint Lucia', 'cmb2' ),
			'MF'   => esc_html__( 'Saint Martin (French part)', 'cmb2' ),
			'PM'     => esc_html__( 'Saint Pierre and Miquelon', 'cmb2' ),
			
			
			'VC' => esc_html__( 'Saint Vincent and the Grenadines', 'cmb2' ),
			'WS'   => esc_html__( 'Samoa', 'cmb2' ),
			'SM'     => esc_html__( 'San Marino', 'cmb2' ),
			
			'ST' => esc_html__( 'Sao Tome and Principe', 'cmb2' ),
			'SA'   => esc_html__( 'Saudi Arabia', 'cmb2' ),
			'SN'     => esc_html__( 'Senegal', 'cmb2' ),
			
			'RS' => esc_html__( 'Serbia', 'cmb2' ),
			'SC'   => esc_html__( 'Seychelles', 'cmb2' ),
			'SL'     => esc_html__( 'Sierra Leone', 'cmb2' ),
			
			'SG' => esc_html__( 'Singapore', 'cmb2' ),
			'SX'   => esc_html__( 'Sint Maarten (Dutch part)', 'cmb2' ),
			'SK'     => esc_html__( 'Slovakia', 'cmb2' ),
			
			'SI' => esc_html__( 'Slovenia', 'cmb2' ),
			'SB'   => esc_html__( 'Solomon Islands', 'cmb2' ),
			
			'SO' => esc_html__( 'Somalia', 'cmb2' ),
			'ZA'   => esc_html__( 'South Africa', 'cmb2' ),
			'GS'     => esc_html__( 'South Georgia and the South Sandwich Islands', 'cmb2' ),
			
			'SS' => esc_html__( 'South Sudan', 'cmb2' ),
			'ES'   => esc_html__( 'Spain', 'cmb2' ),
			'LK'     => esc_html__( 'Sri Lanka', 'cmb2' ),
			
			'SD' => esc_html__( 'Sudan', 'cmb2' ),
			'SR'   => esc_html__( 'Suriname', 'cmb2' ),
			'SJ'     => esc_html__( 'Svalbard and Jan Mayen', 'cmb2' ),
			
			'SZ' => esc_html__( 'Swaziland', 'cmb2' ),
			'SE'   => esc_html__( 'Sweden', 'cmb2' ),
			'CH'     => esc_html__( 'Switzerland', 'cmb2' ),
			
			'SY' => esc_html__( 'Syrian Arab Republic', 'cmb2' ),
			'TW'   => esc_html__( 'Taiwan, Province of China', 'cmb2' ),
			'TJ'     => esc_html__( 'Tajikistan', 'cmb2' ),
			
			'TZ' => esc_html__( 'Tanzania, United Republic of', 'cmb2' ),
			'TH'   => esc_html__( 'Thailand', 'cmb2' ),
			'TL'     => esc_html__( 'Timor-Leste', 'cmb2' ),
			
			'TG' => esc_html__( 'Togo', 'cmb2' ),
			'TK'   => esc_html__( 'Tokelau', 'cmb2' ),
			'TO'     => esc_html__( 'Tonga', 'cmb2' ),
			
			'TT' => esc_html__( 'Trinidad and Tobago', 'cmb2' ),
			'TN'   => esc_html__( 'Tunisia', 'cmb2' ),
			'TR'     => esc_html__( 'Turkey', 'cmb2' ),
			
			'TM' => esc_html__( 'Turkmenistan', 'cmb2' ),
			'TC'   => esc_html__( 'Turks and Caicos Islands', 'cmb2' ),
			'TV'     => esc_html__( 'Tuvalu', 'cmb2' ),
			
			'UG' => esc_html__( 'Uganda', 'cmb2' ),
			'UA'   => esc_html__( 'Ukraine', 'cmb2' ),
			'AE'     => esc_html__( 'United Arab Emirates', 'cmb2' ),
			
			'GB' => esc_html__( 'United Kingdom', 'cmb2' ),
			'US'   => esc_html__( 'United States', 'cmb2' ),
			'UM'     => esc_html__( 'United States Minor Outlying Islands', 'cmb2' ),
			
			'UY' => esc_html__( 'Uruguay', 'cmb2' ),
			'UZ'   => esc_html__( 'Uzbekistan', 'cmb2' ),
			'VU'     => esc_html__( 'Vanuatu', 'cmb2' ),
			
			'VE' => esc_html__( 'Venezuela, Bolivarian Republic of', 'cmb2' ),
			'VN'   => esc_html__( 'Viet Nam', 'cmb2' ),
			'VG'     => esc_html__( 'Virgin Islands, British', 'cmb2' ),
			
			'VI' => esc_html__( 'Virgin Islands, U.S', 'cmb2' ),
			'WF'   => esc_html__( 'Wallis and Futuna', 'cmb2' ),
			'EH'     => esc_html__( 'Western Sahara', 'cmb2' ),
			
			'YE' => esc_html__( 'Yemen', 'cmb2' ),
			'ZM'   => esc_html__( 'Zambia', 'cmb2' ),
			'ZW'     => esc_html__( 'Zimbabwe', 'cmb2' ),
			
		),
	) );	

	$cmb->add_field( array(
		'name'    => 'Phone Number',
		'id'      => 'second_tel',
		'classes' => 'form-group col-xs-12 full-width col-lg-6',
		'type'    => 'text',
		'after_row' => '<h3></h3>',
	) );


//Educational Background Section

	$education_group = $cmb->add_field( array(
		'id'          => 'education_bg_group',
		'type'        => 'group',
		'before_group' => '<h2>Educational Background</h2><p>List all degrees previously attended, in chronological order. </p>',
		'after_group' => '<h3></h3> ',
		'options'     => array(
			'group_title'   => __( 'Degree {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Degree', 'cmb2' ),
			'remove_button' => __( 'Remove Degree', 'cmb2' ),
			'sortable'      => false, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb->add_group_field( $education_group, array(
		'name' => 'Institution',
		'id'   => 'institution',
		'type' => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb->add_group_field( $education_group, array(
		'name' => 'City',
		'id'   => 'institution_city',
		'type' => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb->add_group_field( $education_group, array(
		'name'       => 'Country ',
		'id'         => 'institution_Country',
		'type'       => 'select',
		'default'	=> 	'TH',
		'show_option_none' => false,
		'options'          => array(
			'AF' => esc_html__( 'Afghanistan', 'cmb2' ),
			'AX'   => esc_html__( 'Åland Islands', 'cmb2' ),
			'AL'     => esc_html__( 'Albania', 'cmb2' ),			
			'DZ' => esc_html__( 'Algeria', 'cmb2' ),
			'AS'   => esc_html__( 'American Samoa', 'cmb2' ),
			'AD'     => esc_html__( 'Andorra', 'cmb2' ),			
			'AO' => esc_html__( 'Angola', 'cmb2' ),
			'AI'   => esc_html__( 'Anguilla', 'cmb2' ),
			'AQ'     => esc_html__( 'Antarctica', 'cmb2' ),			
			'AG' => esc_html__( 'Antigua and Barbuda', 'cmb2' ),
			'AR'   => esc_html__( 'Argentina', 'cmb2' ),
			'AM'     => esc_html__( 'Armenia', 'cmb2' ),			
			'AW' => esc_html__( 'Aruba', 'cmb2' ),
			'AU'   => esc_html__( 'Australia', 'cmb2' ),
			'AT'     => esc_html__( 'Austria', 'cmb2' ),			
			'AZ' => esc_html__( 'Azerbaijan', 'cmb2' ),
			'BS'   => esc_html__( 'Bahamas', 'cmb2' ),
			'BH'     => esc_html__( 'Bahrain', 'cmb2' ),			
			'BD' => esc_html__( 'Bangladesh', 'cmb2' ),
			'BB'   => esc_html__( 'Barbados', 'cmb2' ),
			'BY'     => esc_html__( 'Belarus', 'cmb2' ),			
			'BE' => esc_html__( 'Belgium', 'cmb2' ),
			'BZ'   => esc_html__( 'Belize', 'cmb2' ),
			'BJ'     => esc_html__( 'Benin', 'cmb2' ),			
			'BM' => esc_html__( 'Bermuda', 'cmb2' ),
			'BT'   => esc_html__( 'Bhutan', 'cmb2' ),
			'BO'     => esc_html__( '"Bolivia, Plurinational State of"', 'cmb2' ),			
			'BQ' => esc_html__( 'Bonaire, Sint Eustatius and Saba', 'cmb2' ),
			'BA'   => esc_html__( 'Bosnia and Herzegovina', 'cmb2' ),
			'BW'     => esc_html__( 'Botswana', 'cmb2' ),			
			'BV' => esc_html__( 'Bouvet Island', 'cmb2' ),
			'BR'   => esc_html__( 'Brazil', 'cmb2' ),
			'IO'     => esc_html__( 'British Indian Ocean Territory', 'cmb2' ),			
			'BN' => esc_html__( 'Brunei Darussalam', 'cmb2' ),
			'BG'   => esc_html__( 'Bulgaria', 'cmb2' ),
			'BF'     => esc_html__( 'Burkina Faso', 'cmb2' ),			
			'BI' => esc_html__( 'Burundi', 'cmb2' ),
			'KH'   => esc_html__( 'Cambodia', 'cmb2' ),
			'CM'     => esc_html__( 'Cameroon', 'cmb2' ),			
			'CA' => esc_html__( 'Canada', 'cmb2' ),
			'CV'   => esc_html__( 'Cape Verde', 'cmb2' ),
			'KY'     => esc_html__( 'Cayman Islands', 'cmb2' ),			
			'CF' => esc_html__( 'Central African Republic', 'cmb2' ),
			'TD'   => esc_html__( 'Chad', 'cmb2' ),
			'CL'     => esc_html__( 'Chile', 'cmb2' ),			
			'CN' => esc_html__( 'China', 'cmb2' ),
			'CX'   => esc_html__( 'Christmas Island', 'cmb2' ),
			'CC'     => esc_html__( 'Cocos (Keeling) Islands', 'cmb2' ),			
			'CO' => esc_html__( 'Colombia', 'cmb2' ),
			'KM'   => esc_html__( 'Comoros', 'cmb2' ),
			'CG'     => esc_html__( 'Congo', 'cmb2' ),			
			'CD' => esc_html__( '"Congo, the Democratic Republic of the"', 'cmb2' ),
			'CK'   => esc_html__( 'Cook Islands', 'cmb2' ),
			'CR'     => esc_html__( 'Costa Rica', 'cmb2' ),
			
			'CI' => esc_html__( 'Côte d\'Ivoire', 'cmb2' ),
			'HR'   => esc_html__( 'Croatia', 'cmb2' ),
			'CU'     => esc_html__( 'Cuba', 'cmb2' ),
			
			'CW' => esc_html__( 'Curaçao', 'cmb2' ),
			'CY'   => esc_html__( 'Cyprus', 'cmb2' ),
			'CZ'     => esc_html__( 'Czech Republic', 'cmb2' ),
			
			'DK' => esc_html__( 'Denmark', 'cmb2' ),
			'DJ'   => esc_html__( 'Djibouti', 'cmb2' ),
			'DM'     => esc_html__( 'Dominica', 'cmb2' ),
			
			'DO' => esc_html__( 'Dominican Republic', 'cmb2' ),
			'EC'   => esc_html__( 'Ecuador', 'cmb2' ),
			'EG'     => esc_html__( 'Egypt', 'cmb2' ),
			
			'SV' => esc_html__( 'El Salvador', 'cmb2' ),
			'GQ'   => esc_html__( 'Equatorial Guinea', 'cmb2' ),
			'ER'     => esc_html__( 'Eritrea', 'cmb2' ),
			
			'EE' => esc_html__( 'Estonia', 'cmb2' ),
			'ET'   => esc_html__( 'Ethiopia', 'cmb2' ),
			'FK'     => esc_html__( 'Falkland Islands (Malvinas)', 'cmb2' ),
			'FO' => esc_html__( 'Faroe Islands', 'cmb2' ),
			'FJ'   => esc_html__( 'Fiji', 'cmb2' ),
			'FI'     => esc_html__( 'Finland', 'cmb2' ),
			
			'FR' => esc_html__( 'France', 'cmb2' ),
			'GF'   => esc_html__( 'French Guiana', 'cmb2' ),
			'PF'     => esc_html__( 'French Polynesia', 'cmb2' ),
			
			'TF' => esc_html__( 'French Southern Territories', 'cmb2' ),
			'GA'   => esc_html__( 'Gabon', 'cmb2' ),
			'GM'     => esc_html__( 'Gambia', 'cmb2' ),
			
			'GE' => esc_html__( 'Georgia', 'cmb2' ),
			'DE'   => esc_html__( 'Germany', 'cmb2' ),
			'GH'     => esc_html__( 'Ghana', 'cmb2' ),
			
			'GT' => esc_html__( 'Gibraltar', 'cmb2' ),
			'GR'   => esc_html__( 'Greece', 'cmb2' ),
			'GL'     => esc_html__( 'Greenland', 'cmb2' ),
			
			'GD' => esc_html__( 'Grenada', 'cmb2' ),
			'GP'   => esc_html__( 'Guadeloupe', 'cmb2' ),
			'GU'     => esc_html__( 'Guam', 'cmb2' ),
			
			'GT' => esc_html__( 'Guatemala', 'cmb2' ),
			'GG'   => esc_html__( 'Guernsey', 'cmb2' ),
			'GN'     => esc_html__( 'Guinea', 'cmb2' ),
			
			'GW' => esc_html__( 'Guinea-Bissau', 'cmb2' ),
			'GY'   => esc_html__( 'Guyana', 'cmb2' ),
			'HT'     => esc_html__( 'Haiti', 'cmb2' ),
			
			'HM' => esc_html__( 'Heard Island and McDonald Islands', 'cmb2' ),
			'VA'   => esc_html__( 'Holy See (Vatican City State)', 'cmb2' ),
			'HN'     => esc_html__( 'Honduras', 'cmb2' ),
			
			'HK' => esc_html__( 'Hong Kong', 'cmb2' ),
			'HU'   => esc_html__( 'Hungary', 'cmb2' ),
			'IS'     => esc_html__( 'Iceland', 'cmb2' ),
			
			'IN' => esc_html__( 'India', 'cmb2' ),
			'ID'   => esc_html__( 'Indonesia', 'cmb2' ),
			'IR'     => esc_html__( 'Iran, Islamic Republic of', 'cmb2' ),
			
			'IQ' => esc_html__( 'Iraq', 'cmb2' ),
			'IE'   => esc_html__( 'Ireland', 'cmb2' ),
			'IM'     => esc_html__( 'Isle of Man', 'cmb2' ),
			
			'IT' => esc_html__( 'Italy', 'cmb2' ),
			'JM'   => esc_html__( 'Jamaica', 'cmb2' ),
			'JP'     => esc_html__( 'Japan', 'cmb2' ),
			
			'JE' => esc_html__( 'Jersey', 'cmb2' ),
			'JO'   => esc_html__( 'Jordan', 'cmb2' ),
			'KZ'     => esc_html__( 'Kazakhstan', 'cmb2' ),
			
			'KE' => esc_html__( 'Kenya', 'cmb2' ),
			'KI'   => esc_html__( 'Kiribati', 'cmb2' ),
			'KP'     => esc_html__( 'Korea, Democratic People\'s Republic of', 'cmb2' ),
			
			'KR' => esc_html__( 'Korea, Republic of', 'cmb2' ),
			'KW'   => esc_html__( 'Kuwait', 'cmb2' ),
			'KG'     => esc_html__( 'Kyrgyzstan', 'cmb2' ),
			
			'LA' => esc_html__( 'Lao People\'s Democratic Republic', 'cmb2' ),
			'LV'   => esc_html__( 'Latvia', 'cmb2' ),
			'LB'     => esc_html__( 'Lebanon', 'cmb2' ),
			
			'LS' => esc_html__( 'Lesotho', 'cmb2' ),
			'LR'   => esc_html__( 'Liberia', 'cmb2' ),
			'LY'     => esc_html__( 'Libya', 'cmb2' ),
			
			'LI' => esc_html__( 'Liechtenstein', 'cmb2' ),
			'LT'   => esc_html__( 'Lithuania', 'cmb2' ),
			'LU'     => esc_html__( 'Luxembourg', 'cmb2' ),
			
			'MO' => esc_html__( 'Macao', 'cmb2' ),
			'MK'   => esc_html__( 'Macedonia, the Former Yugoslav Republic of', 'cmb2' ),
			'MG'     => esc_html__( 'Madagascar', 'cmb2' ),
			
			'MW' => esc_html__( 'Malawi', 'cmb2' ),
			'MY'   => esc_html__( 'Malaysia', 'cmb2' ),
			'MV'     => esc_html__( 'Maldives', 'cmb2' ),			
			'ML' => esc_html__( 'Mali', 'cmb2' ),
			'MT'   => esc_html__( 'Malta', 'cmb2' ),
			'MH'     => esc_html__( 'Marshall Islands', 'cmb2' ),
			
			'MQ' => esc_html__( 'Martinique', 'cmb2' ),
			'MR'   => esc_html__( 'Mauritania', 'cmb2' ),
			'MU'     => esc_html__( 'Mauritius', 'cmb2' ),
			
			'YT' => esc_html__( 'Mayotte', 'cmb2' ),
			'MX'   => esc_html__( 'Mexico', 'cmb2' ),
			'FM'     => esc_html__( 'Micronesia, Federated States of', 'cmb2' ),
			
			'MD' => esc_html__( 'Moldova, Republic of', 'cmb2' ),
			'MC'   => esc_html__( 'Monaco', 'cmb2' ),
			'MN'     => esc_html__( 'Mongolia', 'cmb2' ),
			
			'ME' => esc_html__( 'Montenegro', 'cmb2' ),
			'MS'   => esc_html__( 'Montserrat', 'cmb2' ),
			'MA'     => esc_html__( 'Morocco', 'cmb2' ),
			
			'MZ' => esc_html__( 'Mozambique', 'cmb2' ),
			'MM'   => esc_html__( 'Myanmar', 'cmb2' ),
			'NA'     => esc_html__( 'Namibia', 'cmb2' ),
			
			'NR' => esc_html__( 'Nauru', 'cmb2' ),
			'NP'   => esc_html__( 'Nepal', 'cmb2' ),
			'NL'     => esc_html__( 'Netherlands', 'cmb2' ),
			
			'NC' => esc_html__( 'New Caledonia', 'cmb2' ),
			'NZ'   => esc_html__( 'New Zealand', 'cmb2' ),
			'NI'     => esc_html__( 'Nicaragua', 'cmb2' ),
			
			'NE' => esc_html__( 'Niger', 'cmb2' ),
			'NG'   => esc_html__( 'Nigeria', 'cmb2' ),
			'NU'     => esc_html__( 'Niue', 'cmb2' ),
			
			'NF' => esc_html__( 'Norfolk Island', 'cmb2' ),
			'MP'   => esc_html__( 'Northern Mariana Islands', 'cmb2' ),
			'NO'     => esc_html__( 'Norway', 'cmb2' ),
			
			'OM' => esc_html__( 'Oman', 'cmb2' ),
			'PK'   => esc_html__( 'Pakistan', 'cmb2' ),
			'PW'     => esc_html__( 'Palau', 'cmb2' ),
			
			'PS' => esc_html__( 'Palestine, State of', 'cmb2' ),
			'PA'   => esc_html__( 'Panama', 'cmb2' ),
			'PG'     => esc_html__( 'Papua New Guinea', 'cmb2' ),
			
			'PY' => esc_html__( 'Paraguay', 'cmb2' ),
			'PE'   => esc_html__( 'Peru', 'cmb2' ),
			'PH'     => esc_html__( 'Philippines', 'cmb2' ),
			
			'PN' => esc_html__( 'Pitcairn', 'cmb2' ),
			'PL'   => esc_html__( 'Poland', 'cmb2' ),
			'PT'     => esc_html__( 'Portugal', 'cmb2' ),
			
			'PR' => esc_html__( 'Puerto Rico', 'cmb2' ),
			'QA'   => esc_html__( 'Qatar', 'cmb2' ),
			'RE'     => esc_html__( 'Réunion', 'cmb2' ),
			
			'RO' => esc_html__( 'Romania', 'cmb2' ),
			'RU'   => esc_html__( 'Russian Federation', 'cmb2' ),
			'RW'     => esc_html__( 'Rwanda', 'cmb2' ),
			
			'BL' => esc_html__( 'Saint Barthélemy', 'cmb2' ),
			'SH'   => esc_html__( 'Saint Helena, Ascension and Tristan da Cunha', 'cmb2' ),
			'KN'     => esc_html__( 'Saint Kitts and Nevis', 'cmb2' ),
			
			'LC' => esc_html__( 'Saint Lucia', 'cmb2' ),
			'MF'   => esc_html__( 'Saint Martin (French part)', 'cmb2' ),
			'PM'     => esc_html__( 'Saint Pierre and Miquelon', 'cmb2' ),
			
			
			'VC' => esc_html__( 'Saint Vincent and the Grenadines', 'cmb2' ),
			'WS'   => esc_html__( 'Samoa', 'cmb2' ),
			'SM'     => esc_html__( 'San Marino', 'cmb2' ),
			
			'ST' => esc_html__( 'Sao Tome and Principe', 'cmb2' ),
			'SA'   => esc_html__( 'Saudi Arabia', 'cmb2' ),
			'SN'     => esc_html__( 'Senegal', 'cmb2' ),
			
			'RS' => esc_html__( 'Serbia', 'cmb2' ),
			'SC'   => esc_html__( 'Seychelles', 'cmb2' ),
			'SL'     => esc_html__( 'Sierra Leone', 'cmb2' ),
			
			'SG' => esc_html__( 'Singapore', 'cmb2' ),
			'SX'   => esc_html__( 'Sint Maarten (Dutch part)', 'cmb2' ),
			'SK'     => esc_html__( 'Slovakia', 'cmb2' ),
			
			'SI' => esc_html__( 'Slovenia', 'cmb2' ),
			'SB'   => esc_html__( 'Solomon Islands', 'cmb2' ),
			
			'SO' => esc_html__( 'Somalia', 'cmb2' ),
			'ZA'   => esc_html__( 'South Africa', 'cmb2' ),
			'GS'     => esc_html__( 'South Georgia and the South Sandwich Islands', 'cmb2' ),
			
			'SS' => esc_html__( 'South Sudan', 'cmb2' ),
			'ES'   => esc_html__( 'Spain', 'cmb2' ),
			'LK'     => esc_html__( 'Sri Lanka', 'cmb2' ),
			
			'SD' => esc_html__( 'Sudan', 'cmb2' ),
			'SR'   => esc_html__( 'Suriname', 'cmb2' ),
			'SJ'     => esc_html__( 'Svalbard and Jan Mayen', 'cmb2' ),
			
			'SZ' => esc_html__( 'Swaziland', 'cmb2' ),
			'SE'   => esc_html__( 'Sweden', 'cmb2' ),
			'CH'     => esc_html__( 'Switzerland', 'cmb2' ),
			
			'SY' => esc_html__( 'Syrian Arab Republic', 'cmb2' ),
			'TW'   => esc_html__( 'Taiwan, Province of China', 'cmb2' ),
			'TJ'     => esc_html__( 'Tajikistan', 'cmb2' ),
			
			'TZ' => esc_html__( 'Tanzania, United Republic of', 'cmb2' ),
			'TH'   => esc_html__( 'Thailand', 'cmb2' ),
			'TL'     => esc_html__( 'Timor-Leste', 'cmb2' ),
			
			'TG' => esc_html__( 'Togo', 'cmb2' ),
			'TK'   => esc_html__( 'Tokelau', 'cmb2' ),
			'TO'     => esc_html__( 'Tonga', 'cmb2' ),
			
			'TT' => esc_html__( 'Trinidad and Tobago', 'cmb2' ),
			'TN'   => esc_html__( 'Tunisia', 'cmb2' ),
			'TR'     => esc_html__( 'Turkey', 'cmb2' ),
			
			'TM' => esc_html__( 'Turkmenistan', 'cmb2' ),
			'TC'   => esc_html__( 'Turks and Caicos Islands', 'cmb2' ),
			'TV'     => esc_html__( 'Tuvalu', 'cmb2' ),
			
			'UG' => esc_html__( 'Uganda', 'cmb2' ),
			'UA'   => esc_html__( 'Ukraine', 'cmb2' ),
			'AE'     => esc_html__( 'United Arab Emirates', 'cmb2' ),
			
			'GB' => esc_html__( 'United Kingdom', 'cmb2' ),
			'US'   => esc_html__( 'United States', 'cmb2' ),
			'UM'     => esc_html__( 'United States Minor Outlying Islands', 'cmb2' ),
			
			'UY' => esc_html__( 'Uruguay', 'cmb2' ),
			'UZ'   => esc_html__( 'Uzbekistan', 'cmb2' ),
			'VU'     => esc_html__( 'Vanuatu', 'cmb2' ),
			
			'VE' => esc_html__( 'Venezuela, Bolivarian Republic of', 'cmb2' ),
			'VN'   => esc_html__( 'Viet Nam', 'cmb2' ),
			'VG'     => esc_html__( 'Virgin Islands, British', 'cmb2' ),
			
			'VI' => esc_html__( 'Virgin Islands, U.S', 'cmb2' ),
			'WF'   => esc_html__( 'Wallis and Futuna', 'cmb2' ),
			'EH'     => esc_html__( 'Western Sahara', 'cmb2' ),
			
			'YE' => esc_html__( 'Yemen', 'cmb2' ),
			'ZM'   => esc_html__( 'Zambia', 'cmb2' ),
			'ZW'     => esc_html__( 'Zimbabwe', 'cmb2' ),
			
		),
	) );
	
	$cmb->add_group_field( $education_group, array(
		'name' => 'Degree',
		'id'   => 'institution_degree',
		'type' => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );

	$cmb->add_group_field( $education_group, array(
		'name' => 'Major/Field of study',
		'id'   => 'institution_major',
		'type' => 'text',
		'attributes'  => array(
			'required'    => 'required',
		),
	) );

	$cmb->add_group_field( $education_group, array(
		'name' => 'GPA',
		'id'   => 'institution_gpa',
		'type' => 'text',
		'attributes'  => array(
			'required'    => '',
		),
	) );


	$cmb->add_group_field( $education_group,  array(
		'name' => 'Year of graduation<small> or expected year</small>',
		'id'   => 'institution_graduate_date',
		'type' => 'text',
		'attributes'  => array(
			'required'    => '',
			'data-parsley-range'=>"[1000, 3000]"
		),
	) );

	$cmb->add_group_field( $education_group,   array(
		'name'    => 'Transcript',
		'desc'    => '',
		'id'      => 'transcript',
		'type'    => 'file',
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		'after_row' => '<div class="errorMsg_transcript" style="padding-left: 25%;"></div>',
		'attributes'  => array(
			'required'    => '',
			'data-parsley-fileextension' => 'pdf',
			'data-parsley-errors-container'=>".errorMsg_transcript"
		),
	) );

	//Contact Information Section

	$cmb->add_field( array(
		'name' => '',
		'id' => 'publication',
		'classes' => 'form-group full-width col-xs-12 col-md-12',
		'type' => 'wysiwyg',
		'before_row' => '<h2>Publications</h2>',
		'after_row' => '<h3></h3>',
		'options' => array(
			'wpautop' => true, // use wpautop?
        	'media_buttons' => false, // show insert/upload button(s)
			'textarea_rows' => get_option('default_post_edit_rows', 5), // rows="..."
		),
	) );


	//Publications/Awards/Honors/Scholarships Section
	$cmb->add_field( array(
		'name' => '',
		'id' => 'award',
		'classes' => 'form-group full-width col-xs-12 col-md-12',
		'type' => 'wysiwyg',
		'before_row' => '<h2>Awards/Honors/Scholarships</h2>',
		'after_row' => '<h3></h3>',
		'options' => array(
			'wpautop' => true, // use wpautop?
        	'media_buttons' => false, // show insert/upload button(s)
			'textarea_rows' => get_option('default_post_edit_rows', 5), // rows="..."
		),
	) );

	//Publications/Awards/Honors/Scholarships Section
	$cmb->add_field( array(
		'name' => '',
		'id' => 'work_exp',
		'classes' => 'form-group full-width col-xs-12 col-md-12',
		'type' => 'wysiwyg',
		'before_row' => '<h2>Work Experiences</h2>',
		'after_row' => '<h3></h3>',
		'options' => array(
			'wpautop' => true, // use wpautop?
        	'media_buttons' => false, // show insert/upload button(s)
			'textarea_rows' => get_option('default_post_edit_rows', 5), // rows="..."
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Curriculum Vitae',
		'desc'    => '',
		'id'      => 'cv',
		'before_row' => '<h2>Curriculum Vitae</h2>',
		'after_row' => '<h3></h3>',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		'after_row' => '<div class="errorMsg_cv" style="padding-left: 21%;"></div><h3></h3>',
		'attributes'  => array(
			'required'    => '',
			'data-parsley-fileextension' => 'pdf',
			'data-parsley-errors-container'=>".errorMsg_cv"
		),
	) );

	$cmb->add_field( array(
		'name'    => 'Statement of Purpose',
		'before_row' => '<h2>Statement of Purpose</h2>',
		'desc'    => '',
		'id'      => 'sop',
		'type'    => 'file',
		'after_row' => '<div class="errorMsg_sop" style="padding-left: 21%;"></div><h3></h3>',
		// Optional:
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		'attributes'  => array(
			'required'    => '',
			'data-parsley-fileextension' => 'pdf',
			'data-parsley-errors-container'=>".errorMsg_sop"
		),
	) );

	$cmb->add_field( array(
		'before_row' => '<h2>English language proficiency</h2>',
		'name'    => 'Test type',
		'id'      => 'eng_type',
		'type'    => 'select',
		'show_option_none' => false,
		'default' => 'TOEFL',
		'options' => array(
			'TOEFL' => __( 'TOEFL', 'cmb2' ),
			'IELTS'   => __( 'IELTS', 'cmb2' ),
			'CU-TEP' => __( 'CUTEP ', 'cmb2' ),
		),
	) );


	$cmb->add_field( array(
		'name'    => 'Test result',
		'desc'    => '',
		'id'      => 'test_result',
		'type'    => 'file',
		'after_row' => '<div class="errorMsg_eng" style="padding-left: 21%;"></div><h3></h3>',
		// Optional:
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		'attributes'  => array(
			'required'    => '',
			'data-parsley-fileextension' => 'pdf',
			//'data-parsley-errors-messages-disabled'=> '',
			'data-parsley-errors-container'=>".errorMsg_eng"
		),
	) );

	$cmb->add_field( array(
		'before_row' => '<h2>How did you know about this program?</h2>',
		'name'    => '',
		'desc'    => '',
		'id'      => 'how_you_know',
		'type'    => 'multicheck_inline',
		'options' => array(
			'Website' => 'Website',
			'Facebook' => 'Facebook',
			'Friends' => 'Friends',
			'Other' => 'Other',
		),
		'attributes' => array(
			'select_all_button' => false,
		),
	) );

	$cmb->add_field( array(
		'id'      => 'how_you_know_other',
		'type'    => 'text',
		'after_row' => '<h3></h3>',
	) );



}
add_action( 'cmb2_init', 'wds_frontend_form_register' );



/**
 * Handle the cmb-frontend-form shortcode
 *
 * @param  array  $atts Array of shortcode attributes
 * @return string       Form html
 */
function wds_do_frontend_form_submission_shortcode( $atts = array() ) {

	global $css_path;

	// Current user
	$user_id = get_current_user_id();

	// Use ID of metabox in wds_frontend_form_register
	$metabox_id = 'application-form';

	// since post ID will not exist yet, just need to pass it something
	$object_id  = 'fake-oject-id';

	// Get CMB2 metabox object
	$cmb = cmb2_get_metabox( $metabox_id, $object_id );

	// Get $cmb object_types
	$post_types = $cmb->prop( 'object_types' );

	// Parse attributes. These shortcode attributes can be optionally overridden.
	$atts = shortcode_atts( array(
		'post_author' => $user_id, // Current user, or admin
		'post_status' => 'pending',
		'post_type'   => reset( $post_types ), // Only use first object_type in array
	), $atts, 'cmb-frontend-form' );

	// Initiate our output variable
	$output = "";

	// Handle form saving (if form has been submitted)
    $new_id = wds_handle_frontend_new_post_form_submission( $cmb, $atts );

    if ( $new_id ) {

        if ( is_wp_error( $new_id ) ) {

            // If there was an error with the submission, add it to our ouput.

			var_dump($_POST);

            $output .= '<div class="container">

			<div style="padding: 10% 0px;color:#750606;">

			<h1 class="text-center"><img src="'.$css_path.'/img/gear.png"></h1>
			
			<h1 class="text-center">' . sprintf( __( 'There was an error in the submission: %s', 'wds-post-submit' ), '<strong>'. $new_id->get_error_message() .'</strong>' ) . '</h1>';

			$output .= '<br> 
			<h3 class="text-center">Please contact: grad@cp.eng.chula.ac.th </h3>
			</div>
			</div>';

			return $output;
			
        } else {

            // Get submitter's name
            $name = isset( $_POST['app_name'] ) && $_POST['app_name']
                ? ' '. $_POST['app_name']
                : '';

				 // Get submitter's name
            $email = isset( $_POST['app_email'] ) && $_POST['app_email']
                ? $_POST['app_email'] : '';

            // Add notice of submission

            $output .= '<div class="container">

			<div style="padding: 10% 0px;color:#750606;">
			
			<h1 class="text-center"><img src="'.$css_path.'/img/gear.png"></h1>
			
			<h1 class="text-center">' . sprintf( __( 'Thank you %s, your application has been submitted and is pending review by our faculty members.', 'wds-post-submit' ), esc_html( $name ) ) . '</h1>';

			$output .= '<br> 
			<h3 class="text-center">'.sprintf( __( 'For further steps, we will contact you via your provided email: <strong>%s</strong>', 'wds-post-submit' ), esc_html( $email ) ) .'</h3>
			</div>
			</div>
			<script type="text/javascript">
				setTimeout("window.location='.home_url().'",5000);
			</script>
				
			';

			return $output;
        }

    }

	// Get our form
    $output .= cmb2_get_metabox_form( $cmb, $object_id, array( 'save_button' => __( 'Submit Application', 'wds-post-submit' ) ) );

	// Our CMB2 form stuff goes here

	return $output;
}
add_shortcode( 'cmb-frontend-form', 'wds_do_frontend_form_submission_shortcode' );


/**
 * Handles form submission on save
 *
 * @param  CMB2  $cmb       The CMB2 object
 * @param  array $post_data Array of post-data for new post
 * @return mixed            New post ID if successful
 */
function wds_handle_frontend_new_post_form_submission( $cmb, $post_data = array() ) {

	// If no form submission, bail
	if ( empty( $_POST ) ) {
		return false;
	}

	// check required $_POST variables and security nonce
	if (
		! isset( $_POST['submit-cmb'], $_POST['object_id'], $_POST[ $cmb->nonce() ] )
		|| ! wp_verify_nonce( $_POST[ $cmb->nonce() ], $cmb->nonce() )
	) {
		return new WP_Error( 'security_fail', __( 'Security check failed.' ) );
	}

	 // Fetch sanitized values
    $sanitized_values = $cmb->get_sanitized_values( $_POST );

    // Set our post data arguments
    $post_data['post_title']   = $sanitized_values['app_prefix']." ".$sanitized_values['app_name']." ".$sanitized_values['app_mid_name']." ".$sanitized_values['app_last_name'];
    unset( $sanitized_values['submitted_post_title'] );
    $post_data['post_content'] = $sanitized_values['submitted_post_content'];
    unset( $sanitized_values['submitted_post_content'] );

    // Create the new post
    $new_submission_id = wp_insert_post( $post_data, true );

    // If we hit a snag, update the user
    if ( is_wp_error( $new_submission_id ) ) {
        return $new_submission_id;
    }

    /**
     * Other than post_type and post_status, we want
     * our uploaded attachment post to have the same post-data
     */
    unset( $post_data['post_type'] );
    unset( $post_data['post_status'] );

    // Try to upload the featured image
    $img_id = wds_frontend_form_photo_upload( $new_submission_id, $post_data );

    // If our photo upload was successful, set the featured image
    if ( $img_id && ! is_wp_error( $img_id ) ) {
        set_post_thumbnail( $new_submission_id, $img_id );
    }

    // Loop through remaining (sanitized) data, and save to post-meta
    foreach ( $sanitized_values as $key => $value ) {
        update_post_meta( $new_submission_id, $key, $value );
    }


	// Do WordPress insert_post stuff

	return $new_submission_id;
}


/**
 * Handles uploading a file to a WordPress post
 *
 * @param  int   $post_id              Post ID to upload the photo to
 * @param  array $attachment_post_data Attachement post-data array
 */
function wds_frontend_form_photo_upload( $post_id, $attachment_post_data = array() ) {
	// Make sure the right files were submitted
	if (
		empty( $_FILES )
		|| ! isset( $_FILES['submitted_post_thumbnail'] )
		|| isset( $_FILES['submitted_post_thumbnail']['error'] ) && 0 !== $_FILES['submitted_post_thumbnail']['error']
	) {
		return;
	}
	// Filter out empty array values
	$files = array_filter( $_FILES['submitted_post_thumbnail'] );
	// Make sure files were submitted at all
	if ( empty( $files ) ) {
		return;
	}
	// Make sure to include the WordPress media uploader API if it's not (front-end)
	if ( ! function_exists( 'media_handle_upload' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );
	}
	// Upload the file and send back the attachment post ID
	return media_handle_upload( 'submitted_post_thumbnail', $post_id, $attachment_post_data );
}


/**
 * Disable CMB2 styles on front end forms.
 *
 * @return bool $enabled Whether to enable (enqueue) styles.
 */
function km_disable_cmb2_front_end_styles( $enabled ) {
	if ( ! is_admin() ) {
		$enabled = false;
	}
	return $enabled;
}
add_filter( 'cmb2_enqueue_css', 'km_disable_cmb2_front_end_styles' );



function count_user_posts_by_status( $userid, $post_type ) 
{
    $args = array(
        'numberposts'   => -1,
        'post_type'     => $post_type,
        'post_status'   => array('draft', 'pending' ),
        'author'        => $userid
    );
    $count_posts = count( get_posts( $args ) ); 
    return $count_posts;
}
