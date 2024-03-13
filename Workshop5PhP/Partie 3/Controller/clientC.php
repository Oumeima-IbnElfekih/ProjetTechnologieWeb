<?php 
class ClientC
{
    public function showClient($client) {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>Last Name</td>
                <td>First Name</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Date of Birth</td>
            </tr>
            <tr>
                <td>'. $client->getLastName() .'</td>
                <td>'. $client->getFirstName() .'</td>
                <td>'. $client->getPhone() .'</td>
                <td>'. $client->getAddress() .'</td>
                <td>'. $client->getDOB() .'</td>
            </tr>
        </table>';
    }
}
