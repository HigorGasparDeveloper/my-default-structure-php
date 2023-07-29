<?php 
  function dd($var, $die = null){
    echo "<pre>";
      var_dump($var);
    echo "</pre>";
    if($die != null) {
      die();
    }
  }