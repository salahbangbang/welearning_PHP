<?php

  session_start();

  include("../../../database/database.php");
  include("../../../Models/Users/user/userModel.php");

  if (isset($_POST['action']))

  {
    $userController = new UserController($database);
      switch ($_POST['action']){
        case 'create': $userController->create();
          break;
        case 'delete': $userController->delete();
          break;
        case 'update': $userController->update();
          break;

        case 'login':  $userController->login();
          break;
        case 'logout': $userController->logout();
          break;
      default:
          header();
          break;
        }
    }

    class UserController{
      private $user;

      public function __construct($database){
        $this->user = new User($database);
        }
      public function create(){

        $count_user_name = $this->user->readUserByName($_POST['user_name']);
        $count_user_email = $this->user->readUserByEmail($_POST['user_email']);
        //$count = $this->user->readUserByEmail($_POST['user_email']);

        if($count_user_name[0] === '1' || $count_user_email[0] === '1'){
          echo "<script>alert('Ce nom d'utilisateur ou cette email a déjà été utilisé !')</script>";
          echo "<script>window.open('../../../View/Register.php','_self')</script>";
        }else{

        $this->user->createUser($_POST['user_last_name'], $_POST['user_first_name'], $_POST['user_email'], $_POST['user_name'],$_POST['user_type_id'], $_POST['user_password']);
          echo "<script>alert('Félicitation un nouvel utilisateur a bien été Créé')</script>";
          echo "<script>window.open('../../../View/Login.php','_self')</script>";
            }
        }
      public function delete(){
        $this->user->deleteUser($_POST['deleteUser']);
          echo "<script>alert('Vous avez bien supprimé votre compte !')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?user','_self')</script>";
        }
      public function update(){

        if (isset($_FILES['user_photo']['tmp_name']) && is_uploaded_file($_FILES['user_photo']['tmp_name'])) {
            $user_photo = file_get_contents($_FILES['user_photo']['tmp_name']);
        } else {
            $user_photo = null;
        }

        if (isset($_FILES['user_diplome']['tmp_name']) && is_uploaded_file($_FILES['user_diplome']['tmp_name'])) {
            $user_diplome = file_get_contents($_FILES['user_diplome']['tmp_name']);
        } else {
            $user_diplome = null;
        }

        if (isset($_FILES['user_certificat']['tmp_name']) && is_uploaded_file($_FILES['user_certificat']['tmp_name'])) {
            $user_certificat = file_get_contents($_FILES['user_certificat']['tmp_name']);
        } else {
            $user_certificat = null;
        }

        $this->user->updateUser($_POST['user_id'], $user_photo, $_POST['user_last_name'], $_POST['user_first_name'], $_POST['user_email'], $_POST['user_name'], $user_diplome, $user_certificat, $_POST['user_password'], $_POST['user_type_id']
        );

        echo "<script>alert('Votre compte a bien été modifié')</script>";
        echo "<script>window.open('../../../View/" . $_SESSION['infoUser']['user_type_name'] . "/index.php?recap-profil','_self')</script>";
        }
      public function login(){
        $info = $this->user->checkUserLogin($_POST['user_name'], $_POST['user_password']);

          if (empty($info)){

            echo "<script>alert('Votre identifiant et/ou votre mot de passe n'ont pas été retouvé(s) dans notre base donnée')</script>";
            echo "<script>window.open('../../../View/Login.php','_self')</script>";

          }else{

            $_SESSION['infoUser'] = $info;

            if (isset($info)){

              switch ($info['user_type_name']) {

                case 'Student':
                    echo "<script>alert('Bon chère Elève retour parmis nous')</script>";
                    echo "<script>window.open('../../../View/Student/index.php','_self')</script>";
                  break;

                case 'Teacher':
                    echo "<script>alert('Bon chère Professeur retour parmis nous')</script>";
                    echo "<script>window.open('../../../View/Teacher/index.php','_self')</script>";
                  break;

                case 'Writter':
                      echo "<script>alert('Bon chère Ecrivain retour parmis nous')</script>";
                      echo "<script>window.open('../../../Writter/index.php','_self')</script>";
                  break;

                default:

                  break;
              }
            }
            //echo "<script>alert('Bon retour parmis nous')</script>";
            //echo "<script>window.open('../../../View/Home.php','_self')</script>";
          }
      }
      public function logout(){

          session_destroy();

            echo "<script>alert('Vous avez bien été deconnecté(e)')</script>";
            echo "<script>window.open('../../../View/Home.php','_self')</script>";
      }
  }

?>
