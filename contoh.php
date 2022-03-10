
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Demo styles -->
    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .productBanner {
        width: 100%;
        height: 100%;
      }

      .productSlide {
        background-position: center;
        background-size: cover;
        position:relative;
      }
      .overlayProduct{
        width:100%;
        height:100%;
        background: linear-gradient(180deg, rgba(0,0,0,0.3496232622125176) 0%, rgba(64,64,64,0.2709715768192591) 35%);
        position:absolute;
      }

      .productSlide img {
        display: block;
        width: 100%;
        height:100%;
        object-fit:cover;
        object-position:center;
      }
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <div class="swiper productBanner">
      <div class="swiper-wrapper productWrapper">
        <div class="swiper-slide productSlide">
          <div class="overlayProduct"></div>
          <img src="image/kvutama.jpg" />
        </div>
        <div class="swiper-slide productSlide">
          <div class="overlayProduct"></div>
          <img src="image/kvchloe.jpg" />
        </div>
        <div class="swiper-slide productSlide">
          <div class="overlayProduct"></div>
          <img src="image/chloe-bed.jpg" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".productBanner", {
        spaceBetween: 30,
        effect: "fade",
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
  </body>
</html>
