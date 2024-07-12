<!DOCTYPE html>
<html lang="ru" >
<head>
  <meta charset="UTF-8">
  <title>Дискография</title>
  <link rel="stylesheet" href="./css/disco.css">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


</head>
<body>
<!-- partial:index.partial.html -->
<!-- about -->
<div class="about">
   <a class="bg_links social portfolio" href="" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social dribbble" href="" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social linkedin" href="" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links logo"></a>
</div>
<!-- end about -->

<nav class="mainNav">
   <div class="mainNav__logo">SLabel</div>
   <div class="mainNav__links">
   <a href="index.php" class="mainNav__link">Главная</a>
      <a href="disco.php" class="mainNav__link">Дискография</a>
      <a href="for_artist.php" class="mainNav__link">Стать артистом</a>
      <a href="shop/index.php" class="mainNav__link">Магазин</a>
   </div>
   <div class="mainNav__icon">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
         <g data-name="Layer 2" fill="#9197AE">
            <g data-name="menu-2">
               <rect
                  width="24"
                  height="24"
                  transform="rotate(180 12 12)"
                  opacity="0"
               />
               <circle cx="4" cy="12" r="1" />
               <rect x="7" y="11" width="14" height="2" rx=".94" ry=".94" />
               <rect x="3" y="16" width="18" height="2" rx=".94" ry=".94" />
               <rect x="3" y="6" width="18" height="2" rx=".94" ry=".94" />
            </g>
         </g>
      </svg>
   </div>
</nav>
<header class="mainHeading">
   <div class="mainHeading__content">
      <article class="mainHeading__text">
         <p class="mainHeading__preTitle">Стать артистом</p>
         <h2 class="mainHeading__title">присоединиться к нашему лейблу</h2>
         <p class="mainHeading__description">
            Заполните форму ниже и ожидайте обратной связи (средний срок: 2 - 4 недели)
         </p>
      </article>

      <figure class="mainHeading__image">
         <img
            src="images/artist.png"
            alt=""
         />
      </figure>
   </div>
</header>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
  <div class="wrapper wrapper--w780">
      <div class="card1 card-3">
          <div class="card-heading"></div>
          <div class="card-body">
              <h2 class="title">Стать артистом</h2>
              <form method="POST">
                  <div class="input-group">
                      <input class="input--style-3" type="text" placeholder="Как к Вам обращаться?" name="name">
                  </div>
                  <div class="input-group">
                    <input class="input--style-3" type="text" placeholder="Ваш сценический псевдоним" name="name">
                  </div>
                  <div class="input-group">
                    <input class="input--style-3" type="text" placeholder="Ссылка на демозаписи" name="name">
                  </div>
                  <div class="input-group">
                      <input class="input--style-3" type="email" placeholder="Email" name="email">
                  </div>
                  <div class="input-group">
                    <label for="story">Расскажите о себе</label>
                    <textarea id="story" name="story" rows="5" cols="33">
                      </textarea>                  
                  </div>
                  <div class="p-t-10">
                      <button class="btn btn--pill btn--green" type="submit">Отправить</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.js'></script><script  src="./js/disco.js"></script>

</body>
</html>
