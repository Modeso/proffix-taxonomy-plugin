<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Proffix_Taxonomy
 * @subpackage Proffix_Taxonomy/admin/partials
 */
?>

<div class="wrap proffix_general">
	<h1><?php _e('Product', 'proffix') ?></h1>

	<form method="post" action="options.php">

	    <table class="form-table">
	        <tr valign="top">
		        <th scope="row"><?php _e('Display PROFFIX Fields', 'proffix') ?></th>
		        <td>
		        	<?php 
						$fields = Proffix_inc::get_fields('product');
						// save Fields
						if($fields) {
							$detailsOptions = get_option(PROFFIX_PREFIX . 'product_details_visibility');
							$detailsOptions = ($detailsOptions)? $detailsOptions : [];
							foreach ($fields as $field) {
								$value = (array_key_exists($field->propertyName, $detailsOptions))? $detailsOptions[$field->propertyName] : 0;
								?>
								<div class="product-details-visiblity-checklist">
								<input type="checkbox" name="<?php echo PROFFIX_PREFIX ?>product_details_visibility[<?php echo $field->propertyName ?>]" value="1" <?php echo ($value)? 'checked' : '' ?>/><?php echo $field->Feldtitel; ?>
								</div>
								<?php
							}
						}
		        	?>
		        </td>
	        </tr>
	    </table>
	    
	    <?php submit_button(); ?>

	</form>
</div>