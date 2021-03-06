<?php
  include 'template/header.php'
?>
<style>
.scrolling-active nav{
  display:block;
}
nav{
  position: fixed;
  z-index: 99;
  width: 100%;
  height: 70px;
  background:#fff;
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
<div class="container">
    <div class="product-panel">
    <div class="col-12 col-lg-9 product-thumb-slide" id="productGallery">
        
        <div class="gallery-tab-product">
                <div class="preProduct">
                    <a onclick="this.parentElement.style.display='none'" class="ion-close"></a>
                    <img id="u" src="image/770x385.jpg" alt="">
                </div>

                <div class="images">
                    <img onclick="changegambar(this)" src="image/770x385.jpg" alt="">
                    <img onclick="changegambar(this)" src="image/770x385.jpg" alt="">
                    <img onclick="changegambar(this)" src="image/770x385.jpg" alt="">
                    <img onclick="changegambar(this)" src="image/770x385.jpg" alt="">
                </div>
            </div>

        <div class="product-icon">
            <div class="product-box">
                <!-- <div class="product-box-icon">
                    <img src="image/icon/house.png" alt="">
                </div> -->
                <span>180-night home trial</span><br/>
                <a href="#">Learn More</a>
            </div>
            <div class="product-box">
                <!-- <div class="product-box-icon">
                    <img src="image/icon/hand.png" alt="">
                </div> -->
                <span>Free in-room delivery & setup</span><br/>
                <a href="#">Learn More</a>
            </div>
            <div class="product-box">
                <!-- <div class="product-box-icon">
                    <img src="image/icon/clipboard2.png" alt="">
                </div> -->
                <span>15-year warranty</span><br/>
                <a href="#">Learn More</a>
            </div>
            <div class="product-box">
                <!-- <div class="product-box-icon">
                    <img src="image/icon/icon9.png" alt="">
                </div> -->
                <span>Free mattress & foundation removal available</span><br/>
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
        <div class="product-variasi">
            <h1>Gabrielle</h1>
            <h3>Rp. 15.500.000 ,-</h3>
            <div class="select-size">
                <div class="size-menu">
                    <span>Select size</span>
                    <a href="#">Specs</a>
                </div>
                <div class="costum-size" id="selectSize">
                    <button class="btnSize">Twin</button>
                    <button class="btnSize activeSize">Twin XL</button>
                    <button class="btnSize">Full</button>
                    <button class="btnSize">Queen</button>
                    <button class="btnSize">King</button>
                    <button class="btnSize">Split King</button>
                    <button class="btnSize">Call King</button>
                    <button class="btnSize">Split Call King</button>
                </div>
            </div>
            <div class="height">
                <div class="height-menu">
                    <span>Height</span>
                    <a href="#">Learn More</a>
                </div>
                <div class="costum-height" id="selectHeight">
                    <button class="btnHeight activeHeight">11,5"</button>
                    <button class="btnHeight">14,5"</button>
                </div>
            </div>
            <div class="comfort">
                <div class="comfort-menu">
                    <span>Select comfort level</span>
                    <a href="#">Learn More</a>
                </div>
                <div class="costum-level" id="selectComfort">
                    <button class="btnComfort activeComfort">Plush Soft</button>
                    <button class="btnComfort">Luxury Film</button>
                    <button class="btnComfort">Firm</button>
                </div>
            </div>
            <div class="promo-mattresses">
                <p>Get 10% off sitewide or 15% off orders over $2,750.
                Discount applied in cart. </p>
            </div>
            <div class="add-to-cart">
                <button>Add 1 Item to Cart</button>
            </div>
        </div>
    </div>
</div>

    <div class="alga-classic-banner" id="overview">
        <img src="image/chloe-model.png" alt="">
    </div>

    <div class="alga-classic-icon">
        <div class="classic-icon-box">
            <img src="image/luxurious.png" alt="">
            <h2>LUXURIOUS</h2>
        </div>
        <div class="classic-icon-box">
            <img src="image/durable.png" alt="">
            <h2>DURABLE</h2>
        </div>
        <div class="classic-icon-box">
            <img src="image/Supportive.png" alt="">
            <h2>SUPPORTIVE</h2>
        </div>
        <div class="classic-icon-box">
            <img src="image/breath.png" alt="">
            <h2>BREATHABLE</h2>
        </div>
        <div class="classic-icon-box">
            <img src="image/10-years-warranty.png" alt="">
            <h2>10 YEAR WARRANTY</h2>
        </div>
        <div class="classic-icon-box">
            <img src="image/safety.png" alt="">
            <h2>HEALTH & ANTI VIRUS</h2>
        </div>
    </div>
    
    <div class="swiper productBanner">
      <div class="swiper-wrapper productWrapper">
        <div class="swiper-slide productSlide">
          <div class="overlayProduct"></div>
          <img src="image/kvutama.jpg" />
        </div>
        <!--<div class="swiper-slide productSlide">-->
        <!--  <div class="overlayProduct"></div>-->
        <!--  <img src="image/kvChloe.jpg" />-->
        <!--</div>-->
        <!--<div class="swiper-slide productSlide">-->
        <!--  <div class="overlayProduct"></div>-->
        <!--  <img src="image/chloe-bed.jpg" />-->
        <!--</div>-->
      </div>
      <div class="swiper-pagination"></div>
    </div>
    
    <div class="comfort-bar" id="comfort">
        <h1>Plush medium, or firm. You decide.</h1>
        <div class="comfort-bar-image">
            <img src="image/comfortIcon.png" alt="">
        </div>
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
            <img src="image/imageSlide2.jpg" alt="">
        </div>
    </div>
    
    <div class="contactSection">
        <h1>Need help deciding?</h1>
        <div class="contactSectionBox">
            <div class="contactSectionIcon">
                <div class="contactIcon">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
                <h3>Chat with us</h3>   
            </div>

            <div class="contactSectionIcon">
                <div class="contactIcon">
                    <ion-icon name="call-outline"></ion-icon>
                </div>
                <h3>Give us a ring</h3>
            </div>

            <div class="contactSectionIcon">
                <div class="contactIcon">
                    <ion-icon name="reader-outline"></ion-icon>
                </div>
                <h3>Take our mattress quiz</h3>
            </div>
        </div>
    </div>


<?php
  include 'template/whatsapp.php'
?>
<?php
  include 'template/footer.php'
?>