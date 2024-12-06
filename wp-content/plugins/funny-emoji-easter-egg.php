<?php
/**
 * Plugin Name: WP Spooky Walking Zombie
 * Description: Un plugin WordPress qui affiche un zombie marchant dynamiquement à droite de l'écran après 30 secondes.
 * Version: 1.3
 * Author: Votre Nom
 */

if (!defined('ABSPATH')) {
    exit; // Empêche l'accès direct
}

// Enqueue des scripts et styles
function wp_spooky_walking_zombie_enqueue_assets() {
    wp_enqueue_script(
        'walking-zombie-script',
        plugin_dir_url(__FILE__) . 'walking-zombie.js',
        array(),
        '1.3',
        true
    );

    wp_enqueue_style(
        'walking-zombie-style',
        plugin_dir_url(__FILE__) . 'walking-zombie.css',
        array(),
        '1.3'
    );
}
add_action('wp_enqueue_scripts', 'wp_spooky_walking_zombie_enqueue_assets');
