<?php

session_start();

if (isset($_SESSION['customer_id'])) {
  header("Location: ./products.php");
  exit();
}

require_once('data/customer.php');
require_once('libs/validation.php');

$login_error = null;
$errors = [];
$old_inputs = [
  'email' => '',
];

if (isset($_POST['submit'])) {
  validate_email($errors, $_POST, 'email');
  validate_password($errors, $_POST, 'password');

  if (!$errors) {
    $customer = find_customer($_POST['email']);

    if ($customer) {
      if (password_verify($_POST['password'], $customer['customer_password'])) {
        $_SESSION['customer_id'] = $customer['customer_id'];
        $_SESSION['customer_email'] = $customer['customer_email'];
        header("Location: ./products.php");
        exit();
      }
    }

    $login_error = 'Email или пароль неправильны!';
  }

  $old_inputs['email'] = htmlspecialchars($_POST['email']);
}

$title = 'Логин';
require('layouts/header.php');

?>

<link rel="stylesheet" href="./assets/css/login.css">

<!-- content -->
<main>
  <!-- login -->
  <div class="login container">
    <form action="./login.php" method="post" class="login__left">
      <h1>Логин</h1>
      <!-- ERROR MSG JIKA LOGIN GAGAL -->
      <?php if ($login_error != null) : ?>
        <div class="alert alert_danger">
          <?= $login_error; ?>
        </div>
      <?php endif; ?>
      <!-- SUCCES MSG JIKA LOGIN BERHASIL -->
      <?php if (isset($_GET['success_message'])) : ?>
        <div class="alert alert_success">
          <?= $_GET['success_message']; ?>
        </div>
      <?php endif; ?>
      <!-- INPUT EMAIL -->
      <div>
        <label for="email" class="input-label">Email <span class="text-danger">*</span></label>
        <input type="text" name="email" id="email" class="input" value="<?= $old_inputs['email'] ?>" />
        <!-- ERR MSG EMAIL -->
        <?php if (isset($errors['email'])) : ?>
          <div class="input-error"><?= $errors['email'] ?></div>
        <?php endif; ?>
      </div>
      <!-- INPUT PASSWORD -->
      <div>
        <label for="password" class="input-label">Пароль <span class="text-danger">*</span></label>
        <input type="password" name="password" id="password" class="input" />
        <div class="input-help">Пароль должен содержать 8-16 символов, включающих как минимум 1 заглавную букву, 1 строчную букву, 1 специальный символ, и не должен содержать пробелов!</div>
        <!-- ERR MSG PASSWORD -->
        <?php if (isset($errors['password'])) : ?>
          <div class="input-error"><?= $errors['password'] ?></div>
        <?php endif; ?>
      </div>
      <!-- TOMBOL MASUK -->
      <button type="submit" name="submit" class="login__button">Логин</button>
      <!-- LINK REGISTER CUST -->
      <p>У Вас нет учетной записи? <a href="./register.php">Зарегистрироваться</a></p>
      <!-- LINK LOGIN STAFF -->
    </form>
    <div class="login__right">
      <img src="./assets/img/plant-illustration.jpeg" alt="" />
    </div>
  </div>
  <!-- end login -->
</main>
<!-- end content -->

<?php

// FOOTER
require('layouts/footer.php');

?>