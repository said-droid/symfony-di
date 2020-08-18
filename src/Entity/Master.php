<?php

namespace App\Entity;

use App\Controller\transform;
use App\Repository\MasterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MasterRepository::class)
 */
class Master
{

    private int $id;
    private string $message;

    public function __construct(string $string, Transform $transform, Logger $logger)
    {
        $logger->log($string);
        $changeMessage = $transform->transform($string);
        $this->message = $changeMessage;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }


}
