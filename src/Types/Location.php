<?php

namespace Sobhansgh\Rubikabotphp\Types;

class Location extends BaseType
{
    public function latitude(float $latitude): static
    {
        $this->data['latitude'] = $latitude;

        return $this;
    }

    public function longitude(float $longitude): static
    {
        $this->data['longitude'] = $longitude;

        return $this;
    }
}