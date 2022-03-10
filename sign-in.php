<?php
  include 'template/header.php'
?>
<style>
    .scrolling-active nav{
  display:block;
}
nav{
  position: relative !important;
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
</style>

<div class="login">
    <img src="image/Logo-putih.png" alt="">
    <!-- <h1>Sign in</h1> -->
    <p>Sign in & start your purchase</p>
    <div class="loginLayout">
        <div class="loginBox">
            <div class="emailInput">
                <input type="email" placeholder="Email">
            </div>
            <div class="passwordInput" >
                <input type="password" placeholder="Password" name="password" autocomplete="current-password" required="" id="id_password"><i class="far fa-eye" id="togglePassword" style="cursor:pointer; color:white;"></i>
            </div>
        </div>
        <div class="loginBottom">
            <div class="rememberMe">
                <input type="checkbox">
                <label>Remember me</label>
            </div>  
            <a href="forgot-password.php">Forgot Password</a>
        </div>
        <button type="submit">Sign in</button>
        <p>Don’t have an account? <a href="sign-up.php">Sign Up</a></p>
    </div>
</div>
<?php
  include 'template/footer.php'
?>