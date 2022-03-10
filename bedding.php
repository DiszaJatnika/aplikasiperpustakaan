<?php
  include 'template/header.php'
?>
<style>
.scrolling-active nav{
  display:block;
}
nav{
  position: relative;
  z-index: 99;
  width: 100%;
  height: 70px;
  background:#fff;
}
nav:hover{
    background:#fff
}
nav .wrapper{
  position: relative; 
  max-width: 100%;
  padding: 0px 30px;
  height:70px;
  line-height: 70px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  transition: 1s all;
}
</style>

<div class="bedding-catalog">
    <h1>Beding Accessories</h1>
    <div class="bedding-layout">
        <div class="bedding-box">
            <div class="bedding-image">
                <img src="image/microfiber-package.jpg" alt="">
            </div>
            <div class="bedding-content">
                <div class="bedding-description">
                    <p>Microfiber Package</p>
                    <h3>?</h3>
                </div>
                <div class="bedding-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="bedding-box">
            <div class="bedding-image">
                <img src="image/microfiber-bolster.jpg" alt="">
            </div>
            <div class="bedding-content">
                <div class="bedding-description">
                    <p>Microfiber Bolster</p>
                    <h3>Rp. 600.000 ,-</h3>
                </div>
                <div class="bedding-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="bedding-box">
            <div class="bedding-image">
                <img src="image/ornica-bolster.jpg" alt="">
            </div>
            <div class="bedding-content">
                <div class="bedding-description">
                    <p>Ornica Bolster</p>
                    <h3>Rp. 1.400.000 ,-</h3>
                </div>
                <div class="bedding-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="bedding-box">
            <div class="bedding-image">
                <img src="image/microfiber-pillow.jpg" alt="">
            </div>
            <div class="bedding-content">
                <div class="bedding-description">
                    <p>Microfiber Pillow</p>
                    <h3>Rp. 500.000 ,-</h3>
                </div>
                <div class="bedding-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="bedding-box">
            <div class="bedding-image">
                <img src="image/ornica-pillow.jpg" alt="">
            </div>
            <div class="bedding-content">
                <div class="bedding-description">
                    <p>Ornica Pillow</p>
                    <h3>Rp. 1.200.000 ,-</h3>
                </div>
                <div class="bedding-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="bedding-box">
            <div class="bedding-image">
                <img src="image/ornica-package.jpg" alt="">
            </div>
            <div class="bedding-content">
                <div class="bedding-description">
                    <p>Ornica Package</p>
                    <h3>?</h3>
                </div>
                <div class="bedding-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="swiper productBanner">
      <div class="swiper-wrapper productWrapper">
        <div class="swiper-slide productSlide">
          <div class="overlayProduct"></div>
          <img src="image/ornica-banner.jpg" />
        </div>
      </div>
    <div class="swiper-pagination"></div>
</div>

<div class="comfortNara">
        <div class="comfortNaraBox">
            <div class="comfortNaraContent">
                <h1>MATTRESS IS AN INVESTMENT</h1>
                <p>Menggunakan bahan baku terbaik yang mana akan menjaga durability jangka panjang</p>
                <br><p>Pilih matras sesuai dengan kebutuhan</p>
            </div>
        </div>
        <div class="comfortNaraBox">
            <img src="image/imageSlide2.jpg" alt="" style="">
        </div>
    </div>

<?php
  include 'template/whatsapp.php'
?>
<?php
  include 'template/footer.php'
?>