<table class="container" width="<?= CTR_WIDTH ?>" border="0" cellspacing="0" cellpadding="0" bgcolor="<?= COLOR_PRIMARY ?>" style="width:<?= CTR_WIDTH ?>px;max-width:<?= CTR_WIDTH ?>px;background-color:#<?= COLOR_PRIMARY ?>;">
    <tr>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
        <td height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="1" height="20" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="20" height="<?= CTR_OFFSET_MOBILE ?>" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET_MOBILE ?>" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
        <td valign="top">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="<?= $args['image']['width'] / 2 ?>" valign="middle" class="force-col">
                        <img src="<?= $args['image']['url'] ?>" width="<?= $args['image']['width'] / 2 ?>" alt="" style="display:block;" border="0">
                    </td>
                    <td width="10" height="10" valign="top" class="force-col"><img src="<?= SPACER ?>" alt="." width="10" height="10" style="display:block;" border="0"></td>
                    <td valign="middle" align="right" class="force-col-left">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <font size="1" face="<?= FONT_FAMILY ?>" color="#fff" style="font-family:<?= FONT_FAMILY ?>; font-size:<?= FONT_SIZE ?>px; color:#fff">
                                        Suivez-nous:
                                    </font>
                                </td>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <?php foreach ($args['items'] as $item) : ?>
                                                <td width="<?= $item['image']['width'] ?>">
                                                    <img src="<?= $item['image']['url'] ?>" width="<?= $item['image']['width'] ?>" alt="" style="display:block;" border="0">
                                                </td>
                                            <?php endforeach; ?>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

        </td>
        <td width="<?= CTR_OFFSET_MOBILE ?>" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
        <td height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="1" height="20" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
    </tr>
</table>