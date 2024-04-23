<?php

  include("../../database/database.php");
  include("../../Models/Faq/faqModel.php");

  if (isset($_POST['action']))

  {
    $faqController = new FaqController($database);
    switch ($_POST['action']){
      case 'create': $faqController->create();
        break;
      case 'delete': $faqController->delete();
        break;

      default:
          header();
          break;
        }
    }

    class FaqController{
      private $faq;

      public function __construct($database){
        $this->faq = new Faq($database);
      }
      public function create(){

        $count = $this->faq->readFaqByQuestion($_POST['faq_question']);

      if($count[0] === '1'){

          echo "<script>alert('La réponse à cette question existe déjà !')</script>";
          echo "<script>window.open('../../View/admin/index.php?faq','_self')</script>";
      }else{

        $this->faq->createFaq($_POST['faq_question'], $_POST['faq_answer']);
          echo "<script>alert('Félicitation la F.A.Q a bien été créée')</script>";
          echo "<script>window.open('../../View/admin/index.php?faq','_self')</script>";
            }
      }
      public function delete(){
        $this->faq->deleteFaq($_POST['deleteFaq']);
          echo "<script>alert('La F.A.Q a bien été Supprimée')</script>";
          echo "<script>window.open('../../View/admin/index.php?faq','_self')</script>";
      }

  }

?>
