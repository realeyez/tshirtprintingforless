<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>



    <link rel="stylesheet" href="http://i.icomoon.io/public/temp/802d834ce8/Delicous/style.css">
<div class="row row-nm">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 ">
                    <a href="/" class="top-logo pull-left"></a>
                    <p class="tel"><strong>Questions?</strong> <span class="icon icon-phone"></span> 01227 555 555</p>
                </div>
                <div class="col-xs-12 col-sm-6 pull-right no-pad-right">
                    <?php if (!empty($secondary_nav)): ?>
                        <?php //print render($secondary_nav); ?>
                    <?php endif; ?>
                    <div class="pull-right">
                        <?php if (!empty($page['top'])): ?>
                            <?php print render($page['top']); ?>
                        <?php endif; ?>
                    </div>
                    <ul class="list-inline pull-right">
                        <?php if ($user->uid > 0): ?>
                            <li class="last leaf"><a class="" href="/user">My account</a></li>
                            <li class="last leaf"><a class="" href="/user/logout">Log out</a></li>
                        <?php else: ?>
                            <li class="last leaf"><a class="" href="/user/login">Login</a></li>
                            <li class="last leaf"><a class="" href="/user/register">Create account</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-default shadow row row-nm" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="nav row pull-left col-md-6 col-sm-12">
        <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
        <?php endif; ?>
        </div>
        <div class="col-sm-6 col-md-6 pull-right">
            <?php if (!empty($page['nav_top_right'])): ?>

                    <?php print render($page['nav_top_right']); ?>


            <?php endif; ?>
        </div>

    </div><!-- /.navbar-collapse -->
</nav>


<?php //print $content ?>

<div class="row">
    <div class="container">
        <div class="row">
            <?php print $messages; ?>
        </div>
    </div>
</div>

<?php if (!empty($page['full-top'])): ?>
    <div class="full-top">
        <div class="col-sm-12 m-top">
        <?php print render($page['full-top']); ?>
        </div>
    </div>
<?php endif; ?>





<div class="main-container">
    <?php if (!empty($breadcrumb)): print $breadcrumb; endif; ?>
    <header role="banner" id="page-header">
        <?php if (!empty($site_slogan)): ?>
            <p class="lead"><?php print $site_slogan; ?></p>
        <?php endif; ?>

        <?php print render($page['header']); ?>
    </header>
    <!-- /#page-header -->

    <div class="">

        <?php if (!empty($page['sidebar_first'])): ?>
            <aside <?php print $sidebar_first_column_class; ?> role="complementary">
                <?php print render($page['sidebar_first']); ?>
            </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>



        <?php if (!empty($tabs)): ?>

<div class="pull-left">
                <?php print render($tabs); ?>
</div>
        <?php endif; ?>

        <section <?php print $content_column_class; ?>>



            <?php /*if (!empty($tabs)): */?><!--
                <div class="well">
            --><?php /*endif; */?>


            <?php if (!empty($page['highlighted'])): ?>
                <?php print render($page['highlighted']); ?>
            <?php endif; ?>

            <a id="main-content"></a>

            <?php print render($title_prefix); ?>
            <?php if (!empty($title)): ?>
                <h1 class="page-header"><?php print $title; ?></h1>
            <?php endif; ?>

            <?php print render($title_suffix); ?>
            <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>


            <?php if (!empty($page['marketing_container'])): ?>
                <?php print render($page['marketing_container']); ?>
            <?php endif; ?>

            <?php /*if (!empty($tabs)): */?><!--
                </div>
            --><?php /*endif; */?>

        </section>

        <?php if (!empty($page['sidebar_second'])): ?>

                <aside <?php print $sidebar_second_column_class; ?> role="complementary" >
                    <?php print render($page['sidebar_second']); ?>
                </aside>  <!-- /#sidebar-second -->

        <?php endif; ?>



       <div class="clear"></div>
        <?php if (!empty($page['lower_marketing'])): ?>
            <div class="container" >
                <?php print render($page['lower_marketing']); ?>
            </div>
        <?php endif; ?>
    </div>
</div>




<div class="clear"></div>
<div class="row">

    <footer class="footer">
        <div class="container">

                <?php print render($page['footer']); ?>
            </div>

    </footer>

    <div class="copyright">
        <div class="container">
            <div class="col-sm-6">
                <p>Copyright</p>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
</div>