<?php
/**
 * Theme config file.
 *
 * @package   Generico\Theme
 * @author    Craig Simpson <craig@craigsimpson.scot>
 * @copyright Copyright (c) 2018, Craig Simpson
 * @license   MIT
 */

namespace Generico\Theme;

use D2\Core\AssetLoader;
use D2\Core\GenesisCustomizer;
use D2\Core\GenesisLayout;
use D2\Core\GenesisMetaBox;
use D2\Core\PageTemplate;
use D2\Core\TextDomain;
use D2\Core\ThemeSupport;
use D2\Core\WidgetArea;

$generico_assets = [
	AssetLoader::SCRIPTS => [
		[
			AssetLoader::HANDLE   => 'generico',
			AssetLoader::URL      => AssetLoader::path( 'assets/js/generico.js' ),
			AssetLoader::DEPS     => [ 'jquery' ],
			AssetLoader::VERSION  => CHILD_THEME_VERSION,
			AssetLoader::FOOTER   => true,
			AssetLoader::ENQUEUE  => true,
			AssetLoader::LOCALIZE => [
				AssetLoader::LOCALIZEVAR  => 'generico_menu_params',
				AssetLoader::LOCALIZEDATA => [
					'mainMenu'    => sprintf(
						'%s <span class="screen-reader-text">%s</span>',
						file_get_contents( get_stylesheet_directory() . '/assets/images/icon-menu.svg' ),
						__( 'Toggle Menu', 'generico' )
					),
					'subMenu'     => sprintf(
						'%s <span class="screen-reader-text">%s</span>',
						file_get_contents( get_stylesheet_directory() . '/assets/images/icon-submenu.svg' ),
						__( 'Toggle Submenu', 'generico' )
					),
					'menuClasses' => [
						'combine' => [
							'.nav-primary',
						],
						'others'  => [],
					],
				]
			],
		],
	],
];

$generico_customizer_panels = [
	GenesisCustomizer::REMOVE => [
		GenesisCustomizer::UPDATES,
		GenesisCustomizer::HEADER,
		GenesisCustomizer::ADSENSE,
		GenesisCustomizer::COLORSCHEME,
		GenesisCustomizer::LAYOUT,
		GenesisCustomizer::BREADCRUMB,
		GenesisCustomizer::COMMENTS,
		GenesisCustomizer::ARCHIVES,
		GenesisCustomizer::SCRIPTS,
	],
];

$generico_layouts = [
	GenesisLayout::UNREGISTER => [
		GenesisLayout::CONTENT_SIDEBAR,
		GenesisLayout::SIDEBAR_CONTENT,
		GenesisLayout::CONTENT_SIDEBAR_SIDEBAR,
		GenesisLayout::SIDEBAR_SIDEBAR_CONTENT,
		GenesisLayout::SIDEBAR_CONTENT_SIDEBAR,
		GenesisLayout::FULL_WIDTH_CONTENT,
	]
];

$generico_meta_boxes = [
	GenesisMetaBox::REMOVE => [
		GenesisMetaBox::VERSION,
		GenesisMetaBox::STYLE,
		GenesisMetaBox::FEEDS,
		GenesisMetaBox::ADSENSE,
		GenesisMetaBox::LAYOUT,
		GenesisMetaBox::HEADER,
		GenesisMetaBox::NAV,
		GenesisMetaBox::BREADCRUMB,
		GenesisMetaBox::COMMENTS,
		GenesisMetaBox::POSTS,
		GenesisMetaBox::BLOGPAGE,
		GenesisMetaBox::SCRIPTS,
	],
];

$generico_page_templates = [
	PageTemplate::UNREGISTER => [
		PageTemplate::BLOG,
		PageTemplate::ARCHIVE,
	],
];

$generico_textdomain = [
	TextDomain::DOMAIN => 'generico',
];

$generico_theme_support = [
	ThemeSupport::ADD => [
		'html5'                       => [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		],
		'genesis-accessibility'       => [
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links',
		],
		'genesis-menus'               => [
			'primary' => __( 'Primary Navigation Menu', 'generico' ),
		],
		'genesis-responsive-viewport' => '',
		'genesis-structural-wraps'    => [
			'header',
			'footer'
		],
	],
];

$generico_widget_areas = [
	WidgetArea::UNREGISTER => [
		WidgetArea::HEADER_RIGHT,
		WidgetArea::SIDEBAR,
		WidgetArea::SIDEBAR_ALT,
	],
];

return [
	AssetLoader::class       => $generico_assets,
	GenesisCustomizer::class => $generico_customizer_panels,
	GenesisLayout::class     => $generico_layouts,
	GenesisMetaBox::class    => $generico_meta_boxes,
	PageTemplate::class      => $generico_page_templates,
	TextDomain::class        => $generico_textdomain,
	ThemeSupport::class      => $generico_theme_support,
	WidgetArea::class        => $generico_widget_areas,
];
