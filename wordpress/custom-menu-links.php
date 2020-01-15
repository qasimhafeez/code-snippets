<?php

// Adding Menu Classes
function menu_item_class($classes, $item) {       
    $classes[] = "nav-item";
    $classes[] = "p-1"; 
    return $classes;
}
add_filter('nav_menu_css_class', 'menu_item_class', 10, 2);

// Custom Menu Links Class
function modify_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link btn btn-primary btn-sm"', $ulclass);
}
add_filter('wp_nav_menu', 'modify_menuclass');

?>