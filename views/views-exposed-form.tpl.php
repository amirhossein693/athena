<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>


  <div class="row">
  <div class="large-12 columns">
    <?php foreach ($widgets as $id => $widget): ?>
      <div class="large-6 columns">
      <div class="row">
        <div id="<?php print $widget->id; ?>-wrapper">
          <?php if (!empty($widget->label)): ?>
            <div class="large-3 columns">
              <label for="<?php print $widget->id; ?>" class="right inline">
                <?php print $widget->label; ?>
              </label>
            </div>
          <?php endif; ?>
          <?php if (!empty($widget->operator)): ?>
            <div class="large-<?php print (!empty($widget->label)) ? '9' : '12' ?> columns">
              <div class="views-operator">
                <?php print $widget->operator; ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="large-<?php print (!empty($widget->label)) ? '9' : '12' ?> columns">
            <div class="views-widget">
              <?php print $widget->widget; ?>
            </div>
          </div>
          <?php if (!empty($widget->description)): ?>
          <div class="row">
            <div class="large-12 columns">
              <div class="description">
                <?php print $widget->description; ?>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
        </div>
      </div>
    <?php endforeach; ?>
    <?php if (!empty($sort_by)): ?>
    <div class="row">
      <div class="large-12 columns">      
        <div class="views-exposed-widget views-widget-sort-by">
          <?php print $sort_by; ?>
        </div>
        <div class="views-exposed-widget views-widget-sort-order">
          <?php print $sort_order; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php if (!empty($items_per_page)): ?>
      <div class="row">
        <div class="large-12 columns">      
          <div class="views-exposed-widget views-widget-per-page">
            <?php print $items_per_page; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if (!empty($offset)): ?>
      <div class="row">
        <div class="large-12 columns">      
          <div class="views-exposed-widget views-widget-offset">
            <?php print $offset; ?>
          </div>
        </div>
      </div>          
    <?php endif; ?>
      <div class="row">
        <div class="large-12 columns">    
          <div class="views-exposed-widget views-submit-button">
            <?php print $button; ?>
          </div>
        </div>
      </div>          
    <?php if (!empty($reset_button)): ?>
      <div class="row">
        <div class="large-12 columns">      
          <div class="views-exposed-widget views-reset-button">
            <?php print $reset_button; ?>
          </div>
        </div>
      </div>          
    <?php endif; ?>
  </div>
  </div>

