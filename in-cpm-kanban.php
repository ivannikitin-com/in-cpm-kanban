<?php
/*
Plugin Name: Канбан для CPM
Plugin URI:  https://github.com/ivannikitin-com/in-cpm-kanban
Description: Кандан доска и управление всеми проектами и задачами в CPM
Version:     1.0
Author:      IvanNikitin.com
Author URI:  https://ivannikitin.com/
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: in-cpm-kanban
Domain Path: /lang
Namespace:	\CPM\Kanban
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/* Глобальные константы плагина */
define( 'IN_KANBAN',			'in-cpm-kanban' );				// Text Domain
define( 'IN_KANBAN_FOLDER', 	plugin_dir_path( __FILE__ ) );	// Plugin folder
define( 'IN_KANBAN_URL',		plugin_dir_url( __FILE__ ) );	// Plugin URL

/* Классы плагина */
//require( IN_KANBAN_FOLDER . 'classes/base.php' );

/* Активация плагина */
register_activation_hook( __FILE__, 'in_kanban_activation' );
function in_kanban_activation()
{
	// Инициализация ролей пользователей
	//\CPM\Kanban\RoleManager::initRoles();
}

/* Инициализация плагина */
add_action( 'plugins_loaded', 'in_kanban_init' );
function in_kanban_init()
{
	// Локализация плагина
	load_plugin_textdomain( IN_KANBAN, false, basename( dirname( __FILE__ ) ) . '/lang' );	
	
	// Загрузка плагина
	//new \CPM\Kanban\Plugin( INER_FOLDER, INER_URL );
}
