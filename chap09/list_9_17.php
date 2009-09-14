<?php
class PrivateMethodController extends AppController
{
  var $uses = array('User');

  function index()
  {
    if (!empty($this->data['User']['id'])
    && preg_match('/^[0-9]+$/', $this->data['User']['id'])) {
      // $this->updateStatus($this->data['User']['id'], 1);
      $this->_updateStatus($this->data['User']['id'], 1);
    }
  }

  // function updateStatus($id, $status)
  function _updateStatus($id, $status)
  {
    $this->User->create();
    $this->User->id = $id;

    return $this->User->saveField('status', $status);
  }
}
?>