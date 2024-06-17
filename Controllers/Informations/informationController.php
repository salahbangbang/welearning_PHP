<?php

  include("../../database/database.php");
  include("../../Models/Informations/informationModel.php");

  if (isset($_POST['action']))

  {
    $informationController = new InformationController($database);
    switch ($_POST['action']){

      case 'update': $informationController->update();
        break;

      default:
          header();
          break;
        }
    }

    class InformationController{
      private $information;

      public function __construct($database){
        $this->information = new Information($database);
      }

      public function update(){
        $this->information->updateInformations($_POST["information_email"], $_POST["information_facebook"], $_POST["information_twitter"], $_POST["information_phone"], $_POST["information_id"]);

          //var_dump($_POST);
          //die();

            echo "<script>alert('Un ou plusieurs de vos coordonée(s) ont bien été modifiée(s)')</script>";
            echo "<script>window.open('../../View/Admin/index.php?information','_self')</script>";
      }
  }

?>
