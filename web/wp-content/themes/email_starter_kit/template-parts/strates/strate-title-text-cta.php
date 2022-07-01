<table class="container" width="<?= CTR_WIDTH ?>" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="width:<?= CTR_WIDTH ?>px;max-width:<?= CTR_WIDTH ?>px;background-color:#ffffff;">
    <tr>
        <td width="<?= CTR_OFFSET ?>" height="50" valign="top" class="ctr-offset margin-md"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="50" style="display:block;" border="0"></td>
        <td height="50" valign="top" class="margin-md"><img src="<?= SPACER ?>" alt="." width="1" height="50" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET ?>" height="50" valign="top" class="ctr-offset margin-md"><img src="<?= SPACER ?>" alt=" ." width="<?= CTR_OFFSET ?>" height="50" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET ?>" height="50" valign="top" class="ctr-offset margin-md"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="50" style="display:block;" border="0"></td>
        <td align="center">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">
                        <?php title_secondary($args['title']); ?>
                    </td>
                </tr>

                <?php spacer_tr(15); ?>

                <tr>
                    <td align="center">
                        <?php text_secondary($args['text']); ?>
                    </td>
                </tr>

                <?php spacer_tr(30); ?>

                <?php if (!empty($args['cta'])) : ?>
                    <tr>
                        <td align="center">
                            <?php btn_primary($args['cta']); ?>
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
        </td>

        <td width="<?= CTR_OFFSET ?>" height="50" valign="top" class="ctr-offset margin-md"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="50" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET ?>" height="50" valign="top" class="ctr-offset margin-md"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="50" style="display:block;" border="0"></td>
        <td height="50" valign="top" class="margin-md"><img src="<?= SPACER ?>" alt="." width="1" height="50" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET ?>" height="50" valign="top" class="ctr-offset margin-md"><img src="<?= SPACER ?>" alt=" ." width="<?= CTR_OFFSET ?>" height="50" style="display:block;" border="0"></td>
    </tr>
</table>