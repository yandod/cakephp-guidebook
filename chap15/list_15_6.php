<?php
if (!include(CORE_PATH . 'cake' . DS . 'bootstrap.php')) {
  trigger_error("CakePHP core could not be found. Check the value of CAKE_CORE_INCLUDE_PATH in APP/webroot/index.php. It should point to the directory containing your " . DS . "cake core directory and your " . DS ."vendors root directory.", E_USER_ERROR);
}

error_reporting(E_ALL); PHPエラーを出力するようにする

ini_set('display_errors', 0); ただし、画面には出力しない

if (isset($_GET['url']) && $_GET['url'] === 'favicon.ico') {
  return;