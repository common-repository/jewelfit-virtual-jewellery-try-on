<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://dugudlabs.com
 * @since      1.0.0
 *
 * @package    Virtual_Jewellery_Try_On
 * @subpackage Virtual_Jewellery_Try_On/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Virtual_Jewellery_Try_On
 * @subpackage Virtual_Jewellery_Try_On/includes
 * @author     dugudlabs <ravinstra5876@gmail.com>
 */
class Virtual_Jewellery_Try_On_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		$site_url = get_site_url();
		$message = "Plugin Support, 
		
		JewelFit-Free version is de-activated by this site url-".$site_url."
		
		Please do needfull action if this is not an authorized site.
		
		Thank You.";
		$to = 'support@dugudlabs.com';
		$subject = "JewelFit De-Activation Alert";
		wp_mail( $to, $subject, $message);
	}

}
