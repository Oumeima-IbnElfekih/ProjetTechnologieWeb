<?php

include '../Controller/EmployeC.php';

$error = "";

// create employe
$employe = null;

// create an instance of the controller
$employeC = new EmployeC();
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["email"]) &&
    isset($_POST["dob"])
) {
    if (
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["dob"])
    ) {
        $employe = new employe(
            null,
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['email'],
            new DateTime($_POST['dob'])
        );
        $employeC->addemploye($employe);
        header('Location:ListEmployes.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <a href="ListEmployes.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="firstName">First Name:
                    </label>
                </td>
                <td><input type="text" name="firstName" id="firstName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="lastName">Last Name:
                    </label>
                </td>
                <td><input type="text" name="lastName" id="lastName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:
                    </label>
                </td>
                <td>
                    <input type="email" name="email" id="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">Date of Birth:
                    </label>
                </td>
                <td>
                    <input type="date" name="dob" id="dob">
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>