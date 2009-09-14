<?php
// bench コントローラーのビューキャッシュを全てクリアする
clearCache('bench');

// bench コントローラーindex アクションのビューキャッシュをクリアする
clearCache('bench_index');

// 複数のビューキャッシュを一度にクリアする
clearCache(array('bench_index_10', 'bench_index_100'));

// 全てのビューキャッシュをクリアする
clearCache();
?>