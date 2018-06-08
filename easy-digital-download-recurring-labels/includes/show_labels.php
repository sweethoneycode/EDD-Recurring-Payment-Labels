<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


/*--------------------------------------------------------------------------------------------------------*/
	
function EDD_show_recurring_label( $defaults) {
			global $edd_options;
			global $post;
			
			$variable_pricing = edd_has_variable_prices( $post->ID );
			
			//see if custom label has been checked
	if(	 isset( $edd_options['edd_rl_use_label']) && empty($variable_pricing)){
						
				//if all is good then proceed and change out label for simgle recurring payment items
				if ( ! get_post_meta( $post->ID, '_edd_recurring', true ) ) {
						
							$recurring_payment = get_post_meta( $post->ID, 'edd_recurring', true );
						
								if( $recurring_payment == 'yes'){
								
										$payment_period = get_post_meta( $post->ID, 'edd_period', true );
										
										$payment_day_label = ! empty( $edd_options[ 'edd_rl_day_label' ] ) ? $edd_options[ 'edd_rl_day_label' ] : __( 'Purchase', 'edd' );
										$payment_week_label = ! empty( $edd_options[ 'edd_rl_week_label' ] ) ? $edd_options[ 'edd_rl_week_label' ] : __( 'Purchase', 'edd' );
										$payment_month_label = ! empty( $edd_options[ 'edd_rl_month_label' ] ) ? $edd_options[ 'edd_rl_month_label' ] : __( 'Purchase', 'edd' );
										$payment_year_label = ! empty( $edd_options[ 'edd_rl_year_label' ] ) ? $edd_options[ 'edd_rl_year_label' ] : __( 'Purchase', 'edd' );
										
										switch ($payment_period) {
											case 'day':
												$period = $payment_day_label;
												break;
											case 'week':
												$period = $payment_week_label;
												break;
											case 'month':
												$period = $payment_month_label;
												break;
											case 'year':
												$period = $payment_year_label;
												break;
										} 
										
										$defaults['text'] = $period;
									
								}
					} 
				
								
		}

		return $defaults;	
			
			
}
add_filter( 'edd_purchase_link_defaults', 'EDD_show_recurring_label');


?>
