<?php
App::import('Component', 'Mobile');

class AppHelper extends Helper {
  function url($url = null, $full = false) {
    return parent::url(MobileComponent::getUrl($this->params, $url), $full);
  }
}
?>