<?php
App::import('Vendor', 'simple');

class HogeController extends AppController
{
  var $name = 'Hoge';
  var $uses = array();

  function index()
  {
    $simple = new Simple();
  }
}
?>