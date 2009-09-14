<?php
  function beforeRedirect(&$controller, $url, $status = null, $exit = true)
  {
    return MobileComponent::getUrl($controller->params, $url);
  }

  function getUrl($params, $url)
  {
    if (!empty($params['prefix']) && $params['prefix'] == 'mobile') {
      if (is_array($url)) {
        $url[$params['prefix']] = true;
      } else if (is_string($url)) {
        if (!preg_match("#^http[s]?://#", $url)) {
          $prefix = preg_match("#^/m/#", $url) ? '' : '/m';
          $url = sprintf("%s%s", $prefix, $url);
        }
      }
    }

    return $url;
  }
