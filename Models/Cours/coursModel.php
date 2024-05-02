<?php

class Cours
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createCours($cours_photo, $cours_name, $cours_description, $cours_learn_1, $cours_learn_2, $cours_learn_3, $cours_learn_4, $cours_learn_5, $cours_objective, $cours_curriculum_1, $cours_user_id, $cours_category_id, $cours_category_sub_id)
      {
        $req = $this->database->prepare("INSERT INTO Cours(cours_photo, cours_name, cours_description, cours_learn_1, cours_learn_2, cours_learn_3, cours_learn_4, cours_learn_5, cours_objective, cours_curriculum_1, cours_user_id, cours_category_id, cours_category_sub_id) VALUES (:cours_photo, :cours_name, :cours_description, :cours_learn_1, :cours_learn_2, :cours_learn_3, :cours_learn_4, :cours_learn_5, :cours_objective, :cours_curriculum_1, :cours_user_id, :cours_category_id, :cours_category_sub_id)");

          $req->bindParam(":cours_photo", $cours_photo);
          $req->bindParam(":cours_name", $cours_name);
          $req->bindParam(":cours_description", $cours_description);
          $req->bindParam(":cours_learn_1", $cours_learn_1);
          $req->bindParam(":cours_learn_2", $cours_learn_2);
          $req->bindParam(":cours_learn_3", $cours_learn_3);
          $req->bindParam(":cours_learn_4", $cours_learn_4);
          $req->bindParam(":cours_learn_5", $cours_learn_5);
          $req->bindParam(":cours_objective", $cours_objective);
          $req->bindParam(":cours_curriculum_1", $cours_curriculum_1);

          $req->bindParam(":cours_user_id", $cours_user_id);
          $req->bindParam(":cours_category_id", $cours_category_id);
          $req->bindParam(":cours_category_sub_id", $cours_category_sub_id);

           return $req->execute();
      }
    public function readCours()
      {
        $req = $this->database->prepare("SELECT * FROM Cours INNER JOIN category ON cours.cours_category_id = category.category_id INNER JOIN category_sub ON cours.cours_category_sub_id = category_sub.category_sub_id INNER JOIN user ON cours.cours_user_id = user.user_id");
          $req->execute();

            return $req->fetchAll();
      }
    public function deleteCours($cours_id)
     {
        $req = $this->database->prepare("DELETE FROM Cours WHERE cours_id = ?");

            return $req->execute([$cours_id]);
      }
    public function readCoursByUser()
      {
        $req = $this->database->prepare("SELECT * FROM Cours INNER JOIN user ON cours.cours_user_id = user.user_id WHERE cours.cours_id = user.user_id");
        $req->execute();

            return $req->fetchAll();
      }
    public function readCoursByID($cours_id)
      {
        $req = $this->database->prepare('SELECT * FROM Cours INNER JOIN category ON cours.cours_category_id = category.category_id INNER JOIN category_sub ON cours.cours_category_sub_id = category_sub.category_sub_id INNER JOIN user ON cours.cours_user_id = user.user_id WHERE cours_id = ?');
          $req->execute([$cours_id]);

            return $req->fetch();
      }

   }

 ?>
