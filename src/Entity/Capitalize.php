<?php

namespace App\Entity;

use App\Controller\Transform;

class Capitalize implements Transform
{

    public function transform(string $string): string
    {
       return preg_replace_callback('/(\w)(.)?/', function(string $string){strtoupper('$1').strtolower('$2');}, $string);
    }
}
