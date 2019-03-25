<?php

namespace App;

class Company
{
    private $name;
    private $catchPhrase;
    private $bs;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName ()
    {
        return $this;
    }

    public function setCatchPhrase($catchPhrase)
    {
        $this->catchPhrase = $catchPhrase;
        return $this;
    }

    public function getCatchPhrase ()
    {
        return $this;
    }

    public function setBs ($bs)
    {
        $this->bs = $bs;
        return $this;
    }

    public function getBs ()
    {
        return $this;
    }

}