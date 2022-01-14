<?php

namespace App\Helpers;

class EntityManagerHelpers{
    public static function getEntityManager()
    {
        require_once('bootstrap.php');
    
        return $entityManager;
    }
}