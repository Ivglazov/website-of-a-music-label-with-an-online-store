<?php

session_start();

// cek apakah cust sudah login
if (isset($_SESSION['customer_id'])) {
  header("Location: ./products.php");
  exit();
}

require_once('data/customer.php');
require_once('libs/validation.php');

// LIST TEMP ERROR
$errors = [];
// LIST TEMP INPUTAN USER
$old_inputs = [
  'name' => '',
  'phone' => '',
  'email' => '',
];

// JIKA TOMBOL DAFTAR (SUBMIT) DIKLIK
if (isset($_POST['submit'])) {
  // DI VALIDASI
  validate_name($errors, $_POST, 'name');
  validate_phone($errors, $_POST, 'phone');
  validate_email_customer($errors, $_POST, 'email');
  validate_password($errors, $_POST, 'password');

  // JIKA TIDAK ADA YANG ERROR
  if (!$errors) {
    // SIMPAN / BUAT DATA CUST BERDASAR INPUTAN
    save_customer($_POST);
    // ARAHKAN KE HAL. LOGIN
    header('Location: ./login.php?success_message=Akun+berhasil+dibuat,+silahkan+login!');
    exit();
  }

  // ISI OLD INPUT DENGAN INPUTAN USER
  $old_inputs['name'] = htmlspecialchars($_POST['name']);
  $old_inputs['phone'] = htmlspecialchars($_POST['phone']);
  $old_inputs['email'] = htmlspecialchars($_POST['email']);
}

// HEADER
$title = 'Регистрация';
require('layouts/header.php');

?>

<!-- css customs -->
<link rel="stylesheet" href="./assets/css/register.css">

<!-- content -->
<main>
  <!-- register -->
  <div class="register container">
    <!-- FORM -->
    <form action="./register.php" method="post" class="register__form">
      <h1>Регистрация</h1>
      <div>
        <!-- NAMA -->
        <label for="name" class="input-label">Имя <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name" class="input" value="<?= $old_inputs['name'] ?>" />
        <!-- ERR MSG NAMA -->
        <?php if (isset($errors['name'])) : ?>
          <div class="input-error"><?= $errors['name'] ?></div>
        <?php endif ?>
      </div>
      <div>
        <!-- EMAIL -->
        <label for="email" class="input-label">Email <span class="text-danger">*</span></label>
        <input type="text" name="email" id="email" class="input" value="<?= $old_inputs['email'] ?>" />
        <!-- ERR MSG EMAIL -->
        <?php if (isset($errors['email'])) : ?>
          <div class="input-error"><?= $errors['email'] ?></div>
        <?php endif ?>
      </div>
      <div>
        <!-- TELEPHONE -->
        <label for="phone" class="input-label">Телефон <span class="text-danger">*</span></label>
        <input type="text" name="phone" id="phone" class="input" value="<?= $old_inputs['phone'] ?>" />
        <!-- ERR MSG TELEPHONE -->
        <?php if (isset($errors['phone'])) : ?>
          <div class="input-error"><?= $errors['phone'] ?></div>
        <?php endif ?>
      </div>
      <div>
        <!-- PASSWORD -->
        <label for="password" class="input-label">Пароль <span class="text-danger">*</span></label>
        <input type="password" name="password" id="password" class="input" />
        <!-- FORMAT PASSWORD -->
        <div class="input-help">Пароль должен содержать 8-16 символов, включающих как минимум 1 заглавную букву, 1 строчную букву, 1 специальный символ, и не должен содержать пробелов!</div>
        <!-- ERR MSG PASSWORD -->
        <?php if (isset($errors['password'])) : ?>
          <div class="input-error"><?= $errors['password'] ?></div>
        <?php endif ?>
      </div>
      <!-- TOMBOL DAFTAR (SUBMIT) -->
      <button type="submit" name="submit" class="register__button">Регистрация</button>
      <!-- LINK HAL.LOGIN -->
      <p>
      У вас уже есть учетная запись? <a href="./login.php">Авторизоваться</a>
      </p>
      <!-- LINK LOGIN STAFF -->
    </form>
  </div>
  <!-- end register -->
</main>
<!-- end content -->

<?php

// FOOTER
require('layouts/footer.php');

?>