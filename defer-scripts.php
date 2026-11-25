<?php
/**
 * Defer non-critical frontend scripts and disable default WP emoji assets.
 * Drop into a child theme's functions.php or a site-specific mu-plugin.
 */

add_action('init', function () {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
});

add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if (is_admin()) {
        return $tag;
    }

    $skip = ['jquery-core', 'jquery-migrate'];
    if (in_array($handle, $skip, true)) {
        return $tag;
    }

    if (strpos($tag, 'defer') === false && strpos($tag, 'async') === false) {
        return str_replace(' src=', ' defer src=', $tag);
    }

    return $tag;
}, 10, 3);
