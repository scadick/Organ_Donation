<?php
  require_once('admin/phpscripts/config.php');

  $tbl = "tbl_user";
  $tbl2 = "tbl_story";
  $tbl3 = "tbl_story_user";
  $col = "user_id";
  $col2 = "story_id";
  $col3 = "story_approval";
  $filter = "yes";

  $stories = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
  $message = $stories;

  if(isset($_POST['submit'])) {
    $story = ($_POST['description']);
    confirm_logged_in();
      echo "test";
      if(empty($story)){
        $message = "Please write your story.";
      }else{
        //$result = createStory($story);
        //$message = $result;
      }
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
            <li><a href="index.php">Home Page</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="drives.php">Donor Drives</a></li>
            <li><a href="#">Stories</a></li>
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
    <h3 class="small-12 cell pageTitles">FEATURED STORIES</h3>
    <div class="storiesBox">
      <iframe class="small-12 cell" src="https://player.vimeo.com/video/24894938?color=019f47&title=0&byline=0&portrait=0" width="640" height="332" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <div id="mainStory">
        <h4>“I HEARD THE WORDS ‘ENLARGED HEART’. I KNEW IT WAS BAD.”</h4>
        <p>Ryley was only two months old when she became quite ill. It was in the ER that her mother, Joanna, heard the words "enlarged heart." She remembers asking the doctor, "So you're telling me that my baby is going to die? And he said, 'No. But there's a good chance she's going to need a heart transplant.'" <br><br> Joanna and her husband were living in a hotel near the transplant centre when they received a 2:00 a.m. call that a heart was available for Ryley. By 9:30 p.m. that night, they were able to see their daughter after her transplant surgery. "She was on a breathing tube...but she was pink. And she just looked so wonderful."</p>
      </div>
      <div id="circles1">
       <ul class="pagination">
         <li><a href="#" class="active">1</a></li>
         <li><a href="#">2</a></li>
         <li><a href="#">3</a></li>
         <li><a href="#">4</a></li>
       </ul>
      </div>
    </div>
      <h3 class="small-12 cell pageTitles">STORIES FROM USERS</h3>
      <div id="submitStory">
        <p>Have a story to tell?</p>
        <button type="button" id="shareButton">SHARE</button>
      </div>
      <div class="userSubmitted">
        <?php
        
        if(!is_string($stories)){
          $count = 1;
          while($count <= 6 && $row = mysqli_fetch_array($stories)){
            $lname = substr($row['user_lname'], 0, 1);
            $text = substr($row['story_text'], 0, 145);
            echo "<div class=\"userStory\">";
            if(is_null($row['user_image'])){
              echo "<div class=\"userStoryPic\"></div>";
            }else{
              echo "<div class=\"userStoryPic\">
              <img class=\"profilePic\" src=\"images/{$row['user_image']}\" alt=\"{$row['user_fname']} {$row['user_lname']}\">
              </div>";
            }
            echo  "<h3>{$row['user_fname']} {$lname}.</h3>
              <p>{$text}...</p>
              <a id={$row['story_id']}>...read more</a>
            </div>";
            $count++;
            /*<?php
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
          ?>*/
          }

        }else{
          echo "<p class=\"error\">{$stories}</p>";
        }
        ?>
      </div>
      <a id="storiesLoad">Load more</a>
  </section>

  <section class="shareBox">
    <div class="lightbox">
      <div class="shareDetails">
        <a class="float-right close-lightbox">X</a>
        <h2>SHARE YOUR STORY</h2>
        <form method="post" action="stories.php">
          <textarea class="small-12 medium-8 cell" name="description" id="description" required cols="50" rows="15"></textarea>
          <button type="submit" name="submit" formmethod="post" class="shareStory">SHARE</button>
        </form>
      </div>
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

    <div class="small-12 hide">
      <h1 class="request-state"></h1>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/stories.js"></script>
  </body>
</html>
