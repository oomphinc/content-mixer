<?php

/**
 * Render a group of mixed items, which are front-end cache friendly but will
 * randomize content via JavaScript. Frames each item in $items to allow for
 * the front-end behavior to occur. Behavior is defined in mixer.js
 *
 * @param string $id - HTML id of this mixed group
 * @param array $items - Items to randomize
 * @param int $num - 0 to show all items (i.e., not randomized)
 *
 * @return string $markup
 */
function get_content_mixed_group( $id, $items, $num = 0 ) {
	$markup = '<div id="' . esc_attr( $id ) . '" class="' . esc_attr( 'mixer-group mixer-group-' . $num ) . '">';

	// Tell JavaScript to hide visibility of this group until the final set is selected
	if( $num < count( $items ) ) {
		$markup .= '<script>mixer.prepare(' . json_encode( "#$id" ) . ');</script>';
	}

	foreach( $items as $i => $item ) {
		$markup .= '<div class="mixer-item';

		if( $num && $i >= $num ) {
			$markup .= ' mixer-item-hidden';
		}

		$markup .= '">';
		$markup .= $item;
		$markup .= '</div>';
	}

	// Tell JavaScript to randomize these items
	if( $num < count( $items ) ) {
		$markup .= '<script>mixer.scramble(' . json_encode( "#$id" ) . ');</script>';
	}

	$markup .= '</div>';

	return $markup;
}
