<?php
  // 数値
  $time = Cache::read('time');

  if (empty($time)) {
    $time = time();
    Cache::write('time', $time);
  }

  // 連想配列
  $users = Cache::read('users');

  if (empty($users)) {
    $users = $this->User->find('all');
    Cache::write('users', $users);
  }
?>