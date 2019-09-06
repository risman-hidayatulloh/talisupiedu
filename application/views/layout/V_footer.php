<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-6">
          <h5>Our Office Location</h5>
          <p>TALIS - Teaching And Learning International Survey.<br>
            LPPM UPI<br>
            Jalan Dr.Setiabudhi No.229 - Bandung, Jawa Barat</p>
          <p>Copyright © 2019 Lexis Inc. All Rights Reserved. <br>
          Designed by <a href="http://www.designstub.com/">Designstub</a> and Modified by <a href="http://www.icli.upi.edu/">ICLI TEAM</a></p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Services We Offer</h5>
          <p>
          <ul>
            <li><a href="#">The Survey</a></li>
            <li><a href="#">Data and Report</a></li>
            <li><a href="#">Schools</a></li>
            <li><a href="#">Research and Publication</a></li>
            <li><a href="#">Timeline</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Subscription</a></li>
            <li><a href="#">Team</a></li>
          </ul>
          </p>
        </div>
        <div class="footer-col col-md-3">
          <h5>Kontak</h5>
          <ul class="footer-share">
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
	    <li><a href="#">talis@upi.edu</a></li>
          <h5>Kemitraan</h5>
          <ul class="footer-share">
            <li>
              <img width="50px" height="auto" src="<?php echo base_url()?>assets/images/logo_kemendikbud.png">
            </li>
            <li>
              <img width="50px" height="auto" src="<?php echo base_url()?>assets/images/dinas-pendidikan-provinsi-jawa-barat.png">
            </li>
            <li>
              <img width="50px" height="auto" src="<?php echo base_url()?>assets/images/logo_disdik_bandung.png">
            </li>
		<br>
	    <li>
              <img width="auto" height="50px" src="<?php echo base_url()?>assets/images/icli.png">
            </li>
            <li>
              <img width="50px" height="auto" src="<?php echo base_url()?>assets/images/logo_oecd.png">
            </li>


          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- footer top --> 
  
</footer>
<!-- Footer section --> 


<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.flexslider-min.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.fancybox.pack.js"></script> 
<script src="<?php echo base_url()?>assets/js/retina.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/modernizr.js"></script> 
<script type="text/javascript">/* <![CDATA[ */
var accordionShortcodesSettings = [{"id":"accordion-1","autoClose":true,"openFirst":false,"openAll":false,"clickToClose":true,"scroll":90}];
/* ]]> */</script>

<script src="<?php echo base_url()?>assets/js/main.js"></script> 
<script src="<?php echo base_url()?>assets/js/accordion.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/jquery.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>

<script type="text/javascript">
  $('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
</script>
</body>
</html>