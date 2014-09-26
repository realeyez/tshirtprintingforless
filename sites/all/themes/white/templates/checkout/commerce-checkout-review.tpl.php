<div class="well shadow">
    <div class="review-panes clearfix">
        <?php foreach ($variables['form']['#data'] as $pane_id => $data): ?>
            <div class="review-pane <?php print $pane_id; ?>">
                <h3 class="pane-title"><?php print $data['title']; ?></h3>
                <?php print $data['data']; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>