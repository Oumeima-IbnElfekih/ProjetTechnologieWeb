<?php 

class Client
{
    public string $lastName;
    public string $firstName;
    public string $password;
    public string $phone;
    public string $address;
    public string $dOB;

    public function show() {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>Last Name</td>
                <td>First Name</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Date of Birth</td>
            </tr>
            <tr>
                <td>'. $this->lastName .'</td>
                <td>'. $this->firstName .'</td>
                <td>'. $this->phone .'</td>
                <td>'. $this->address .'</td>
                <td>'. $this->dOB .'</td>
            </tr>
        </table>';
    }
}
