<?php
  include 'template/header.php'
?>
<div class="breadcumb">
        <ul>
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li><a>Forgot password</a></li>
        </ul>
    </div>

<div class="checkEmail">
    <!-- <img src="image/Logo-putih.png" alt=""> -->
    <ion-icon name="mail" class="email"></ion-icon>
    <h1>Check your email</h1>
    <p>We sent a password reset link to
        <br>muhamadrafli6207@gmail.com
    </p>
    <div class="checkEmailLayout">
        <button type="submit">Open email</button>
        <div class="resendEMail">
            <p>Didn't receive the email? <a href="#">Click to resend</a></p>
        </div>
        <a href="sign-in.php"><ion-icon name="arrow-back"></ion-icon>Back to log in</a>
    </div>
</div>
<?php
  include 'template/footer.php'
?>