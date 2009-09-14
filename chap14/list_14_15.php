<?php
class MobileHelper extends AppHelper
{
  function afterLayout()
  {
    if (!empty($this->params['prefix']) && $this->params['prefix'] == 'mobile') {
      $view =& ClassRegistry::getObject('view');

      $view->output = mb_convert_kana($view->output, 'rak', 'UTF-8');
      $view->output = mb_convert_encoding($view->output, 'sjis-win', 'UTF-8');
    }
  }
}
?>