<?php

namespace App;

class Geo
{
    private $lat;
    private $lng;

    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    public function getLat ()
    {
        return $this;
    }

    public function setLng($lng)
    {
        $this->lng = $lng;
        return $this;
    }

    public function getLng ()
    {
        return $this;
    }

}
