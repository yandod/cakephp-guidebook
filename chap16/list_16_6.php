<?php
  // index アクション全体で60 秒キャッシュする
  // index アクションの他に index1 アクションや index_hoge アクションでも有効となる
  var $cacheAction = array('index' => 60);

  // view アクションでパラメータ 10 が指定された場合は 30 分、
  // パラメータ 100 が指定された場合は 1 時間キャッシュする
  // [index/1000]でも有効となる
  var $cacheAction = array('index/100' => '1 hour'
                          ,'index/10' => '30 minites');
  // コントローラーの全アクションで10 秒キャッシュする
  var $cacheAction = 10;
?>