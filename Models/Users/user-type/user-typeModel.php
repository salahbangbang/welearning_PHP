<?php

class UserType
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createUsertype($user_type_name, $user_type_description)
      {
        $req = $this->database->prepare("INSERT INTO User_type(user_type_name, user_type_description) VALUES (:user_type_name, :user_type_description)");
          $req->bindParam(":user_type_name", $user_type_name);
          $req->bindParam(":user_type_description", $user_type_description);

            return $req->execute();
      }
    public function readUsertype()
      {
        $req = $this->database->prepare("SELECT * FROM User_type");
			    $req->execute();

			      return $req->fetchAll();
      }

    public function updateUsertype($user_type_name, $user_type_description, $user_type_id)
      {
        //var_dump($categoryName, $categoryDescription, $categoryID);
        //die();
        $req = $this->database->prepare("UPDATE User_type SET user_type_name = :user_type_name, user_type_description = :user_type_description WHERE user_type_id = :user_type_id");
          $req->bindParam(":user_type_name", $user_type_name);
          $req->bindParam(":user_type_description", $user_type_description);
          $req->bindParam(":user_type_id", $user_type_id);

            return $req->execute();
      }
    public function deleteUsertype($user_type_id)
      {
        $req = $this->database->prepare("DELETE FROM User_type WHERE user_type_id = ?");

            return $req->execute([$user_type_id]);
      }

//autres fonctions
    public function readUsertypeByName($user_type_name)
      {
        $req = $this->database->prepare("SELECT count(*) FROM User_type WHERE user_type_name = '".$user_type_name."'");
  		    $req->execute();

  			    return $req->fetch();
      }
    public function readUsertypeByID($user_type_id)
      {
        $req = $this->database->prepare('SELECT * FROM User_type WHERE user_type_id = ?');
          $req->execute([$user_type_id]);

            return $req->fetch();
      }

    public function readUsertypeSTW()
      {
       //$req = $this->database->prepare("SELECT * FROM user_type WHERE user_typeName IN ('Student', 'Teacher', 'Writter')");
        $req = $this->database->prepare("SELECT * FROM User_type WHERE user_type_name LIKE 'S%' OR user_type_name LIKE 'T%' OR user_type_name LIKE 'W%'");
     }

  }

 ?>
