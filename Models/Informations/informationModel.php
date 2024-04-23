<?php

class Information
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }

    public function readInformation()
      {
        $req = $this->database->prepare("SELECT * FROM information");
			    $req->execute();

			      return $req->fetchAll();
      }
    public function updateInformations($information_email, $information_facebook, $information_twitter, $information_phone, $information_id)
      {
        $req = $this->database->prepare("UPDATE information SET information_email = :information_email, information_facebook = :information_facebook, information_twitter = :information_twitter, information_phone = :information_phone, information_id = :information_id WHERE information_id = :information_id");
          $req->bindParam(":information_email", $information_email);
          $req->bindParam(":information_facebook", $information_facebook);
          $req->bindParam(":information_twitter", $information_twitter);
          $req->bindParam(":information_phone", $information_phone);
          $req->bindParam(":information_id", $information_id  );

            return $req->execute();
        }
  }

 ?>