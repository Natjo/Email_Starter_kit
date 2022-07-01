<?php
$pageId = isset($args["page_id"]) ? $args["page_id"] : get_the_ID();
$aStrates =  get_field('footers', $pageId);

if (isset($aStrates) && !empty($aStrates)) {
    foreach ($aStrates as $aStrate) {
        switch ($aStrate['acf_fc_layout']) {
            case 'footer_1':
                get_template_part('template-parts/footers/footer', '1', Footer_Helper::footer_1($aStrate));
                break;
          
        }
    }
}
