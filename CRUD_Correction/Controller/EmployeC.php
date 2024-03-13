<?php
include '../config.php';
include '../Model/Employe.php';

class EmployeC
{
    public function listEmployes()
    {
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteEmploye($id)
    {
        $sql = "DELETE FROM employe WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addEmploye($employe)
    {
        $sql = "INSERT INTO employe  
        VALUES (NULL, :fn,:ln, :em,:dob)";
        $db = config::getConnexion();
        try {
            print_r($employe->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $employe->getFirstName(),
                'ln' => $employe->getLastName(),
                'em' => $employe->getEmail(),
                'dob' => $employe->getDob()->format('Y/m/d')
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateEmploye($employe, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE employe SET 
                    firstName = :firstName, 
                    lastName = :lastName, 
                    email = :email, 
                    dob = :dob
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'firstName' => $employe->getFirstName(),
                'lastName' => $employe->getLastName(),
                'email' => $employe->getEmail(),
                'dob' => $employe->getDob()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showEmploye($id)
    {
        $sql = "SELECT * from employe where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $employe = $query->fetch();
            return $employe;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
