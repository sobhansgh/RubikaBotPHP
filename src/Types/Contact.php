<?php

namespace Sobhansgh\Rubikabotphp\Types;

class Contact extends BaseType
{
    public function phone(string $phone): static
    {
        $this->data['phone_number'] = $phone;

        return $this;
    }

    public function firstName(string $name): static
    {
        $this->data['first_name'] = $name;

        return $this;
    }

    public function lastName(string $name): static
    {
        $this->data['last_name'] = $name;

        return $this;
    }
}