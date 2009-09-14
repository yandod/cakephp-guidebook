<?php
class CsrfController extends AppController
{
  var $uses = array();
  var $components = array('Security');
  var $helpers = array('Form');

  function delete()
  {
    if (!empty($this->data)) {
      // 削除処理
    }
  }
}
?>