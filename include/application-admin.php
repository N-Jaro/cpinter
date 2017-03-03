<?php


if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}


class Applcation_List extends WP_List_Table {

	/** Class constructor */
	public function __construct() {

		parent::__construct( [
			'singular' => __( 'Application', 'sp' ), //singular name of the listed records
			'plural'   => __( 'Applications', 'sp' ), //plural name of the listed records
			'ajax'     => false //should this table support ajax?

		] );

}

/**
 * Retrieve customer’s data from the database
 *
 * @param int $per_page
 * @param int $page_number
 *
 * @return mixed
 */
public static function get_application( $per_page = 5, $page_number = 1 ) {

  global $wpdb;

  $sql = "SELECT * FROM {$wpdb->prefix}customers";

  if ( ! empty( $_REQUEST['orderby'] ) ) {
    $sql .= ' ORDER BY ' . esc_sql( $_REQUEST['orderby'] );
    $sql .= ! empty( $_REQUEST['order'] ) ? ' ' . esc_sql( $_REQUEST['order'] ) : ' ASC';
  }

  $sql .= " LIMIT $per_page";

  $sql .= ' OFFSET ' . ( $page_number - 1 ) * $per_page;


  $result = $wpdb->get_results( $sql, 'ARRAY_A' );

  return $result;
}



?>