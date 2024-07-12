<?php

session_start();

require('layouts/header.php');

?>

<main>
  <div class="hero container">
    <div class="hero__left">
      <h1 class="hero__title">Добро пожаловать в Slabel.Shop</h1>
      <p class="hero__subtitle">
        Купите мерчендайз любимой группы по самой выгодной цене
      </p>
      <a href="./products.php" class="hero__button">К покупкам</a>
      <a href="../index.php" class="hero__button">На главную</a>
    </div>
    <div class="hero__right">
      <div class="hero__img-group">
        <img src="./assets/img/heros/hero-1.jpg" alt="Field" />
        <img src="./assets/img/heros/hero-2.jpg" alt="Field" />
      </div>
      <div class="hero__img-group">
        <img src="./assets/img/heros/hero-3.jpg" alt="Field" />
        <img src="./assets/img/heros/hero-4.jpg" alt="Field" />
      </div>
    </div>
  </div>
  <div class="promotion">
    <div class="promotion__container container">
      <div class="promotion__left">
        <img src="./assets/img/promotions/promotion-1.jpg" alt="." class="promotion__img" />
        <img src="./assets/img/promotions/promotion-2.jpg" alt="." class="promotion__img" />
      </div>
      <div class="promotion__right">
        <h2 class="promotion__title">
          Покупки у нас - мудрое решение
        </h2>
        <p class="promotion__description">
        Онлайн-магазин музыкального лейбла SLabel — это ваш универсальный источник для поиска и приобретения музыки от ваших любимых исполнителей. Наш магазин предлагает широкий выбор жанров и форматов, включая цифровые загрузки, виниловые пластинки и компакт-диски.

          Преимущества нашего онлайн-магазина:

          • Удобство: Делайте покупки из любой точки мира, в любое время суток.
          • Обширный каталог: Исследуйте широкий выбор музыки от независимых и известных исполнителей.
          • Эксклюзивный контент: Получите доступ к эксклюзивным релизам, бонусному контенту и товарам.
          • Высокое качество звука: Наслаждайтесь великолепным качеством звука с наших цифровых загрузок и физических носителей.
          • Поддержка музыкантов: Каждая покупка напрямую поддерживает музыкантов, помогая им продолжать создавать музыку, которую вы любите.
        </p>
      </div>
    </div>
  </div>
  
</main>
<!-- end content -->

<?php

require('layouts/footer.php');

?>