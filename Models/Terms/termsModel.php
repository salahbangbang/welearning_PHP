<?php

class Term
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createTerm($term_name, $term_content, $user_type_id)
      {
        $req = $this->database->prepare("INSERT INTO Term(term_name, term_content, user_type_id) VALUES (:term_name, :term_content, :user_type_id)");
          $req->bindParam(":term_name", $term_name);
          $req->bindParam(":term_content", $term_content);
          $req->bindParam(":user_type_id", $user_type_id);

            return $req->execute();
      }
    public function readTerm()
      {
        $req = $this->database->prepare("SELECT * FROM Term");
			    $req->execute();

			      return $req->fetchAll();
      }
    public function updateTerm($term_name, $term_content, $user_type_id, $term_id)
      {
        $req = $this->database->prepare("UPDATE Term SET term_name = :term_name, term_content = :term_content, user_type_id = :user_type_id, term_id = :term_id WHERE term_id = :term_id");
          $req->bindParam(":term_name", $term_name);
          $req->bindParam(":term_content", $term_content);
          $req->bindParam(":user_type_id", $user_type_id);
          $req->bindParam(":term_id", $term_id);

            return $req->execute();
        }
    public function deleteTerm($term_id)
      {
        $req = $this->database->prepare("DELETE FROM Term WHERE term_id = ?");

            return $req->execute([$term_id]);
      }
    public function readTermByID($term_id)
      {
        $req = $this->database->prepare('SELECT * FROM Term WHERE term_id = ?');
          $req->execute([$term_id]);

            return $req->fetch();
      }
    public function readTermByCible()
      {
        $req = $this->database->prepare('SELECT * FROM Term INNER JOIN User_type ON Term.user_type_id = User_type.user_type_id WHERE Term.user_type_id = User_type.user_type_id');
          $req->execute();

          return $req->fetchAll();
        }

  }

 ?>
