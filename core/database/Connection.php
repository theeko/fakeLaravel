<?php
namespace App\Core\Database;

class Connection{

  public static function make($config)
  {
    try {
      // return new PDO("mysql:host=localhost;dbname=phppractioner;charset=utf8", "root", "password");

      return new \PDO(
        $config["connection"] .
        ";dbname=" . $config["name"] . ";charset=" .
        $config["charset"],
        $config["username"],
        $config["password"],
        $config["options"]
      );


    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}
