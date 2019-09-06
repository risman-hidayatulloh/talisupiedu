<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TALIS - SURVEI BELAJAR DAN MENGAJAR INTERNASIONAL</title>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/flexslider.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-icon.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style type="text/css">
  ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}

#radioBtn .notActive{
    color: #3276b1;
    background-color: #fff;
}

#map-canvas {
        width: 100%;
        height: 500px;
      }
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
     
    var markers = [
      ['Sekolah Dasar A', -6.777797700000000000 , 106.948689100000020000],
      ['Sekolah Dasar B', -7.319999999999999000, 107.730000000000020000],
      ['Sekolah Dasar C', -7.3225, 107.86000000000001],
      ['Sekolah Dasar D', -7.942493600000000000, 112.953012199999990000],
      ['Sekolah Dasar E', -8.1077172, 112.92240749999996],
      ['Sekolah Dasar F', -7.540717500000000000, 110.445724100000000000],
      ['Sekolah Dasar G', -7.455000000000001000, 110.440000000000050000],
      ['Sekolah Dasar H', -7.1869444, 109.92277779999995]
    ];
 
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }     
        var map = new google.maps.Map(mapCanvas, mapOptions)
 
    var infowindow = new google.maps.InfoWindow(), marker, i;
    var bounds = new google.maps.LatLngBounds(); // diluar looping
    for (i = 0; i < markers.length; i++) {  
    pos = new google.maps.LatLng(markers[i][1], markers[i][2]);
    bounds.extend(pos); // di dalam looping
    marker = new google.maps.Marker({
        position: pos,
        map: map
    });
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent(markers[i][0]);
            infowindow.open(map, marker);
        }
    })(marker, i));
    map.fitBounds(bounds); // setelah looping
    }
 
      }
 
 
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</head>

<body>


<!-- header section -->
<section>
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="<?php echo site_url('') ?>">TALIS</a>
      <nav class="navigation" role="navigation" style="letter-spacing: -1px; word-spacing: 1px; font-size: 4;">
        <ul class="primary-nav" >

        <?php if($this->session->kategori == "user"){ ?>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Online Survey</a>
            <ul class="dropdown-menu">
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeNvyA8mAf0xCT66cgWjT_zRp8BlQ0LFdu_UDM_9R26lTg4hg/viewform?usp=sf_link" target="_blank">Online Survey Guru SD</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeNvn5u7VPfpN5LfiVN_DDvei1nPrBQS414kxJzrv-Gg9fs6g/viewform?usp=sf_link" target="_blank">Online Survey Guru SMP</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfDzp-OxpDJtpURwcFwFtzh8QkizOflGxBLtKR0dx1_hUfniA/viewform?usp=sf_link" target="_blank">Online Survey Kepala Sekolah SD</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdUlGfqynpwWqMRI7iGvNoy76ikgCJva4E0wvpw5UteAh_6ig/viewform?usp=sf_link" target="_blank">Online Survey Kepala Sekolah SMP</a></li>
            </ul>
          </li>
        <?php }else if($this->session->kategori == "admin"){ ?>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Online Survey</a>
            <ul class="dropdown-menu">
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeNvyA8mAf0xCT66cgWjT_zRp8BlQ0LFdu_UDM_9R26lTg4hg/viewform?usp=sf_link" target="_blank">Online Survey Guru SD</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeNvn5u7VPfpN5LfiVN_DDvei1nPrBQS414kxJzrv-Gg9fs6g/viewform?usp=sf_link" target="_blank">Online Survey Guru SMP</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfDzp-OxpDJtpURwcFwFtzh8QkizOflGxBLtKR0dx1_hUfniA/viewform?usp=sf_link" target="_blank">Online Survey Kepala Sekolah SD</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdUlGfqynpwWqMRI7iGvNoy76ikgCJva4E0wvpw5UteAh_6ig/viewform?usp=sf_link" target="_blank">Online Survey Kepala Sekolah SMP</a></li>
            </ul>
          </li>
        <?php }else{ ?>
          <li><a href="<?php echo site_url('Talis/login') ?>" >Online Survey</a></li>
        <?php } ?>

          <li><a href="#services">Data dan Laporan</a></li>
          <li><a href="#sekolah">Sekolah</a></li>
          <li><a href="#research">Penelitian dan Penerbitan</a></li>
          <li><a href="#linimasa">Linimasa</a></li>
          <li><a href="#FAQ">Faq</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="#teams">Tim</a></li>

          <?php if($this->session->kategori == "user"){ ?>
          <li><a href="<?php echo site_url('Auth/logout') ?>" class="btn btn-small">Logout</a> </div></li>
          <?php }else if($this->session->kategori == "admin"){ ?>
          <li><a href="<?php echo site_url('Auth/logout') ?>" class="btn btn-small">Logout</a> </div></li>
          <?php }else{ ?>
          <li><a href="<?php echo site_url('Talis/login') ?>" class="btn btn-small">Login</a> </div></li>
          <?php } ?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
</section>
