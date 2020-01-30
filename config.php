<?php
require 'environment.php';
global $db;
$config = array();

if(ENVIRONMENT == 'development'){
    $config["dbname"] = 'cartchallenge';
    $config["host"] = 'localhost';
    $config["dbuser"] = 'root';
    $config["dbpass"] = '';
}else{
    $config["dbname"] = '{{dbname}}';
    $config["host"] = '{{host}}';
    $config["dbuser"] = '{{dbuser}}';
    $config["dbpass"] = '{{dbpass}}';
}

try {
    $db = new PDO(
        "mysql:dbname=".$config['dbname'].";host=".$config['host'],
        $config['dbuser'],
        $config['dbpass'],
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}