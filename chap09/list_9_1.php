<?php
class SqlInjectionController extends AppController
{
  var $uses = array('User');

  function index($id = null)
  {
    $this->User->find('count', array('conditions' => 'id =' . $id));
  }
}
?>