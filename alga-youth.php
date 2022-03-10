<?php
  include 'template/header.php'
?>
<style>
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
                    <img id="u" src="image/youth-banner.jpg" alt="">
                </div>

                <div class="images">
                    <img onclick="changegambar(this)" src="image/youth-banner.jpg" alt="">
                    <img onclick="changegambar(this)" src="image/youth-front.jpg" alt="">
                    <img onclick="changegambar(this)" src="image/youth-product.jpg" alt="">
                    <img onclick="changegambar(this)" src="image/youth-texture.jpg" alt="">
                </div>
            </div>

        <div class="product-icon">
            <div class="product-box">
                <span>180-night home trial</span><br/>
                <a href="#">Learn More</a>
            </div>
            <div class="product-box">
                <span>Free in-room delivery & setup</span><br/>
                <a href="#">Learn More</a>
            </div>
            <div class="product-box">
                <span>15-year warranty</span><br/>
                <a href="#">Learn More</a>
            </div>
            <div class="product-box">
                <span>Free mattress & foundation removal available</span><br/>
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
        <div class="product-variasi">
            <h1>Youth Active</h1>
            <h3>?</h3>
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
        <img src="image/youth-banner-yellow.jpg" alt="">
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
          <img src="image/youth-texture.jpg" />
        </div>
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
                <p>Using the best raw materials which will maintain long-term durability</p>
                <br><p>Choose a mattress according to your needs</p>
            </div>
        </div>
        <div class="comfortNaraBox">
            <img src="image/youth-banner-yellow.jpg" alt="">
        </div>
    </div>

    <div class="contactSection">
        <h1>Need help deciding?</h1>
        <div class="contactSectionBox">
            <div class="contactSectionIcon">
                <div class="contactIcon imageIcon">
                    <!--<ion-icon name="chatbubbles-outline"></ion-icon>-->
                    <img src="image/chat.png">
                </div>
                <h3>Chat with us</h3>   
            </div>

            <div class="contactSectionIcon">
                <div class="contactIcon">
                    <!--<ion-icon name="call-outline"></ion-icon>-->
                    <img src="image/phone.png">
                </div>
                <h3>Give us a ring</h3>
            </div>

            <div class="contactSectionIcon">
                <div class="contactIcon">
                    <!--<ion-icon name="reader-outline"></ion-icon>-->
                    <img src="image/noted.png">
                </div>
                <h3>Take our mattress quiz</h3>
            </div>
        </div>
    </div>
<!--<div class="specifications-faq youthActiveFaq" id="specs">-->
<!--    <div class="faq-button">-->
<!--        <button class="faqlink faqActive" onclick="openFaq(event,'Specifications')">Specifications</button> -->
<!--        <span>/</span>-->
<!--        <button class="faqlink" onclick="openFaq(event,'Faq')">Frequently asked questions</button>-->
<!--    </div>-->
  
<!--    <div id="Specifications" class="faqs-spec">-->
<!--        <button class="accordion accordionYouthActive">Measurements & dimensions</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>-->

<!--        <button class="accordion accordionYouthActive">Delivery & setup</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>-->

<!--        <button class="accordion accordionYouthActive">Home trial</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div id="Faq" class="faqs-spec" style="display:none">-->
<!--    <button class="accordion accordionYouthActive">Can I try your mattresses in a store?</button>-->
<!--        <div class="panel">-->
<!--        <p>From day one, our mission has always been to offer high-quality luxury mattresses online without the luxury markups. It's how we keep the middleman out and the overhead low, passing on those savings to you. We believe the best way to know if a mattress is right for you is by sleeping on it—literally. That's why all of our mattresses come with a 180-night home trial and a no-hassle return policy. That way, you have a few weeks to decide from the comfort of your own home.</br>-->
<!--            If you happen to be in New York City, our Saatva Manhattan Viewing Room Saatva Manhattan Viewing Room is located at 969 Third Ave. (58th St.). This self-guided space allows you to experience our mattresses and bedding products in real life before starting your 180-night home trial.</p>-->
<!--        </div>-->

<!--        <button class="accordion accordionYouthActive">What if I need to return my mattress?</button>-->
<!--        <div class="panel">-->
<!--        <p>If you aren't completely happy with your Saatva mattress during your 180-night home trial, just give us a call at 1-877-672-2882. We’ll schedule a pick up of your mattress and issue a refund for the purchase price (taxes included) to your original method of payment.-->
<!--        You’ll only pay a $99 processing fee and we’ll take care of the rest!-->
<!--        We never resell returned mattresses. Instead, we donate them to veterans' shelters or offer them to employees and associates across our network of more than 150 delivery centers.</p>-->
<!--        </div>-->

<!--        <button class="accordion accordionYouthActive">Home trial</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>  -->

<!--        <button class="accordion accordionYouthActive">What if I need to exchange my mattress?</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div> -->

<!--        <button class="accordion accordionYouthActive">Can I expedite the delivery of my mattress?</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>  -->

<!--        <button class="accordion accordionYouthActive">Does Saatva offer any discounts for first responders, veterans, active military & more?</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>  -->
        
<!--     </div>-->
<!--    </div>-->
<!--    </div>-->
<?php
  include 'template/whatsapp.php'
?>
<?php
  include 'template/footer.php'
?>