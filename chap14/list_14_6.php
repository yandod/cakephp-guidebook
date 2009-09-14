<?php
class MobileComponent extends Object
{
  function beforeRender(&$controller)
  {
    if (!empty($controller->params['prefix']) && $controller->params['prefix'] == 'mobile') {
      $controller->layout = $controller->params['prefix'];
    }
  }
}
?>
