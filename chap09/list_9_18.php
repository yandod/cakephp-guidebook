<?php
class SpoofedFormController extends AppController
{
  var $uses = array('User');

  function add()
  {
    if (!empty($this->data)) {
      $this->User->create();
      $this->User->save($this->data);
    }
  }
}
?>