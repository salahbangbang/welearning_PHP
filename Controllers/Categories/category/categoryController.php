<?php

  include("../../../database/database.php");
  include("../../../Models/Categories/category/categoryModel.php");

  if (isset($_POST['action']))

  {
    $categoryController = new CategoryController($database);
    switch ($_POST['action']){
      case 'create': $categoryController->create();
        break;
      case 'delete': $categoryController->delete();
        break;
      case 'update': $categoryController->update();
        break;

      default:
          header();
          break;
        }
    }

    class CategoryController{
      private $category;

      public function __construct($database){
        $this->category = new Category($database);
      }
      public function create(){

        $count = $this->category->readCategoryByName($_POST['category_name']);

      if($count[0] === '1'){

          echo "<script>alert('La Catégorie existe déjà !')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?categories','_self')</script>";
      }else{

        $this->category->createCategory($_POST['category_logo'], $_POST['category_name'], $_POST['category_description']);
          echo "<script>alert('Félicitation la Catégorie a bien été créée')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?categories','_self')</script>";
            }
      }
      public function delete(){
        $this->category->deleteCategory($_POST['deleteCategory']);
          echo "<script>alert('La Catégorie a bien été Supprimée')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?categories','_self')</script>";
      }
      public function update(){
        $this->category->updateCategory($_POST['category_logo'], $_POST["category_name"], $_POST["category_description"], $_POST["category_id"]);
            echo "<script>alert('La catégorie a bien été modifiée')</script>";
            echo "<script>window.open('../../../View/Admin/index.php?categories','_self')</script>";
      }

  }

?>
