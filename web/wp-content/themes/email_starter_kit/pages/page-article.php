<?php

$pageId = get_the_ID();
define('URL_IMAGES', get_field('campagne-fields-url_image', get_the_ID()));
define('SPACER', !empty(URL_IMAGES) ? (rtrim(URL_IMAGES, '/') . '/') . "spacer.gif" :  get_template_directory_uri().'/assets/images/spacer.gif');
define('CTR_WIDTH', get_field('campagne-fields-width', $pageId));
define('CTR_OFFSET', get_field('campagne-fields-ctr_offset', $pageId));
define('CTR_OFFSET_MOBILE', get_field('campagne-fields-ctr_offset-mobile', $pageId));
define('GAP', get_field('campagne-fields-gap', $pageId));
define('BG_COLOR', get_field('campagne-fields-bg-color', $pageId));
define('PAGE_COLOR', get_field('campagne-fields-page-color', $pageId));
define('FONT_FAMILY', get_field('campagne-fields-font-family', $pageId));
define('COLOR_PRIMARY', get_field('campagne-fields-color-primary', $pageId));
define('COLOR_SECONDARY', get_field('campagne-fields-color-secondary', $pageId));
define('COLOR_THIRD', get_field('campagne-fields-color-third', $pageId));
define('COLOR_FOURTH', get_field('campagne-fields-color-fourth', $pageId));
define('COLOR_TEXT', get_field('campagne-fields-color-text', $pageId));
define('FONT_SIZE_SM', get_field('campagne-fields-font_size-sm', $pageId));
define('FONT_SIZE', get_field('campagne-fields-font_size', $pageId));
define('FONT_SIZE_MD', get_field('campagne-fields-font_size-md', $pageId));
define('FONT_SIZE_LG', get_field('campagne-fields-font_size-lg', $pageId));
define('FONT_SIZE_XLG', get_field('campagne-fields-font_size-xlg', $pageId));

get_header();
get_template_part('template-parts/general/block', 'header_nav');
?>

    <?php get_template_part('template-parts/general/block', 'headers'); ?>

    <?php get_template_part('template-parts/general/block', 'strates'); ?>

    <?php get_template_part('template-parts/general/block', 'footers'); ?>

<?php
get_footer();
