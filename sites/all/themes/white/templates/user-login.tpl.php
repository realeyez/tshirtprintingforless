<div class="col-lg-12 shadow m-bottom">
    <div class=" col-lg-6">
        <div class="col-lg-11 no-pad-left">
            <h1>Login</h1>
            <hr/>
            <?php print drupal_render($form['name']); ?>
            <p class="m-bottom small">Enter your Commerce Kickstart username.</p>
            <?php print drupal_render($form['pass']); ?>
            <p class="m-bottom small">Enter the password that accompanies your username.</p>
            <?php print drupal_render($form['form_build_id']); ?>
            <?php print drupal_render($form['form_id']); ?>
            <a href="">Forgotten your password?</a>

            <div class="pull-right">
                <?php print drupal_render($form['actions']); ?>
            </div>
        </div>
    </div>
    <div class=" pull-right col-lg-6">
        <h2>Not a memer yet?</h2>

        <p>Sign up today and be a member</p>
        <ul>
            <li>We build our Drupal themes using best practices in choosing right modules, configuration and</li>
            <li>Providing sample content so you can have your Drupal website faster, more stable and easy to maintain.
            </li>
            <li>We build our Drupal themes using best practices in choosing right modules, configuration and</li>
        </ul>
        <a href="/user/register" class="btn btn-default btn-lg">Sign up</a>
    </div>
</div>


