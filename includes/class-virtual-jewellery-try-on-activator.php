<?php

/**
 * Fired during plugin activation
 *
 * @link       https://dugudlabs.com
 * @since      1.0.0
 *
 * @package    Virtual_Jewellery_Try_On
 * @subpackage Virtual_Jewellery_Try_On/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Virtual_Jewellery_Try_On
 * @subpackage Virtual_Jewellery_Try_On/includes
 * @author     dugudlabs <ravinstra5876@gmail.com>
 */
class Virtual_Jewellery_Try_On_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$site_url = get_site_url();
		$message = "Plugin Support, 
		
		JewelFit-Free version is activated by this site url-".$site_url."
		
		Please do needfull action if this is not an authorized site.
		
		Thank You.";
		$to = 'support@dugudlabs.com';
		$subject = "JewelFit Activation Alert";
		wp_mail( $to, $subject, $message);
	}

}
