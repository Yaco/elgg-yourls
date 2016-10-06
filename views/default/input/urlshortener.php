<?php
/**
 * Display the URL shortener input box
 */

elgg_require_js('yourls/shortener');

$text_input = elgg_view('input/text', array(
	'name' => 'yourls_url',
	'id' => 'yourls-url',
	'data-server' => elgg_get_plugin_setting('server', 'yourls'),
	'data-apikey' => elgg_get_plugin_setting('api_key', 'yourls')
));

$button = elgg_view('input/submit', array(
	'value' => elgg_echo('yourls:shorten'),
	'class' => 'elgg-button-submit mlm',
	'id' => 'yourls-submit',
));

echo '<div class="mam yourls-wrapper">';
echo elgg_view('output/url', array(
	'href' => '#yourls-form',
	'text' => elgg_echo('yourls:shorten:label'),
	'rel' => 'toggle',
));

echo elgg_view_image_block('', $text_input, array(
	'image_alt' => $button,
	'class' => 'hidden',
	'id' => 'yourls-form',
));
echo '</div>';
