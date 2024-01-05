<?php
/**
 * Plugin Name: bbPress - Disable User Page
 * Description: Disable the bbPress User pages, because they really just get filled with spam anyway.
 * Version: 1.0
 * Author: Ryan Halliday
 */

add_filter('bbp_show_user_profile', '__return_false');
