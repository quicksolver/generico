<?php
/**
 * Theme functions file.
 *
 * @package   Generico\Theme
 * @author    Craig Simpson <craig@craigsimpson.scot>
 * @copyright Copyright (c) 2018, Craig Simpson
 * @license   MIT
 */

namespace Generico\Theme;

define( 'CHILD_THEME_NAME', 'Generico' );
define( 'CHILD_THEME_URL', 'https://github.com/d2themes/generico' );
define( 'CHILD_THEME_VERSION', '0.1.0' );

/**
 * Load Composer dependencies.
 *
 * @since 0.1.0
 */
include_once __DIR__ . '/vendor/autoload.php';

add_action( 'genesis_setup', __NAMESPACE__ . '\\child_theme_setup', 15 );
/**
 * Child theme setup.
 *
 * Hooking to `genesis_setup` means we don't have to "start the engine"
 * by requiring the Genesis init.php file, and gives us access to all
 * of Genesis once it has loaded.
 *
 * @since 0.1.0
 *
 * @return void
 */
function child_theme_setup() {

	$config = include_once __DIR__ . '/config/defaults.php';

	/**
	 * Set up child theme using d2/core.
	 *
	 * Passes all of the theme configuration over to d2/core, which is
	 * responsible for instantiating components and injecting the correct
	 * configuration.
	 *
	 * Existing core components are loaded using Composer, however you
	 * can also create theme-specific components by adding a new
	 * class in /src, and adding it to the configuration file.
	 *
	 * @link https://github.com/d2themes/core
	 *
	 * @uses \D2\Core\Theme::setup()
	 *
	 * @since 0.1.0
	 */
	\D2\Core\Theme::setup( $config );

	/**
	 * Hook to execute code after child theme setup.
	 *
	 * @since  0.1.0
	 */
	do_action( 'after_child_theme_setup' );
}
