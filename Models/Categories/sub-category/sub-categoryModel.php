<?php

class Subcategory
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createSubcategory($category_sub_name, $category_sub_description, $category_id)
      {
        $req = $this->database->prepare("INSERT INTO Category_sub(category_sub_name, category_sub_description, category_id) VALUES (:category_sub_name, :category_sub_description, :category_id)");
          $req->bindParam(":category_sub_name", $category_sub_name);
          $req->bindParam(":category_sub_description", $category_sub_description);
          $req->bindParam(":category_id", $category_id);

            return $req->execute();
      }
    public function readSubcategory()
      {
        $req = $this->database->prepare("SELECT * FROM category_sub");
			    $req->execute();

			      return $req->fetchAll();
      }
    public function updateSubcategory($category_sub_name, $category_sub_description, $category_id, $category_sub_id)
      {
        $req = $this->database->prepare("UPDATE Category_sub SET category_sub_name = :category_sub_name, category_sub_description = :category_sub_description, category_id = :category_id ,category_sub_id = :category_sub_id WHERE category_sub_id = :category_sub_id");
          $req->bindParam(":category_sub_name", $category_sub_name);
          $req->bindParam(":category_sub_description", $category_sub_description);
          $req->bindParam(":category_id", $category_id);
          $req->bindParam(":category_sub_id", $category_sub_id);

            return $req->execute();
      }
    public function deleteSubcategory($category_sub_id)
      {
        $req = $this->database->prepare("DELETE FROM Category_sub WHERE category_sub_id = ?");

            return $req->execute([$category_sub_id]);
      }

//autres fonctions
    public function allSubcategoryByCategory()
      {
        $req = $this->database->prepare("SELECT * FROM Category_sub INNER JOIN category ON category.category_id = category_sub.category_id WHERE category.category_id = category_sub.category_id");
          $req->execute();

            return $req->fetchAll();
      }
    public function readSubcategoryByName($category_sub_name)
      {
        $req = $this->database->prepare("SELECT count(*) FROM category_sub where category_sub_name = '".$category_sub_name."'");
  		    $req->execute();

  		      return $req->fetch();
      }
    public function readSubcategoryByID($category_sub_id)
      {
        $req = $this->database->prepare('SELECT * FROM category_sub WHERE category_sub_id = ?');
          $req->execute([$category_sub_id]);

            return $req->fetch();
      }
  }

 ?>
