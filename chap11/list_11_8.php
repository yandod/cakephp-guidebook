<?php
App::import('Vendor', 'include_path_vendors');
App::import('Vendor', 'Zend_Service_Twitter', array('file' => 'Zend'.DS.'Service'.DS.'Twitter.php'));

class TwitterComponent extends Object
{
  var $twitter = null;

  function __construct()
  {
    $this->twitter = new Zend_Service_Twitter('username', 'password');
  }

  function friendsTimeline()
  {
    return $this->twitter->status->friendsTimeline();
  }
}
?>