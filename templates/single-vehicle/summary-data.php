<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


global $vehicle;

?>
<div class="wpcm-summary-data">

	<table>
	<?php foreach ( wp_car_manager()->service( 'settings' )->get_option( 'summary_data' ) as $data_key ) : ?>
		<?php wp_car_manager()->service( 'template_manager' )->get_template_part( 'vehicle-data/data', $data_key, array( 'key' => $data_key ) ); ?>
	<?php endforeach; ?>
	</table>

</div>