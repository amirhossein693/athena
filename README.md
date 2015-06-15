# What is Athena
Athena implements the Zurb Foundation framework for Drupal.
A fast and clean theme for Drupal using **SASS**, **GruntJS**, **Zurb Foundation**, **Bower**.
It also included an **icon package manager** to generate custom icon **webfonts** from SVG files via Grunt.
you just need download and copy your SVG icons to `/images/iconfonts` directory.

## Drupal Regions

* Highlight
* Content
* Aside
* Footer

## Drupal Theme Function Overrides

* theme_process_page
* theme_form
* theme_container
* theme_form_element
* theme_form_element_label
* theme_button
* theme_date_popup
* theme_date_part_label_date
* theme_menu_local_tasks
* theme_menu_local_task

## Getting Started
This package requires Grunt, Ruby, Sass, and Compass >=1.0.1 installed

If you haven't used [Grunt](http://gruntjs.com/) before, be sure to check out the [Getting Started](http://gruntjs.com/getting-started) guide, as it explains how to create a [Gruntfile](http://gruntjs.com/sample-gruntfile) as well as install and use Grunt plugins. Once you're familiar with that process, you may setup the package with this command:

```shell
grunt build
```

And you'll need the latest version of [Compass](https://github.com/gruntjs/grunt-contrib-compass#compass-task):

```shell
gem update --system && gem install compass --pre
```

Clone the project, Install grunt modules and run the 'build' task.
Enjoy it.

Also you can use 'serve' task for Developing mode.
