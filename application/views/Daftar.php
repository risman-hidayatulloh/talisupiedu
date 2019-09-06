
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
        <h5>Daftar</h5>
        <div id="message"></div>
        <form method="post" action="<?php echo site_url('Auth/register'); ?>" >
          <input name="nip" id="nip" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="NIP..." >
          <input name="nama" id="nama" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Nama Lengkap...">
          <input name="email" id="email" type="email" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Alamat Email..." >
          <input name="username" id="username" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Username..." >
          <input name="password" id="password" type="password" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Password..." >
          <input name="no_wa" id="no_wa" type="text" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Nomor Whatsapp..." >
	  <input name="rek_bank" id="rek_bank" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Nama Rekening Bank (BNI, Mandiri, BCA, BRI, lainnya)..." >
	  <input name="no_rekening" id="no_rekening" type="rekening" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Nomor Rekening..." >          
	  <input name="nis" id="nis" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="NIS Sekolah..." >
          <input name="nama_sekolah" id="nama_sekolah" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Nama Sekolah..." >

          <div class="form-group">
           <label for="sel1">Daftar sebagai :</label>
            <select name="as" class="form-control" id="sel1">
              <option>Guru_SD</option>
              <option>Guru_SMP</option>
              <option>Kepala_Sekolah_SD</option>
              <option>Kepala_Sekolah_SMP</option>
            </select>
          </div>

          <h4>Sudah punya akun?
            <a href="<?php echo site_url('Talis/login') ?>">Login</a> 
            sekarang!
          </h4>

          <input type="submit" id="submit" class="submitBnt" value="Daftar">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 