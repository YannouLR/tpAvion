<?php

namespace App\Controllers;

use App\Entity\Airport;
use App\Entity\Flight;
use App\Entity\Passenger;
use App\Entity\User;
use App\Entity\Ticket;
use App\Helpers\EntityManagerHelpers as Em;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class AppController{

    public static function index(){

        echo "BIENVENUE";

        // $entityManager = Em::getEntityManager();

        // $passenger1 = new Passenger('Yann', 'Lenerand', 'yann.lenerand@yahoo.com', "France", 47);
        // $entityManager->persist($passenger1);

        // $user1 = new User('Yann', 'Lenerand', 'yann.lenerand@yahoo.com', "France");
        // $entityManager->persist($user1);

        // $depart = new Airport('Nancy', "France");
        // $entityManager->persist($depart);

        // $arriver = new Airport("Marseille", "France");
        // $entityManager->persist($arriver);
        
        // $flight = new Flight(10, $depart, $arriver);
        // $entityManager->persist($flight);

        // $ticket685 = new Ticket(685, $passenger1, $user1, $flight);
        // $entityManager->persist($ticket685);
        // $entityManager->flush();

    }

    const NEEDS = [
        "email",
        "password"
    ];

    public function login()
    {
        if (empty($_POST)) {
            include("./src/Vues/register/login.php");
        }
        if (!empty($_POST)) {
            foreach (self::NEEDS as $value) {
                if (!array_key_exists($value, $_POST)) {
                    echo "La valeur n'existe pas";
                    die();
                }
                $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));
                if ($_POST[$value] === "") {
                    echo "Bien essayé réessaye plus tard";
                    die();
                }
            }

            $em = Em::getEntityManager();
            $repo = new EntityRepository($em, new ClassMetadata("App\Entity\User"));

            $user = $repo->findBy(['email' => $_POST["email"]]);

            if (empty($user)) {
                echo "cet utilisateur n'existe pas";
                die();
            }

            $passwordV = password_verify($_POST['password'], $user[0]->getPassword());
            if (!$passwordV) {
                echo "Le mot de passe ne correspond";
                die;
            }

            $_SESSION['email'] = $_POST["email"];
            $_SESSION['prenom'] = $user[0]->getPrenom;
            $_SESSION['type'] = $user[0]->get_class;

        }
    }
}