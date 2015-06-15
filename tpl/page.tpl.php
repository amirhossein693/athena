<?php include ($directory.'/inc/page.top.php'); ?>

<?php print render($page['highlight']); ?>

<div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">


  <div class="row">

    <?php if ($messages): ?>
        <div class="large-12 columns"> 
          <?php print $messages; ?>
      </div>
    <?php endif; ?>

    <div class="large-3 columns"> 
      <?php if ($page['aside']): ?>
        <aside id="aside" class="clearfix">
          <?php print render($page['aside']); ?>
        </aside> <!-- /#aside -->
      <?php endif; ?>
    </div>
    <div class="large-9 columns"> 

      <main id="content"><div class="section">
        <a id="main-content"></a>

        <?php if ($tabs): ?>
            <?php print render($tabs); ?>
        <?php endif; ?>

        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h2 class="title" id="page-title">
            <?php print $title; ?>
          </h2>
        <?php endif; ?>

        <?php print render($title_suffix); ?>

        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>

      </div></main> <!-- /.section, /#content -->

    </div>
  </div>

</div></div> <!-- /#main, /#main-wrapper -->

<?php include ($directory.'/inc/page.bottom.php'); ?>