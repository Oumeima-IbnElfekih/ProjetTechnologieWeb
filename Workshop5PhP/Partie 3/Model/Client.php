<?php 

class Client
{
    private string $lastName;
    private string $firstName;
    private string $password;
    private string $phone;
    private string $address;
    private string $dOB;


    public function __construct($ln=null, $fn=null,$phone=null, $ad = null, $dOB = null)
    {
        $this->lastName= $ln;
        $this->firstName= $fn;
        $this->phone= $phone;
        $this->address= $ad;
        $this->dOB= $dOB;
    }

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
    

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of dOB
     */ 
    public function getDOB()
    {
        return $this->dOB;
    }

    /**
     * Set the value of dOB
     *
     * @return  self
     */ 
    public function setDOB($dOB)
    {
        $this->dOB = $dOB;

        return $this;
    }
}
