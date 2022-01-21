<?php

namespace App\Controllers;

use App\Entity\User;
use App\Helpers\EntityManagerHelpers;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class UserController
{
    
    public function showOne(string $sId)
    {
        $em = EntityManagerHelpers::getEntityManager();
        $repository = new EntityRepository($em, new ClassMetadata("App\Entity\User"));

        $aUser =$repository->find( (int) $sId);
        print($aUser->getFirstname());
        print($aUser->getLastname());
    }

    public function add(?array $posts = [])
    {
        
    }
}