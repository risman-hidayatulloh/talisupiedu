
<section id="intro" class="section intro">
  <div class="container">
  </div>
</section>
<!-- intro section --> 

<!-- contact section -->
<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">
        <h5>Login</h5>
        <div id="message"></div>
        <form action="<?php echo site_url('Auth/login'); ?>" method="post">
          <input name="email" id="email" type="email" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Email..." required="required">
          <input name="password" id="password" type="password" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Password..." required="required">

          <h4>Belum punya akun?
            <a href="<?php echo site_url('Talis/daftar') ?>">Daftar</a> 
            sekarang!
          </h4>

          <input type="submit" id="submit" name="send" class="submitBnt" value="Login">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 