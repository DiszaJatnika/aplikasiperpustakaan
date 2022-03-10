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

<div class="signUp">
    <!-- <img src="image/Logo-putih.png" alt=""> -->
    <h1>Sign Up</h1>
    <div class="signUpLayout">
            <div class="signUpform">
                <div class="nameInput">
                    <input type="text" placeholder="Name">
                </div>
                <div class="emailInput">
                    <input type="email" placeholder="Email">
                </div>
            </div>
            <div class="signUpform" >
                <div class="passwordInput" >
                    <input type="password" placeholder="Password" name="password" autocomplete="current-password" required="" id="id_password"><i class="far fa-eye" id="togglePassword" style="cursor:pointer; color:white;"></i>
                </div>
                <div class="numberInput">
                    <input type="text" placeholder="Your Phone Number">
                </div> 
            </div>
            <div class="signUpform">
                <div class="rememberMe">
                    <input type="checkbox">
                    <label>Remember me</label>
                </div> 
            </div>
        <button type="submit">Sign Up</button>
        <p>Already have an account? <a href="sign-in.php">Sign In</a></p>
    </div>
</div>
<?php
  include 'template/footer.php'
?>