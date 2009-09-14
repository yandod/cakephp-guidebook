<?php
    function index($id = null)
    {
      $db =& ConnectionManager::getDataSource($this->User->useDbConfig);
      $this->User->findCount("id=" . $db->value($id));
    }
?>