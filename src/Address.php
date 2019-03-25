<?php 

namespace App;

class Address 
{
    protected $street;
    protected $suite;
    protected $city;
    protected $zipcode;

    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function getStreet()
    {
        return $this;
    }

    public function setSuite($suite)
    {
        $this->suite = $suite;
        return $this;

    }

    public function getSuite()
    {
        return $this;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function getcity()
    {
        return $this;
    }
    
    public function setZipCode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    public function getZipCode()
    {
        return $this;
    }
}