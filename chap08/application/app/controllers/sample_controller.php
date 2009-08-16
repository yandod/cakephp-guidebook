<?php
class SampleController extends AppController
{
  //ほげ
  var $uses = array('User');
  var $helpers = array('Html','Form','Javascript','Ajax');

  function test1()
  {
    $this->layout = null;
  }

  function helper_test1()
  {
  }

  function helper_test2()
  {
  }

  function helper_test3()
  {
  }

  function list8_12()
  {
  }

  function list8_14()
  {
  }

  function list8_16()
  {
  }

  function list8_18()
  {
  }

  function list8_20()
  {
  }
  
  function list8_22()
  {
  if($this->data) pr($this->data);
  }

  function list8_24()
  {
  }
  
  function list8_26()
  {
  }

  function list8_26_2()
  {
  }
  
  function list8_28()
  {
    $this->User->invalidate('mail','メールアドレスが正しくありません');
    $this->User->invalidate('password','パスワードが正しくありません');

  }

  function list8_30()
  {
  }
}
?>