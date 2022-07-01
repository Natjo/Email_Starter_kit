<?php

function dateMonthInFr($date)
{
    $english_months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
    $french_months = array('Janv', 'Févr', 'Mars', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sept', 'Oct', 'Nov', 'Déc');
    return str_replace($english_months, $french_months,  $date);
}

// icon svg
function icon($name, $width, $height, $url = THEME_ASSETS)
{
    return '<svg class="icon" width="' . $width . '" height="' . $height . '" aria-hidden="true" viewBox="0 0 ' . $width . ' ' . $height . '"><use xlink:href="' . $url . 'img/icons.svg#' . $name . '"></use></svg>';
}

// octets to Ko or Mo
function octify($val)
{
    if ($val >= 1024000) {
        $mesure = "Mo";
        $size = ($val / 1024) / 1000;
    } else {
        $mesure = "Ko";
        $size = $val / 1024;
    }
    return round($size) . $mesure;
}
