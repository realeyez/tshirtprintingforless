<?php
/**
 */
?>
<div class="node-teaser well no-pad-left no-pad-right">

    <?php print render($title_prefix); ?>
    <div class="col-lg-6">
        <a href="<?php print $node_url; ?>"><span class="icon icon-cart"></span></a>
    </div>
    <?php print render($title_suffix); ?>

    <div class="col-lg-6 text-right">
        <?php if ($display_submitted): ?>
            <div class="submitted">
                Submitted <strong><?php print $timeago = format_interval(time()-$node->created,1).' '. t('ago'); ?></strong>
            </div>
        <?php endif; ?>
    </div>

    <figure class="effect-chico ">
        <?php print render($content['field_teaser_image']); ?>
        <figcaption class="lg-shadow">
            <h2><strong><?php print $title; ?></strong></h2>
            <a href="<?php print $node_url; ?>" class="btn btn-outline-inverse btn-lg">Site details</a>
            &nbsp;
            <a href="/" class="btn btn-outline-inverse btn-lg">Live preview</a>
        </figcaption>
    </figure>

    <div class="col-lg-6">
        <h2><strong><?php print render($content['product:commerce_price']); ?></strong></h2>
    </div>

</div>
