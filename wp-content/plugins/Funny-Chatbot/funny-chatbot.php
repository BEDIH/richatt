<?php
/**
 * Plugin Name: Funny Chatbot
 * Plugin URI: https://bedih.com/funny-chatbot
 * Description: Un plugin WordPress pour intégrer un chatbot interactif et personnalisé avec une icône "smart_toy".
 * Version: 1.2
 * Author: Votre Nom
 * Author URI: https://votresite.com
 */

if (!defined('ABSPATH')) {
    exit;
}

// Enqueue les scripts et styles nécessaires
function funny_chatbot_enqueue_scripts() {
    $plugin_url = plugin_dir_url(__FILE__);

    // Charger les styles
    wp_enqueue_style('funny-chatbot-css', $plugin_url . 'assets/chatbot.css');
    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&display=swap', [], null);

    // Charger les scripts
    wp_enqueue_script('funny-chatbot-js', $plugin_url . 'assets/chatbot.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'funny_chatbot_enqueue_scripts');

// Ajouter le HTML du chatbot dans le footer
function funny_chatbot_add_to_footer() {
    ?>
    <div class="funny-chatbot">
        <!-- Bouton pour ouvrir/fermer le chatbot -->
        <button class="chatbot-toggler">
            <span class="material-symbols-outlined">smart_toy</span>
        </button>

        <!-- Fenêtre du chatbot -->
        <div class="chatbot">
            <header>
                <h2>Expert</h2>
            </header>
            <div class="chatbox">
                <ul>
                    <li class="chat incoming">
                        <span class="material-symbols-outlined">smart_toy</span>
                        <p>Hello! How can I assist you today?</p>
                    </li>
                </ul>
            </div>
            <div class="chat-input">
                <textarea placeholder="Type your message here..."></textarea>
                <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet">
<button id="send-btn" class="material-symbols-rounded">send</button>
<button id="restart-btn" class="material-symbols-rounded">restart_alt</button>


            </div>
        </div>
    </div>
    <?php
}
add_action('wp_footer', 'funny_chatbot_add_to_footer');
?>
