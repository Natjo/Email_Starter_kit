<table class="container" width="<?= CTR_WIDTH ?>" border="0" cellspacing="0" cellpadding="0" bgcolor="<?= COLOR_PRIMARY ?>" style="width:<?= CTR_WIDTH ?>px;max-width:<?= CTR_WIDTH ?>px;background-color:<?= COLOR_PRIMARY ?>;">
    <tr>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
        <td width="30" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="30" height="20" style="display:block;" border="0"></td>
        <td height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="1" height="20" style="display:block;" border="0"></td>
        <td width="30" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="30" height="20" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt=" ." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET_MOBILE ?>" valign="top" bgcolor="<?= COLOR_SECONDARY ?>"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
        <td width="30" valign="top"><img src="<?= SPACER ?>" alt="." width="30" height="20" style="display:block;" border="0"></td>
        <td valign="top">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="280" class="force-col">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <?php title_primary_reverse($args['title']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td height="10" valign="top"><img src="<?= SPACER ?>" alt="." width="1" height="10" style="display:block;" border="0"></td>
                            </tr>
                            <?php foreach ($args['items'] as $item) : ?>
                                <tr>
                                    <td>
                                        <img src="<?= $item['image'] ?>" width="12" alt="" style="display:inline-block;" border="0">
                                        <font size="1" face="<?= FONT_FAMILY ?>" color="#fff" style="font-family:<?= FONT_FAMILY ?>; font-size:<?= FONT_SIZE ?>px; color:#fff; line-height:20px">
                                            <?= $item['text'] ?>
                                        </font>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </td>
                    <td width="20" valign="top" class="force-col"><img src="<?= SPACER ?>" alt="." width="20" height="20" style="display:block;" border="0"></td>
                    <td valign="bottom" class="force-col">
                        <?php btn_primary_reverse($args['cta']); ?>
                    </td>
                </tr>
            </table>

        </td>
        <td width="30" valign="top"><img src="<?= SPACER ?>" alt="." width="30" height="20" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET_MOBILE ?>" valign="top" bgcolor="<?= COLOR_SECONDARY ?>"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
        <td width="30" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="30" height="20" style="display:block;" border="0"></td>
        <td height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="1" height="20" style="display:block;" border="0"></td>
        <td width="30" height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="30" height="20" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET_MOBILE ?>" height="20" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt=" ." width="<?= CTR_OFFSET_MOBILE ?>" height="20" style="display:block;" border="0"></td>
    </tr>
</table>