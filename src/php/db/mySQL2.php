<?php
  require_once('dbConfig.php');
  
  function selectAll($tableName)  {
    $this -> sqlQuery = 'SELECT * FROM '.$this -> databaseName.'.'.$tableName;
    $this -> dataSet = $this->connectionString->query($this -> sqlQuery);
    return $this -> dataSet;
  }
?>