<?php

class Category
  {

    private $database;
    public function __construct($database)
      {
        $this->database = $database;
      }
    public function createCategory($category_logo, $category_name, $category_description)
      {
        $req = $this->database->prepare("INSERT INTO Category(category_logo, category_name, category_description) VALUES (:category_logo, :category_name, :category_description)");
          $req->bindParam(":category_logo", $category_logo);
          $req->bindParam(":category_name", $category_name);
          $req->bindParam(":category_description", $category_description);

            return $req->execute();
      }
    public function readCategory()
      {
        $req = $this->database->prepare("SELECT * FROM category");
			    $req->execute();

			      return $req->fetchAll();
      }
    public function updateCategory($category_logo, $category_name, $category_description, $category_id)
      {
        //var_dump($categoryName, $categoryDescription, $categoryID);
        //die();
        $req = $this->database->prepare("UPDATE Category SET category_logo = :category_logo, category_name = :category_name, category_description = :category_description WHERE category_id = :category_id");
          $req->bindParam(":category_logo", $category_logo);
          $req->bindParam(":category_name", $category_name);
          $req->bindParam(":category_description", $category_description);
          $req->bindParam(":category_id", $category_id);

            return $req->execute();
      }
    public function deleteCategory($category_id)
      {
        $req = $this->database->prepare("DELETE FROM Category WHERE category_id = ?");

            return $req->execute([$category_id]);
      }

//autres fonctions
    public function readCategoryByName($category_name)
      {
        $req = $this->database->prepare("SELECT count(*) FROM Category where category_name = '".$category_name."'");
  		    $req->execute();

  			    return $req->fetch();
      }
    public function readCategoryByID($category_id)
      {
        $req = $this->database->prepare('SELECT * FROM Category WHERE category_id = ?');
          $req->execute([$category_id]);

            return $req->fetch();
      }

  }

 ?>
