<?php

require "settings.php";
  $connection = new mysqli(
    $config['db']['server'],
    $config['db']['user'],
    $config['db']['password'],
    $config['db']['Name']);

  if (!$connection) {
    echo 'Not connected';
    exit();
  }
session_start();
  ?>