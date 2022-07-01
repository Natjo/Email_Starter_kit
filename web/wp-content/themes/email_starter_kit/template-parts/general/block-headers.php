<?php
$pageId = isset($args["page_id"]) ? $args["page_id"] : get_the_ID();
$aStrates =  get_field('headers', $pageId);

if (isset($aStrates) && !empty($aStrates)) {
    foreach ($aStrates as $aStrate) {
        switch ($aStrate['acf_fc_layout']) {
            case 'header_1':
                get_template_part('template-parts/headers/header', '1', Header_Helper::header_1($aStrate));
                break;
          
        }
    }
}
