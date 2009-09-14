<?php
class BenchController extends AppController
{
  var $name = 'Bench';
  var $uses = array();
  var $components = array('Benchmark');

  function index()
  {
    $this->Benchmark->setMarker(__FILE__ . ':' . __LINE__); // ①

    // 処理を行う
    sleep(5); // ②

    $this->Benchmark->setMarker(__FILE__ . ':' . __LINE__); // ①
  }
}
?>