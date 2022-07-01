<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Responsive Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- So that mobile webkit will display zoomed in -->
    <meta name="format-detection" content="telephone=no">
    <!-- disable auto telephone linking in iOS -->

    <title>Campagne | <?= get_the_title(); ?></title>

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            font-family: <?= FONT_FAMILY ?>;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        img {
            outline: none;
            text-decoration: none;
        }

        a img {
            border: none;
        }

        table td {
            border-collapse: collapse;
        }

        td,
        a,
        span {
            border-collapse: collapse;
            mso-line-height-rule: exactly;
        }


        /* Force Hotmail to display emails at full width */

        .ExternalClass {
            width: 100%;
        }

        /* Force Hotmail to display normal line spacing. */

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        table {
            border-spacing: 0;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* */
        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover {
            text-decoration: none;
            color: inherit;
        }

        a:visited {
            text-decoration: none;
            color: inherit;
        }

        img {
            display: block;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .msg-body {
            width: 100% !important;
        }

        .ExternalClass * {
            line-height: 110% !important;
        }

        * {
            text-size-adjust: none !important
        }

        * {
            -moz-text-size-adjust: none !important
        }

        * {
            -webkit-text-size-adjust: none !important
        }

        * {
            -ms-text-size-adjust: none !important
        }

        *[class=hackYahoo] {
            width: 100% !important;
            min-width: 640px !important;
            max-width: 1060px !important;
        }

        .hoverAltima:hover {
            cursor: pointer !important;
            opacity: 0.8 !important;
            transition: 0.4s !important;
            transform: scale(1.02) !important
        }

        /* */
        /* iOS BLUE LINKS */

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        v * {
            behavior: url(#default#VML);
            display: inline-block;
            border: 0px;
        }


        /* Styles for forcing columns to rows */
        /* @media only screen and (max-width: 359px) {*/

        @media screen and (max-device-width: <?= CTR_WIDTH + 15 ?>px),
        screen and (max-width: <?= CTR_WIDTH + 15 ?>px) {

            /* force container columns to (horizontal) blocks */
            table.container {
                width: 100% !important;
                max-width: 100% !important;
            }

            .force-col,
            .force-col-left,
            .force-col-center {
                display: block !important;
                width: 100% !important;
            }

            .force-col-center {
                text-align: center !important;
            }

            .force-col-center table {
                width: auto;
                text-align: center !important;
                display: inline-block !important;
            }

            .force-col-left {
                text-align: left !important;
            }

            .to-disappear {
                display: none !important;
            }

            .fluid {
                width: 100% !important;
                height: auto !important;
            }

            .center {
                text-align: center !important;
            }

            .center img {
                display: inline-block !important;
            }


            /* container offset */
            .ctr-offset,
            .ctr-offset img {
                width: <?= CTR_OFFSET_MOBILE ?>px !important;
            }

            /* margins */
            .margin,
            .margin img {
                height: <?= CTR_OFFSET_MOBILE ?>px !important;
            }

            .margin-md,
            .margin-md img {
                height: <?= CTR_OFFSET_MOBILE + 10 ?>px !important;
            }
        }
    </style>

    <!--[if gt mso 15]>
     <style type="text/css" media="all">
     /* Outlook 2016 Height Fix */
     table, tr, td {border-collapse: collapse;}
     tr { font-size:0px; line-height:0px; border-collapse: collapse; }
     </style>
     <![endif]-->

    <!--[if gte mso 9]><xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
    </xml><![endif]-->
</head>

<body bgcolor="<?= BG_COLOR ?>" style="margin:0; padding:0;background-color:<?= BG_COLOR ?>;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  bgcolor="<?= BG_COLOR ?>" style="background-color:<?= BG_COLOR ?>;">
        <tr>
            <td align="center" valign="top">