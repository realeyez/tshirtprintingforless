<?php
/**
 */
?>


<?php  if(!isset($view)): ?>
<div class="col col-lg-4">
<?php endif; ?>
<div id="node-<?php print $node->nid; ?>" class="article text-center  blog-teaser <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <div class="media">
        <?php
        hide($content['field_teaser_image']);
        ?>
        <div class="col-sm-12 no-pad">
            <div class="thumbnail">
                <?php print render($content['field_teaser_image']); ?>
            </div>
        </div>

        <div class="col-sm-12 teaser">

            <?php print render($title_prefix); ?>
            <?php if (!$page): ?>
                <h3 class="no-top" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
            <?php endif; ?>
            <?php print render($title_suffix); ?>

            <div class="col-xs-12 no-pad">
                <?php
                hide($content['comments']);
                hide($content['links']);
                hide($content['created']);
                hide($content['addtoany']);
                hide($content['product:commerce_price']);
                hide($content['field_price_used_in_filter_']);
                print render($content);
                ?>
                <h4><?php print render($content['field_price_used_in_filter_']); ?></h4>
            </div>

        </div>
        <a href="<?php print $node_url; ?>" class="read-more btn btn-default btn-md">Details</a>
    </div>
</div>


<?php  if(!isset($view)): ?>
</div>
<?php endif; ?>