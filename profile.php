<?php

  require_once('admin/phpscripts/config.php');
  confirm_logged_in();
  $check = $_SESSION['user_new'];
  $tbl = "tbl_user";
  $col = "user_id";
  $id = $_SESSION['user_id'];
  $profile = getSingle($tbl, $col, $id);
  $row = mysqli_fetch_array($profile);

  if(isset($_POST['confirm'])) {
    $fname = trim($_POST['firstName']);
    $lname = trim($_POST['lastName']);
    $cusername = trim($_POST['newusername']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $code = trim($_POST['postalCode']);
    $length = strlen($code);
    if(empty($code) || $length < 3){
      $message = "Please enter your Postal Code";
    }else{
      $shortCode = substr("{$code}", 0, 3);
      $result = editUser($fname, $lname, $cusername, $email, $phone, $shortCode, $code);
      $message = $result;
      echo $message;
      $_SESSION['user_new'] = "no";
    }
  }
  if(isset($_POST['edit'])) {
    $_SESSION['user_new'] = "yes";
  }
  if(isset($_POST['signout'])) {
    redirect_to("admin/phpscripts/caller.php?caller_id=logout");
  }
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organ Donation</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  </head>
  <body>

    <header class="grid-x">
      <div class="small-3 cell float-right small-offset-9">
        <div id="hamMenu" class="title-bar" data-responsive-toggle="mainNav">
          <?php
          if(is_null($row['user_image'])){
            echo "<div class=\"profileImg\"></div>";
          }else{
            echo "<div class=\"profileImg\">
            <img class=\"profilePic\" src=\"images/{$row['user_image']}\" alt=\"{$row['user_fname']} {$row['user_lname']}\">
            </div>";
          }
          echo "<button class=\"menu-icon logMenu\" type=\"submit\" data-toggle=\"mainNav\"></button>";
          ?>
        </div>
        <nav id="mainNav" class="top-bar" data-closable>
          <button id="closeButton" class="close-button" aria-label="Close menu" type="button" data-close><span aria-hidden="true">&times;</span></button>
          <ul class="vertical menu">
            <li><a href="index.php">Home Page</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="drives.php">Donor Drives</a></li>
            <li><a href="stories.php">Stories</a></li>
            <li><a href="admin/phpscripts/caller.php?caller_id=logout">Sign Out</a></li>
            <li><a href="#">Your Profile</a></li>
            <li><a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration">BE A HERO</a></li>
          </ul>
          <div id="ribbon"></div>
        </nav>
      </div>
    </header>
  <section id="mainContent">
    <form action="profile.php" method="post" class="float-right">
      <button type="submit" id="signOut" name="signout">SIGN OUT</button>
    </form>
    <h3 class="small-12 cell pageTitles">YOUR PROFILE</h3>
    <div class="grid-container" id="profileContainer">
      <div class="profile">
        <div class="grid-x">
        
      
        <?php
        if($check === "no") {
          if(is_null($row['user_image'])){
            echo "<h3 class=\"profilePicSub float-left small-5 cell\">Profile Picture</h3>";
          }else{
            echo "<div class=\"float-left small-12 medium-5 cell\">
            <img class=\"profilePic\" src=\"images/{$row['user_image']}\" alt=\"{$row['user_fname']} {$row['user_lname']}\">
            </div>";
          }
          echo "
          <div class=\"small-7 cell\">
            <div class=\"personalInfo\">
              <h4>FIRST NAME</h4>
              <p>{$row['user_fname']}</p>
            </div>
            <div class=\"personalInfo\">
              <h4>LAST NAME</h4>
              <p>{$row['user_lname']}</p>
            </div>
            <div class=\"personalInfo\">
              <h4>USERNAME</h4>
              <p>{$row['user_name']}</p>
            </div>
            <div class=\"personalInfo\">
              <h4>EMAIL</h4>
              <p>{$row['user_email']}</p>
            </div>
            <div class=\"personalInfo\">
              <h4>POSTAL CODE</h4>
              <p>{$row['user_code']}</p>
            </div>
            <div class=\"personalInfo\">
              <h4>PHONE</h4>
              <p>{$row['user_phone']}</p>
            </div>
          </div>
          <form id=\"editForm\" class=\"float-center\">
            <button type=\"submit\" name=\"edit\" id=\"editButton\" formmethod=\"post\" formaction=\"profile.php\">EDIT</button>
          </form>";
        }else if($check === "yes") {
          echo "<form id=\"profileForm\" class=\"small-6 cell\" method=\"post\" action=\"profile.php\">
            <div class=\"field\">
            <label>FIRST NAME</label>
            <input type=\"text\" name=\"firstName\" value=\"{$row['user_fname']}\">
            </div>
            <div class=\"field\">
            <label>LAST NAME</label>
            <input type=\"text\" name=\"lastName\" value=\"{$row['user_lname']}\">
            </div>
            <div class=\"field\">
            <label>USERNAME</label>
            <input type=\"text\" name=\"newusername\" value=\"{$row['user_name']}\">
            </div>
            <div class=\"field pic small-12 medium-6 cell\">
            <label>PROFILE PICTURE</label>
            <input type=\"file\" name=\"image\">
            </div>
            <div class=\"field\">
            <label>EMAIL</label>
            <input type=\"email\" name=\"email\" value=\"{$row['user_email']}\">
            </div>
            <div class=\"field\">
            <label>POSTAL CODE</label>
            <input type=\"text\" name=\"postalCode\" value=\"{$row['user_code']}\">
            </div>
            <div class=\"field\">
            <label>PHONE NUMBER</label>
            <input type=\"tel\" name=\"phone\" value=\"{$row['user_phone']}\">
            </div>
            <button type=\"submit\" name=\"confirm\" id=\"editButton\" class=\"float-center\">CONFIRM</button>
          </form>
        </div>";
        }
        ?>
      </div>
    </div>
    <div class="yourDrives">
      <h3>YOUR DRIVES</h3>
        <?php
        
        $tbl1 = "tbl_drive";
        $tbl2 = "tbl_user";
        $tbl3 = "tbl_drive_user_loc";
        $col1 = "drive_id";
        $col2 = "user_id";
        $filter = $_SESSION['user_id'];
        $drives = filterType($tbl1, $tbl2, $tbl3, $col1, $col2, $col2, $filter);
        $full = mysqli_fetch_array($drives);
        if (empty($full)) {
          echo "<p class=\"text-center\">You have no drives.</p>";
        } else {
          $count = 1;
          while($rows = mysqli_fetch_array($drives)){
            if($count <= 4){
            echo "<div class=\"personalDrives\">
              <span class=\"picCircle\"></span>
              <h3>{$rows['drive_title']}</h3>
              <p>{$rows['drive_date']}<br>{$rows['drive_regs']} Total Registers</p>
            </div>";
            }
            $count += 1;
          }
        
        /*<div class="personalDrives">
          <span class="picCircle"></span>
          <h3>DRIVE NAME</h3>
          <p>March 8, 2018 <br>25 Total Registers</p>
        </div>
        <div class="personalDrives">
          <span class="picCircle"></span>
          <h3>DRIVE NAME</h3>
          <p>March 8, 2018 <br>25 Total Registers</p>
        </div>
        <div class="personalDrives">
          <span class="picCircle"></span>
          <h3>DRIVE NAME</h3>
          <p>March 8, 2018 <br>25 Total Registers</p>
        </div>
        
      */
        $keys = count($rows);
        for($i=0; $i < count($keys); ++$i) {
            echo $keys[$i] . ' ' . "<br>";
        }
        echo "</div> <a>more drives...</a>";
        }
      ?>
  </div>
  </section>

  <footer class="grid-x">
    <div class="small-6 cell" id="contact">
    <h3>CONTACT</h3>
      <P>Trillium Gift of Life Network<br>483 Bay Street, South Tower, 4th Floor<br>Toronto, ON M5G 2C9<br><br>1-800-263-2833<br>416-363-4001 (Toronto)<br><br>info@giftoflife.ca</p>
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
  </body>
</html>
