<?php
class CustomizeController extends AppController
{
  var $components = array('Simple');
  var $uses = array();

  function index()
  {
    $this->Simple->hello();
  }
}
?>