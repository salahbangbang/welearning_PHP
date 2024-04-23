<?php

  include("../../database/database.php");
  include("../../Models/Messages/messageModel.php");

  if (isset($_POST['action']))

  {
    $messageController = new MessageController($database);
    switch ($_POST['action']){

      case 'create': $messageController->create();
        break;
      case 'delete': $messageController->delete();
        break;

      default:
          header();
          break;
        }
    }


    class MessageController{
      private $message;

      public function __construct($database){
        $this->message = new Message($database);
    }

     public function create()
      {
        $this->message->createMessage($_POST['message_name'], $_POST['message_email'], $_POST['message_sujet'], $_POST['message_content']);
          echo "<script>alert('Félicitation le message a bien été envoyé !')</script>";
          echo "<script>window.open('../../View/contact.php','_self')</script>";
      }
      public function delete()
       {
         $this->message->deleteMessage($_POST['deleteMessage']);
           echo "<script>alert('Le Message a bien été supprimé !')</script>";
           echo "<script>window.open('../../View/Admin/index.php?message','_self')</script>";
       }


}
