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

    public function add()   
    {

        foreach (self::REQUIRES as $value) {
            $_POST[$value] = htmlentities(strip_tags(trim($_POST[$value])));
            if ($_POST[$value] === "") {
                $error = "les champs ne doivent pas etre vide";
                header("location: http://tpAvion.local/src/Vues/User/AddUser.php");
                echo $error;
                exit;
            }
            if (!array_key_exists($value, $_POST)) {
                $_SESSION["error"] ="Il manque des champs à remplir";
                header("location: http://tpAvion.local/src/Vues/User/AddUser.php");
                exit;
            }
        }

        $user = new User($_POST["firstname"], $_POST["lastname"], $_POST["email"],$_POST["pays"]);

        $entityManager = Em::getEntityManager();
        $entityManager->persist($user);

        $entityManager->flush();

        header("location: http://tpAvion.local/src/Vues/User/AddUser.php");
        
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

    public function modify(string $id)
    {
        $em = Em::getEntityManager();
        $userRepository = new EntityRepository($em, new ClassMetadata("App\Entity\User"));

        $userId = $userRepository->find($id);
        
        // $userDatas = [];

        // foreach (self::REQUIRES as $value) {
        //     $getteur = "get". ucfirst($value);
        //     $userDatas[$value] = $userId->$getteur();
        // }
        
        // $userDatas["id"] = $userId->getId();
        // $_SESSION["userDatas"] = $userDatas;

        // $em->persist($userId);
        // $em->flush();

        if (!empty($_POST)) {
            foreach (self::REQUIRES as $value) {
                // var_dump("je suis la "); die;
                $exist = array_key_exists($value, $_POST);
                if ($exist === false) {
                    echo "Erreur";
                    include __DIR__ . "/../Vues/User/ModifyUser.php";
                    exit;
                }
                $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));
                
                if ($_POST[$value] === "") {
                    echo "champs $value vide";
                    include __DIR__ . "/../Vues/User/ModifyUser.php";
                    die();

                }
            }
            

            if ($_POST["firstname"] !== $userId->getFirstname()) {
                $userId->setFirstname($_POST["firstname"]);
            }
            if ($_POST["lastname"] !== $userId->getLastname()) {
                $userId->setLastname($_POST["lastname"]);
            }
            if ($_POST["email"] !== $userId->getEmail()) {
                $userId->setEmail($_POST["email"]);
            }
            if ($_POST["pays"] !== $userId->getPays()) {
                $userId->setPays($_POST["pays"]);
            }            
            $em->persist($userId);
            $em->flush();
        }
        
        include __DIR__ . "/../Vues/User/ModifyUser.php";

    }

    public function delete(string $id)
    {
        $em = Em::getEntityManager();
        $UserRepo = new EntityRepository($em, new ClassMetadata("App\Entity\User"));

        $UserD = $UserRepo->find($id);

        $em->remove($UserD);
        $em->flush();
    }
}