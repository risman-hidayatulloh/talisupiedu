<section class="banner" role="banner">
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <h1>TALIS - SURVEI BELAJAR DAN MENGAJAR INTERNASIONAL</h1>
        <p>Survei Internasional untuk Kepala Sekolah dan Guru-Guru Indonesia 2018-2019.</p>
         
      </div>
      <!-- banner text --> 
    </div>
  </div>
</section>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>TALIS Indonesia bertujuan mengetahui Gambaran, Situasi, Potensi dan Analisis untuk pengembangan Kepala Sekolah dan Guru dengan standart internasional yang diadopsi OECD.</h3>
	<!--
    <br>
	<?php if($this->session->as == "Guru_SD"){ ?>
		<a style="color:white;" href="https://docs.google.com/forms/d/e/1FAIpQLSeNvyA8mAf0xCT66cgWjT_zRp8BlQ0LFdu_UDM_9R26lTg4hg/viewform?usp=sf_link" target="_blank" class="btn btn-large">Anda Ingin Berpartisipasi Sekarang?</a>
	<?php }else if($this->session->as == "Guru_SMP"){ ?>
		<a style="color:white;" href="https://docs.google.com/forms/d/e/1FAIpQLSeNvn5u7VPfpN5LfiVN_DDvei1nPrBQS414kxJzrv-Gg9fs6g/viewform?usp=sf_link" target="_blank" class="btn btn-large">Anda Ingin Berpartisipasi Sekarang?</a>
	<?php }else if($this->session->as == "Kepala_Sekolah_SD"){ ?>
		<a style="color:white;" href="https://docs.google.com/forms/d/e/1FAIpQLSfDzp-OxpDJtpURwcFwFtzh8QkizOflGxBLtKR0dx1_hUfniA/viewform?usp=sf_link" target="_blank" class="btn btn-large">Anda Ingin Berpartisipasi Sekarang?</a>
	<?php }else if($this->session->as == "Kepala_Sekolah_SMP"){ ?>
		<a style="color:white;" href="https://docs.google.com/forms/d/e/1FAIpQLSdUlGfqynpwWqMRI7iGvNoy76ikgCJva4E0wvpw5UteAh_6ig/viewform?usp=sf_link" target="_blank" class="btn btn-large">Anda Ingin Berpartisipasi Sekarang?</a>
	<?php }else{ ?>
		<a style="color:white;" href="<?php echo site_url('Talis/login') ?>" class="btn btn-large">Anda Ingin Berpartisipasi Sekarang?</a>
	<?php } ?>
  -->
    <?php if($this->session->kategori == "user"){ ?>
    <br> <a style="color:white;" href="https://docs.google.com/forms/d/e/1FAIpQLSeNvyA8mAf0xCT66cgWjT_zRp8BlQ0LFdu_UDM_9R26lTg4hg/viewform?usp=sf_link" target="_blank" class="btn btn-large">Online Survey Guru SD</a>
    <?php }else if($this->session->kategori == "admin"){ ?>
		<br> <a style="color:white;" href="https://docs.google.com/forms/d/e/1FAIpQLSeNvyA8mAf0xCT66cgWjT_zRp8BlQ0LFdu_UDM_9R26lTg4hg/viewform?usp=sf_link" target="_blank" class="btn btn-large">Online Survey Guru SD</a>
    <?php }else{ ?>
    <br> <a href="<?php echo site_url('Talis/login') ?>" class="btn btn-large" >Anda Ingin Berpartisipasi Sekarang?</a>
        <?php } ?>
    </div> 
  </div>
</section>
<!-- intro section --> 

<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
	<div class="section-header">
    <center><h3 class=""><b>DATA DAN LAPORAN</b></h3>
  </div>

    <div class="row">
      
      <div class="col-md-6 col-sm-6 services text-center"> <span class="icon icon-briefcase"></span>
        <div class="services-content">
          <h5>LAPORAN TALIS TINGKAT SD TAHUN 2018</h5>
          <p>Laporan Survei Pendidikan di Sekolah Dasar Studi Kasus di Jawa Barat</p>
          <a href="#">View</a>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 services text-center"> <span class="icon icon-strategy"></span>
        <div class="services-content">
      	  <h5>LAPORAN TALIS TINGKAT SMP TAHUN 2018</h5>
          <p>Laporan Survei Pendidikan di Sekolah Menengah Pertama Studi Kasus di Jawa Barat</p>
          <a href="#">View</a>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- services section --> 

<!-- sekolah section -->
<section id="sekolah" class="section">
 <div class="container">
  
  <div class="section-header">
    <center><h3 class=""><b>DAFTAR SEKOLAH</b></h3>
  </div>
	<div id="map-canvas"></div>

   </div> 
</section>
<!-- sekolah section --> 

<!-- Testimonials section -->
<section id="research" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>Studi Identifikasi Potensi, Tantangan, Rekomendasi Rumusan Kebijakan, dan Tindakan Perbaikan Revitalisasi Jati Diri Guru serta Sekolah Indonesia di Kancah Global.
		TALIS (Teaching and Learning International Survey) yang dirumuskan OECD (Organization for Economy and Co-operation Development) adalah satu-satunya survey internasional terhadap guru, belajar-mengajar, dan dampak guru terhadap pembelajaran siswa berdasarkan respon guru dan kepala sekolah.
		</h1>
                <p>STUDI TEACHING AND LEARNING INTERNATIONAL SURVEY (TALIS) 2018 INDONESIA</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials section --> 


<!-- linimasa section -->
<section id="linimasa" class="section">
 <div class="container">
  
  <div class="section-header">
    <center><h3 class=""><b>LINIMASA</b></h3>
    <div class="section-legend">Tanggal dan waktu penting untuk TALIS 2018</div></center>
  </div>

  <dl class="timeline-dates">
  <dt class="phase-1">Januari - April 2018</dt>
  <dd class="phase-1">Kajian kerangka konseptual TALIS 2018</dd>
  <dt class="phase-1">Mei - Juni 2018</dt>
  <dd class="phase-1">Menentukan Tema dan Indikator khas Indonesia</dd>
  <dt class="phase-1">Juni - Juli 2018</dt>
  <dd class="phase-1">Baseline assessment sistem pendidikan dan keadaan lingkungan belajar-mengajar</dd>
  <dt class="phase-1">Februari - Juni 2018</dt>
  <dd class="phase-1">Standar, Manual dan Panduan TALIS</dd>
  <dt class="phase-1">April - Mei 2018</dt>
  <dd class="phase-1">Perizinan di level Nasional dan Daerah</dd>
  <dt class="phase-1">Mei - Juni 2018</dt>
  <dd class="phase-1">Implementasi Sampling Plan</dd>
  <dt class="phase-1">April - Juni 2018</dt>
  <dd class="phase-1">Terjemahan Bahasa Indonesia</dd>
  <dt class="phase-1">Juli - Oktober 2018</dt>
  <dd class="phase-1">Implementasi Survey dan Koleksi data</dd>
  <dt class="phase-1">September - Oktober  2018</dt>
  <dd class="phase-1">Quality Control Monitoring Nasional</dd>
  <dt class="phase-1">Oktober - November 2018</dt>
  <dd class="phase-1">Publikasi pada Jurnal</dd>
  <dt class="phase-1">Oktober 2018</dt>
  <dd class="phase-1">Publikasi pada Konferensi</dd>
  <br>
  <dt class="phase-2">Februari - Juni 2019</dt>
  <dd class="phase-2">Data entry, processing dan product</dd>
  <dt class="phase-2">Mei - Juli 2019</dt>
  <dd class="phase-2">Pembobotan, ajudikasi</dd>
  <dt class="phase-2">Juni - Juli 2019</dt>
  <dd class="phase-2">Laporan Hasil Implementasi TALIS</dd>
  <dt class="phase-2">Juli - September 2019</dt>
  <dd class="phase-2">Hasil dan analisis data Nasional</dd>
  <dt class="phase-2">September - November 2019</dt>
  <dd class="phase-2">Analisis Rekomendasi Rumusan Kebijakan</dd>
  <dt class="phase-2">Oktober - November 2019</dt>
  <dd class="phase-2">Publikasi pada Jurnal</dd>
  <dt class="phase-2">Oktober 2019</dt>
  <dd class="phase-2">Publikasi pada Konferensi</dd>
  <br>
  <dt class="phase-3">Februari - Mei 2020</dt>
  <dd class="phase-3">Hasil dan analisis data Internasional</dd>
  <dt class="phase-3">April - Juni 2020</dt>
  <dd class="phase-3">Analisis Rekomendasi Rumusan Kebijakan</dd>
  <dt class="phase-3">Juli - September 2020</dt>
  <dd class="phase-3">Sampel tindakan perbaikan (small best practice)</dd>
  <dt class="phase-3">Oktober 2020</dt>
  <dd class="phase-3">Publikasi pada Jurnal</dd>
  <dt class="phase-3">Oktober 2020</dt>
  <dd class="phase-3">Publikasi pada Konferensi</dd>
  </dl>
 </div> 
</section>
<!-- linimasa section --> 

<!-- FAQ section -->
<section id="FAQ" class="section">

<div class="container">
  
  <div class="section-header">
    <center><h3 class=""><b>FREQUENTLY ASKED QUESTION (FAQ)</b></h3>
    <div class="section-legend">informasikan pertanyaan yang sering ditanyakan oleh pengunjung</div>
  </div>

  
  <div id="accordion-1" class="accordion" role="tablist">
  
  <!-- / FAQ1 -->
  <h3 id="accordion-1-t1" class="accordion-title" role="tab" aria-controls="accordion-1-c1" aria-selected="false" aria-expanded="false">
  Mengapa sekolah saya dipilih untuk survei utama?
  </h3>
  <div id="accordion-1-c1" class="accordion-content" role="tabpanel" aria-labelledby="accordion-1-t1" aria-hidden="true" style="display: none;">
  Sekolah Anda adalah salah satu dari 200 sekolah yang telah dipilih sebagai bagian dari sampel representatif untuk berpartisipasi dalam TALIS 2018 di Indonesia. Proses pengambilan sampel dilakukan oleh Peneliti Universitas Pendidikan Indonesia atas izin dan rekomendasi dari Kementerian Pendidikan dan Kebudayaan (Kemendikbud) dan tidak memiliih menggunakan sekolah lain mana pun diluar sampel. Inilah sebabnya mengapa partisipasi sekolah Anda sangat penting bagi keberhasilan survei.
  </div>

  <!-- / FAQ2 -->
  <h3 id="accordion-1-t2" class="accordion-title" role="tab" aria-controls="accordion-1-c1" aria-selected="false" aria-expanded="false">
  Kapan survei  TALIS?
  </h3>
  <div id="accordion-1-c2" class="accordion-content" role="tabpanel" aria-labelledby="accordion-1-t1" aria-hidden="true" style="display: none;">
  Survei pertama TALIS tahun 2018 berlangsung pada bulan September sampai Oktober 2018 di 128 Sekolah Dasar (SD) dan 156 Sekolah Menengah Pertama (SMP) dengan kasus dipilih Propinsi Jawa Barat secara langsung (direct survey). 
  <br><br>
  Sedangkan Survey kedua TALIS tahun 2019 dilaksanakan secara langsung dan dalam jaringan (online). Untuk survey secara online akan mencakup 100 SD dan 100 SMP di Indonesia, sedangkan survey langsung mencakup propinsi Sumatera Barat dan Sulawesi Tenggara. Di setiap sekolah yang dipilih, 20 guru dan kepala sekolah akan diminta untuk mengisi kuesioner TALIS selama periode survei. Hal ini sangat penting bahwa jumlah maksimum sekolah ikut serta sehingga kami dapat memenuhi persyaratan partisipasi sampel internasional yang ketat untuk terlibat dalam penelitian ini supaya mendapatkan analisis data yang sesuai.
  </div>

  <!-- / FAQ3 -->
  <h3 id="accordion-1-t2" class="accordion-title" role="tab" aria-controls="accordion-1-c1" aria-selected="false" aria-expanded="false">
  Siapa yang bertanggung jawab atas TALIS di Indonesia?
  </h3>
  <div id="accordion-1-c2" class="accordion-content" role="tabpanel" aria-labelledby="accordion-1-t1" aria-hidden="true" style="display: none;">
  Tim Peneliti TALIS � Universitas Pendidikan Indonesia (UPI) dengan Ketua Prof Dr H Asep Kadarohman; anggota tim : Prof. Dr. Anna Permanasari, M.Si; Dr. Harry Firman, M.Pd; Arif Hidayat, M.Si, PhD Ed dengan dukungan pendanaan dari Kementrian Riset dan Teknologi, Direktorat Perguruan Tinggi (Kemenristek-Dikti) melalui skema penelitian kompetitif dan sumber lain oleh UPI.
  </div>

  <!-- / FAQ4 -->
  <h3 id="accordion-1-t2" class="accordion-title" role="tab" aria-controls="accordion-1-c1" aria-selected="false" aria-expanded="false">
  Siapakah Pusat Nasional?
  </h3>
  <div id="accordion-1-c2" class="accordion-content" role="tabpanel" aria-labelledby="accordion-1-t1" aria-hidden="true" style="display: none;">
  Tim Pusat Nasional terdiri dari Tim Peneliti UPI dan Kordinator Sekolah yang telah ditunjuk dan berkordinasi dengan Tim Peneliti UPI
  </div>

  <!-- / FAQ5 -->
  <h3 id="accordion-1-t2" class="accordion-title" role="tab" aria-controls="accordion-1-c1" aria-selected="false" aria-expanded="false">
  Apakah sekolah saya harus mengikuti?
  </h3>
  <div id="accordion-1-c2" class="accordion-content" role="tabpanel" aria-labelledby="accordion-1-t1" aria-hidden="true" style="display: none;">
  Untuk mencerminkan komitmen pemerintah terhadap survei pendidikan internasional dan pentingnya tingkat partisipasi yang tinggi, Kami didukung Kemendikbud dalam bentuk mengizinkan dan merekomendasikan sekolah Model dan atau Sekolah Rujukan Negeri yang dipilih untuk ikut serta dalam survei ini. 
  </div>

  <!-- / FAQ6 -->
  <h3 id="accordion-1-t2" class="accordion-title" role="tab" aria-controls="accordion-1-c1" aria-selected="false" aria-expanded="false">
  Apa peran koordinator sekolah?
  </h3>
  <div id="accordion-1-c2" class="accordion-content" role="tabpanel" aria-labelledby="accordion-1-t1" aria-hidden="true" style="display: none;">
  Setiap sekolah perlu menunjuk seorang koordinator sekolah untuk bertindak sebagai kontak utama antara Pusat Nasional dan sekolah. Koordinator sekolah perlu memiliki akses data guru sekolah yang akan terlibat dalam survey. Dengan dukungan dari Pusat Nasional mereka akan bertanggung jawab untuk:
  <ul>
      <li>Memberikan daftar guru sekolah ke Pusat Nasional.</li>
      <li>Menginformasikan guru bagaimana cara mengikuti TALIS.</li>
      <li>Mendorong para guru untuk mengisi kuesioner online selama periode survei.</li>
  </ul>
  </div>

  <!-- / FAQ7 -->
  <h3 id="accordion-1-t2" class="accordion-title" role="tab" aria-controls="accordion-1-c1" aria-selected="false" aria-expanded="false">
  Saya seorang guru yang telah dijadikan sampel untuk mengikuti TALIS, apakah tanggapan saya akan anonim?
  </h3>
  <div id="accordion-1-c2" class="accordion-content" role="tabpanel" aria-labelledby="accordion-1-t1" aria-hidden="true" style="display: none;">
  Respons survei sepenuhnya rahasia untuk nama masing-masing guru, kepala sekolah, atau sekolah. Peneliti harus menandatangani dan / atau menyetujui perjanjian rahasia ini sebagai bagian dari Research Ethics.
  </div>

  <!-- / FAQ8 -->
  <h3 id="accordion-1-t2" class="accordion-title" role="tab" aria-controls="accordion-1-c1" aria-selected="false" aria-expanded="false">
  Informasi apa yang akan dibagikan kepada orang lain?
  </h3>
  <div id="accordion-1-c2" class="accordion-content" role="tabpanel" aria-labelledby="accordion-1-t1" aria-hidden="true" style="display: none;">
  Laporan temuan dari uji coba lapangan TALIS dan survei utama tidak akan mengidentifikasi sekolah atau guru yang berpartisipasi. Nama guru tidak termasuk dalam data yang dikirim kepada Tim Peneliti Nasional TALIS. Meskipun data dari survei utama akan dipublikasikan di situs web www.talis.upi.edu , semua informasi guru dan sekolah akan anonim.
  </div>

  <!-- / FAQ9 -->
  <h3 id="accordion-1-t2" class="accordion-title" role="tab" aria-controls="accordion-1-c1" aria-selected="false" aria-expanded="false">
  Apa yang terjadi dengan data pribadi yang disediakan sekolah untuk TALIS 2018?
  </h3>
  <div id="accordion-1-c2" class="accordion-content" role="tabpanel" aria-labelledby="accordion-1-t1" aria-hidden="true" style="display: none;">
  Untuk mencapai sampel guru yang representatif di Indonesia untuk data TALIS 2018 dikumpulkan dari sekolah yang berpartisipasi oleh semua guru yang memenuhi syarat untuk berpartisipasi dalam TALIS. Informasi seperti nama, tanggal lahir, jenis kelamin, dan domain pengajaran dikumpulkan agar sampel yang representatif dapat diambil. Data yang dikumpulkan dari guru yang dijadikan sampel untuk mengikuti TALIS kemudian dianonimkan, juga sekolah yang berpartisipasi. Data yang dikumpulkan pada guru yang tidak dijadikan sampel untuk mengikuti TALIS dihapus dan dihancurkan secara permanen.
  <br><br>
  Semua data yang dikumpulkan untuk TALIS 2018 ditangani dan diproses sesuai dengan Undang-Undang Perlindungan Data 1998 dan masing-masing guru atau sekolah yang berpartisipasi tidak akan pernah diidentifikasi dalam laporan atau temuan apa pun. Silakan hubungi kami jika Anda memerlukan informasi lebih lanjut tentang bagaimana data untuk TALIS digunakan. 
  </div>

  </div>
</div> <!-- / END CONTAINER -->



</section>
<!-- FAQ section --> 

<!-- contact section -->
<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">
        <h5>Kontak Kami</h5>
        <p>
	Kami senang menerima Email Anda terkait TALIS, kritik, saran, komentar, pertanyaan atau peluang kolaborasi. 
	</p>
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="nama" id="nama" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Nama Bapak/Ibu..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Alamat Email..." >
          <input name="no_wa" id="no_wa" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Nomor Whatsapp..." >
	  <textarea name="pesan" id="pesan" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Isi Pesan..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Kirim Pesan">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 

<!-- our team section -->
<section id="teams" class="section teams">
  <div class="container">
    <div class="row">
	<center><h3 class=""><b>ANGGOTA TIM PENELITI</b></h3>
	<br><br>

     <div class="col-md-3 col-sm-6">
        <div class="person"><img src="<?php echo base_url()?>assets/images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Prof. Dr. Asep Kadarohman,M.Si</h4>
            <h5 class="role">DIREKTUR PROYEK</h5>    
          </div>      
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="<?php echo base_url()?>assets/images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Dr. Harry Firman, M.Pd</h4>
            <h5 class="role">MANAJER AKADEMIK</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="<?php echo base_url()?>assets/images/team-2.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Arif Hidayat, M.Si, PhD in Ed</h4>
            <h5 class="role">MANAJER PROYEK NASIONAL</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="person"><img src="<?php echo base_url()?>assets/images/team-6.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Dr. Taufani Chusnul Kurniatun, MSi</h4>
            <h5 class="role">MANAJER LAPANGAN</h5>    
          </div>      
        </div>
      </div>

      <div class="center">
        <div class="person"> <img src="<?php echo base_url()?>assets/images/team-5.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Prof. Dr. Bibin Rubini - Universitas Pakuan</h4>
            <h5 class="role">MANAJER DATA NASIONAL</h5>
          </div>
        </div>
      </div>

      

      

    </div>
  </div>
</section>
<!-- our team section --> 

