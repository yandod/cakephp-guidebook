<?php
    if ($this->Session->check('_Token')) {
      $tokenData = unserialize($this->Session->read('_Token'));

      if ($tokenData['expires'] < time() || $tokenData['key'] !== $token) {
        return false;
      }
    } else {
      return false;
    }
?>