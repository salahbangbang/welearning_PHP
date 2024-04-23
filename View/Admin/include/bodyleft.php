<div id="bodyleft" class="">
  <h3>Cours Manager</h3>
  <ul>
    <li><a href="index.php?dashboard">Dashboard</a></li>
    <li><a href="index.php?categories">Cours Categorie</a></li>
    <li><a href="index.php?sub-categories">Cours Sous-Categorie</a></li>
  </ul>
  <h3>Contenue Managment</h3>
  <ul>
    <li><a href="#">Cours Actifs</a></li>
    <li><a href="#">Blogs Actifs</a></li>
  </ul>
  <h3>Newsletter & Messages</h3>
  <ul>
    <li><a href="index.php?newsletter">View All Newsletters</a></li>
    <li><a href="index.php?message">View All Messages</a></li>
  </ul>
  <h3>User Managment</h3>
  <ul>
    <li><a href="index.php?user">View All Users</a></li></li>
    <li><a href="index.php?user-student">View All Students</a></li>
    <li><a href="index.php?user-teacher">View All Teachers</a></li>
    <li><a href="index.php?">View All Writters</a></li>
    <li><a href="index.php?user-type">View All User Type</a></li>
  </ul>
  <h3>Pages Managment</h3>
  <ul>
    <li><a href="index.php?terms">Terms & Conditions</a></li>
    <li><a href="index.php?contact">Contact Us</a></li>
    <li><a href="index.php?about">About Us</a></li>
    <li><a href="index.php?faq">F.A.Q</a></li>
  </ul>
</div>

<?php
  if(isset($_GET['categories'])){
    include("categories.php");
  }
  if(isset($_GET['sub-categories'])){
    include("sub-categories.php");
  }


  if(isset($_GET['newsletter'])){
    include("newsletter.php");
  }
  if(isset($_GET['message'])){
    include("message.php");
  }

  if(isset($_GET['user'])){
    include("user.php");
  }
  if(isset($_GET['user-student'])){
    include("user-student.php");
  }
  if(isset($_GET['user-teacher'])){
    include("user-teacher.php");
  }
  if(isset($_GET['user-type'])){
    include("user-type.php");
  }



  if(isset($_GET['terms'])){
    include("terms.php");
  }
  if(isset($_GET['contact'])){
    include("contact.php");
  }
  if(isset($_GET['about'])){
    include("about.php");
  }
  if(isset($_GET['faq'])){
    include("faq.php");
  }



  if(isset($_GET['updateCategory'])){
    include("updateCategory.php");
  }
  if(isset($_GET['updateSubcategory'])){
    include("updateSubcategory.php");
  }

  if(isset($_GET['updateUsertype'])){
    include("updateUsertype.php");
  }

  if(isset($_GET['updateTerm'])){
    include("updateTerm.php");
  }
?>
