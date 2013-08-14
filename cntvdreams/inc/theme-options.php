<?php


function dreams_theme_options_add_page() {
	$theme_page = add_theme_page(
		__( '首页设置', 'dreams' ),   // Name of page
		__( '首页设置', 'dreams' ),   // Label in menu
		'edit_theme_options',                    // Capability required
		'theme_options',                         // Menu slug, used to uniquely identify the page
		'dreams_theme_options_render_page' // Function that renders the options page
	);

	if ( ! $theme_page )
		return;

	$help = '<p>zongshimiandui</p>';

	add_contextual_help( $theme_page, $help );
}
add_action( 'admin_menu', 'dreams_theme_options_add_page' );


function dreams_theme_options_render_page() {
	?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<h2><?php printf( __( '%s Theme Options', 'twentyeleven' ), get_current_theme() ); ?></h2>
		<?php settings_errors(); ?>

		<form method="post" action="options.php">
			<?php
				//settings_fields( 'twentyeleven_options' );
				//$options = twentyeleven_get_theme_options();
				//$default_options = twentyeleven_get_default_theme_options();
			?>

			<table class="form-table">

				<tr valign="top" class="image-radio-option color-scheme"><th scope="row"><?php _e( 'Color Scheme', 'twentyeleven' ); ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php _e( 'Color Scheme', 'twentyeleven' ); ?></span></legend>
						<?php
						?>
						</fieldset>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Link Color', 'twentyeleven' ); ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php _e( 'Link Color', 'twentyeleven' ); ?></span></legend>
							<input type="text" name="twentyeleven_theme_options[link_color]" id="link-color" value="<?php echo esc_attr( $options['link_color'] ); ?>" />
							<a href="#" class="pickcolor hide-if-no-js" id="link-color-example"></a>
							<input type="button" class="pickcolor button hide-if-no-js" value="<?php esc_attr_e( 'Select a Color', 'twentyeleven' ); ?>" />
							<div id="colorPickerDiv" style="z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;"></div>
							<br />
							<span></span>
						</fieldset>
					</td>
				</tr>

				<tr valign="top" class="image-radio-option theme-layout"><th scope="row"><?php _e( 'Default Layout', 'twentyeleven' ); ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php _e( 'Color Scheme', 'twentyeleven' ); ?></span></legend>
						<?php
							
						?>
						</fieldset>
					</td>
				</tr>
			</table>

			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}
