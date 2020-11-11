<?php
/**
 * @version 1.0.0
 */
/*
Plugin Name: nohe course plugin
Plugin URI: https://nohe.ch
Description: Erlaubt die Einbindung von nohe Kursen auf der Webseite via [nohe-course-plugin apikey="key"].
Author: nohe Schweiz GmbH
Version: 1.0.0
Author URI: https://nohe.ch/
*/

function nohe_course_plugin($attributes)
{
    if (! isset($attributes['apikey'])) {
        return 'Dieses Plugin benötigt einen apikey.';
    }

    $htmlAttributes = '';
    foreach ($attributes as $key => $value) {
        $htmlAttributes .= $key.'="'.htmlspecialchars($value).'" ';
    }

    return '<div class="nohe-course-plugin" '.$htmlAttributes.'></div><script src="https://api.nohe.ch/js/plugin/v2/nohe-course-plugin.js"></script>';
}

add_shortcode(
    'nohe-course-plugin',
    'nohe_course_plugin'
);
