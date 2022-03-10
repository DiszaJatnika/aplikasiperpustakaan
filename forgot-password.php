<?php
  include 'template/header.php'
?>
<div class="breadcumb">
        <ul>
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li><a>Forgot password</a></li>
        </ul>
    </div>

<div class="forgot">
    <!-- <img src="image/Logo-putih.png" alt=""> -->
    <ion-icon name="key" class="kunci"></ion-icon>
    <h1>Forgot Password?</h1>
    <p>No worries, we'll send you reset instructions</p>
    <div class="forgotLayout">
            <div class="forgotform">
                <label>Email</label>
                <div class="emailInput">
                    <input type="email" placeholder="Enter your email">
                </div>
            </div>
        <button type="submit" onclick="window.location='check-email.php';">Reset password</button>
        <a href="sign-in.php"><ion-icon name="arrow-back"></ion-icon>Back to log in</a>
    </div>
</div>
<?php
  include 'template/footer.php'
?>