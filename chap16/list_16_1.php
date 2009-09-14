<?php
class BenchmarkComponent extends Object
{
  var $id = null;
  var $start = 0;

  function __construct()
  {
    $this->id = md5(uniqid(rand(), true));
    $this->start = $this->microtime_float();
    $this->setMarker('===construct', $this->start);
  }

  function setMarker($message, $time = null)
  {
    if (!defined('LOG_BENCH') || !LOG_BENCH) {
      return;
    }

    if (is_null($time)) {
      $time = $this->microtime_float();
    }

    $text = sprintf("[%s] %01.5f %s", $this->id, $time - $this->start, $message);
    $this->log($text, LOG_DEBUG);
  }

  function __destruct()
  {
    $this->setMarker('===destruct');
  }

  function microtime_float()
  {
    if (phpversion() < 5) {
      list($usec, $sec) = explode(" ", microtime());
      return ((float)$usec + (float)$sec);
    } else {
      return microtime(true);
    }
  }
}
?>
