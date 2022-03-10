<?php
  include 'template/header.php'
?>
    <div class="breadcumb">
        <ul>
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li><a>Cart</a><span class="divider">/</span></li>
            <li><a>Checkout</a></li>
        </ul>
    </div>

<div class="checkout">
    <div class="shippingForm">
        <div class="shippingInformation">
            <h1>1. Shipping Information</h1>
            <span>*indicates a required field</span>
        </div>
        <div class="formCheckout">
            <div class="formCheckoutInput">
                <input type="email" placeholder="Email*">
                <input type="text" placeholder="Phone*">
            </div>
            <div class="formCheckoutInput">
                <input type="text" placeholder="First Name*">
                <input type="text" placeholder="Last Name*">
            </div>
            <div class="formCheckoutInput">
                <input type="text" placeholder="Address*">
            </div>
            <div class="formCheckoutInput">
                <input type="text" placeholder="Provinsi*">
                <input type="text" placeholder="Kota*">
            </div>
            <div class="formCheckoutInput">
                <input type="text" placeholder="Kode Pos*">
                <input type="text" placeholder="Kecamatan*">
                <input type="text" placeholder="Kelurahan*">
            </div>
        </div>
        <div class="shippingInformation">
            <h1>2. Billing Information</h1>
        </div>
    </div>
    <div class="billing">
            <div class="orderSummaryItemDiscount">
                <div class="discount">
                    <div>
                        <input type="checkbox" id="section1" class="accordion_input">
                        <div class="discountHeader">
                            <label for="section1" class="discountPrice">Cart</label>
                            <p>$1928.50</p>
                        </div>
                        <div class="cartCheckout">
                            <a href="cart.php" class="editCheckout">Edit</a>
                            <div class="cartDescriptionCheckout">
                                <div class="imageProductCheckout">
                                    <img src="image/chloeBanner.jpg" alt="">
                                </div>
                                <span>Down Alternative Pillow in King</span>
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
                <button onclick="window.location='checkout.php';">Continue to billing<ion-icon name="cart"></ion-icon></button>
            </div>
    </div>
</div>



<?php
  include 'template/whatsapp.php'
?>
<?php
  include 'template/footer.php'
?>