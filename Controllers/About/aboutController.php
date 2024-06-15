<?php

  include(dirname(__FILE__) ."/../../database/database.php");
  include(dirname(__FILE__) ."/../../Models/About/aboutModel.php");

  if (isset($_POST['action']))

  {
    $aboutController = new AboutController($database);
    switch ($_POST['action']){
      case 'update': $aboutController->update();
        break;

      default:
          header();
          break;
        }
    }

    class AboutController{
      private $about;

      public function __construct($database){
        $this->about = new About($database);
      }

      public function update(){
        $this->about->updateAbout($_POST["about_summary"], $_POST["about_content"], $_POST["about_id"]);
          //var_dump($_POST);
          //die();
            echo "<script>alert('La page About bien été Modifiée(s)')</script>";
            echo "<script>window.open('../../View/Admin/index.php?about','_self')</script>";
      }
  }

?>
