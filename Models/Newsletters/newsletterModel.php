<?php

class Newsletter
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createNewsletter($newsletter_email)
      {
        $req = $this->database->prepare("INSERT INTO Newsletter(newsletter_email) VALUES (:newsletter_email)");
          $req->bindParam(":newsletter_email", $newsletter_email);

            return $req->execute();
      }
    public function readNewsletter()
      {
        $req = $this->database->prepare("SELECT * FROM Newsletter");
			    $req->execute();

			      return $req->fetchAll();
      }
    public function deleteNewsletter($newsletter_id)
      {
        $req = $this->database->prepare("DELETE FROM Newsletter WHERE newsletter_id = ?");

            return $req->execute([$newsletter_id]);
      }
    public function readNewsletterByEmail($newsletter_email)
     {
       $req = $this->database->prepare("SELECT count(*) FROM Newsletter where newsletter_email = '".$newsletter_email."'");
          $req->execute();

            return $req->fetch();
     }

  }

 ?>
