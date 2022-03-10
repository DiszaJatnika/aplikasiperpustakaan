<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/template.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <link rel="stylesheet" href="css/product.css" type="text/css">
    <link rel="stylesheet" href="css/process.css" type="text/css">
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link rel="stylesheet" href="css/about.css" type="text/css">
    <link rel="stylesheet" href="css/network.css" type="text/css">
    <link rel="stylesheet" href="css/splide.min.css" type="text/css">
    <link rel="stylesheet" href="css/pop-up.css" type="text/css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/splide-core.min.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="icon" href="images/logo red.png" type="image/gif"> 
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" type="text/css"/> -->
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <script src="public/js/hamburger-menu.js"></script>
    <!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js" type="text/javascript"></script> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Sakuratex</title>

    <!-- MENU -->
</head>
<body>
    <div class="menu">
        <div class="top-menu">
            <div class="logo">
              <a href="home.php"><img src="image/Logo.png" alt="" ></a>
            </div>
            <div class="menu-icon">
              <div class="icon-email">
                <span class="iconify" data-icon="mdi-light:email"></span>
                <div class="icon-email-content">
                  <h3>Send Email</h3>
                  <p>cs@sakuratex.id</p>
                </div>
              </div>
              <div class="divider"></div>
              <div class="icon-clock">
                <span class="iconify" data-icon="mdi-light:clock"></span>
                <div class="icon-clock-content">
                  <h3>Working Hours</h3>
                  <p>Senin - Jumat 08.00 - 15.00</p>
                </div>
              </div>
              <div class="divider"></div>
              <div class="icon-phone">
              <span class="iconify" data-icon="mdi-light:phone"></span>
                <div class="icon-phone-content">
                  <h3>Butuh Bantuan?</h3>
                  <p>+62 22 520 5888</p>
                </div>
              </div>
            </div>
            <div class="hamburger-menu">
              <input type="checkbox">
               <span></span>
               <span></span>
               <span></span>
            </div>
        </div>
    </div>
    <div class="bottom-menu">
        <div class="page-menu">
            <ul class="menu">
              <li><a href="home.php" class="active">HOME</a></li>
              <li><a href="product.php">PRODUCT</a></li>
              <li><a href="process.php">PROCESS</a></li>
              <li><a href="network.php">NETWORK</a></li>
              <li><a href="about.php">ABOUT US</a></li>
            </ul>
        </div>
        <div class="icon-button">
          <div class="icon-button-1">
            <a href="https://www.facebook.com/profile.php?id=100071050853553"><span class="iconify" data-icon="dashicons:facebook-alt"></span></a>
            <a href="https://www.instagram.com/techdigi.id/"><span class="iconify" data-icon="ri:instagram-fill"></span></a>
            <a href="https://www.youtube.com/"><span class="iconify" data-icon="bi:youtube"></span></a>
            <a href="https://api.whatsapp.com/"><span class="iconify" data-icon="dashicons:whatsapp"></span></a>
          </div>
          <div class="icon-button-2">
            <input type="submit" value="CONTACT" onClick="window.location.href='contact.php'">
          </div>
        </div>
    </div>

</body>
<script>
    const hamburgerMenu = document.querySelector('.hamburger-menu input');
    const menuMobile = document.querySelector('.bottom-menu');

    hamburgerMenu.addEventListener('click', function(){
    menuMobile.classList.toggle('slide')
    });
</script>