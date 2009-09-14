<?php
class SimpleHelper extends Helper
{
  var $helpers = array('Text');

  function numberToHighlight($value)
  {
    return $this->Text->highlight($value, '[0-9]+');
  }
}
?>