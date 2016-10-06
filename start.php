<?php
/**
 * bit.ly URL shortener plugin
 *
 * @author Cash Costello
 * @license GPL2
 */

elgg_register_event_handler('init', 'system', 'yourls_init');

function yourls_init() {
	elgg_extend_view('css/elgg', 'css/yourls');
}
