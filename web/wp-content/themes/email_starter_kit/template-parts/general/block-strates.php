<?php
$pageId = isset($args["page_id"]) ? $args["page_id"] : get_the_ID();
$aStrates =  get_field('strates', $pageId);

if (isset($aStrates) && !empty($aStrates)) {
    foreach ($aStrates as $aStrate) {
        switch ($aStrate['acf_fc_layout']) {
            case 'strate_image':
                get_template_part('template-parts/strates/strate', 'image', Strate_Helper::strate_image($aStrate));
                break;
            case 'strate_image_full':
                get_template_part('template-parts/strates/strate', 'image-full', Strate_Helper::strate_image_full($aStrate));
                break;
            case 'strate_title_text_cta':
                get_template_part('template-parts/strates/strate', 'title-text-cta', Strate_Helper::strate_title_text_cta($aStrate));
                break;
            case 'strate_image_text':
                get_template_part('template-parts/strates/strate', 'image-text', Strate_Helper::strate_image_text($aStrate));
                break;
            case 'strate_margin':
                get_template_part('template-parts/strates/strate', 'margin', Strate_Helper::strate_margin($aStrate));
                break;
            case 'strate_event':
                get_template_part('template-parts/strates/strate', 'event', Strate_Helper::strate_event($aStrate));
                break;
            case 'strate_2cols':
                get_template_part('template-parts/strates/strate', '2cols', Strate_Helper::strate_2cols($aStrate));
                break;
        }
    }
}
