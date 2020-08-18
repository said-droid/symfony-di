<?php

namespace App\Entity;

class Logger
{
    public function log(string $string):string
    {
        //$logPath = '../logs/log.info';
        return file_put_contents(__DIR__ . '/../logs/log.info', $string, FILE_APPEND);
    }
}
