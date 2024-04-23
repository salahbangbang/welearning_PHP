<?php

  include("../../database/database.php");
  include("../../Models/Cours/coursModel.php");

  if (isset($_POST['action']))

  {
    $coursController = new CoursController($database);
      switch ($_POST['action']){

      case 'create': $coursController->create();
        break;
      case 'delete': $coursController->delete();
        break;

      default:
          header();
          break;
        }
    }


    class CoursController{
      private $cours;

      public function __construct($database){
        $this->cours = new Cours($database);
    }

     public function create()
      {
        if (isset($_FILES['cours_photo']['tmp_name']) && is_uploaded_file($_FILES['cours_photo']['tmp_name'])) {
            $cours_photo = file_get_contents($_FILES['cours_photo']['tmp_name']);
        } else {
            $cours_photo = null;
        }

        if (isset($_FILES['cours_curriculum_1']['tmp_name']) && is_uploaded_file($_FILES['cours_curriculum_1']['tmp_name'])) {
            $cours_curriculum_1 = file_get_contents($_FILES['cours_curriculum_1']['tmp_name']);
        } else {
            $cours_curriculum_1 = null;
        }

        $this->cours->createCours($cours_photo,
                                  $_POST['cours_name'],
                                  $_POST['cours_description'],
                                  $_POST['cours_learn_1'],
                                  $_POST['cours_learn_2'],
                                  $_POST['cours_learn_3'],
                                  $_POST['cours_learn_4'],
                                  $_POST['cours_learn_5'],
                                  $_POST['cours_objective'],
                                  $cours_curriculum_1,
                                  $_POST['cours_user_id'],
                                  $_POST['cours_category_id'],
                                  $_POST['cours_category_sub_id']);

          echo "<script>alert('Félicitation le cours a bien été envoyé !')</script>";
          echo "<script>window.open('../../View/Teacher/index.php?creer-cours','_self')</script>";
      }
      public function delete()
       {
         $this->cours->deleteCours($_POST['deleteCours']);
           echo "<script>alert('Le Cours a bien été supprimé !')</script>";
           echo "<script>window.open('../../View/Admin/index.php?cours','_self')</script>";
       }


}
