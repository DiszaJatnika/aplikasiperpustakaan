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

<div class="headboard-catalog">
    <h1>Headboard</h1>
    <div class="headboard-layout">
        <div class="headboard-box">
            <div class="headboard-image">
                <img src="image/evander.jpg" alt="">
            </div>
            <div class="headboard-content">
                <div class="headboard-description">
                    <p>HB Evander</p>
                    <h3>Rp. 2.500.000 ,-</h3>
                </div>
                <div class="headboard-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="headboard-box">
            <div class="headboard-image">
                <img src="image/hb-benjamin.jpg" alt="">
            </div>
            <div class="headboard-content">
                <div class="headboard-description">
                    <p>HB Benjamin</p>
                    <h3>Rp. 11.500.000 ,-</h3>
                </div>
                <div class="headboard-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="headboard-box">
            <div class="headboard-image">
                <img src="image/bernice.jpg" alt="">
            </div>
            <div class="headboard-content">
                <div class="headboard-description">
                    <p>HB Bernice</p>
                    <h3>Rp. 2.500.000 ,-</h3>
                </div>
                <div class="headboard-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="headboard-box">
            <div class="headboard-image">
                <img src="image/hb-gabrielle.jpg" alt="">
            </div>
            <div class="headboard-content">
                <div class="headboard-description">
                    <p>HB Gabrielle</p>
                    <h3>?</h3>
                </div>
                <div class="headboard-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="headboard-box">
            <div class="headboard-image">
                <img src="image/hb-lucas.jpg" alt="">
            </div>
            <div class="headboard-content">
                <div class="headboard-description">
                    <p>HB Lucas</p>
                    <h3>Rp. 4.500.000 ,-</h3>
                </div>
                <div class="headboard-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="headboard-box">
            <div class="headboard-image">
                <img src="image/izzy.jpg" alt="">
            </div>
            <div class="headboard-content">
                <div class="headboard-description">
                    <p>HB Izzy</p>
                    <h3>Rp. 5.700.000 ,-</h3>
                </div>
                <div class="headboard-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="headboard-box">
            <div class="headboard-image">
                <img src="image/nara.jpg" alt="">
            </div>
            <div class="headboard-content">
                <div class="headboard-description">
                    <p>HB Nara</p>
                    <h3>Rp. 5.700.000 ,-</h3>
                </div>
                <div class="headboard-button-buy">
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="headboard-box">
            <div class="headboard-image">
                <img src="image/yoel.jpg" alt="">
            </div>
            <div class="headboard-content">
                <div class="headboard-description">
                    <p>HB Yoel</p>
                    <h3>5,400,000 </h3>
                </div>
                <div class="headboard-button-buy">
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
          <img src="image/kvutama.jpg" />
        </div>
        <div class="swiper-slide productSlide headboardProduct">
          <div class="overlayProduct"></div>
          <img src="image/nara-bed-product.jpg" class="object-position:top;"/>
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
            <img src="image/thalita-bed.png" alt="" style="">
        </div>
    </div>

<?php
  include 'template/whatsapp.php'
?>
<?php
  include 'template/footer.php'
?>