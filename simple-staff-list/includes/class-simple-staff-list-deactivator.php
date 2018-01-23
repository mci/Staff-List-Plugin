<?php
/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/mci/Staff-List-Plugin
 * @since      1.17
 *
 * @package    Simple_Staff_List_GLORES
 * @subpackage Simple_Staff_List_GLORES/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.17
 * @package    Simple_Staff_List_GLORES
 * @subpackage Simple_Staff_List_GLORES/includes
 * @author     Brett Shumaker <brettshumaker@gmail.com>
 */
class Simple_Staff_List_Deactivator {

	/**
	 * Runs on plugin deactivation.
	 *
	 * Nothing but flushing rewrite rules right now.
	 *
	 * @since    1.17
	 */
	public static function deactivate() {
		flush_rewrite_rules();
	}

}
