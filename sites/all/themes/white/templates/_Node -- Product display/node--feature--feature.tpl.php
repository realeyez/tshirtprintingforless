<div class="feature">
    <div class="col-lg-4 no-pad-left">
        <div class="thumbnail">
            <?php print render($content['field_image']); ?>
        </div>
    </div>
    <div class="col-lg-8 no-pad">
        <?php print render($title_prefix); ?>
        <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
        <?php print render($title_suffix); ?>
        <?php print render($content['body']); ?>
    </div>
    <div class="clear"></div>
</div>

