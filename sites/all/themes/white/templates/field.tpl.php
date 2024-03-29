<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php if (!$label_hidden): ?>
        <h3 <?php print $title_attributes; ?>><strong><?php print $label ?>&nbsp;</strong></h3>
    <?php endif; ?>
    <div class="field-items"<?php print $content_attributes; ?>>
        <?php foreach ($items as $delta => $item): ?>
            <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
        <?php endforeach; ?>
    </div>
</div>
