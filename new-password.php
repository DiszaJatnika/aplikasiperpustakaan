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
    <h1>Set new password</h1>
    <p>Your new password must be different to <br>previously used passwords</p>
    <div class="forgotLayout">
            <div class="forgotform">
                <div class="passwordNewInput" >
                    <input type="password" placeholder="Password" name="password" autocomplete="current-password" required="" id="id_password">
                </div>
                <div class="passwordNewInput" >
                    <input type="password" placeholder="Confirm password" name="Newpassword" autocomplete="current-Newpassword" required="" id="id_Newpassword">
                </div>
            </div>
        <button type="submit" onclick="window.location='check-email.php';">Reset password</button>
        <a href="sign-in.php"><ion-icon name="arrow-back"></ion-icon>Back to log in</a>
    </div>
</div>
<?php
  include 'template/footer.php'
?>