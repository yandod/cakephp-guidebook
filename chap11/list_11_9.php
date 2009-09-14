<?php
class ZendFrameworkController extends AppController
{
  var $name = 'ZendFramework';
  var $uses = array();
  var $components = array('Twitter');
  var $helpers = array('Time');

  function index()
  {
    $statuses = $this->Twitter->friendsTimeline();
    $this->set('statuses', $statuses);
  }
}
?>