<?php

class Message
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createMessage($message_name, $message_email, $message_sujet, $message_content)
      {
        $req = $this->database->prepare("INSERT INTO message(message_name, message_email, message_sujet, message_content) VALUES (:message_name, :message_email, :message_sujet, :message_content)");
          $req->bindParam(":message_name", $message_name);
          $req->bindParam(":message_email", $message_email);
          $req->bindParam(":message_sujet", $message_sujet);
          $req->bindParam(":message_content", $message_content);

           return $req->execute();
      }
    public function readMessage()
      {
        $req = $this->database->prepare("SELECT * FROM message");
          $req->execute();

            return $req->fetchAll();
      }
    public function deleteMessage($message_id)
     {
        $req = $this->database->prepare("DELETE FROM message WHERE message_id = ?");

            return $req->execute([$message_id]);
      }

   }

 ?>
