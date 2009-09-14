<?php
  function initialize(&$controller)
  {
    if (!empty($controller->params['prefix']) && $controller->params['prefix'] == 'mobile') {
      MobileComponent::convertToInternal($controller->params);
    }
  }

  function convertToInternal(&$value)
  {
    if (is_null($value)) {
      return;
    } else if (is_array($value) || is_object($value)) {
      array_walk_recursive($value, array('MobileComponent', 'convertToInternal'));
    } else {
      $value = mb_convert_encoding($value, 'UTF-8', 'sjis-win');
      $value = mb_convert_kana($value, 'KVa', 'UTF-8');
    }
  }
?>