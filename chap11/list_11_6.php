<?php
App::import('Vendor', 'include_path_vendors');
App::import('Vendor', 'IPv4', array('file' => 'Net'.DS.'IPv4.php'));

class IpAuthComponent extends Object
{
  var $components = array('RequestHandler');

  function initialize(&$controller)
  {
    $allowHosts = array('192.168.1.1', '192.168.1.128/28');
    $client = $this->RequestHandler->getClientIP();

    foreach ($allowHosts as $host) {
      if (Net_IPv4::ipInNetwork($client, $host) || $client === $host) {
        return;
      }
    }

    $controller->redirect(null, 403);
  }
}
?>