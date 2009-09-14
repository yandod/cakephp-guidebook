<?php
    function index($id = null)
    {
      $this->User->find('count', array('conditions' => array('id' => $id)));
      // もしくは
      //$this->User->find('count', array('conditions' => array('id =' => $id)));
    }
?>