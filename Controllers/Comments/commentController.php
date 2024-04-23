<?php

  include("../../database/database.php");
  include("../../Models/Comments/commentModel.php");

  if (isset($_POST['action']))

  {
    $commentController = new CommentController($database);
    switch ($_POST['action']){

      case 'create': $commentController->create();
        break;
      case 'delete': $commentController->delete();
        break;

      default:
          header();
          break;
        }
    }


    class CommentController{
      private $controller;

      public function __construct($database){
        $this->comment = new Comment($database);
    }

     public function create()
     {
        $this->comment->createComment($_POST['comment_title'], $_POST['commment_content'], $_POST['user_id'], $_POST['cours_id']);
          echo "<script>alert('Félicitation le commentaire a bien été envoyé !')</script>";
          echo "<script>window.location.reload();</script>";
            }
      }
