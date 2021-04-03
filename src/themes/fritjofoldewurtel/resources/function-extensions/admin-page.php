<?php

/*
 *
 * Theme Options Page (http://jeremyhixon.com/wp-tools/option-page/)
 *
 */

class FRITJOFOLDEWURTELThemeOptions {
	private $fritjofoldewurtel_theme_settings_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'fritjofoldewurtel_theme_settings_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'fritjofoldewurtel_theme_settings_page_init' ) );
	}

	public function fritjofoldewurtel_theme_settings_add_plugin_page() {
		add_options_page(
			'FRITJOFOLDEWURTEL', // page_title
			'FRITJOFOLDEWURTEL', // menu_title
			'manage_options', // capability
			'fritjofoldewurtel-theme-settings', // menu_slug
			array( $this, 'fritjofoldewurtel_theme_settings_create_admin_page' ) // function
		);
	}

	public function fritjofoldewurtel_theme_settings_create_admin_page() {
		$this->fritjofoldewurtel_theme_settings_options = get_option( 'fritjofoldewurtel_theme_settings_option_name' ); ?>

		<div class="wrap">
			<h2>FRITJOFOLDEWURTEL Theme Settings</h2>
			<p></p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'fritjofoldewurtel_theme_settings_option_group' );
					do_settings_sections( 'fritjofoldewurtel-theme-options-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	public function fritjofoldewurtel_theme_settings_page_init() {
		register_setting(
			'fritjofoldewurtel_theme_settings_option_group', // option_group
			'fritjofoldewurtel_theme_settings_option_name', // option_name
			array( $this, 'fritjofoldewurtel_theme_settings_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'fritjofoldewurtel_theme_settings_setting_section', // id
			'Settings', // title
			array( $this, 'fritjofoldewurtel_theme_settings_section_info' ), // callback
			'fritjofoldewurtel-theme-options-admin' // page
		);

		add_settings_field(
			'xing_profile_link', // id
			'XING Profile Link', // title
			array( $this, 'xing_profile_link_callback' ), // callback
			'fritjofoldewurtel-theme-options-admin', // page
			'fritjofoldewurtel_theme_settings_setting_section' // section
		);

		add_settings_field(
			'linkedin_profile_link', // id
			'LinkedIn Profile Link', // title
			array( $this, 'linkedin_profile_link_callback' ), // callback
			'fritjofoldewurtel-theme-options-admin', // page
			'fritjofoldewurtel_theme_settings_setting_section' // section
		);

		add_settings_field(
			'github_profile_link', // id
			'Github Profile Link', // title
			array( $this, 'github_profile_link_callback' ), // callback
			'fritjofoldewurtel-theme-options-admin', // page
			'fritjofoldewurtel_theme_settings_setting_section' // section
		);

		add_settings_field(
			'behance_profile_link', // id
			'Behance Profile Link', // title
			array( $this, 'behance_profile_link_callback' ), // callback
			'fritjofoldewurtel-theme-options-admin', // page
			'fritjofoldewurtel_theme_settings_setting_section' // section
		);

		add_settings_field(
			'phone_number', // id
			'Telefonnummer', // title
			array( $this, 'phone_number_callback' ), // callback
			'fritjofoldewurtel-theme-options-admin', // page
			'fritjofoldewurtel_theme_settings_setting_section' // section
		);

		add_settings_field(
			'email_address', // id
			'E-Mail-Adresse', // title
			array( $this, 'email_address_callback' ), // callback
			'fritjofoldewurtel-theme-options-admin', // page
			'fritjofoldewurtel_theme_settings_setting_section' // section
		);
	}

	public function fritjofoldewurtel_theme_settings_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['xing_profile_link'] ) ) {
			$sanitary_values['xing_profile_link'] = sanitize_text_field( $input['xing_profile_link'] );
		}

		if ( isset( $input['linkedin_profile_link'] ) ) {
			$sanitary_values['linkedin_profile_link'] = sanitize_text_field( $input['linkedin_profile_link'] );
		}

		if ( isset( $input['github_profile_link'] ) ) {
			$sanitary_values['github_profile_link'] = sanitize_text_field( $input['github_profile_link'] );
		}

		if ( isset( $input['behance_profile_link'] ) ) {
			$sanitary_values['behance_profile_link'] = sanitize_text_field( $input['behance_profile_link'] );
		}

		if ( isset( $input['email_address'] ) ) {
			$sanitary_values['email_address'] = sanitize_text_field( $input['email_address'] );
		}

		if ( isset( $input['phone_number'] ) ) {
			$sanitary_values['phone_number'] = sanitize_text_field( $input['phone_number'] );
		}

		return $sanitary_values;
	}

	public function xing_profile_link_callback() {
		printf(
			'<input class="regular-text" type="text" name="fritjofoldewurtel_theme_settings_option_name[xing_profile_link]" id="xing_profile_link" value="%s">',
			isset( $this->fritjofoldewurtel_theme_settings_options['xing_profile_link'] ) ? esc_attr( $this->fritjofoldewurtel_theme_settings_options['xing_profile_link']) : ''
		);
	}

	public function linkedin_profile_link_callback() {
		printf(
			'<input class="regular-text" type="text" name="fritjofoldewurtel_theme_settings_option_name[linkedin_profile_link]" id="linkedin_profile_link" value="%s">',
			isset( $this->fritjofoldewurtel_theme_settings_options['linkedin_profile_link'] ) ? esc_attr( $this->fritjofoldewurtel_theme_settings_options['linkedin_profile_link']) : ''
		);
	}

	public function github_profile_link_callback() {
		printf(
			'<input class="regular-text" type="text" name="fritjofoldewurtel_theme_settings_option_name[github_profile_link]" id="github_profile_link" value="%s">',
			isset( $this->fritjofoldewurtel_theme_settings_options['github_profile_link'] ) ? esc_attr( $this->fritjofoldewurtel_theme_settings_options['github_profile_link']) : ''
		);
	}

	public function behance_profile_link_callback() {
		printf(
			'<input class="regular-text" type="text" name="fritjofoldewurtel_theme_settings_option_name[behance_profile_link]" id="behance_profile_link" value="%s">',
			isset( $this->fritjofoldewurtel_theme_settings_options['behance_profile_link'] ) ? esc_attr( $this->fritjofoldewurtel_theme_settings_options['behance_profile_link']) : ''
		);
	}

	public function email_address_callback() {
		printf(
			'<input class="regular-text" type="text" name="fritjofoldewurtel_theme_settings_option_name[email_address]" id="email_address" value="%s">',
			isset( $this->fritjofoldewurtel_theme_settings_options['email_address'] ) ? esc_attr( $this->fritjofoldewurtel_theme_settings_options['email_address']) : ''
		);
	}

	public function phone_number_callback() {
		printf(
			'<input class="regular-text" type="text" name="fritjofoldewurtel_theme_settings_option_name[phone_number]" id="phone_number" value="%s">',
			isset( $this->fritjofoldewurtel_theme_settings_options['phone_number'] ) ? esc_attr( $this->fritjofoldewurtel_theme_settings_options['phone_number']) : ''
		);
	}
}

if ( is_admin() )
	$fritjofoldewurtel_theme_settings = new FRITJOFOLDEWURTELThemeOptions();
