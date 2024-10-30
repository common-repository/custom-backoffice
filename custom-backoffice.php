<?php
/*
  Plugin Name: Custom Backoffice
  Plugin URI: http://copier-coller.com/custom-backoffice-le-plugin-de-base
  Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=43XMASQSUE4YE
  Description: A multi-functions plugin to personnalize your website.
  Version: 1.2
  Author: Matthieu Solente
  Author URI: https://copier-coller.com
  License: GPL2
 */

/*  Copyright 2014 Matthieu Solente  (email : contact (at) copiercoller.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function custom_backoffice_lang() {
    load_plugin_textdomain('custom-backoffice', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}

add_action('init', 'custom_backoffice_lang');


/* Settings Page */

// Hook for adding admin menus
add_action('admin_menu', 'cc_custom_backoffice_add_pages');

function cc_custom_backoffice_add_pages() {
// Add a new submenu under Settings:
    add_options_page('Custom Backoffice Options', 'Custom Backoffice', 'manage_options', 'cccustombackoffice', 'cc_custom_backoffice_settings_page');
}

add_action('admin_init', 'register_cc_custom_backoffice_settings');

function cc_admin_styles() {
    wp_register_style('admin_stylesheet', plugins_url('css/style.css', __FILE__));
    wp_enqueue_style('admin_stylesheet');
}

add_action('admin_enqueue_scripts', 'cc_admin_styles');

function activate_custom_backoffice() {
    $cc_wp_ver = get_bloginfo('version');
    if ($cc_wp_ver < 3.8) {
        add_option('cc-custom-backoffice-img', plugins_url('wordpress-logo.png', __FILE__));
    } else {
        add_option('cc-custom-backoffice-img', plugins_url('w-logo-blue.png', __FILE__));
    }
    add_option('cc-custom-backoffice-link', 'http://wordpress.org');
    add_option('cc-custom-backoffice-title', 'Powered by WordPress');
    add_option('cc-custom-backoffice-css', '');
    add_option('cc-custom-backoffice-footer', 'Thank you for creating with WordPress');
    add_option('cc-custom-backoffice-adminbar', '');
    add_option('cc-custom-backoffice-updatenag', '');
    add_option('cc-custom-backoffice-changemenu', '');
    add_option('cc-custom-backoffice-copyright', '');
    add_option('cc-custom-backoffice-back', '');
    add_option('cc-custom-backoffice-help', '');
    add_option('cc-custom-backoffice-screen', '');
    add_option('cc-custom-backoffice-widgets', '');
    add_option('cc-custom-backoffice-page', '');
    add_option('cc-custom-backoffice-links', '');
    add_option('cc-custom-backoffice-media', '');
    add_option('cc-custom-backoffice-tools', '');
    add_option('cc-custom-backoffice-users', '');
    add_option('cc-custom-backoffice-settings', '');
    add_option('cc-custom-backoffice-comments', '');
    add_option('cc-custom-backoffice-plugins', '');
    add_option('cc-custom-backoffice-posts', '');
    add_option('cc-custom-backoffice-appearance', '');   
    add_option('cc-custom-backoffice-name', '');
}

function deactive_custom_backoffice() {
    delete_option('cc-custom-backoffice-img');
    delete_option('cc-custom-backoffice-link');
    delete_option('cc-custom-backoffice-title');
    delete_option('cc-custom-backoffice-css');
    delete_option('cc-custom-backoffice-footer');
    delete_option('cc-custom-backoffice-adminbar');
    delete_option('cc-custom-backoffice-updatenag');
    delete_option('cc-custom-backoffice-changemenu');
    delete_option('cc-custom-backoffice-copyright');
    delete_option('cc-custom-backoffice-back');
    delete_option('cc-custom-backoffice-help');
    delete_option('cc-custom-backoffice-screen');
    delete_option('cc-custom-backoffice-widgets');
    delete_option('cc-custom-backoffice-page');
    delete_option('cc-custom-backoffice-links');
    delete_option('cc-custom-backoffice-media');
    delete_option('cc-custom-backoffice-tools');
    delete_option('cc-custom-backoffice-users');
    delete_option('cc-custom-backoffice-settings');
    delete_option('cc-custom-backoffice-comments');
    delete_option('cc-custom-backoffice-plugins');
    delete_option('cc-custom-backoffice-posts');
    delete_option('cc-custom-backoffice-appearance');
     delete_option('cc-custom-backoffice-name');
}

register_activation_hook(__FILE__, 'activate_custom_backoffice');
register_deactivation_hook(__FILE__, 'deactive_custom_backoffice');

function register_cc_custom_backoffice_settings() {
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-img');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-link');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-title');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-css');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-footer');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-adminbar');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-updatenag');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-changemenu');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-copyright');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-back');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-help');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-screen');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-widgets');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-page');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-links');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-media');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-tools');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-users');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-settings');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-comments');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-plugins');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-posts');
    register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-appearance');
     register_setting('cc-custom-backoffice-option-group', 'cc-custom-backoffice-name');
}

// Display the page content for the login logo submenu
function cc_custom_backoffice_settings_page() {
    include(WP_PLUGIN_DIR . '/custom-backoffice/options.php');
}

/* Reference CSS File */

function custom_backoffice_by_cc() {
    echo '<link rel="stylesheet" type="text/css" href="' . plugins_url('custom-backoffice.css', __FILE__) . '" />';
}

add_action('login_head', 'custom_backoffice_by_cc');

/* Show Logo */

function cc_custom_backoffice() {
    if (!isset($cclogo)) {
        $cclogo = get_option('cc-custom-backoffice-img');
    }
    if (!isset($cccss)) {
        $cccss = get_option('cc-custom-backoffice-css');
    }
    echo '<style type="text/css">
		h1 a { background-image:url(' . $cclogo . ') !important;
		background-size: 274px 63px;}
		' . $cccss . '
		</style>';
}

add_action('login_head', 'cc_custom_backoffice');

add_filter('login_headerurl', 'cc_login_page_link');

function cc_login_page_link($url) {
    if (!isset($cclink)) {
        $cclink = get_option('cc-custom-backoffice-link');
    }
    return $cclink;
}

add_filter('login_headertitle', 'cc_custom_backoffice_url_title');

function cc_custom_backoffice_url_title() {
    if (!isset($cctitle)) {
        $cctitle = get_option('cc-custom-backoffice-title');
    }
    return $cctitle;
}

function cc_custom_backoffice_back() {

    $ccback = get_option('cc-custom-backoffice-back');
    if (!empty($ccback)) {
        echo '<style type="text/css">
		body.login { background:url(' . $ccback . ') !important;
		background-size: cover;}
		
		</style>';
    } else {
        echo '<style type="text/css">
		body.login { background-color:#f1f1f1 !important;}
		
		</style>';
    }
}

add_action('login_head', 'cc_custom_backoffice_back');




add_filter('admin_footer_text', 'cc_custom_backoffice_footer');

function cc_custom_backoffice_footer() {
    if (!isset($ccfooter)) {
        $ccfooter = get_option('cc-custom-backoffice-footer');
    }
    return $ccfooter;
}

add_action('wp_dashboard_setup', 'cc_custom_backoffice_widgets');

function cc_custom_backoffice_widgets() {
    global $wp_meta_boxes;
    $ccwidgets = get_option('cc-custom-backoffice-widgets');
    if (!empty($ccwidgets)) {
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // Presse-Minute
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // Commentaires récents
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // Extensions
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // Liens entrant
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // Billets en brouillon
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // Blogs WordPress
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // Autres actualités WordPress
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_wp_welcome_panel']); // Autres actualités WordPress
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    }
}

add_action('wp_before_admin_bar_render', 'cc_custom_backoffice_adminbar');

function cc_custom_backoffice_adminbar() {
    $ccadminbar = get_option('cc-custom-backoffice-adminbar');
    if (!empty($ccadminbar)) {
        global $wp_admin_bar;
        $wp_admin_bar->remove_node('wp-logo'); // Logo
        $wp_admin_bar->remove_node('about'); // A propos de WordPress
        $wp_admin_bar->remove_node('wporg'); // WordPress.org
        $wp_admin_bar->remove_node('documentation'); // Documentation
        $wp_admin_bar->remove_node('support-forums');  // Forum de support
        $wp_admin_bar->remove_node('feedback'); // Remarque
        $wp_admin_bar->remove_node('comments');
        $wp_admin_bar->remove_node('updates'); // Mises à jour
        $wp_admin_bar->remove_node('new-content');  // Publier	
    }
}



function cc_custom_backoffice_update() {
    $ccupdate = get_option('cc-custom-backoffice-updatenag');
    if (!empty($ccupdate)) {

        function remove_core_updates() {
            global $wp_version;
            return(object) array('last_checked' => time(), 'version_checked' => $wp_version,);
        }

        add_filter('pre_site_transient_update_core', 'remove_core_updates');
        add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
        add_filter('pre_site_transient_update_themes', 'remove_core_updates');
    }
}

add_action('after_setup_theme', 'cc_custom_backoffice_update');

function cc_custom_backoffice_changemenu() {
    $ccchangemnu = get_option('cc-custom-backoffice-changemenu');
    if (!empty($ccchangemnu)) {
        global $menu;
        global $submenu;
        unset($submenu['themes.php']);            // Supprime les sous-menus de "Apparence"
        $menu[60] = array(0 => 'Menus', 1 => 'edit_theme_options', 2 => 'nav-menus.php', 4 => 'menu-top menu-icon-appearance', 5 => 'menu-appearance', 6 => 'div'); // Change le menu "Apparence" en "Menus"
    }
}

add_action('admin_menu', 'cc_custom_backoffice_changemenu', 11);

function cc_custom_backoffice_copyright() {
    $cccopyright = get_option('cc-custom-backoffice-copyright');
    if (!empty($cccopyright)) {

        global $wpdb;
        $copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
        $output = '';
        if ($copyright_dates) {
            $copyright = "© " . $copyright_dates[0]->firstdate;
            if ($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
                $copyright .= '-' . $copyright_dates[0]->lastdate;
            }
            $output = $copyright;
        }
        return $output;
    }
}

add_shortcode('copyright', 'cc_custom_backoffice_copyright');
add_filter('widget_text', 'do_shortcode');

function cc_custom_backoffice_help() {
    $cchelp = get_option('cc-custom-backoffice-help');
    if (!empty($cchelp)) {

        $screen = get_current_screen();
        $screen->remove_help_tabs();
    }
}

add_action('admin_head', 'cc_custom_backoffice_help');

function cc_custom_backoffice_screen() {
    $ccscreen = get_option('cc-custom-backoffice-screen');
    if (!empty($ccscreen)) {
        echo '<style type="text/css">
            #screen-options-link-wrap { display: none !important; }
    </style>';
    }
}
add_action('admin_head', 'cc_custom_backoffice_screen');


function cc_remove_menu() {
    $ccremovepage = get_option('cc-custom-backoffice-page');
    if (!empty($ccremovepage)) {
        remove_menu_page('edit.php?post_type=page');
    }
    $ccremovelinks = get_option('cc-custom-backoffice-links');
    if (!empty($ccremovelinks)) {
       remove_menu_page( 'link-manager.php' );
    }
    $ccremovemedia = get_option('cc-custom-backoffice-media');
    if (!empty($ccremovemedia)) {
        remove_menu_page('upload.php');
    }
    $ccremovetools = get_option('cc-custom-backoffice-tools');
    if (!empty($ccremovetools)) {
        remove_menu_page('tools.php');
    }
    $ccremoveusers = get_option('cc-custom-backoffice-users');
    if (!empty($ccremoveusers)) {
        remove_menu_page('users.php');
    }
    $ccremovesettings = get_option('cc-custom-backoffice-settings');
    if (!empty($ccremovesettings)) {
        remove_menu_page('options-general.php');
    }
    $ccremoveplugins = get_option('cc-custom-backoffice-plugins');
    if (!empty($ccremoveplugins)) {
        remove_menu_page('plugins.php');
    }
    $ccremoveposts = get_option('cc-custom-backoffice-posts');
    if (!empty($ccremoveposts)) {
        remove_menu_page('edit.php');
    }
    $ccremoveappearance = get_option('cc-custom-backoffice-appearance');
    if (!empty($ccremoveappearance)) {
        remove_menu_page('themes.php');
    }
    $ccremovecomments = get_option('cc-custom-backoffice-comments');
    if (!empty($ccremovecomments)) {
        remove_menu_page('edit-comments.php');
    }
}

add_action('admin_menu', 'cc_remove_menu');


function cc_custom_backoffice_name($wp_admin_bar){
    $cccustomname = get_option('cc-custom-backoffice-name');
            if(!empty($cccustomname)){
               global $current_user;

    $my_account = $wp_admin_bar->get_node('my-account');

    $howdy = sprintf(__('Howdy, %1$s'), $current_user->display_name);

    $title = str_replace($howdy, $current_user->display_name, $my_account->title);

    $wp_admin_bar->add_node(array(

        'id' => 'my-account',

        'title' => $title,

        'meta' => $my_account->meta

    ));

}  }
add_filter('admin_bar_menu', 'cc_custom_backoffice_name');   
          
  



add_action('admin_enqueue_scripts', 'cc_upload_script');

function cc_upload_script() {
    if (isset($_GET['page']) && $_GET['page'] == 'cccustombackoffice') {
        wp_enqueue_media();
        wp_register_script('image-upload-js', WP_PLUGIN_URL . '/custom-backoffice/image-upload.js', array('jquery'));
        wp_enqueue_script('image-upload-js');
    }
}

function my_admin_uploader_scripts() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script('my-upload', WP_PLUGIN_URL . '/my-script.js', array('jquery', 'media-upload', 'thickbox'));
    wp_enqueue_script('my-upload');
}

function my_admin_uploader_styles() {
    wp_enqueue_style('thickbox');
}

add_action('admin_print_scripts', 'my_admin_uploader_scripts');
add_action('admin_print_styles', 'my_admin_uploader_styles');
?>