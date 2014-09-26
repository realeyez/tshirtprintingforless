<?php
/**
 */
?>
<div id="node-<?php print $node->nid; ?>" class="well shadow m-bottom <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <div class="">
        <div class="col-md-7 no-pad-left">
            <?php print render($content['product:field_images']); ?>
        </div>
        <div class="col-md-5 lg-shadow-left product-details-column">
            <?php print render($title_prefix); ?>
            <?php if (!$page): ?>
                <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if (!$user->uid > 0): ?>
                <div class="submitted">
                    <a class="" href="/user/login">Login</a> or <a class="" href="/user/register">Create an account</a>
                    to purchase this theme
                </div>
            <?php else: ?>

            <?php endif; ?>
            <?php
            hide($content['comments']);
            hide($content['links']);
            hide($content['group_tabs']);
            hide($content['field_product']);
            ?>
            <h3 class="m-bottom"><?php print render($content['product:commerce_price'][0]['#markup']); ?></h3>
            <?php print render($content['field_product']); ?>
            <div class="clear"></div>
            <div class="content"<?php print $content_attributes; ?>>
                <?php
                hide($content['comments']);
                hide($content['links']);
                hide($content['group_tabs']);
                hide($content['product:field_images']);
                hide($content['product:commerce_price']);
                hide($content['addtoany']);
                hide($content['group_info_tabs']);
                hide($content['field_product_category']);

                print render($content);
                ?>
                <div class="m-top">
                    <? print render($content['group_tabs']); ?>
                </div>

                <div class="m-top">
                    <? print render($content['field_product_category']); ?>
                </div>
                
                <div class="m-top">
                    <? print render($content['addtoany']); ?>
                </div>



            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>


