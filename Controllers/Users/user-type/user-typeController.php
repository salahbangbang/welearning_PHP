<?php

  include("../../../database/database.php");
  include("../../../Models/Users/user-type/user-typeModel.php");

  if (isset($_POST['action']))

  {
    $usertypeController = new UsertypeController($database);
    switch ($_POST['action']){
      case 'create': $usertypeController->create();
        break;
      case 'delete': $usertypeController->delete();
        break;
      case 'update': $usertypeController->update();
        break;

      default:
          header();
          break;
        }
    }

    class UsertypeController{
      private $usertype;

      public function __construct($database){
        $this->usertype = new Usertype($database);
      }
      public function create(){

        $count = $this->usertype->readUsertypeByName($_POST['user_type_name']);

      if($count[0] === '1'){

          echo "<script>alert('Ce type d'utilisateur existe déjà !')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?user-type','_self')</script>";
      }else{

        $this->usertype->createUsertype($_POST['user_type_name'], $_POST['user_type_description']);
          echo "<script>alert('Félicitation un nouveau type utilisateur a bien été Créé')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?user-type','_self')</script>";
            }
      }
      public function delete(){
        $this->usertype->deleteUsertype($_POST['deleteUsertype']);
          echo "<script>alert('Un type d'utilisateur a bien été Supprimé')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?user-type','_self')</script>";
      }
      public function update(){
        $this->usertype->updateUsertype($_POST["user_type_name"], $_POST["user_type_description"], $_POST["user_type_id"]);
            echo "<script>alert('Un type utilisateur a bien été Modifié')</script>";
            echo "<script>window.open('../../../View/Admin/index.php?user-type','_self')</script>";
      }
  }

?>
