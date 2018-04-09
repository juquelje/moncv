<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
    * @ORM\Entity
    * @ORM\Table(name="loisirs")
    * @ApiResource
**/
class Loisirs {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    **/
    protected $id;
    
     /**
     * @ORM\Column(type="string") 
    **/
    private $name;
    
    function getId(){
        return $this->id;
    }
    
    function getName(){
        return $this->name;
    }
    
    function setName($name) {
        $this->name = $name;
    }
}