<?php

  include("../../database/database.php");
  include("../../Models/Contacts/contactModel.php");

  if (isset($_POST['action']))

  {
    $contactController = new ContactController($database);
    switch ($_POST['action']){

      case 'update': $contactController->update();
        break;

      default:
          header();
          break;
        }
    }

    class ContactController{
      private $contact;

      public function __construct($database){
        $this->contact = new Contact($database);
      }

      public function update(){
        $this->contact->updateContact($_POST["contactEmail"], $_POST["contactFB"], $_POST["contactTW"], $_POST["contactPhone"], $_POST["contactID"]);

          //var_dump($_POST);
          //die();

            echo "<script>alert('Un ou plusieurs contact(s) ont bien été Modifiée(s)')</script>";
            echo "<script>window.open('../../View/Admin/index.php?contact','_self')</script>";
      }
  }

?>
