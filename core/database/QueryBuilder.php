<?php
namespace App\Core\Database;

class QueryBuilder{

  public function __construct(\PDO $db){
    $this->db = $db;
  }

  public function selectAll($table){

    $statement = $this->db->prepare("select * from $table");
    $statement->execute();

    return $statement->fetchAll(\PDO::FETCH_CLASS);
  }

  public function insert($tableName, $data){

    $query = sprintf("insert  into %s (%s) VALUES (%s)",
      $tableName,
      implode(",", array_keys($data)),
      ":" . implode(", :", array_keys($data))
    );

    try{
      $statement = $this->db->prepare($query);
      $statement->execute($data);
    } catch(Exception $e){
      dd($e->getMessage());
    }
  }

}
