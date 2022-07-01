<?php
$img_width = roundEven(((CTR_WIDTH - (2 * CTR_OFFSET)) / 2) - (GAP / 2));
$ratio = $args['image']['width'] / $args['image']['height'];
$img_height = roundEven($img_width / $ratio) - 2;
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <img src="<?= $args['image']['url'] ?>" width="<?= $img_width ?>" height="<?= $img_height ?>" alt="" style="display:block;" border="0" class="fluid">
        </td>
    </tr>

    <?php spacer_tr(15); ?>
    <?php if (!empty($args['title'])) : ?>
        <tr>
            <td>
                <?php title_third($args['title']); ?>
            </td>
        </tr>
    <? endif ?>

    <?php spacer_tr(5); ?>

    <?php if (!empty($args['text'])) : ?>
        <tr>
            <td>

                <?php text_secondary($args['text']); ?>
            </td>

        </tr>
    <? endif ?>

    <?php spacer_tr(5); ?>

    <?php if (!empty($args['cta'])) : ?>
        <tr>
            <td>
                <?php link_primary($args['cta']); ?>
            </td>
        </tr>
    <? endif ?>
</table>