<table class="container" width="<?= CTR_WIDTH ?>" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="width:<?= CTR_WIDTH ?>px;max-width:<?= CTR_WIDTH ?>px;background-color:#ffffff;">
    <tr>
        <td width="<?= CTR_OFFSET ?>" height="20" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="20" style="display:block;" border="0"></td>
        <td height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="1" height="20" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET ?>" height="20" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt=" ." width="<?= CTR_OFFSET ?>" height="20" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET ?>" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="20" style="display:block;" border="0"></td>
        <td valign="top">

            <table width="100%" border="0" cellspacing="0" cellpadding="0">

                <?php
                $inc_col = 0;
                $inc = 0;
                ?>

                <?php foreach ($args["items"] as $key => $item) : ?>
                    <?php if ($inc_col === 0) : ?>
                        <tr>
                        <?php endif; ?>

                        <td valign="top" class="force-col">
                            <?php get_template_part('template-parts/cards/card', '1', array(
                                'image' => $item['image'],
                                'title' => $item['title'],
                                'text' => $item['text'],
                                'cta' => $item['cta']
                            )); ?>
                        </td>

                        <?php if ($inc_col === 0) : ?>
                            <td width="30" valign="top" class="force-col"><img src="<?= SPACER ?>" alt="." width="30" height="20" style="display:block;" border="0"></td>
                        <?php endif; ?>
                        <?php
                        $inc_col++;
                        $inc++;
                        ?>

                        <?php if ($inc_col === 2) : $inc_col = 0;  ?>
                        </tr>

                        <?php if ($inc  < count($args["items"])) : ?>

                            <tr>
                                <td width="30" valign="top"><img src="<?= SPACER ?>" alt="." width="30" height="30" style="display:block;" border="0"></td>
                            </tr>
                        <?php endif; ?>
                    <?php endif; ?>

                <?php endforeach; ?>
            </table>
            
        </td>
        <td width="<?= CTR_OFFSET ?>" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="20" style="display:block;" border="0"></td>
    </tr>
    <tr>
        <td width="<?= CTR_OFFSET ?>" height="20" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="20" style="display:block;" border="0"></td>
        <td height="20" valign="top"><img src="<?= SPACER ?>" alt="." width="1" height="20" style="display:block;" border="0"></td>
        <td width="<?= CTR_OFFSET ?>" height="20" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt=" ." width="<?= CTR_OFFSET ?>" height="20" style="display:block;" border="0"></td>
    </tr>
</table>