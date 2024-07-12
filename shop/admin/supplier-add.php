<?php

session_start();

// cek apakah user belum login
if (!isset($_SESSION['staff_id'])) {
  header("Location: ./login.php");
  exit();
}

// cek apakah peran user bukan administrator
if ($_SESSION['role_name'] != 'administrator') {
  header("Location: ./index.php");
  exit();
}

require_once('../data/supplier.php');
require_once('../libs/validation.php');

// inisialisasi variabel untuk menyimpan error dan inputan user
$errors = [];
$old_inputs = [
  'name' => '',
  'phone' => '',
  'address' => '',
];

// cek apakah tombol submit ditekan
if (isset($_POST['submit'])) {
  validate_name($errors, $_POST, 'name');
  validate_phone($errors, $_POST, 'phone');
  validate_address($errors, $_POST, 'address');

  // cek apakah tidak ada error
  if (!$errors) {
    save_supplier($_POST);
    header('Location: ./suppliers.php');
    exit();
  }

  $old_inputs['name'] = htmlspecialchars($_POST['name']);
  $old_inputs['phone'] = htmlspecialchars($_POST['phone']);
  $old_inputs['address'] = htmlspecialchars($_POST['address']);
}

// inisialisasi variabel untuk halaman dan komponen header
$page = 'suppliers';
$title = 'Tambah Pemasok';
require('layouts/header.php');

?>

<!-- css customs -->
<link rel="stylesheet" href="../assets/css/admin/page-single.css">

<!-- your content in here -->
<div class="admin">
  <div class="admin__header">
    <div class="admin__back">
      <i class="ph-bold ph-arrow-left"></i>
      <a href="./suppliers.php">Назад</a>
    </div>
    <h1 class="admin__title">Добавить поставщика</h1>
  </div>
  <div class="admin__body">
    <div class="admin__card">
      <form action="./supplier-add.php" method="post" class="page-single">
        <div>
          <label for="name" class="input-label">Имя <span class="text-danger">*</span></label>
          <input type="text" id="name" name="name" class="input" value="<?= $old_inputs['name'] ?>" />
          <?php if (isset($errors['name'])) : ?>
            <div class="input-error">
              <?= $errors['name'] ?>
            </div>
          <?php endif; ?>
        </div>
        <div>
          <label for="phone" class="input-label">Телефон <span class="text-danger">*</span></label>
          <input type="text" id="phone" name="phone" class="input" value="<?= $old_inputs['phone'] ?>" />
          <?php if (isset($errors['phone'])) : ?>
            <div class="input-error">
              <?= $errors['phone'] ?>
            </div>
          <?php endif; ?>
        </div>
        <div>
          <label for="address" class="input-label">Адрес <span class="text-danger">*</span></label>
          <input type="text" id="address" name="address" class="input" value="<?= $old_inputs['address'] ?>" />
          <?php if (isset($errors['address'])) : ?>
            <div class="input-error">
              <?= $errors['address'] ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="page-single__actions">
          <a href="./suppliers.php" class="page-single__button">Отмена</a>
          <button type="submit" name="submit" class="page-single__button page-single__button_primary">
            Добавить
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end your content in here -->

<?php

// komponen footer
require('layouts/footer.php');

?>