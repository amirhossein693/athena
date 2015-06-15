<!doctype html>
<html class="no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php print $styles; ?>
  <script src="<?php print base_path( )?><?php print path_to_theme(); ?>/dist/bower_components/modernizr/modernizr.js"></script>
  <?php print $page_top; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?>
    </a>
  </div>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>