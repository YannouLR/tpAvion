<?php

namespace App\Controllers;

use App\Entity\Passenger;
use App\Helpers\EntityManagerHelpers as Em;

class AppController{

    public static function index(){
        $entityManager = Em::getEntityManager();

        $user = new Passenger('')

    }
}