<?php

namespace App\Controllers;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Helpers\EntityManagerHelpers;
use App\Entity\Airport;

class AirportController
{
    
    public function index()
    {
        $em = EntityManagerHelpers::getEntityManager();
        $aiportRepository = new EntityRepository($em, new ClassMetadata("App\Entity\Airport"));

        $AllAirport = $aiportRepository->findAll();
    
        foreach ($AllAirport as $key=> $value){
            print $value->getNom();
        }
    }
}