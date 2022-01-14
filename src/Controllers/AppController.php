<?php

namespace App\Controllers;

use App\Entity\Passenger;
use App\Entity\Ticket;
use App\Helpers\EntityManagerHelpers as Em;

class AppController{

    public static function index(){
        $entityManager = Em::getEntityManager();

        $user1 = new Passenger('Yann', 'Lenerand', 'yann.lenerand@yahoo.com', 47);
        $entityManager->persist($user1);

        $ticket685 = new Ticket(685, $user1);
        $entityManager->persist($ticket685);
        $entityManager->flush();

    }
}