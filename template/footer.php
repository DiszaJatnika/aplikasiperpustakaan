<!-- SECTION 6 (Footer) -->
<div class="footer">
    <div class="footer-body">
      <h1>Get access to our latest sales, product news, and sleep tips.</h1>
      <div class="marketplace-icon">
        <a href="https://www.instagram.com/algaspringbed/" target="_blank"><img src="image/icon-instagram.png" alt=""></a>
        <a href="https://www.jd.id/search?keywords=alga%20mattress" target="_blank"><img src="image/jd_id.png" alt=""></a>
        <a href="https://shopee.co.id/alga_springbed" target="_blank"><img src="image/icon-shopee.png" alt=""></a>
        <a href="https://www.tokopedia.com/alga-spring-bed" target="_blank"><img src="image/icon-tokopedia.png" alt=""></a>
        <a href="https://www.zalora.co.id/store/alga-offical-store" target="_blank"><img src="image/icon-zalora.png" alt=""></a>
        <a href="https://www.youtube.com/channel/UCGrZWDpmPXSHu8EyGKgW6IQ" target="_blank"><img src="image/icon-youtube.png" alt=""></a>
      </div>
    </div>
    <div class="footer-menu">
      <div class="footer-content">
        <h3>SHOP MATTRESSES</h3>
        <ul>
          <li>Soft</li>
          <li>Medium</li>
          <li>Firm</li>
        </ul>
      </div>
      <div class="footer-content">
        <h3>BEDDING</h3>
        <ul>
          <li>Pillow</li>
          <li>Bolster</li>
          <li>Topper</li>
          <li>Protector</li>
        </ul>
      </div>
      <div class="footer-content">
        <h3>ACCESSORIES</h3>
        <ul>
          <li>Headbord</li>
          <li>Pillow & Bolster</li>
        </ul>
      </div>
  </div>

  <div class="footer-footer">
    <div class="copyright">
      <span>Copyright © 1976-2022 Alga Mattress</span>
    </div>
    <div class="footer-logo">
      <img src="image/Logo-putih.png" alt="">
    </div>
    <div class="footer-menu2">
      <a href="#">Term of Use</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Interest Based Ads</a>
    </div>
  </div>
  </div>
  <!-- END SECTION 6 (Footer) -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/fontawesome.min.js"></script>
  <script src="js/thumb-gallery.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/menu-hover.js"></script>
</body>
<script>
    $(function() {
    $(window).scroll(function () {
        var scrollval = $(window).scrollTop();
        if (scrollval >= 80){
            $("#showdiv").hide();
            $("#hidediv").show();
        }
        else {
            // $("#showdiv").show();
            $("#hidediv").hide();
        }
    })
})
</script>
<script>
      var product = new Swiper(".productBanner", {
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
<script>
            function imageClick(imageNumber) {
                setTimeout(() => {
                    //Find the slider element
                    const sliderElement = document.getElementById('pgalleryModal');
                    //Slide to he right image
                    swiffyslider.slideTo(sliderElement, imageNumber);
                    //Listen to slide end and set focus to the container to enable keyboard navigation
                    swiffyslider.onSlideEnd(sliderElement, () => sliderElement.querySelector(".slider-container").focus());
                }, 300)
            }
    
            function thumbHover(imageNumber) {
                //Find the slider element
                const sliderElement = document.getElementById('pgallery');
                //Slide to he right image
                swiffyslider.slideTo(sliderElement, imageNumber)
            }
        </script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
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
<script>
  AOS.init();
</script>
<script>
  var header = document.getElementById("overflowTest");
var btns = header.getElementsByClassName("bank");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("aktif");
  current[0].className = current[0].className.replace(" aktif", "");
  this.className += " aktif";
  });
}
</script>
<script src="js/whatsappButton"></script>
<script src="js/menu-hover-accessories.js"></script>
<script src="js/whatsapp.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/menu.js"></script>
<script src="js/jquery.js"></script>
<script src="js/sign-popup.js"></script>
<script src="js/naraLayer.js"></script>
<script src="js/slideshow.js"></script>
<script src="js/menu-hover.js"></script>
<script src="js/productSlide.js"></script>
<script src="js/pop-up-reviews.js"></script>
<script src="js/alga-classic.js"></script>
<script src="js/accordion.js"></script>
<script src="js/tabs.js"></script>
<script src="js/gallery-tab.js"></script>
<script src="js/tab-slide.js"></script>
<script src="js/review-slide.js"></script>
<script src="js/question.js"></script>
<script src="js/password.js"></script>
<script src="js/buttonSize.js"></script>
<script src="js/count-quantity.js"></script>
<script src="js/specifications.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.2.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</html>