<?php

  include("../../../database/database.php");
  include("../../../Models/Categories/sub-category/sub-categoryModel.php");


  if (isset($_POST['action']))

  {
    $subcategoryController = new SubcategoryController($database);
    switch ($_POST['action']){
      case 'create': $subcategoryController->create();
        break;
      case 'delete': $subcategoryController->delete();
        break;
      case 'update': $subcategoryController->update();
        break;

      default:
          header();
          break;
        }
    }

    class SubcategoryController{
      private $subcategory;

      public function __construct($database){
        $this->subcategory = new Subcategory($database);
      }
      public function create(){

        $count = $this->subcategory->readSubcategoryByName($_POST['category_sub_name']);

      if($count[0] === '1'){

          echo "<script>alert('La Sous-Catégorie existe déjà !')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?sub-categories','_self')</script>";
      }else{

        $this->subcategory->createSubcategory($_POST['category_sub_name'], $_POST['category_sub_description'], $_POST['category_id']);
          echo "<script>alert('Félicitation la Sous-Catégorie a bien été Créée')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?sub-categories','_self')</script>";
            }
      }
      public function delete(){
        $this->subcategory->deleteSubcategory($_POST['deleteSubcategory']);
          echo "<script>alert('La Sous-Catégorie a bien été Supprimée')</script>";
          echo "<script>window.open('../../../View/Admin/index.php?sub-categories','_self')</script>";
      }
      public function update(){
        $this->subcategory->updateSubcategory($_POST["category_sub_name"], $_POST["category_sub_description"], $_POST["category_id"], $_POST["category_sub_id"]);
            echo "<script>alert('La Sous-Catégorie a bien été Modifiée')</script>";
            echo "<script>window.open('../../../View/Admin/index.php?sub-categories','_self')</script>";
      }

  }

?>
