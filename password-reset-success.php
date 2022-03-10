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
    <ion-icon name="checkmark-circle" class="success"></ion-icon>
    <h1>Password reset</h1>
    <p>Your password has been successfully reset.
        <br>Click below to log in magically.
    </p>
    <div class="checkEmailLayout">
        <button type="submit">Continue</button>
        <a href="sign-in.php"><ion-icon name="arrow-back"></ion-icon>Back to log in</a>
    </div>
</div>
<?php
  include 'template/footer.php'
?>