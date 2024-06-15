<?php

class User
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createUser( $user_last_name, $user_first_name, $user_email, $user_name, $user_type_id, $user_password)
      {
        $req = $this->database->prepare("INSERT INTO User(user_last_name, user_first_name, user_email, user_name, user_type_id, user_password) VALUES (:user_last_name, :user_first_name, :user_email, :user_name, :user_type_id, :user_password)");
          $req->bindParam(":user_last_name", $user_last_name);
          $req->bindParam(":user_first_name", $user_first_name);
          $req->bindParam(":user_email", $user_email);
          $req->bindParam(":user_name", $user_name);
          $req->bindParam(":user_type_id", $user_type_id);
          $req->bindParam(":user_password", $user_password);

            return $req->execute();
      }
    public function readUser()
      {
        $req = $this->database->prepare("SELECT * FROM User INNER JOIN User_type ON User.user_type_id = User_type.user_type_id");
			    $req->execute();

			      return $req->fetchAll();
      }
    public function updateUser($user_id, $user_photo, $user_last_name, $user_first_name, $user_email, $user_name, $user_diplome, $user_certificat, $user_password, $user_type_id)
      {
        //var_dump($categoryName, $categoryDescription, $categoryID);
        //die();
        $req = $this->database->prepare("UPDATE User SET user_id = :user_id, user_photo = :user_photo, user_last_name = :user_last_name, user_first_name = :user_first_name, user_email = :user_email, user_name = :user_name, user_diplome = :user_diplome, user_certificat = :user_certificat, user_password = :user_password, user_type_id = :user_type_id WHERE user_id = :user_id");
        $req->bindParam(":user_id", $user_id);
        $req->bindParam(":user_photo", $user_photo);
        $req->bindParam(":user_last_name", $user_last_name);
        $req->bindParam(":user_first_name", $user_first_name);
        $req->bindParam(":user_email", $user_email);
        $req->bindParam(":user_name", $user_name);
        $req->bindParam(":user_diplome", $user_diplome);
        $req->bindParam(":user_certificat", $user_certificat);
        $req->bindParam(":user_password", $user_password);
        $req->bindParam(":user_type_id", $user_type_id);

        $result = $req->execute();

          return $result;
      }
    public function deleteUser($user_id)
      {
        $req = $this->database->prepare("DELETE FROM User WHERE user_id = ?");

            return $req->execute([$user_id]);
      }



    public function readUserByName($user_name)
      {
        $req = $this->database->prepare("SELECT count(*) FROM User where user_name = '".$user_name."'");
  		    $req->execute();

  			    return $req->fetch();
      }
    public function readUserByEmail($user_email)
      {
        $req = $this->database->prepare("SELECT count(*) FROM User where user_email = '".$user_email."'");
  		    $req->execute();

  			    return $req->fetch();
      }

    public function readUserByID($user_id)
      {
        $req = $this->database->prepare('SELECT * FROM User WHERE user_id = ?');
          $req->execute([$user_id]);

            return $req->fetch();
      }

    public function readUserByStudent()
      {
        $req = $this->database->prepare('SELECT * FROM User INNER JOIN User_type ON User.user_type_id = User_type.user_type_id WHERE User_type.user_type_name LIKE "S%" ');
          $req->execute();

            return $req->fetchAll();
      }
    public function readUserByTeacher()
        {
          $req = $this->database->prepare('SELECT * FROM User INNER JOIN User_type ON User.user_type_id = User_type.user_type_id WHERE User_type.user_type_name LIKE "T%" ');
            $req->execute();

              return $req->fetchAll();
        }
    public function readUserByWritter()
        {
          $req = $this->database->prepare('SELECT * FROM User INNER JOIN User_type ON User.user_type_id = User_type.user_type_id WHERE User_type.user_type_name LIKE "W%" ');
            $req->execute();

              return $req->fetchAll();
        }


    public function checkUserLogin($user_name, $user_password)
      {
          $req = $this->database->prepare('SELECT * FROM User INNER JOIN User_type ON User.user_type_id = User_type.user_type_id WHERE User.user_name = ? AND user.user_password = ?');
          $req->execute([$user_name, $user_password]);

            return $req->fetch();
      }

  }

?>
