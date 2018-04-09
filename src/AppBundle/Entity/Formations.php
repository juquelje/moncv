<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
    * @ORM\Entity
    * @ORM\Table(name="formations")
    * @ApiResource
**/
class Formations {
    
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
    
     /**
     * @ORM\Column(type="date") 
    **/
    private $dateDebut;
    
     /**
     * @ORM\Column(type="date") 
    **/
    private $dateFin;
    
     /**
     * @ORM\Column(type="string") 
    **/
    private $lieu;
    
    function getId(){
        return $this->id;
    }
    
    function getName(){
        return $this->name;
    }
    
    function getDateDebut(){
        return $this->dateDebut;
    }
    
    function getDateFin(){
        return $this->dateDebut;
    }
    
    function getLieu(){
        return $this->lieu;
    }
    
    function setName($name) {
        $this->name = $name;
    }
    
    function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }
    
    function setDateFin($dateFin) {
        $this->dateFin = $dateFin;
    }
    
    function setLieu($lieu) {
        $this->lieu = $lieu;
    }
    
}