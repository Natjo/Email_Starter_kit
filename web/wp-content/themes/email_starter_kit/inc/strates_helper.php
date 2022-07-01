<?php

class Strate_Helper
{
    public static function strate_image($aStrate)
    {
        $args = array(
            'image' => array(
                'url' => urlImagePath($aStrate['img']['url']),
                'width' => $aStrate['img']['width'],
                'height' => $aStrate['img']['height'],
            )
        );

        return $args;
    }
    public static function strate_image_full($aStrate)
    {

        $args['image'] = urlImagePath($aStrate['img']);

        return $args;
    }
    public static function strate_title_text_cta($aStrate)
    {
        $args = array(
            'title' => $aStrate['title'],
            'text' => $aStrate['text'],
            'cta' => $aStrate['cta']
        );
        return $args;
    }
    public static function strate_margin($aStrate)
    {
        $args = [
            'value' => $aStrate['margin'],
            'to_disappear' => $aStrate['margin']
        ];

        return $args;
    }
    public static function strate_image_text($aStrate)
    {

        $args = array(
            'bgColor' => $aStrate['bgColor'] ? getColor($aStrate['bgColor']) : "#ffffff",
            'col1' => array(
                'is_image' => !empty($aStrate['col1-is_image']) ? true : false,
                'title' => $aStrate['col1-content']['title'],
                'text' => $aStrate['col1-content']['text'],
                'cta' => $aStrate['col1-content']['cta'],
                'image' => array(
                    'url' => urlImagePath($aStrate['col1-img']['url']),
                    'width' => $aStrate['col1-img']['width'],
                    'height' => $aStrate['col1-img']['height'],
                )
            ),
            'col2' => array(
                'is_image' => !empty($aStrate['col2-is_image']) ? true : false,
                'title' => $aStrate['col2-content']['title'],
                'text' => $aStrate['col2-content']['text'],
                'cta' => $aStrate['col2-content']['cta'],
                'image' => array(
                    'url' => urlImagePath($aStrate['col2-img']['url']),
                    'width' => $aStrate['col2-img']['width'],
                    'height' => $aStrate['col2-img']['height'],
                )
            )
        );

        return $args;
    }
    public static function strate_event($aStrate)
    {
        $args['items'] = array();
        foreach ($aStrate['items'] as $item) {
            array_push($args['items'], array(
                'image' => urlImagePath($item['image']['url']),
                'text' =>  $item['text'],
            ));
        }
        $args['title'] = $aStrate['title'];
        $args['cta'] = $aStrate['cta'];

        return $args;
    }
    public static function strate_2cols($aStrate)
    {

        $args['items'] = array();
        foreach ($aStrate['items']  as $item) {
            array_push($args['items'], array(
                "title" => $item['title'],
                "text" => $item['text'],
                "cta" => $item['cta'],
                'image' => array(
                    'url' => urlImagePath($item['image']['url']),
                    'width' => $item['image']['width'],
                    'height' => $item['image']['height'],
                )
            ));
        }

        return $args;
    }
}


class Header_Helper
{
    public static function header_1($aStrate)
    {

        $args['image'] =  array(
            'url' => urlImagePath($aStrate['image']['url']),
            'width' => $aStrate['image']['width']
        );
        $args['text'] = $aStrate['text'];

        return $args;
    }
}

class Footer_Helper
{
    public static function footer_1($aStrate)
    {

        $args['image'] =  array(
            'url' => urlImagePath($aStrate['image']['url']),
            'width' => $aStrate['image']['width']
        );

        $args['items'] = array();
        foreach ($aStrate['items']  as $item) {
            array_push($args['items'], array(
                "url" => $item['url'],
                "image" => array(
                    'url' => urlImagePath($item['image']['url']),
                    'width' => $item['image']['width']
                )
            ));
        }
        return $args;
    }
}
