<?php
  include 'template/header.php'
?>

<!-- PRODUCT VARIATION -->
<div class="container">
    <div class="breadcumb">
        <ul>
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Mattresses</a> <span class="divider">/</span></li>
            <li>Loom & Leaf</li>
        </ul>
    </div>
    <div class="product-panel">
    <div class="col-12 col-lg-9 product-thumb-slide" id="productGallery">
        <div class="swiffy-slider slider-item-ratio slider-item-ratio-1x2 slider-nav-round slider-nav-nodelay " id="pgallery">
            <ul class="slider-container">
                <li><img src="image/NaraBanner.jpg" loading="lazy" alt="..." data-bs-toggle="modal" data-bs-target="#productGalleryModal" onclick="imageClick(0)"></li>
                <li><img src="image/NaraBanner2.jpg" loading="lazy" alt="..." data-bs-toggle="modal" data-bs-target="#productGalleryModal" onclick="imageClick(1)"></li>
                <li><img src="image/CenterBanner.jpg" loading="lazy" alt="..." data-bs-toggle="modal" data-bs-target="#productGalleryModal" onclick="imageClick(2)"></li>
                <li><img src="image/ThalitaBanner.jpg" loading="lazy" alt="..." data-bs-toggle="modal" data-bs-target="#productGalleryModal" onclick="imageClick(3)"></li>
                <li><img src="image/JhullieBanner.jpg" loading="lazy" alt="..." data-bs-toggle="modal" data-bs-target="#productGalleryModal" onclick="imageClick(4)"></li>
                <li><img src="image/KidsBanner.jpg" loading="lazy" alt="..." data-bs-toggle="modal" data-bs-target="#productGalleryModal" onclick="imageClick(5)"></li>
            </ul>
            
        </div>
    
        <div class="swiffy-slider slider-nav-dark slider-nav-sm slider-nav-chevron slider-item-show6 slider-item-snapstart slider-item-ratio slider-item-ratio-1x1 slider-nav-visible slider-nav-page slider-nav-outside-expand pt-3 d-none d-lg-block cover">
            <ul class="slider-container" id="pgallerythumbs" style="cursor:pointer">
                <li><img src="image/NaraBanner.jpg" loading="lazy" alt="..." onmouseover="thumbHover(0)"></li>
                <li><img src="image/NaraBanner2.jpg" loading="lazy" alt="..." onmouseover="thumbHover(1)"></li>
                <li><img src="image/CenterBanner.jpg" loading="lazy" alt="..." onmouseover="thumbHover(2)"></li>
                <li><img src="image/ThalitaBanner.jpg" loading="lazy" alt="..." onmouseover="thumbHover(3)"></li>
                <li><img src="image/JhullieBanner.jpg" loading="lazy" alt="..." onmouseover="thumbHover(4)"></li>
                <li><img src="image/KidsBanner.jpg" loading="lazy" alt="..." onmouseover="thumbHover(5)"></li>
            </ul>
    
            <!-- <button type="button" class="slider-nav" aria-label="Go previous"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button> -->
        </div>
        <div class="product-icon">
            <div class="product-box">
                <ion-icon name="home-outline"></ion-icon><br/>
                <span>180-night home trial</span><br/>
                <a href="#">Learn More</a>
            </div>
            <div class="product-box">
                <ion-icon name="bed-outline"></ion-icon><br/>
                <span>180-night home trial</span><br/>
                <a href="#">Learn More</a>
            </div>
            <div class="product-box">
                <ion-icon name="clipboard-outline"></ion-icon><br/>
                <span>180-night home trial</span><br/>
                <a href="#">Learn More</a>
            </div>
            <div class="product-box">
                <ion-icon name="file-tray-stacked-outline"></ion-icon><br/>
                <span>180-night home trial</span><br/>
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
        <div class="product-variasi">
            <h1>Loom & Leaf Mattress</h1>
            <p>Our flagship hybrid innerspring mattress</p>
            <div class="rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star-half-outline"></ion-icon>
                <span>(4,9) 1,500 reviews</span>
            </div>
            <h3>$1,695</h3>
            <div class="select-size">
                <div class="size-menu">
                    <span>Select size</span>
                    <a href="#">Specs</a>
                </div>
                <div class="costum-size">
                    <button class="twin">Twin</button>
                    <button class="twin-xl">Twin XL</button>
                    <button class="full">Full</button>
                    <button class="full">Queen</button>
                    <button class="full">King</button>
                    <button class="full">Split King</button>
                    <button class="full">Call King</button>
                    <button class="full">Split Call King</button>
                </div>
            </div>
            <div class="height">
                <div class="height-menu">
                    <span>Height</span>
                    <a href="#">Learn More</a>
                </div>
                <div class="costum-height">
                    <button>11,5"</button>
                    <button>14,5"</button>
                </div>
            </div>
            <div class="comfort">
                <div class="comfort-menu">
                    <span>Select comfort level</span>
                    <a href="#">Learn More</a>
                </div>
                <div class="costum-level">
                    <button>Plush Soft</button>
                    <button>Luxury Film</button>
                    <button>Firm</button>
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
<!-- END PRODUCT VARIATION -->

<!-- LOOM & LEAF MENU -->
<div class="alga-classic-menu">
        <ul>
            <li><a href="#overview">Overview</a></li>
            <li><a href="#benefits">Benefits</a></li>
            <li><a href="#layers">Layers</a></li>
            <li><a href="#comfort">Comfort</a></li>
            <li><a href="#reviews">Reviews</a></li>
            <li><a href="#specs">Specs</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#"><button style="cursor:pointer">Choose Mattress Size</button></a></li>
        </ul>
    </div>
<!-- END LOOM & LEAF MENU -->

<!-- LOOM & LEAF BANNER -->
<div class="loom-leafBanner">
    <h1>Your best sleep starts
        <br>with the best memory foam mattress</h1>
        <span>Unlike bed-in-a-box foam mattresses, ours is handcrafted in the U.S. with premium, eco-friendly materials, never stuffed in a box, <br>and hand delivered to your home for free. It's a premium memory foam mattress without the premium price.</span>
        <div class="loom-leafBox">
            <div class="loom-leafIcon">
                <div class="loom-leafImage">
                    <img src="image/icon/icon1.png" alt="">
                </div>
                <h1>Pressure relief</h1>
                <p>Ultra-premium 5-lb memory foam and high-density foam layers contour to your body to relieve pressure points while offering stable support.</p>
            </div>
            <div class="loom-leafIcon">
                <img src="image/icon/icon2.png" alt="">
                <h1>Pressure relief</h1>
                <p>Ultra-premium 5-lb memory foam and high-density foam layers contour to your body to relieve pressure points while offering stable support.</p>
            </div>
            <div class="loom-leafIcon">
                <img src="image/icon/icon3.png" alt="">
                <h1>Pressure relief</h1>
                <p>Ultra-premium 5-lb memory foam and high-density foam layers contour to your body to relieve pressure points while offering stable support.</p>
            </div>
        </div>
</div>
<!-- LOOM & LEAF BANNER -->
<?php
  include 'template/footer.php'
?>