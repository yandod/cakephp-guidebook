<?php
class SpoofedFormController extends AppController
{
  var $uses = array('User');

  function add()
  {
    if (!empty($this->data)) {
      $data = array();
      $data['name'] = $this->_getDataParam('User', 'name'); // ①
      $data['password'] = $this->_getDataParam('User', 'password');
      $this->User->create();
      $this->User->save($data);
    }
  }

  function _getDataParam($model, $key)
  {
    if (!empty($this->data[$model][$key])) {
      return $this->data[$model][$key];
    } else {
      return '';
    }
  }
}
?>