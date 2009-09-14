<?php
class SimpleFilterComponent extends Object
{
  function startup(&$controller)
  {
    if (!empty($controller->data)) {
      array_walk($controller->data, array('SimpleFilterComponent', 'toLower'));
    }
  }

  function toLower(&$elem)
  {
    if (is_array($elem)) {
      array_walk($elem, array('SimpleFilterComponent', 'toLower'));
    } else {
      $elem = strtolower($elem);
    }
  }
}
?>