    <div id="page-wrapper">
    <div id="page">

      <header id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">

        <div class="row">
          <div class="large-12 columns">

            <?php if ($logo): ?>
              <div class="right hide-for-small" id="logo-wrapper">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              </div>
            <?php endif; ?>

            <?php if ($site_name || $site_slogan): ?>
              <div class="right small-text-center" id="name-and-slogan">

                <?php if ($site_name): ?>
                    <h1 id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
                      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                    </h1>
                <?php endif; ?>

                <?php if ($site_slogan): ?>
                  <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
                    <?php print $site_slogan; ?>
                  </div>
                <?php endif; ?>

              </div> <!-- /#name-and-slogan -->
            <?php endif; ?>

            <div class="left small-text-center datetime">
              <?php print format_date(time(), 'custom', 'l j F Y'); ?>
            </div>


          </div>
        </div>

      </div></header> <!-- /.section, /#header -->


