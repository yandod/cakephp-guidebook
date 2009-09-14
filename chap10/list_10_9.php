<?php
class HookHelper extends AppHelper
{
  function afterRender()
  {
    $out = ob_get_clean(); // output_buffer から出力内容を取得 ①
    $out = strtoupper($out); // 出力内容を変更
    ob_start(); // 再度バッファリングを開始 ②
    echo $out; // 変更した内容を出力（バッファに戻す）
  }

  function afterLayout()
  {
    $view =& ClassRegistry::getObject('view'); // Viewインスタンスを取得 ③
    $view->output .= 'afterLayout<br>'; // 出力内容を変更 ④
  }
}
?>