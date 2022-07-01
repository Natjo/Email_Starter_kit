<?php
/*
Template Name: Plan du site
*/

get_header();
get_template_part('template-parts/general/block', 'header_nav');
?>

<main id="main" role="main" tabindex="-1" class="page-sitemap">
    <?php get_template_part('template-parts/general/block', 'breadcrumb'); ?>

    <?php
        $args['title'] = "Plan du site";
        get_template_part('template-parts/heros/hero', 'page', $args);
    ?>

    <section>
        <div class="container">
            <?php
            wp_nav_menu(array(
                'container' => false,
                'theme_location' => 'sitemap',
                'menu_class'  => false,
                'items_wrap' => '<ul>%3$s</ul>',
                'walker' => new Walker_Nav_Menu()
            ));
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
