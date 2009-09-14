<?php
App::import('Core', 'model' . DS . 'datasources' . DS . 'dbo' . DS . 'dbo_postgres');

class DboPostgresLog extends DboPostgres
{
  var $queryNo = 1;

  function execute($sql)
  {
    $ret = parent::execute($sql);

    if (defined('LOG_SQL') && LOG_SQL) {
      $this->log(sprintf("%d. %s", $this->queryNo, $sql), LOG_DEBUG);
      $this->queryNo++;
    }

    return $ret;
  }
}
?>