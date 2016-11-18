<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-pavilion'; // Text domain

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[menu]tertiary' ),
		'8' => array( '[widget]boldgrid-widget-1', '[menu]secondary', '[action]boldgrid_primary_navigation' ),
		'9' => array( '[menu]social' ),
		'10' => array( '[widget]boldgrid-widget-2' ),
	);

	// Assign Locations for Generic Footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
	);

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#ef7928',
				'#25374a',
				'#738599',
				'#25374a',
				'#f3f3f3',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#516d30',
				'#1a1a1a',
				'#8c8c8c',
				'#1a1a1a',
				'#f3f3f3',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#d4b65a',
				'#3f313e',
				'#666666',
				'#3f313e',
				'#f3f3f3',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#f5e8d3',
			'colors' => array(
				'#209a96',
				'#7d786d',
				'#4a4740',
				'#7d786d',
				'#fffaf2',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#292929',
			'colors' => array(
				'#af2f30',
				'#558a98',
				'#ffffff',
				'#558a98',
				'#585858',
			)
		),
	);

	// Override Options per Subcategory
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'WORK HARDER THAN YESTERDAY TO ACHIEVE A DIFFERENT TOMORROW.';
			break;
		case 'Home Repair':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			$cta_h2 = 'WE MAKE IT OUR BUSINESS TO FIND THE PERFECT FIT FOR YOUR NEEDS.';
			break;
		case 'Property Management':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			$cta_h2 = 'WE MAKE IT OUR BUSINESS TO FIND THE PERFECT FIT FOR YOUR NEEDS.';
			break;
		case 'Marketing':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$cta_h2 = 'WE MAKE IT OUR BUSINESS TO FIND THE PERFECT FIT FOR YOUR NEEDS.';
			break;

		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			$cta_h2 = 'WE MAKE IT OUR BUSINESS TO FIND THE PERFECT FIT FOR YOUR NEEDS.';
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#4d4d4d';

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Roboto';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Roboto';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Roboto';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Typography Relationships
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action-wrapper h2' ]= array(
			'type' => 'headings',
			'round' => 'floor',
			'amount' => 2.3,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-alpha h2' ]= array(
			'type' => 'subheadings',
			'round' => 'floor',
			'amount' => 1.2,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-beta h2' ]= array(
			'type' => 'headings',
			'round' => 'floor',
			'amount' => 1.6,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.phone p' ]= array(
			'type' => 'subheadings',
			'round' => 'floor',
			'amount' => 1.6,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-divider a' ]= array(
			'type' => 'headings',
			'round' => 'floor',
			'amount' => 1.3,
	);

	// Icons
	$boldgrid_framework_configs['social-icons']['type'] = 'icon-circle';
	$boldgrid_framework_configs['social-icons']['size'] = 'normal';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row call-to-action-wrapper">
			<div class="col-md-7"></div>
			<div class="col-md-5">
				<h2 id="slogan">$cta_h2</h2>
				<div class="call-to-action">
					<p class="p-button-primary"><a class="button-primary" href="about-us">LEARN MORE<i class="fa fa-angle-double-right"></i></a></p>
				</div>
			</div>
		</div>
HTML;

	$widget_markup['phone-number'] = <<<HTML
	<div class="phone"><p class="h3 alt-font"><i class="fa fa-phone"></i> Call Today <span class="phone-number">777-765-4321</span></p></div>
HTML;

	// Widget 1
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Widget 2
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-2'][] = array(
		'title' => 'Phone Number',
		'text' => $widget_markup['phone-number'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Primary Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Right Below Primary Navigation';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_margin_top']['default'] = 5;
	unset( $controls['logo_line_height']['output'][0]['units'] );
	$controls['logo_line_height']['output'][0]['value_pattern'] =  'calc( $% + 30% )';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
