<?php

session_start();

// cek apakah cust sudah login
if (!isset($_SESSION['customer_id'])) {
  header("Location: ./login.php");
  exit();
}

// import func untuk CRUD informasi dari cart
require_once('data/cart-item.php');

// ambil isi keranjang cust
$cart_items = get_cart_items_with_plant_with_category($_SESSION['customer_id']);

// HEADER
$title = 'Корзина';
require('layouts/header.php');

?>

<!-- css customs -->
<link rel="stylesheet" href="./assets/css/cart.css">

<!-- content -->
<main>
  <!-- cart -->
  <div class="cart container">
    <div class="section-header">
      <h2>Корзина</h2>
    </div>
    <div class="cart__body">
      <div class="cart__list">
        <?php $total = 0; ?>
        <?php foreach ($cart_items as $cart_item) : ?>
          <?php
          $subtotal =  $cart_item['plant_price'] * $cart_item['cart_item_qty'];
          $total += $subtotal;
          ?>
          <div class="cart__item">
            <div class="cart__item-left">
              <img src="./assets/img/plants/<?= $cart_item['plant_photo'] ?>" alt="<?= $cart_item['plant_name'] ?>" />
              <div class="cart__item-left-text">
                <h2><?= $cart_item['plant_name'] ?></h2>
                <p><?= $cart_item['category_name'] ?></p>
                <form action="./update-cart-item.php" method="post" class="cart__actions">
                  <input type="hidden" name="plant_id" value="<?= $cart_item['plant_id'] ?>">
                  <button type="submit" name="reduce" class="cart__action-button">
                    <i class="ph ph-minus"></i>
                  </button>
                  <span class="cart__action-text"><?= $cart_item['cart_item_qty'] ?></span>
                  <button type="submit" name="add" class="cart__action-button">
                    <i class="ph ph-plus"></i>
                  </button>
                  <span>x ₽<?= number_format($cart_item['plant_price']) ?></span>
                </form>
              </div>
            </div>
            <form action="./delete-cart-item.php" method="post" class="cart__item-right">
              <input type="hidden" name="plant_id" value="<?= $cart_item['plant_id'] ?>">
              <button type="submit" name="submit">
                <i class="ph ph-x"></i>
              </button>
              <p>₽<?= number_format($subtotal) ?></p>
            </form>
          </div>
          <hr />
        <?php endforeach; ?>
        <?php if (!empty($cart_items)) : ?>
          <div class="cart__item">
            <div class="cart__item-left">
              <h2>Всего</h2>
            </div>
            <div class="cart__item-right">
              <p>₽<?= number_format($total) ?></p>
            </div>
          </div>
        <?php else : ?>
          <div class="cart__item">
            <div class="cart__item-left">
              <h2>Корзина пуста</h2>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <?php if (!empty($cart_items)) : ?>
        <a href="./checkout.php" class="cart__button">Готово</a>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php

require('layouts/footer.php');

?>