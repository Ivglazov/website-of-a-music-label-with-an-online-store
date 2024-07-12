<?php

error_reporting(E_ALL);
session_start();

if (!isset($_SESSION['customer_id'])) {
  header("Location: ./login.php");
  exit();
}

require_once("config/database.php");
require_once("libs/validation.php");

$db = new PDO('mysql:host=localhost;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$errors = [];
$success = [];

if (isset($_POST['ubahpass'])) {
  validate_password($errors, $_POST, 'password');

  if (!$errors) {
    if ($_POST['password'] == $_POST['confirm_password']) {
      $ubahpass = $db->prepare("UPDATE customers SET customer_password = :pwd WHERE customer_id = :custid ");
      $ubahpass->bindValue(":pwd", password_hash(trim($_POST['password']), PASSWORD_DEFAULT));
      $ubahpass->bindValue(":custid", $_SESSION['customer_id']);
      $ubahpass->execute();
      $success['berhasil'] = "ОШИБКА";
      $_POST['password'] = '';
    } else {
      $errors['confirm_password'] = 'ПАРОЛЬ ИЗМЕНЕН';
    }
  }
}

$title = 'Изменение пароля';
require('layouts/header.php');

?>

<link rel="stylesheet" href="./assets/css/profile.css">

<main>
  <!-- profile -->
  <div class="profile container">
    <div class="profile__header">
      <h1>Изменить пароль</h1>
    </div>
    <div class="profile__body">

      <form action="./change-password.php" method="post" class="profile__right">
        <!-- JIKA SUDAH BERHASIL MENGUBAH PASSWORD -->
        <?php if (isset($success['berhasil'])) {
          echo "<div class='alert alert_success'> {$success['berhasil']} </div>";
        } ?>
        <div class="profile__form">
          <div>
            <!-- INPUT PASSWORD -->
            <label for="password" class="input-label">Новый пароль <span class="text-danger">*</span></label>
            <input type="password" id="password" name="password" class="input" value="<?= isset($_POST['password']) ? $_POST['password'] : ''  ?>" />
            <!-- FORMAT -->
            <div class="input-help">Пароль должен содержать 8-16 символов, включающих как минимум 1 заглавную букву, 1 строчную букву, 1 специальный символ, и не должен содержать пробелов!</div>
            <!-- ERR MESSAGE -->
            <div class="input-error"><?= isset($errors['password']) ? $errors['password'] : '' ?></div>
          </div>
          <div>
            <!-- INPUT CONFIRM PASSWORD -->
            <label for="confirm_password" class="input-label">Повторите пароль <span class="text-danger">*</span></label>
            <input type="password" id="confirm_password" name="confirm_password" class="input" />
            <!-- ERR MESSAGE -->
            <div class="input-error"><?= isset($errors['confirm_password']) ? $errors['confirm_password'] : '' ?></div>
          </div>
          <div>
            <!-- TOMBOL SIMPAN (UBAHPASS) -->
            <button type="submit" name="ubahpass" class="profile__button">Изменить</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- end profile -->
</main>
<!-- end content -->

<?php

// FOOTER
require('layouts/footer.php');

?>