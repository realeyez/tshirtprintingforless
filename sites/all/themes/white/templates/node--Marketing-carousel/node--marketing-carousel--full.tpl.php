<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-md-6 text-center">
        <?php
        hide($content['comments']);
        hide($content['body']);
        hide($content['links']);
        print render($content);
        ?>
    </div>
    <div class="col-md-6">
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
            <h2 class="no-top" <?php print $title_attributes; ?>><a
                    href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print render($content['body']); ?>
    </div>
</div>
