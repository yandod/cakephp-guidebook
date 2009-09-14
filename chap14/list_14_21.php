<?php
  function initialize(&$controller)
  {
    if (!empty($controller->params['prefix']) && $controller->params['prefix'] == 'mobile') {

      // IP認証
      $obj = new AllowHosts();
      $allowHosts = $obj->list;
      $client = $this->RequestHandler->getClientIP();

      $isAuth = false;
      foreach ($allowHosts as $host) {
        if (Net_IPv4::ipInNetwork($client, $host) || $client === $host) {
          $isAuth = true;
          break;
        }
      }

      if (!$isAuth) {
        $controller->redirect(null, 403);
      }

      // 入力エンコーディング変換
      MobileComponent::convertToInternal($controller->params);
    }
  }
?>