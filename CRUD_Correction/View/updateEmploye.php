<?php

include '../Controller/EmployeC.php';

$error = "";

// create employe
$employe = null;

// create an instance of the controller
$employeC = new EmployeC();
if (
    isset($_POST["id"]) &&
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["email"]) &&
    isset($_POST["dob"])
) {
    if (
        !empty($_POST["id"]) &&
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["dob"])
    ) {
        $employe = new Employe(
            $_POST['id'],
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['email'],
            new DateTime($_POST['dob'])
        );
        $employeC->updateEmploye($employe, $_POST["id"]);
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
    <button><a href="ListEmployes.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id'])) {
        $employe = $employeC->showEmploye($_POST['id']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Id Employe:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $employe['id']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="firstName">First Name:
                        </label>
                    </td>
                    <td><input type="text" name="firstName" id="firstName" value="<?php echo $employe['firstName']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastName">Last Name:
                        </label>
                    </td>
                    <td><input type="text" name="lastName" id="lastName" value="<?php echo $employe['lastName']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" value="<?php echo $employe['email']; ?>" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">Date of Birth:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dob" id="dob" value="<?php echo date('Y-m-d', strtotime($employe['dob'])); ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>