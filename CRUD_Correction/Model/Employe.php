<?php
class Employe
{
    private ?int $id = null;
    private ?string $lastName = null;
    private ?string $firstName = null;
    private ?string $email = null;
    private ?DateTime $dob = null;

    public function __construct($id = null, $n, $p, $em, $d)
    {
        $this->id = $id;
        $this->lastName = $n;
        $this->firstName = $p;
        $this->email = $em;
        $this->dob = $d;
    }

    /**
     * Get the value of id
     */
    public function getid()
    {
        return $this->id;
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
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }
}
