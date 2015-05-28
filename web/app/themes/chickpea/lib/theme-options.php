<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'chickpea_options', 'chickpea_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'chickpea' ), __( 'Theme Options', 'chickpea' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page
 */
function theme_options_do_page() {
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'chickpea' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'chickpea_options' ); ?>
			<?php $options = get_option( 'chickpea_theme_options' ); ?>

			<h2>Location</h2>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label class="description" for="chickpea_theme_options[street]"><?php _e( 'Street Address', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[street]" class="regular-text" type="text" name="chickpea_theme_options[street]" value="<?php if (array_key_exists('street', $options)) {esc_attr_e( $options['street'] );} ?>" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label class="description" for="chickpea_theme_options[city]"><?php _e( 'City', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[city]" class="regular-text" type="text" name="chickpea_theme_options[city]" value="<?php if (array_key_exists('city', $options)) {esc_attr_e( $options['city'] );} ?>" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label class="description" for="chickpea_theme_options[state]"><?php _e( 'State', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[state]" class="regular-text" type="text" name="chickpea_theme_options[state]" value="<?php if (array_key_exists('state', $options)) {esc_attr_e( $options['state'] );} ?>" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label class="description" for="chickpea_theme_options[postcode]"><?php _e( 'Zip / Postal Code', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[postcode]" class="regular-text" type="text" name="chickpea_theme_options[postcode]" value="<?php if (array_key_exists('postcode', $options)) {esc_attr_e( $options['postcode'] );} ?>" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label class="description" for="chickpea_theme_options[latitude]"><?php _e( 'Latitude', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[latitude]" class="regular-text" type="text" name="chickpea_theme_options[latitude]" value="<?php if (array_key_exists('latitude', $options)) {esc_attr_e( $options['latitude'] );} ?>" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label class="description" for="chickpea_theme_options[longitude]"><?php _e( 'Longitude', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[longitude]" class="regular-text" type="text" name="chickpea_theme_options[longitude]" value="<?php if (array_key_exists('longitude', $options)) {esc_attr_e( $options['longitude'] );} ?>" />
					</td>
				</tr>
			</table>
			<h2>Contact Info</h2>
			<table class="form-table">
				<tr valign="top"><th scope="row"><label class="description" for="chickpea_theme_options[email]"><?php _e( 'Email Address', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[email]" class="regular-text" type="text" name="chickpea_theme_options[email]" value="<?php if (array_key_exists('email', $options)) {esc_attr_e( $options['email'] );} ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><label class="description" for="chickpea_theme_options[phone]"><?php _e( 'Phone Number', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[phone]" class="regular-text" type="text" name="chickpea_theme_options[phone]" value="<?php if (array_key_exists('phone', $options)) {esc_attr_e( $options['phone'] );} ?>" />
					</td>
				</tr>
			</table>
			<h2>Social Media</h2>
			<table class="form-table">
				<tr valign="top"><th scope="row"><label class="description" for="chickpea_theme_options[facebook]"><?php _e( 'Facebook Username', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[facebook]" class="regular-text" type="text" name="chickpea_theme_options[facebook]" value="<?php if (array_key_exists('facebook', $options)) {esc_attr_e( $options['facebook'] );} ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><label class="description" for="chickpea_theme_options[twitter]"><?php _e( 'Twitter Username', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[twitter]" class="regular-text" type="text" name="chickpea_theme_options[twitter]" value="<?php if (array_key_exists('twitter', $options)) {esc_attr_e( $options['twitter'] );} ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><label class="description" for="chickpea_theme_options[instagram]"><?php _e( 'Instagram Username', 'chickpea' ); ?></label></th>
					<td>
						<input id="chickpea_theme_options[instagram]" class="regular-text" type="text" name="chickpea_theme_options[instagram]" value="<?php if (array_key_exists('instagram', $options)) {esc_attr_e( $options['instagram'] );} ?>" />
					</td>
				</tr>
			</table>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'chickpea' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	// Say our text option must be safe text with no HTML tags
	foreach ($input as $key => $value) {
		$input[$key] = wp_filter_nohtml_kses( $input[$key] );
	}

	return $input;
}
