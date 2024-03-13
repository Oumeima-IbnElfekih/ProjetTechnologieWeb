<?php 

include '../Model/Client.php';
include '../Controller/clientC.php';

$lastName = $_POST['lName'];
$firstName  = $_POST['fName']; 
$phone  = $_POST['phone'];
$address  = $_POST['address'];
$dOB  = $_POST['dob'];


$client = new Client($lastName, $firstName, $phone, $address, $dOB);


var_dump($client);
echo '<br>';
echo '<hr>';
echo '<br>';

$clientC = new ClientC();
$clientC->showClient($client);