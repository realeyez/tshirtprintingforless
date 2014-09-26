<?php
/**
 */
?>

<div id="node-<?php print $node->nid; ?>" class=" <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="lg-shadow m-bottom">
        <div class="col-lg-8 no-pad-left">
            <div id="product-display-carousel"
                 class="lg-shadow col-lg-12 m-bottom views-bootstrap-carousel-plugin-style carousel slide">
                <div class="carousel-inner">
                    <?php foreach ($content['product:field_images']['#items'] as $key => $item) : ?>
                        <div class="item <?php if ($key == '0') {
                            echo 'active';
                        } ?>">
                            <?php print theme('image_style', array('path' => $item['uri'], 'style_name' => 'product_display_carousel')); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <ol class="carousel-indicators">
                    <?php foreach ($content['product:field_images']['#items'] as $key => $item) : ?>
                        <li data-target="#product-display-carousel" data-slide-to="<?php echo $key; ?>"
                            class="<?php if ($key == '0') {
                                echo 'active';
                            } ?>"></li>
                    <?php endforeach; ?>
                </ol>
                <a href="/taxonomy/term/2" class="btn btn-default btn-lg pull-right live-preview"><span class="icon icon-screen"></span> &nbsp;Live preview</a>
                <!--<a class="carousel-control left" href="#views-bootstrap-carousel-" data-slide="prev"><span class="icon-prev"></span></a>
                <a class="carousel-control right" href="#views-bootstrap-carousel-" data-slide="next"><span class="icon-next"></span></a>-->
            </div>
            <div class="clear"></div>
            <div class="m-bottom">
                <?php print render($content['group_tabs']); ?>
            </div>
        </div>
        <div class="col-lg-4 lg-shadow-left product-details-column">
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
                <div class="submitted">
                    Download and install this theme direct after payment
                </div>
            <?php endif; ?>
            <?php
            hide($content['comments']);
            hide($content['links']);
            hide($content['group_tabs']);
            hide($content['field_product']);
            ?>
            <?php print render($content['field_product']); ?>
            <div class="clear"></div>
            <div class="content"<?php print $content_attributes; ?>>
                <?php
                hide($content['comments']);
                hide($content['links']);
                hide($content['group_tabs']);
                print render($content);
                ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>


