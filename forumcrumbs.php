<?php
/**
 * Plugin Name: Forumcrumbs | Enable Forum Breadcrumbs for BuddyBoss
 * Description: A super light-weight WordPress plugin to enable Breadcrumbs Forums for your BuddyBoss powered website. No configurations needed. Just activate it, and your forums will have the breadcrumbs on it.
 * Author: Rajin Sharwar
 * Author URI: https://linkedin.com/in/rajinsharwar
 * Version: 1.0.0
 * Text Domain: Forumcrumbs
 */


function bb_enable_breadcrumbs_forum_topic($param) {
  return false;
}
add_filter ( 'bbp_no_breadcrumb', 'bb_enable_breadcrumbs_forum_topic', 999 );