
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        <div class="col-md-4 no-pad-left">
            <?php
            hide($content['comments']);
            hide($content['body']);
            hide($content['links']);
            print render($content);
            ?>
        </div>
        <div class="col-md-8 content-body text-left">
            <?php print render($title_prefix); ?>
            <?php if (!$page): ?>

            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print render($content['body']); ?>
        </div>
    </div>
