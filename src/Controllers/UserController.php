<?php

namespace App\Controllers;

session_start();

use App\Entity\User;
use App\Helpers\EntityManagerHelpers as Em;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class UserController
{
    
    const REQUIRES = [
        "firstname",
        "lastname",
        "email",
        "pays"
    ];

    public function showOne(string $sId)
    {
        $em = Em::getEntityManager();
        $repository = new EntityRepository($em, new ClassMetadata("App\Entity\User"));

        $aUser =$repository->find( (int) $sId);
        print($aUser->getFirstname());
        print($aUser->getLastname());
    }

    public function add(bool $isModify= false)
    {

        foreach (self::REQUIRES as $value) {
            if (!array_key_exists($value, $_POST)) {
                $_SESSION["error"] ="Il manque des champs à remplir";
                if ($isModify) {
                    header("location: http://tpAvion.local/src/Vues/ModifyUser.php");
                    exit;
                }
                header("location: http://tpAvion.local/src/Vues/AddUser.php");
                exit;
            }
            $_POST[$value] = htmlentities(strip_tags($_POST[$value]));
        }

        $user = new User($_POST["firstname"], $_POST["lastname"], $_POST["email"],$_POST["pays"]);

        $entityManager = Em::getEntityManager();
        $entityManager->persist($user);

        $entityManager->flush();
        
        if ($isModify) {
            header("location: http://tpAvion.local/src/Vues/ModifyUser.php");
            exit;
        }

        header("location: http://tpAvion.local/src/Vues/AddUser.php");
        
        // if (isset($_POST['firstname'], $_POST['lastname'], $POST['email'], $_POST['pays'])) {
        //     $firstname = $_POST['firstname'];
        //     $lastname = $_POST['lastname'];
        //     $email = $_POST['email'];
        //     $pays = $_POST['pays'];
        // }
        // $entityManager = Em::getEntityManager();
        // $newUser = new User($firstname, $lastname, $email, $pays);
        // $entityManager->persist($newUser);

        // try {
        //     $entityManager->flush();
        // } catch (\Throwable $th) {
        //     exit ("l'utilisateur existe déjà");
        // }
        
    }

    public function modify(string $sId)
    {
        $em = Em::getEntityManager();
        $userRepository = new EntityRepository($em, new ClassMetadata("App\Entity\User"));

        $userId = $userRepository->find($sId);
        
        if (empty($_POST)) {
            $userDatas = [];

            foreach (self::REQUIRES as $value) {
                $getteur = "get". ucfirst($value);
                $userDatas[$value] = $userId->$getteur();
            }
            
            $userDatas["id"] = $userId->getId();
            $_SESSION["userDatas"] = $userDatas;
            
            header("location: http://tpAvion.local/src/Vues/ModifyUser.php");
            exit;
        }

        $this->add(true);

    }
}