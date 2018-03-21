<?php
/**
 * Default output for a download via the [download] shortcode
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/** @var DLM_Download $dlm_download */
?>

<div class="">

		 <?php $template_url = get_bloginfo('stylesheet_directory');	?>

		 	<a class="download-link cc-icon <?php echo 'ccfiletype-' . $dlm_download->get_version()->get_filetype(); ?>"
	   title="<?php if ( $dlm_download->get_version()->has_version_number() ) {
		   printf( __( 'Version %s', 'download-monitor' ), $dlm_download->get_version()->get_version_number() );
	   } ?>" href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow">

		 <?php
		  echo file_get_contents($template_url . '/dist/images/pdf.svg' );
		  echo $dlm_download->get_version()->get_filename(); ?>

	</a>
		</div>
		<div>






</div>
