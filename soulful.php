<?php
/**
 * This is a standalone script that demonstrates Soulful Drupal!
 */

// Get the sample file contents through the Drupal route
$data = file_get_contents('http://drupalcon-2017-bodiless-drupal.dd:8083/soulful');

// Write them out to the browser!
echo $data;
