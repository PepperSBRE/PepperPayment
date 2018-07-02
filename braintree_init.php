<?php
session_start();
require_once("lib/autoload.php");
if(file_exists(__DIR__ . "/../.env")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
    $dotenv->load();
}
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('sdmqspxn49kt2c2b');
Braintree_Configuration::publicKey('mc62xg4p88khgcx5');
Braintree_Configuration::privateKey('82f39beb051c37559d9e2e7bb06a5be9');
?>
