<?php
namespace Diversity\Theme;

define( 'DIVERSITY_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );


// Theme foundation
include_once DIVERSITY_THEME_DIR . 'includes/config.php';
include_once DIVERSITY_THEME_DIR . 'includes/meta.php';
include_once DIVERSITY_THEME_DIR . 'includes/header-functions.php';
include_once DIVERSITY_THEME_DIR . 'includes/post-functions.php';
include_once DIVERSITY_THEME_DIR . 'includes/breadcrumb-functions.php';

// Add other includes to this file as needed.
