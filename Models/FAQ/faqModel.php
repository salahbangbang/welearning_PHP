<?php

class Faq
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createFaq($faq_question, $faq_answer)
      {
        $req = $this->database->prepare("INSERT INTO faq(faq_question, faq_answer) VALUES (:faq_question, :faq_answer)");
          $req->bindParam(":faq_question", $faq_question);
          $req->bindParam(":faq_answer", $faq_answer);

            return $req->execute();
      }
    public function readFaq()
      {
        $req = $this->database->prepare("SELECT * FROM Faq");
			    $req->execute();

			      return $req->fetchAll();
      }

    public function deleteFaq($faq_id)
      {
        $req = $this->database->prepare("DELETE FROM Faq WHERE faq_id = ?");

            return $req->execute([$faq_id]);
      }


//autres fonctions
    public function readFaqByQuestion($faq_question)
      {
        $req = $this->database->prepare("SELECT count(*) FROM Faq where faq_question = '".$faq_question."'");
          $req->execute();

        		return $req->fetch();
      }

  }

 ?>
