<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


/*--------------------------------------------------------------------------------------------------------*/

function edd_recurring_label_settings( $settings ) {

	$recurring_label_settings = array(
		array(
			'id' => 'edd_rl_header',
			'name' => '<strong>' . __('Recurring Payment Labels', 'edd_rl') . '</strong>',
			'desc' => 'This customizes the labels for the Recurring Payment extension.',
			'type' => 'header',
			'size' => 'regular'
		),
		array(
			'id' => 'edd_rl_use_label',
			'name' => __('Use Custom Labels', 'edd_rl'),
			'desc' => __('Check this box if you want to use the custom labels below for your recurring payment items. This only applies to single items and not variable priced ones.', 'edd_rl'),
			'type' => 'checkbox'
		),
		array(
			'id' => 'edd_rl_day_label',
			'name' => __('Day', 'edd_rl'),
			'desc' => __('', 'edd_rl'),
			'type' => 'text',
			'size' => 'regular'
		),
		array(
			'id' => 'edd_rl_week_label',
			'name' => __('Week', 'edd_rl'),
			'desc' => __('', 'edd_rl'),
			'type' => 'text',
			'size' => 'regular'
		),
		array(
			'id' => 'edd_rl_month_label',
			'name' => __('Month', 'edd_rl'),
			'desc' => __('', 'edd_rl'),
			'type' => 'text',
			'size' => 'regular'
		),
		array(
			'id' => 'edd_rl_year_label',
			'name' => __('Year', 'edd_rl'),
			'desc' => __('', 'edd_rl'),
			'type' => 'text',
			'size' => 'regular'
		)
		
	);

	return array_merge( $settings, $recurring_label_settings );

}
add_filter('edd_settings_extensions', 'edd_recurring_label_settings');

?>