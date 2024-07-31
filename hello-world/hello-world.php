<?php
/*
Plugin Name: Hello World Plugin
Description: A simple plugin that echoes "Hello World".
Version: 1.0
Author: Your Name
*/

// Function to echo "Hello World"
function hello_world() {
    echo '<p>Hello World!</p>';
}

// Hook the function to the WordPress 'wp_footer' action
add_action('wp_footer', 'hello_world');