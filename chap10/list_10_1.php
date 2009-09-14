<?php
class SimpleComponent extends Object
{
  var $controller = null;

  function startup(&$controller)
  {
    $this->controller =& $controller;
  }

  function hello()
  {
    printf("Hello %sController !!", $this->controller->name);
  }
}
?>