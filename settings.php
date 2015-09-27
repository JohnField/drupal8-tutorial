<?php

/**
 * @file
 * Drupal install copies default-settings.php over, comments and all.
 * Stripped them out and included a .gitignore'd settings.local.php ,
 * As suggested. So settings.php itself is a safe placeholder
 * for Drupal to include; default-settings.php is documentation;
 * and settings.local.php is for secret or sandbox values.
 */

if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}

// Hey, let's have a services.local.yml too!
 /*
if (file_exists(__DIR__ . '/services.local.yml')) {
  include __DIR__ . '/services.local.yml';
}
 */
