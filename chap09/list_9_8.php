<?php
class XssController extends AppController
{
  var $uses = array();

  function xss()
  {
    $name = '';
    if (!empty($this-> params['form']['name'])) {
      $name = $this->params['form']['name'];
    }

    $this->set('name', $name);
  }
}
?>