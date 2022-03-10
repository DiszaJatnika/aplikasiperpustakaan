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
.cart{
    padding-top:90px;
}
</style>
<div class="cart">
    <div class="cartProduk">
        <h1>Your cart <span>(2)</span></h1>
        <div class="signInPopup">
            <span><a href="#" class="popup-btn">Sign in</a> for faster checkout</span>
            <div class="popup-view">
                <div class="popup-card">
                    <h1>Sign in</h1>
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="formSignin">
                        <input type="email" placeholder="Email*">
                        <input type="password" placeholder="Password*">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="SignInButton">
                        <button>Sign in</button>
                    </div>
                    <div class="create-accountButton">
                        <button>
                            Create account
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cartItem">
            <div class="item">
                <div class="imageItem">
                    <img src="image/chloeBanner.jpg" alt="">
                </div>
                <div class="itemContent">
                    <h1 class="produkTitle">
                        Chloe Mattress
                    </h1>
                    <ul class="itemDescription">
                        <li>Size: <span>King</span> </li>
                        <li>Height: <span>11.5"</span> </li>
                        <li>Comfort: <span>Luxury Firm</span> </li>
                        <li><a href="#">Edit</a></li>
                    </ul>
                </div>
            </div>
            <div class="price-counter">
                <div class="itemPrice">
                    <div class="jumlah">
                        <span>$2,098</span>
                    </div>
                </div>
                <div class="item-counter">
                    <div class="counter">
                            <span class="down" onClick='decreaseCount(event, this)'>-</span>
                            <input type="text" value="1">
                            <span class="up"  onClick='increaseCount(event, this)'>+</span>
                    </div>
                </div>
                <div class="priceRemove-save">
                    <div class="remove">
                        <a href="#">Remove</a>
                    </div>
                    <div class="save">
                        <a href="#">Save for later</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cartOrder">
        <h1>Order Summary</h1>
        <div class="orderSummaryItem">
            <label>Order Subtotal</label>
            <label>$2,098</label>
        </div>
        <div class="orderSummaryItemDiscount">
            <div class="discount">
                <div>
                    <input type="checkbox" id="section1" class="accordion_input">
                    <div class="discountHeader">
                        <label for="section1" class="discountPrice">Discounts & Savings</label>
                        <p>- $169.50</p>
                    </div>
                    <div class="potongan">
                        <p>10% off</p>
                        <p>- $209.50</p>
                    </div>
                </div>
                <div>
                    <input type="checkbox" id="section2" class="accordion_input">
                    <div class="discountHeader">
                        <label for="section2" class="discountPrice">Estimated Tax</label>
                        <p>---</p>
                    </div>
                    <div class="potongan diskon2">
                        <p>Enter your delivery zip code to see your estimated tax:</p>
                        <div class="inputDiscount">
                            <input type="text" placeholder="Zip Code"><button>Enter</button>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="orderSummaryItem">
            <label>White Glove Delivery</label>
            <label>Free</label>
        </div>
        <div class="orderSummaryItem">
            <label>Tax</label>
            <label>---</label>
        </div>
        <div class="cartOrderDivider">
        </div>
        <div class="total">
            <label>Total</label>
            <label>$1928.50</label>
        </div>
        <div class="checkoutButton">
            <button onclick="window.location='checkout.php';">Checkout<ion-icon name="cart"></ion-icon></button>
        </div>
        <div class="metodePembayaran" id="overflowTest">
            <div class="bank aktif">
                <div class="bankImage">
                    <img src="image/mandiri.png" alt="">
                </div>
                <span>Mandiri Virtual Account</span>
            </div>
            <div class="bank">
                <div class="bankImage">
                    <img src="image/BNI.png" alt="">
                </div>
                <span>BNI Virtual Account</span>
            </div>
            <div class="bank">
                <div class="bankImage">
                    <img src="image/BCA.png" alt="">
                </div>
                <span>BCA Virtual Account</span>
            </div>
            <div class="bank">
                <div class="bankImage">
                    <img src="image/BRI.png" alt="">
                </div>
                <span>BRI Virtual Account</span>
            </div>
            <div class="bank">
                <div class="bankImage">
                    <img src="image/BTN.png" alt="">
                </div>
                <span>BTN Virtual Account</span>
            </div>
        </div>
    </div>
</div>

<?php
  include 'template/whatsapp.php'
?>
  <?php
  include 'template/footer.php'
?>