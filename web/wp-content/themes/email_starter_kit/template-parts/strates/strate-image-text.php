<?php
$img_width = roundEven((CTR_WIDTH - 2 * CTR_OFFSET) / 2.6666);
?>
<table class="container" width="<?= CTR_WIDTH ?>" border="0" cellspacing="0" cellpadding="0" bgcolor="<?= $args['bgColor'] ?>" style="width:<?= CTR_WIDTH ?>px;max-width:<?= CTR_WIDTH ?>px;background-color:<?= $args['bgColor'] ?>;">
    <tr>
        <td width="<?= CTR_OFFSET ?>" height="40" valign="top" class="ctr-offset margin"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="40" style="display:block;" border="0"></td>
        <td height="40" valign="top" class="margin"><img src="<?= SPACER ?>" alt="." width="1" height="40" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET ?>" height="40" valign="top" class="ctr-offset margin"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="40" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET ?>" valign="top" class="ctr-offset margin"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="40" style="display:block;" border="0"></td>
        <td valign="top">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <?php if ($args['col1']['is_image']) : ?>
                        <td width="<?= $img_width ?>" valign="top" class="force-col">
                            <?php
                            $ratio = $args['col1']['image']['width'] / $args['col1']['image']['height'];
                            $img_height = roundEven($img_width / $ratio) - 2;
                            ?>
                            <img src="<?= $args['col1']['image']['url'] ?>" width="<?= $img_width ?>" height="<?= $img_height ?>" alt="" style="display:block;" border="0" class="fluid">
                        </td>
                    <?php else : ?>
                        <td valign="middle" class="force-col-center">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <?php title_secondary($args['col1']['title']); ?>
                                    </td>
                                </tr>

                                <?php spacer_tr(8); ?>

                                <tr>
                                    <td>
                                        <?php text_secondary($args['col1']['text']); ?>
                                    </td>
                                </tr>

                                <?php spacer_tr(5); ?>

                                <tr>
                                    <td>
                                        <?php link_primary($args['col1']['cta']); ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    <?php endif; ?>

                    <td width="<?= GAP ?>" height="20" valign="top" class="force-col margin"><img src="<?= SPACER ?>" alt="." width="<?= GAP ?>" height="20" style="display:block;" border="0"></td>

                    <?php if ($args['col2']['is_image']) : ?>
                        <td width="<?= $img_width ?>" valign="top" class="force-col">
                            <?php
                            $ratio = $args['col2']['image']['width'] / $args['col2']['image']['height'];
                            $img_height = roundEven($img_width / $ratio) - 2;
                            ?>
                            <img src="<?= $args['col2']['image']['url'] ?>" width="<?= $img_width ?>" height="<?= $img_height ?>" alt="" class="fluid">
                        </td>
                    <?php else : ?>
                        <td valign="middle" class="force-col-center">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <?php title_secondary($args['col2']['title']); ?>
                                    </td>
                                </tr>

                                <?php spacer_tr(8); ?>

                                <tr>
                                    <td>
                                        <?php text_secondary($args['col2']['text']); ?>
                                    </td>
                                </tr>

                                <?php spacer_tr(5); ?>

                                <tr>
                                    <td>
                                        <?php link_primary($args['col2']['cta']); ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    <?php endif; ?>

                </tr>
            </table>
        </td>
        <td width="<?= CTR_OFFSET ?>" valign="top" class="ctr-offset margin"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="40" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET ?>" height="40" valign="top" class="ctr-offset margin"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="40" style="display:block;" border="0"></td>
        <td height="40" valign="top" class="margin"><img src="<?= SPACER ?>" alt="." width="1" height="40" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET ?>" height="40" valign="top" class="ctr-offset margin"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="40" style="display:block;" border="0"></td>
    </tr>
</table>