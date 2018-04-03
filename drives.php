<?php
  require_once('admin/phpscripts/config.php');

  $tbl = "tbl_location";
  $tbl2 = "tbl_drive";
  $tbl3 = "tbl_drive_user_loc";
  $col = "location_id";
  $col2 = "drive_id";
  $col3 = "drive_type";
  $filter = "org";

  $drives = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
  $message = $drives;
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be A Hero - Drives</title>
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
          $log;
          if(isset($_SESSION['user_id'])) {
            $log = "yes";
            $tbllog = "tbl_user";
            $collog = "user_id";
            $idlog = $_SESSION['user_id'];
            $profile = getSingle($tbllog, $collog, $idlog);
            $rows = mysqli_fetch_array($profile);
            if(is_null($rows['user_image'])){
              echo "<div class=\"profileImg\"></div>";
            }else{
              echo "<div class=\"profileImg\">
              <img class=\"profilePic\" src=\"images/{$rows['user_image']}\" alt=\"{$rows['user_fname']} {$rows['user_lname']}\">
              </div>";
            }
            echo "<button class=\"menu-icon logMenu\" type=\"submit\" data-toggle=\"mainNav\"></button>";
          } else {
            echo "<a href=\"https://www.ontario.ca/page/organ-and-tissue-donor-registration\"><h3 class=\"title-bar-title\" id=\"menuHeader\">BE A HERO</h3></a>
            <button class=\"menu-icon\" type=\"button\" data-toggle=\"mainNav\"></button";
          }
          ?>
        </div>
        <nav id="mainNav" class="top-bar hide" data-closable>
          <button id="closeButton" class="close-button" aria-label="Close menu" type="button" data-close><span aria-hidden="true">&times;</span></button>
          <ul class="vertical menu">
            <li><a href="index.php">Home Page</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#">Donor Drives</a></li>
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

    <section id="mainContent">
      <div class="grid-x">
        <h3 class="small-12 medium-4 cell pageTitles">DONOR DRIVES</h3>
        <div class="small-12 cell" id="drivesBanner">
          <img src="images/rally-flag.svg" alt="rally flag">
          <h2>RALLY THE HEROES!</h2>
          <p>Inspire others to act and become organ donors with donation drives.</p>
          <div id="driveButton"><a href="drivesinfo.html">START A DRIVE</a></div>
          <p><a href="">Learn more about drives</a></p>
        </div>
      </div>
      <div class="grid-container">
        <div class="grid-x">
            <div class="button-group stacked-for-small expanded small-12 cell" id="drivesTabs">
              <a class="driveTypeActive button">ORGANIZATIONAL DRIVES</a>
              <a class="button">INDIVIDUAL DRIVES</a>
            </div>

            <table class="small-12 cell unstriped">
              <thead>
                <tr class="driveTitles">
                  <th id="imageTitle"></th>
                  <th>TITLE</th>
                  <th>START DATE</th>
                  <th>REGISTRATION</th>
                </tr>
              </thead>
              <tbody>
                <?php

                if(!is_string($drives)){
                  $count = 1;

                  while($row = mysqli_fetch_array($drives)){
                    if ($row['drive_approval'] !== "Pending") {
                      if($count <= 3) {
                          echo "<tr>
                          <td class=\"driveImage\"><a><img src=\"images/{$row['drive_image']}\" alt=\"{$row['drive_title']}\"></a></td>
                          <td class=\"driveTitle\"><a>{$row['drive_title']}</a></td>
                          <td class=\"driveStart\">{$row['drive_date']}</td>
                          <td class=\"driveRegister\">
                            <h4 class=\"driveMonth\">THIS MONTH</h4>
                            <h4 class=\"monthNum\">{$row['drive_month']}</h4>
                            <h4 class=\"driveTotal\">TOTAL</h4>
                            <h4 class=\"totalNum\">{$row['drive_regs']}</h4>
                          </td>
                        </tr>";
                        
                      }
                    $count += 1;
                    }                    
                  }
                  $pages = ceil ($count / 3);
                  echo "</tbody>
                  </table>
                  <div class=\"small-12 cell\">
                    <ul class=\"pagination text-center\" role=\"navigation\" aria-label=\"Pagination\">";
                    for ($i = 1; $i <= $pages; $i++) {
                      if ($i === 1) {
                        echo "<li class=\"current\"><a aria-label=\"Page 1\">1</a></li>";
                      } else {
                        echo "<li><a href=\"\" aria-label=\"Page {$i}\">{$i}</a></li>";
                      }
                    }
                }else{
                  echo "<p class=\"error\">{$drives}</p>";
                }
                ?>
              </ul>
            </div>
          </div>
      </div>
    </section>

    <div class="driveBox">
      <section class="lightbox">
        <div class="driveDetails">
          <a class="float-right close-lightbox">X</a>
          <img src="images/uot.png" class="float-left" alt="U of T">
          <h4>UofT Gift of Life</h4>
          <p>London<br>Start Date: Nov. 28, 2017<br>5887 Total Registrations | Goal of 1000<br></p>
          <p>This is the drive description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in eleifend dolor. Fusce lorem nunc, finibus at lobortis a, viverra in risus. Nunc dictum velit vitae quam viverra tempus. Nam scelerisque massa ut cursus pharetra. Morbi mollis sapien nec facilisis rutrum. Cras gravida, felis ac lobortis ornare, mi ipsum commodo est, non tempor lectus tortor a velit. Nunc in accumsan arcu.</p>
          <button type="button" class="supportCause">SUPPORT THE CAUSE</button>
        </div>
      </section>
    </div>

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

    <div class="small-12 hide">
      <h1 class="request-state"></h1>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/drives.js"></script>
  </body>
</html>
