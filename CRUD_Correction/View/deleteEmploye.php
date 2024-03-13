<?php
include '../Controller/EmployeC.php';
$employeC = new EmployeC();
$employeC->deleteEmploye($_GET["id"]);
header('Location:ListEmployes.php');
