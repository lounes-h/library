<?php
/**
 * Filter the custom amount field description.
 *
 * @param  string $label The default label.
 * @return string
 */
function ed_charitable_donation_form_set_custom_amount_field_text( $label ) {
	return 'Your preferred label';
}

add_filter( 'charitable_donation_amount_form_custom_amount_text', 'ed_charitable_donation_form_set_custom_amount_field_text' );
