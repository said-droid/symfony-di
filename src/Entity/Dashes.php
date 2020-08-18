<?php

namespace App\Entity;

use App\Controller\Transform;

class Dashes implements Transform
{


    public function transform(string $string): string
    {
        return str_replace('-', ' ', $string);
    }
}
