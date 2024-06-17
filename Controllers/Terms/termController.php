<?php

  include("../../database/database.php");
  include("../../Models/Terms/termsModel.php");

  if (isset($_POST['action']))

  {
    $termController = new TermController($database);
    switch ($_POST['action']){
      case 'create': $termController->create();
        break;
      case 'delete': $termController->delete();
        break;
      case 'update': $termController->update();
        break;

      default:
          header();
          break;
        }
    }

    class TermController{
      private $term;

      public function __construct($database){
        $this->term = new Term($database);
      }
      public function create(){
        $this->term->createTerm($_POST['term_name'], $_POST['term_content'], $_POST['user_type_id']);
          echo "<script>alert('Le Term a bien été Créé !')</script>";
          echo "<script>window.open('../../View/Admin/index.php?terms','_self')</script>";
      }
      public function delete(){
        //var_dump($_POST);
        //die();
        $this->term->deleteTerm($_POST['deleteTerm']);
          echo "<script>alert('Le Term a bien été Supprimé')</script>";
          echo "<script>window.open('../../View/Admin/index.php?terms','_self')</script>";
      }
      public function update(){
        $this->term->updateTerm($_POST["term_name"], $_POST["term_content"], $_POST["user_type_id"], $_POST["term_id"]);
            echo "<script>alert('Le Term a bien été Modifiée')</script>";
            echo "<script>window.open('../../View/Admin/index.php?terms','_self')</script>";
      }
  }

?>
