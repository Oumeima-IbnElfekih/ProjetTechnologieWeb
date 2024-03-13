<?php 
include '../Model/Client.php';

$lastName = 'Doe';
$firstName = 'Jane';
$phone = '123456789';
$address = '123, Liberty Avenue, Tunis';
$dOB = '1/1/2000';

$client = new Client($lastName, $firstName, $phone, $address, $dOB);

var_dump($client);
echo '<br>';
echo '<hr>';
echo '<br>';
$client->show();