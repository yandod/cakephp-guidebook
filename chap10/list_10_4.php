<?php
class UseSimpleComponent extends Object
{
  var $components = array('Simple');

  function bye()
  {
    $this->Simple->hello();
    echo "Good Bye!!";
  }
}
?>