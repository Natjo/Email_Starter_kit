<?php
define('THEME_DIR', get_template_directory() . '/');
define('THEME_ASSETS', get_template_directory_uri() . '/assets/');
define('THEME_URL', get_template_directory_uri() . '/');

define('HOME_URL', get_home_url());
define('AJAX_URL', admin_url('admin-ajax.php'));


if (ENV_PROD) {
    define('GTAG_KEY', get_field('params_ga_code', 'option'));
} else {
    define('GTAG_KEY', 'AIzaSyCvSv4RSBSEL6zCfuA6XIsMMcQA0cxgBno');
}

if (!ENV_LOCAL) {
    define('ACF_LITE', true);
}

require_once(__DIR__ . '/inc/datatypes.php');
require_once(__DIR__ . '/inc/configuration.php');
require_once(__DIR__ . '/inc/configuration_security.php');

if (!ENV_LOCAL) {
    require_once(__DIR__ . '/inc/acf.php');
}

require_once(__DIR__ . '/inc/methods.php');
require_once(__DIR__ . '/inc/ajax-methods.php');
require_once(__DIR__ . '/inc/strates_helper.php');
require_once(__DIR__ . '/inc/customs/walker.php');
require_once(__DIR__ . '/inc/customs/form.php');
require_once(__DIR__ . '/inc/customs/breadcrumb.php');
require_once(__DIR__ . '/inc/customs/search.php');

// --------------------------
// Scripts et style
// --------------------------
add_action('init', 'scripts_site');

function scripts_site()
{

    if (!is_admin() && !is_login_page()) wp_deregister_script('jquery');

    if (!is_admin() || !is_user_logged_in()) {

        // Style
        wp_enqueue_style('style_principal', get_template_directory_uri() . '/assets/css/app.css', array(), filemtime(get_template_directory() . '/assets/css/app.css'));

        // Script
        wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/app.js', array(), filemtime(get_template_directory() . '/assets/js/app.js'), true);

        // paramsdata
        $dataToBePassed = array(
            'wp_ajax_url' => AJAX_URL,
            'wp_theme_url' => THEME_URL,
            'wp_home_url' => HOME_URL,
            'gtag_key' =>  GTAG_KEY
        );

        // Display in data attr to avoid inline script
        define('PARAMSDATA', $dataToBePassed);
    }
}


// Image url fonction id
function lsd_get_thumb($id, $size = 'medium')
{
    if ($id) {
        $img = wp_get_attachment_image_src($id, $size);
        $extension = substr($img[0], strrpos($img[0], '.') + 1);

        if ($extension == 'gif' || $extension == 'GIF') :
            $img = wp_get_attachment_image_src($id, 'full');
        endif;

        $imgUrl = is_array($img) ? reset($img) : "";

        return $imgUrl;
    }
}


// Image url function de mise en avant des articles
function lsd_get_featured($id, $size = 'medium')
{
    if ($id) {
        $img_id = get_post_thumbnail_id($id);
        $img = wp_get_attachment_image_src($img_id, $size);
        $extension = substr($img[0], strrpos($img[0], '.') + 1);

        if ($extension == 'gif' || $extension == 'GIF') :
            $img = wp_get_attachment_image_src($img_id, 'full');
        endif;

        $imgUrl = is_array($img) ? reset($img) : "";

        return $imgUrl;
    }
}

function is_login_page()
{
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}

function checkNonce($nonceContext)
{

    $nonce = isset($_POST['nonce']) ? sanitize_text_field($_POST['nonce']) : 0;
    if (!wp_verify_nonce($nonce, $nonceContext)) {
        exit(__('not authorized', 'domain'));
    }
}

// remove classes and ids of Walker_Nav_Menu
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args)
{
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args)
{
    return array();
}


// remove classes and ids of wp_list_pages()
function remove_page_class($wp_list_pages)
{
    $pattern = '/\<li class="page_item[^>]*>/';
    $replace_with = '<li>';
    return preg_replace($pattern, $replace_with, $wp_list_pages);
}
add_filter('wp_list_pages', 'remove_page_class');


// Rewrite rules for news page
function news_rewrite_url()
{
    add_rewrite_tag('%paged%', '([^&]+)');

    add_rewrite_rule(
        'campagnes/page/([^/]+)',
        'index.php?pagename=campagnes&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'news_rewrite_url');


// tiny mce Formatage avec les <p>
add_filter('tiny_mce_before_init', 'prevent_deleting_pTags');
function prevent_deleting_pTags($init)
{
    $init['wpautop'] = false;
    return $init;
}



/*
 *
 * Styles
 *
 *
 */


// Titles
function title_primary($value)
{
    get_template_part('template-parts/styles/style', 'title', array(
        "text" => $value,
        "fontSize" => FONT_SIZE_XLG,
        "lineHeight" => "32px",
        "color" => COLOR_PRIMARY
    ));
}
function title_primary_reverse($value)
{
    get_template_part('template-parts/styles/style', 'title', array(
        "text" => $value,
        "fontSize" => FONT_SIZE_XLG,
        "lineHeight" => "32px",
        "color" => "#fff"
    ));
}
function title_secondary($value)
{
    get_template_part('template-parts/styles/style', 'title', array(
        "text" => $value,
        "fontSize" => FONT_SIZE_LG,
        "lineHeight" => "22px",
        "color" => COLOR_PRIMARY
    ));
}
function title_secondary_reverse($value)
{
    get_template_part('template-parts/styles/style', 'title', array(
        "text" => $value,
        "fontSize" => FONT_SIZE_LG,
        "lineHeight" => "22px",
        "color" => "#fff"
    ));
}

function title_third($value)
{
    get_template_part('template-parts/styles/style', 'title', array(
        "text" => $value,
        "fontSize" => FONT_SIZE,
        "lineHeight" => "32px",
        "color" => COLOR_PRIMARY
    ));
}

// Btns
function btn_primary($arr)
{
    $args['cta'] = $arr;
    $args['bgcolor'] = COLOR_PRIMARY;
    $args['color'] = "#fff";
    $args['fontSize'] = FONT_SIZE;
    get_template_part('template-parts/btns/btn', 'primary', $args);
}

function btn_primary_reverse($arr)
{
    $args['cta'] = $arr;
    $args['bgcolor'] = "#fff";
    $args['color'] = COLOR_SECONDARY;
    $args['fontSize'] = FONT_SIZE;
    get_template_part('template-parts/btns/btn', 'primary', $args);
}


// Texts
function text_primary($value, $color = COLOR_TEXT)
{
    get_template_part('template-parts/styles/style', 'text', array(
        "text" => $value,
        "fontSize" => FONT_SIZE_MD,
        "color" => $color,
        "lineHeight" => "25px"
    ));
}

function text_secondary($value, $color = COLOR_TEXT)
{
    get_template_part('template-parts/styles/style', 'text', array(
        "text" => $value,
        "fontSize" => FONT_SIZE,
        "color" => $color,
        "lineHeight" => "20px"
    ));
}

// Links
function link_primary($value)
{
    $args['cta'] = $value;
    $args['color'] =  COLOR_SECONDARY;
    $args['fontSize'] = FONT_SIZE;

    get_template_part('template-parts/styles/style', 'link', $args);
}

// Layout
function spacer_tr($value)
{
    get_template_part('template-parts/styles/style', 'spacer', array("height" => $value));
}

// heplers
function guttentag($value)
{
    $str = str_replace("[color-primary]", '<font size="1" face="' . FONT_FAMILY . '" color="' . COLOR_PRIMARY . '" style="font-family:' . FONT_FAMILY . '; font-size:inherit; color:' . COLOR_PRIMARY . '">', $value);
    $str = str_replace("[/color-primary]", "</font>",  $str);
    $str = str_replace("[color-secondary]", '<font size="1" face="' . FONT_FAMILY . '" color="' . COLOR_SECONDARY . '" style="font-family:' . FONT_FAMILY . '; font-size:inherit; color:' . COLOR_SECONDARY . '">', $str);
    $str = str_replace("[/color-secondary]", "</font>",  $str);
    $str = str_replace("[b]", "<b>",  $str);
    $str = str_replace("[/b]", "</b>",  $str);
    echo $str;
}
function getColor($value)
{

    if ($value === "primary") {
        return COLOR_PRIMARY;
    }
    if ($value === "secondary") {
        return COLOR_SECONDARY;
    }
    if ($value === "third") {
        return COLOR_THIRD;
    }
    if ($value === "fourth") {
        return COLOR_FOURTH;
    }
}

function roundEven($number)
{
    $number = round($number);
    if ($number % 2 != 0) {
        $number++;
    }
    return $number;
}
function urlImagePath($image)
{
    $file = explode("/", $image);
    if (!empty(URL_IMAGES)) {
        $path = rtrim(URL_IMAGES, '/') . '/';
        $img = $path . end($file);
    } else {
        $img = $image;
    }
    return $img;
}