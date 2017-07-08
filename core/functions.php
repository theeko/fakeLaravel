<?php

function dd($val){
  echo "<pre>";
  var_dump($val);
  echo "</pre>";
  die();
}

function view($fileName, $data = [] ){
  extract($data);
  return require "app/views/{$fileName}.view.php";
}


function redirect($where){
  header("Location:/{$where}");
}
