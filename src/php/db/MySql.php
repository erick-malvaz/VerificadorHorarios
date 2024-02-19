<?php
  require_once('dbConfig.php');
  class Mysql extends Dbconfig{
    public $connectionString;
    public $dataSet;
    public $sqlQuery;

    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;
    protected $preparedStmt;
    protected $inserted_id;
    protected $error;

    function __construct() {
      $this -> connectionString = NULL;
      $this -> sqlQuery = NULL;
      $this -> dataSet = NULL;

      $dbPara = new Dbconfig();
      $this -> databaseName = $dbPara -> dbName;
      $this -> hostName = $dbPara -> serverName;
      $this -> userName = $dbPara -> userName;
      $this -> passCode = $dbPara ->passCode;
      $dbPara = NULL;

      $this -> connectionString = new mysqli($this -> hostName,$this -> userName,$this -> passCode, $this->databaseName);
      $this -> connectionString -> set_charset("utf8");
      if($this -> connectionString->connect_errno){
        die("No hay comunicación con la BD");
      }
    }

    function dbDisconnect() {
      $this -> connectionString->close();
      $this -> connectionString = NULL;
      $this -> sqlQuery = NULL;
      $this -> dataSet = NULL;
      $this -> databaseName = NULL;
      $this -> hostName = NULL;
      $this -> userName = NULL;
      $this -> passCode = NULL;
      $this -> preparedStmt = NULL;
    }

    function selectAll($tableName)  {
      $this -> sqlQuery = 'SELECT * FROM '.$this -> databaseName.'.'.$tableName;
      $this -> dataSet = $this->connectionString->query($this -> sqlQuery);
      return $this -> dataSet;
    }

    function update($query){
      return $this->connectionString->query($query);
    }

    function freeRun($query) {
      $this->dataSet = $this->connectionString->query($query);
      return $this->dataSet;
    }


    function secureSelect($query, $values = array() , $types = NULL){
      $stmt = $this->connectionString->prepare($query);
      if (!$types){
        $types = str_repeat("s", count($values));
      }
      if (strnatcmp(phpversion(),'5.3') >= 0){
        foreach($values as $key => $val){
          $bind[$key] = &$values[$key];
        }
      } else {
        $bind = $values;
      }
      array_unshift($bind, $types);
      call_user_func_array(array($stmt, 'bind_param'), $bind);
      $stmt->execute();
      return $stmt->get_result();
    }

    function secureRun($query, $values = array() , $types = NULL){
      $stmt = $this->connectionString->prepare($query);
      if (!$types){
        $types = str_repeat("s", count($values));
      }
      if (strnatcmp(phpversion(),'5.3') >= 0){
        foreach($values as $key => $val){
          $bind[$key] = &$values[$key];
        }
      } else {
        $bind = $values;
      }
      array_unshift($bind, $types);
      call_user_func_array(array($stmt, 'bind_param'), $bind);

      $res = $stmt->execute();
      if($res == true){
        $this->inserted_id = $this->connectionString->insert_id;
      }else{
        $this->error = $this->connectionString->error;
      }
      return $res;
    }

    /**
     * Get the value of inserted_id
     */
    public function getInserted_id()
    {
      return $this->inserted_id;
    }

    /**
     * Set the value of inserted_id
     *
     * @return  self
     */
    public function setInserted_id($inserted_id)
    {
        $this->inserted_id = $inserted_id;

        return $this;
    }

    /**
     * Get the value of error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set the value of error
     *
     * @return  self
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
  }
?>