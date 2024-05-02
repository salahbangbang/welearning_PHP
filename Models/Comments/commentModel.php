<?php

class Comment
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createComment($comment_title, $commment_content, $user_id, $cours_id)
      {
        $req = $this->database->prepare("INSERT INTO Comment(comment_title, commment_content, user_id, cours_id) VALUES (:comment_title, :commment_content, :user_id, :cours_id)");
          $req->bindParam(":comment_title", $comment_title);
          $req->bindParam(":commment_content", $commment_content);
          $req->bindParam(":user_id", $user_id);
          $req->bindParam(":cours_id", $cours_id);


           return $req->execute();
      }
    public function readComment()
      {
        $req = $this->database->prepare("SELECT * FROM Comment");
          $req->execute();

            return $req->fetchAll();
      }
     public function deleteComment($comment_id)
     {
        $req = $this->database->prepare("DELETE FROM Comment WHERE comment_id = ?");

            return $req->execute([$comment_id]);
      }

   }

 ?>
