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
                    <img id="u" src="image/kvThalita.jpg" alt="">
                </div>

                <div class="images">
                    <img onclick="changegambar(this)" src="image/kvThalita.jpg" alt="">
                    <img onclick="changegambar(this)" src="image/thalita-front.jpg" alt="">
                    <img onclick="changegambar(this)" src="image/thalita-product.jpg" alt="">
                    <img onclick="changegambar(this)" src="image/thalita-texture.jpg" alt="">
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
            <h1>Thalita</h1>
            <h3>Rp. 10.500.000 ,-</h3>
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
        <img src="image/thalita-banner.png" alt="">
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
        <div class="swiper-slide productSlide">
          <div class="overlayProduct"></div>
          <img src="image/kvThalita.jpg" />
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
        <img src="image/imageSlide2.jpg" alt="">
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

<!-- <div class="thalitaOverview">
    <h1>Experience deeper, more restorative sleep on the<br> best mattress for heavy people</h1>
    <p>Specifically engineered to comfortably support people weighing up to 500 pounds, our heavy duty <br>hybrid innerspring mattress delivers optimal support in every sleep position.</p>
    <div class="thalitaOverviewLayout">
        <div class="thalitaOverviewBox">
            <div class="thalitaOverviewIcon">
                <img src="image/icon/icon5.png" alt="">
            </div>
            <h4>Back & joint pain relief</h4>
            <p>Patented Lumbar Zone® Technology adds enhanced support for your lumbar region, while 5-zone natural latex offers excellent pressure-point relief.</p>
        </div>
        <div class="thalitaOverviewBox">
            <div class="thalitaOverviewIcon">
                <img src="image/icon/icon6.png" alt="">
            </div>
            <h4>Cool comfort</h4>
            <p>We’ve strategically layered breathable organic cotton, 100% natural latex, and open coils to promote easy air flow for a cooler night’s sleep.</p>
        </div>
        <div class="thalitaOverviewBox">
            <div class="thalitaOverviewIcon">
                <img src="image/icon/icon7.png" alt="">
            </div>
            <h4>Durable support</h4>
            <p>Designed with tempered 12.5-gauge recycled steel coils that are 25% stronger than the industry standard, Saatva HD won’t sag or dip.</p>
        </div>
    </div>
</div>

<div class="thalitaLayer">
    <h1>Inside the thalita mattresses</h1>
    <span>Every layer of our heavy duty mattress is engineered to provide an optimal balance of comfort and durable support for all bodies, but specifically designed for bigger bodies.</span>
    <img src="image/1110x534.jpg" alt="">
    <div class="swiper myLayer">
      <div class="swiper-wrapper layerWrapper">
        <div class="swiper-slide layerSlide">
            <h4>1. Hand-tufted finishing</h4>
            <p>Virtually eliminates all body impressions while locking all mattress layers in place so they don't shift or wrinkle over time.</p>
        </div>
        <div class="swiper-slide layerSlide">
            <h4>2. 3" Euro pillow top</h4>
            <p>This added layer of comfort is covered in breathable, hypoallergenic organic cotton and treated with our exclusive Guardin™ botanical antimicrobial treatment.</p>
        </div>
        <div class="swiper-slide layerSlide">
            <h4>3. 5-zone natural latex</h4>
            <p>Five distinct zones of density provide enhanced support in the lumbar region and maximum pressure-point relief. 100% natural and hypoallergenic.</p>
        </div>
        <div class="swiper-slide layerSlide">
            <h4>4. Comfort foam layers</h4>
            <p>A unique combination of CertiPUR-US® certified memory foam and support foam contour to your body for added pressure-point relief and improved circulation</p>
        </div>
        <div class="swiper-slide layerSlide">
            <h4>5. High-durability coil base</h4>
            <p>12.5-gauge tempered recycled steel coils are 25% stronger than industry standard and threaded with a 17-gauge helical wire to eliminate motion transfer. Reinforced with our patented spinal zone technology for enhanced lower back support.</p>
        </div>
        <div class="swiper-slide layerSlide">
            <h4>6. Durable edge support</h4>
            <p>High-density foam rails encase the perimeter of the mattress for firmer edges that prevent sagging, making it easier to get in and out of bed.</p>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>

<div class="thalitaService">
    <h1>Service beyond the sale</h1>
    <p>We’ve built our reputation on being here for you, before and after you make a purchase. Our sleep guides don’t work on commission, so you’ll always receive honest guidance.</p>
    <div class="thalitaServiceLayout">
        <div class="thalitaServiceBox">
            <div class="thalitaServiceImage">
                <img src="image/770x385.jpg" alt="">
            </div>
            <h4>24/7 customer support</h4>
            <span>Day or night, we’re here to help. Call or chat with one of our friendly sleep guides any time you have a question.</span>
        </div>
        <div class="thalitaServiceBox">
            <div class="thalitaServiceImage">
                <img src="image/imageSlide1.jpg" alt="">
            </div>
            <h4>180-night trial</h4>
            <span>We never pressure you to make up your mind quickly. Enjoy your Saatva HD at home for 180 nights.</span>
        </div>
    </div>
</div>


<div class="comfortNara">
    <div class="comfortNaraBox">
        <div class="comfortNaraContent">
            <h1>Our 20-year warranty</h1>
            <p>The eco-friendly foams we use in our Loom & Leaf are made with renewable oils and produce fewer greenhouse gases during manufacturing.</p>
            <br><p>We’re committed to making sure you enjoy a lifetime of good sleep. That’s why your Saatva HD comes with a 20-year non-prorated warranty. For the first two years, we completely cover the costs of replacement and repairs.</p>
        </div>
    </div>
    <div class="comfortNaraBox">
        <img src="image/imageSlide2.jpg" alt="">
    </div>
</div>

<div class="thalitaService">
    <h1>Free premium white glove delivery & setup</h1>
    <p>Your Saatva HD comes with the Saatva service standard: white glove delivery, in-home setup, and removal of your old bed.</p>
    <div class="thalitaServiceLayout">
        <div class="thalitaServiceBox">
            <div class="thalitaServiceImageIcon">
                <img src="image/icon/hand-zz.png" alt="">
            </div>
            <h4>Concierge delivery & setup</h4>
            <span>Sit back and relax while we do all the work. We’ll hand-deliver your mattress to the room of your choice.</span>
        </div>
        <div class="thalitaServiceBox">
            <div class="thalitaServiceImageIcon">
                <img src="image/icon/icon4.png" alt="">
            </div>
            <h4>Free mattress removal</h4>
            <span>You don’t have to worry about disposing of your old mattress. Our delivery team will take it away for free.</span>
        </div>
    </div>
</div> -->

<!--<div class="specifications-faq thalitaSpec" id="specs">-->
<!--    <div class="faq-button">-->
<!--        <button class="faqlink faqActive" onclick="openFaq(event,'Specifications')">Specifications</button> -->
<!--        <span>/</span>-->
<!--        <button class="faqlink" onclick="openFaq(event,'Faq')">Frequently asked questions</button>-->
<!--    </div>-->
  
<!--    <div id="Specifications" class="faqs-spec">-->
<!--        <button class="accordion">Measurements & dimensions</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>-->

<!--        <button class="accordion">Delivery & setup</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>-->

<!--        <button class="accordion">Home trial</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div id="Faq" class="faqs-spec" style="display:none">-->
<!--    <button class="accordion">Can I try your mattresses in a store?</button>-->
<!--        <div class="panel">-->
<!--        <p>From day one, our mission has always been to offer high-quality luxury mattresses online without the luxury markups. It's how we keep the middleman out and the overhead low, passing on those savings to you. We believe the best way to know if a mattress is right for you is by sleeping on it—literally. That's why all of our mattresses come with a 180-night home trial and a no-hassle return policy. That way, you have a few weeks to decide from the comfort of your own home.</br>-->
<!--            If you happen to be in New York City, our Saatva Manhattan Viewing Room Saatva Manhattan Viewing Room is located at 969 Third Ave. (58th St.). This self-guided space allows you to experience our mattresses and bedding products in real life before starting your 180-night home trial.</p>-->
<!--        </div>-->

<!--        <button class="accordion">What if I need to return my mattress?</button>-->
<!--        <div class="panel">-->
<!--        <p>If you aren't completely happy with your Saatva mattress during your 180-night home trial, just give us a call at 1-877-672-2882. We’ll schedule a pick up of your mattress and issue a refund for the purchase price (taxes included) to your original method of payment.-->
<!--        You’ll only pay a $99 processing fee and we’ll take care of the rest!-->
<!--        We never resell returned mattresses. Instead, we donate them to veterans' shelters or offer them to employees and associates across our network of more than 150 delivery centers.</p>-->
<!--        </div>-->

<!--        <button class="accordion">Home trial</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>  -->

<!--        <button class="accordion">What if I need to exchange my mattress?</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div> -->

<!--        <button class="accordion">Can I expedite the delivery of my mattress?</button>-->
<!--        <div class="panel">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--        </div>  -->

<!--        <button class="accordion">Does Saatva offer any discounts for first responders, veterans, active military & more?</button>-->
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