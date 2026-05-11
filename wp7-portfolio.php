<?php

/**
 * Plugin Name: WP7 Portfolio AI Abilities
 * Description: Menambahkan AI Abilities kustom ke editor WordPress.
 * Version: 1.0
 */

add_action('enqueue_block_editor_assets', function () {
  wp_enqueue_script(
    'my-ai-abilities',
    plugin_dir_url(__FILE__) . 'summarize-ability.js',
    array('wp-abilities', 'wp-components', 'wp-element', 'wp-ai-client'),
    time(),
    true
  );
});
