
<?php
  $password = 'Sandeep';
  $hash = password_hash($password, PASSWORD_DEFAULT);
  echo password_hash($password, PASSWORD_DEFAULT);
if (password_verify($password, $hash)) {
    echo "password matched";
}
else {
    echo "Invalid credentials";
}
?>