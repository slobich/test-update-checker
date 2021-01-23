<?php
/**
 * Plugin Name: Test Update Checker
 * Description: Test "Plugin Update Checker Library".
 * Version: 3.0
 */

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

require 'plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/slobich/test-update-checker',
  __FILE__, //Full path to the main plugin file or functions.php.
  'test-update-checker'
);
