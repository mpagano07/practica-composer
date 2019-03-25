<?php 

namespace App;

class User 
{
    /**
     * @var int
     */
    protected $id;

    /**     
     * @var string
     */    
    protected $username;
    
    /**     
     * @var string
     */
    protected $name;
    
    /**     
     * @var string
     */
    protected $email;
    
    /**     
     * @var Address
     */
    protected $address;
    
    /**     
     * @var string
     */
    protected $phone;
    
    /**     
     * @var string
     */
    protected $website;
    
    /**     
     * @var Company
     */
    protected $company;

    /**
     * @param int $id
     * @return User
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    public function setUserName($username)
    {
        $this->username = $username;
        return $this;
    }
    public function getUserName()
    {
        return $this;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName()
    {
        return $this;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    public function getEmail()
    {
        return $this;
    }
    public function setAddress(Address $address)
    {
        $this->address = $address;
        return $this;
    }
    public function getAddress()
    {
        return $this;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
    public function getPhone()
    {
        return $this;
    }
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }
    public function getWebsite()
    {
        return $this;
    }
    public function setCompany(Company $company)
    {
        $this->company = $company;
        return $this;
    }
    public function getCompany()
    {
        return $this;
    }
}