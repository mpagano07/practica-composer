<?php

namespace App;

class UsersCollection
{
    protected $users = [];

    public function __construct(array $data = [])
    {
        foreach ($data as $item) {

            $company = new Company();
            $company->setName($item->company->name);
            $company->setCatchPhrase($item->company->catchPhrase);
            $company->setBs($item->company->bs);

            $geo = new Geo();
            $geo->setLat($item->address->geo->lat);
            $geo->setLng($item->address->geo->lng);

            $address = new Address();
            $address->setStreet($item->address->street);
            $address->setSuite($item->address->suite);
            $address->setCity($item->address->city);
            $address->setZipCode($item->address->zipcode);

            $user = new User();
            $user->setId($item->id);
            $user->setUserName($item->username);
            $user->setName($item->name);
            $user->setEmail($item->email);
            $user->setAddress($address);
            $user->setPhone($item->phone);
            $user->setWebsite($item->website);
            $user->setCompany($company);
            $this->users[] = $user;       

            
        }
        var_dump($this->users);
    }

    public function get()
    {
        return $this->users;
    }
}

