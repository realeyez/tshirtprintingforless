<?php if (isset($_GET['request'])) : ?>

    <h1>Download</h1>

<?php endif; ?>

<div class="col-lg-12 shadow m-bottom">
    <div class="container-md">
        <div class=" col-lg-6">
            <div class="col-lg-11 no-pad-left">
                <h1>Create an account</h1>
                <?php print drupal_render_children($form)
                ?>
            </div>
        </div>
        <div class=" pull-right col-lg-6">
            <h2>Not a memer yet?</h2>
            <p>Sign up today and be a member</p>
            <ul>
                <li>We build our Drupal themes using best practices in choosing right modules, configuration and </li>
                <li>Providing sample content so you can have your Drupal website faster, more stable and easy to maintain.</li>
                <li>We build our Drupal themes using best practices in choosing right modules, configuration and </li>
            </ul>
        </div>
    </div>
</div>




