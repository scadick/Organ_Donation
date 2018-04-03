<?php

  require_once('admin/phpscripts/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Be A Hero - Home Page</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
</head>
<body>
  <section class="headerBckgrd">
  </section>
  <header class="grid-x">
    <div class="small-12 medium-5 large-3 cell float-right medium-offset-7 large-offset-9">
      <div id="hamMenu" class="title-bar" data-responsive-toggle="mainNav">
          <?php
          $log;
          if(isset($_SESSION['user_id'])) {
            $log = "yes";
            $tbl = "tbl_user";
            $col = "user_id";
            $id = $_SESSION['user_id'];
            $profile = getSingle($tbl, $col, $id);
            $row = mysqli_fetch_array($profile);
            if(is_null($row['user_image'])){
              echo "<div class=\"profileImg\"></div>";
            }else{
              echo "<div class=\"profileImg\">
              <img class=\"profilePic\" src=\"images/{$row['user_image']}\" alt=\"{$row['user_fname']} {$row['user_lname']}\">
              </div>";
            }
            echo "<button class=\"menu-icon logMenu\" type=\"submit\" data-toggle=\"mainNav\"></button>";
          } else {
            echo "<a href=\"https://www.ontario.ca/page/organ-and-tissue-donor-registration\"><h3 class=\"title-bar-title\" id=\"menuHeader\">BE A HERO</h3></a>
            <button class=\"menu-icon\" type=\"button\" data-toggle=\"mainNav\"></button";
          }
          ?>
      </div>
      <nav id="mainNav" class="top-bar" data-closable>
        <button id="closeButton" class="close-button" aria-label="Close menu" type="button" data-close><span aria-hidden="true">&times;</span></button>
        <ul class="vertical menu">
          <li><a href="#">Home Page</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="drives.php">Donor Drives</a></li>
          <li><a href="stories.php">Stories</a></li>
          <?php
            if(empty($log)){
              echo "<li><a href=\"account.php\">Log In/Sign Up</a></li>";
            }else{
              echo "<li><a href=\"admin/phpscripts/caller.php?caller_id=logout\">Sign Out</a></li>";
            }
          ?>
          <li><a href="profile.php">Your Profile</a></li>
          <li><a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration">BE A HERO</a></li>
        </ul>
        <div id="ribbon"></div>
      </nav>
    </div>
  </header>
  <section class="headerVideo">
    <img src="images/red-logo.svg" alt="red logo">
    <h4>PUT YOUR <span id="heart">HEART</span> INTO IT.</h4>
    <h2>BE A HERO</h2>
    <h1>BE A DONOR</h1>
    <div class="playButton">
      <a>
      <div class="playCircle">
        <div class="playTriangle">
        </div>
      </div>
      <h3>PLAY VIDEO</h3>
      </a>
    </div>
  </section>
  <div class="videoBox">
    <section class="lightbox">
      <div class="videoPlayer">
        <a class="float-right close-lightbox">X</a>
        <video>
          <source src="videos/typography.mp4" controls type="video/mp4">
        </video>
      </div>
    </section>
  </div>

  <section>
    <div class="grid-container" id="healthCardSection">
    <h3>HAVE YOUR HEALTH CARD READY.</h3><br>
    <img src="images/healthcard.png" alt="health card"><br><br>
    <p>Registering takes no time all!<br>We just need some basic information and your Health Card number.</p><br>
    <a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration" id="beAHero">BE A HERO</a>
    </div>
  </section>

  <footer class="grid-x">
    <div class="small-6 cell" id="contact">
    <h3>CONTACT</h3>
    <div class="textCenter"><p>Trillium Gift of Life Network<br>483 Bay Street, South Tower, 4th Floor<br>Toronto, ON M5G 2C9<br><br>1-800-263-2833<br>416-363-4001 (Toronto)<br><br>info@giftoflife.ca</p></div>
    </div>
    <div class="small-6 cell">
      <div id="sM">
        <h3 id="socMed">SOCIAL MEDIA |</h3>
        <a href="https://www.facebook.com/TrilliumGiftofLife/"><img src="images/fb-branded.png" alt="facebook logo"></a>
        <a href="https://twitter.com/TrilliumGift?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="images/tw-branded.png" alt="twitter logo"></a>
      </div>
      <div id="trillium">
        <a href="https://www.giftoflife.on.ca/en/"><img src="images/tgln-logo-en.png" alt="Trillium Logos"></a>
        <p>This site is managed by Trillium Gift of Life Network. Ontario's government agency responsible for organ and tissue donation and transplant.</p>
      </div>
      <div id="ontario">
        <img src="images/serviceontario.png" alt="service ontario">
        <img src="images/tgln-bw-en.png" alt="Trillium Ontario">
      </div>
    </div>
    <div class="small-6 cell">
      <h3 class="small-6 cell">MEDIA INQUIRIES</h3>
      <p class="small-6 cell" id="bottomP">Jlong@giftoflife.on.ca</p>
    </div>
  </footer>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
  <!--<script src="js/video.js"></script>-->
</body>
</html>
