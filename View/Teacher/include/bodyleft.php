<div id="bodyleft" class="">
  <h3>My Manager</h3>
  <ul>
    <li><a href="index.php">Dashboard</a></li>
    <li><a href="index.php?cours">Mes cours</a></li>
    <li><a href="index.php?creer-cours">Creer un cours</a></li>
    <li><a href="index.php?recap-profil">Recapitulatif de mon profil</a></li>
    <li><a href="index.php?modif-profil">Modifier mon profil</a></li>
    <li><a href="index?setting">Setting</a></li>
  </ul>
</div>

<?php
  if(isset($_GET['dashboard'])){
    include("dashboard.php");
  }
  if(isset($_GET['cours'])){
    include("cours.php");
  }
  if(isset($_GET['creer-cours'])){
    include("creer-cours.php");
  }
  if(isset($_GET['recap-profil'])){
    include("recap-profil.php");
  }
  if(isset($_GET['modif-profil'])){
    include("modif-profil.php");
  }
  if(isset($_GET['setting'])){
    include("setting.php");
  }
?>
