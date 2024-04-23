<?php

class Contact
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }

    public function readContact()
      {
        $req = $this->database->prepare("SELECT * FROM contact");
			    $req->execute();

			      return $req->fetchAll();
      }
    public function updateContact($contactEmail, $contactFB, $contactTW, $contactPhone, $contactID)
      {
        $req = $this->database->prepare("UPDATE contact SET contactEmail = :contactEmail, contactFB = :contactFB, contactTW = :contactTW, contactPhone = :contactPhone, contactID = :contactID WHERE contactID = :contactID");
          $req->bindParam(":contactEmail", $contactEmail);
          $req->bindParam(":contactFB", $contactFB);
          $req->bindParam(":contactTW", $contactTW);
          $req->bindParam(":contactPhone", $contactPhone);
          $req->bindParam(":contactID", $contactID);

            return $req->execute();
        }
  }

 ?>
