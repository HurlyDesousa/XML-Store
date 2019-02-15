<?php
//Prologue of login.inc.php:
//This page is in an includes folder an runs only php code. It sets the session as logged in so the user is logged in.
if (isset($_POST['login-submit'])) {

  include 'dbh.inc.php';

  $user = $_POST['user'];
  $password = $_POST['pwd'];

  if (empty($user) || empty($password)) {
    header("Location: ../store.php?error=emptyfieldslogin");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE username=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../store.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $user);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {
        if (!$password == $row['userpassword']) {
          header("Location: ../store.php?error=wrongpwd");
          exit();
        }
        elseif ($password == $row['userpassword']) {
          session_start();
          $_SESSION['userIdSession'] = $row['userId'];

          header("Location: ../store.php?login=success");
          exit();

        } else {
          header("Location: ../store.php?error=wrongpwd");
          exit();
        }
      } else {
        header("Location: ../store.php?error=nouser");
        exit();
      }

    }
  }

}
else {
  header("Loaction: ../store.php");
  exit();
}
