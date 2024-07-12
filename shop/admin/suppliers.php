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

$suppliers = get_suppliers();

// inisialisasi variabel untuk halaman dan komponen header
$page = 'suppliers';
$title = 'Поставщики';
require('layouts/header.php');

?>

<!-- your content in here -->
<div class="admin">
  <div class="admin__header">
    <h1 class="admin__title">Поставщики</h1>
    <div class="admin__actions">
      <a href="./supplier-add.php" class="admin__button">Добавить поставщика</a>
    </div>
  </div>
  <div class="admin__body">
    <div class="admin__card">
      <table>
        <thead>
          <tr>
            <th>N</th>
            <th>Имя</th>
            <th>Телефон</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($suppliers as $i => $supplier) : ?>
            <tr>
              <td><?= $i + 1 ?>.</td>
              <td>
                <a href="./supplier-single.php?supplier_id=<?= $supplier['supplier_id'] ?>"><?= $supplier['supplier_name'] ?></a>
              </td>
              <td><?= $supplier['supplier_phone'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- end your content in here -->

<?php

// komponen footer
require('layouts/footer.php');

?>