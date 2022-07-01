<?php
$img_width = (CTR_WIDTH - CTR_OFFSET - CTR_OFFSET);
$ratio = $args['image']['width'] / $args['image']['height'];
$img_height = roundEven($img_width / $ratio) - 2;
?>
<table class="container" width="<?= CTR_WIDTH ?>" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="width:<?= CTR_WIDTH ?>px;max-width:<?= CTR_WIDTH ?>px;background-color:#ffffff;">
    <tr>
        <td width="<?= CTR_OFFSET ?>" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="20" style="display:block;" border="0"></td>
        <td valign="top">
            <img src="<?= $args['image']['url'] ?>" width="<?= $img_width ?>" height="<?= $img_height ?>" alt="" style="display:block;" border="0" class="fluid">
        </td>
        <td width="<?= CTR_OFFSET ?>" valign="top" class="ctr-offset"><img src="<?= SPACER ?>" alt="." width="<?= CTR_OFFSET ?>" height="20" style="display:block;" border="0"></td>
    </tr>
</table>