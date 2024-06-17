<?php

  include("../../database/database.php");
  include("../../Models/Newsletters/newsletterModel.php");

  if (isset($_POST['action']))

  {
    $newsletterController = new NewsletterController($database);
    switch ($_POST['action']){
      case 'create': $newsletterController->create();
        break;
      case 'delete': $newsletterController->delete();

      default:
          header();
          break;
        }
    }

    class NewsletterController{
      private $newsletter;

      public function __construct($database){
        $this->newsletter = new Newsletter($database);
      }

      /*public function create(){
        $this->newsletter->createNewsletter($_POST["newsletter_email"]);
          //var_dump($_POST);
          //die();
            echo "<script>alert('Vous avez bien été inscrit dans notre newsletter')</script>";
            echo "<script>window.open('../../View/Home.php','_self')</script>";
      }*/
      public function create(){

        $count = $this->newsletter->readNewsletterByEmail($_POST['newsletter_email']);

        if($count[0] === '1'){
          echo "<script>alert('Erreur ! vous êtes déjà inscrit à notre newsletter')</script>";
          //echo "<script>window.location.href = '" . $_SERVER['PHP_SELF'] . "';</script>";
          echo "<script>window.open('../../View/Home.php','_self')</script>";
        }else{

        $this->newsletter->createNewsletter($_POST["newsletter_email"]);
          //var_dump($_POST);
          //die();
            echo "<script>alert('Vous avez bien été inscrit dans notre newsletter')</script>";
            echo "<script>window.open('../../View/Home.php','_self')</script>";
            }
        }
      public function delete(){
        $this->newsletter->deleteNewsletter($_POST['deleteNewsletter']);
          echo "<script>alert('La Newsletter a bien été supprimée')</script>";
          echo "<script>window.open('../../View/Admin/index.php?newsletter','_self')</script>";
      }

  }

?>
