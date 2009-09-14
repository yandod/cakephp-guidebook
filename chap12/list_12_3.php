<?php
class UsetTestCase extends CakeTestCase
{
  var $User = null;

  function startTest($method)
  {
    $this->User = ClassRegistry::init('User');
  }

  function endTest($method)
  {
    unset($this->User);
  }

  function test_validates()
  {
    // 正常系テスト
    $data = array('User' => array('name' => 'abc', 'member_no' => 'Z12345'));
    $this->User->create($data);
    $ret = $this->User->validates();
    $this->assertTrue($ret);

    // 異常系テスト
    $data = array('name' => '', 'member_no' => '');
    $this->User->create($data);
    $ret = $this->User->validates();
    $this->assertFalse($ret);
    $this->assertTrue(isset($this->User->validationErrors['name']));
    $this->assertTrue(isset($this->User->validationErrors['member_no']));

    $data = array('name' => 'foo', 'member_no' => '');
    $this->User->create($data);
    $ret = $this->User->validates();
    $this->assertFalse($ret);
    $this->assertFalse(isset($this->User->validationErrors['name']));
    $this->assertTrue(isset($this->User->validationErrors['member_no']));

    $data = array('name' => '', 'member_no' => 'A00000');
    $this->User->create($data);
    $ret = $this->User->validates();
    $this->assertFalse($ret);
    $this->assertTrue(isset($this->User->validationErrors['name']));
    $this->assertFalse(isset($this->User->validationErrors['member_no']));

    $data = array('name' => 'foo', 'member_no' => '999999');
    $this->User->create($data);
    $ret = $this->User->validates();
    $this->assertFalse($ret);
    $this->assertFalse(isset($this->User->validationErrors['name']));
    $this->assertTrue(isset($this->User->validationErrors['member_no']));
  }
}
?>