<table class="container" width="<?= CTR_WIDTH ?>" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="width:<?= CTR_WIDTH ?>px;max-width:<?= CTR_WIDTH ?>px;background-color:#ffffff;">
    <tr>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
        <td height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="1" height="20" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET_MOBILE ?>" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
        <td valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="top" class="force-col-center">
                        <img src="<?= $args['image']['url'] ?>" width="<?= $args['image']['width'] / 2 ?>" alt="" style="display:block;" border="0">
                    </td>
                    <td width="20" height="8" valign="top" class="force-col-left"><img src="<?= SPACER ?>" alt="." width="20" height="8" style="display:block;" border="0"></td>
                    <td valign="middle" align="right" class="force-col-left">
                        <font size="1" face="<?= FONT_FAMILY ?>" color="<?= COLOR_TEXT ?>" style="font-family:<?= FONT_FAMILY ?>; font-size:<?= FONT_SIZE_SM ?>px; color:<?= COLOR_TEXT ?>">
                            <?= guttentag($args['text']); ?>
                        </font>
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