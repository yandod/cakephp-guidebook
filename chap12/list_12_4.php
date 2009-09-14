<?php
  function test_validates_illegal()
  {
    $data = array();
    $this->User->create($data);
    $ret = $this->User->validates();
    $this->assertFalse($ret);

    $data = null;
    $this->User->create($data);
    $ret = $this->User->validates();
    $this->assertFalse($ret);
  }
?>