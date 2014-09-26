<div class="<?php print $classes; ?> terms clearfix"<?php print $attributes; ?>>
    <?php if (!$label_hidden) : ?>
        <h3 class="field-label"<?php print $title_attributes; ?>><?php print $label ?></h3>
    <?php endif; ?>
    <ul class="links list-inline"<?php print $content_attributes; ?>>
        <?php foreach ($items as $key => $value): ?>
            <li class="taxonomy-term no-pad"<?php print $item_attributes[$key]; ?>>
                <a href="/<?php print render($value['#href']); ?>" class="btn btn-default btn-md"><?php print render($value['#title']); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>