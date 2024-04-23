<?php
  //session_start();
?>

<div id="header" class="header">
  <div id="logo" class="">
    <h1><a href="../Home.php">WeLearn.com</a></h1>
  </div>
  <div id="title" class="">
    <h2><?php echo $_SESSION['infoUser']['user_first_name'] .' ' .$_SESSION['infoUser']['user_last_name'];?>'s Page</h2>
  </div>
  <div id="link" class="">
    <form class="" action="../../Controllers/Users/user/userController.php" method="post">
      <button class="" onclick="clicked(event)">Logout</button>
        <input type="hidden" name="action" value="logout">
      </form>
  </div>
</div>

<script>
function clicked(e)
{
    if(!confirm('Voulez-vous vraiment vous deconnecté(e) ?')) {
        e.preventDefault();
    }
}
</script>
