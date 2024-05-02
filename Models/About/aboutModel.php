<?php

class About
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }

    public function readAbout()
      {
        $req = $this->database->prepare("SELECT * FROM About");
			    $req->execute();

			      return $req->fetchAll();
      }
    public function updateAbout($about_summary, $about_content, $about_id)
      {
        $req = $this->database->prepare("UPDATE About SET about_summary = :about_summary, about_content = :about_content, about_id = :about_id WHERE about_id = :about_id");
          $req->bindParam(":about_summary", $about_summary);
          $req->bindParam(":about_content", $about_content);
          $req->bindParam(":about_id", $about_id);

            return $req->execute();
        }
  }

 ?>
