<?php
function PasswordHash($user_password){
  return password_hash($user_password, PASSWORD_DEFAULT);
}
?>
