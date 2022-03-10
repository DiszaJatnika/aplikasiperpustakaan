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
<div class="contactLayout">
    <div class="contact">
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56348535295!2d107.57294503650147!3d-6.9034443165597255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1642134741321!5m2!1sid!2sid" width="530" height="550" style="border:0; border-radius:21px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contactContent">
            <h1>Get in <span>touch</span></h1>
            <h2>PT. ALGA JAYA RAYA</h2>
            <div class="contactData">
                <div class="contactDataBox">
                    <h3>Address I</h3>
                    <p>Jl. Pinangsia Raya No.73, RT.3/RW.5, Pinangsia, Kec. Taman Sari, Jakarta, </p>
                    <p>Daerah Khusus Ibukota Jakarta 11110
                </div>
                <div class="contactDataBox">
                    <h3>Address II</h3>
                    <p>Jl. Jenderal Sudirman No.Kav. 33A, RT.3/RW.2, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat,</p>
                    <p>Daerah Khusus Ibukota Jakarta 10220
                </div>
            </div>
            <h1>Have a <span>question?</span></h1>
            <div class="contactForm">
                <div class="contactFormInput">
                    <input type="text" placeholder="Full name"> 
                    <input type="email" placeholder="Email address">
                </div>
                <textarea placeholder="Message"></textarea>
                <button>SEND</button>
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