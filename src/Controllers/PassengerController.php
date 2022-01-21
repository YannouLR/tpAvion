<?php
namespace App\Controllers;

use App\Entity\User;
use App\Helpers\EntityManagerHelpers as Em;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class PassengerController
{

    public function showOne(string $sId)
    {
        $em = Em::getEntityManager();
        $repository = new EntityRepository($em, new ClassMetadata("App\Entity\Passenger"));

        $aUser =$repository->find((int)$sId);
        var_dump($aUser);die;
        print($aUser->getFirstname());
        print($aUser->getLastname());
    }
}