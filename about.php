<?php
  require_once('admin/phpscripts/config.php');

?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be A Hero - About</title>
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
            <li><a href="#">About</a></li>
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

  <section class="grid-container" id="mainContent">
    <h3 class="small-12 medium-4 cell pageTitles">ABOUT ORGAN DONATION</h3>
    <div class="button-group stacked-for-small expanded small-12 cell contentMenu">
      <a class="button aboutTab aboutActive">THE PROCESS</a>
      <a class="button aboutTab">THE FACTS</a>
      <a class="button aboutTab">THE STATS</a>
      <a class="button aboutTab">F.A.Q</a>
    </div>
    <div class="aboutContent grid-x">
      <div id="process" class="aboutSection">
        <h3>THE PROCESS</h3>
        <div class="arrowRight"></div>
        <div class="arrowLeft"></div>
        <p>In Ontario, organ and tissue donation is coordinated and managed by Trillium Gift of Life Network. Though everyone is a potential donor, you may be surprised to learn that the opportunity for organ donation is rare, because of the need to sustain a patient on a ventilator. In fact, you are five times more likely to need an organ transplant during your lifetime than to have the opportunity to donate one. On average, only three per cent of hospital deaths occur in circumstances that may lead to organ donation. This is not the case for tissue donation, which can take place in most cases when someone has died, as long as the tissue is suitable for transplantation.</p>
        <div id="circles">
          <ul class="pagination">
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
          </ul>
        </div>
     </div>
      </div>
      <div id="facts" class="hide aboutSection">
        <h3>THE FACTS</h3>
        <div class="small-12 cell float-left" id="donation">
          <h4>DONATION</h4>
          <p>-Today, in Ontario, there are over 1,500 people waiting for a lifesaving organ transplant. This is their only treatment option, and every 3 days someone will die because they did not get their transplant in time<br><br>- 1 donor can save 8 lives through organ donation and enhance the lives of up to 75 more through the gift of tissue.<br><br>- Age alone does not disqualify someone from becoming a donor. The oldest organ donor was over 90 and the oldest tissue donor was over 100. There’s always potential to be a donor; it shouldn’t stop you from registering.<br><br>- Your current or past medical history does not prevent you from registering to be a donor. Individuals with serious illnesses can, sometimes, be organ and/or tissue donors. Each potential donor is evaluated on a case-by-case basis.<br><br>- All major religions support organ and tissue donation, or respect an individual’s choice.<br><br>- Organ and tissue donation does not impact funeral plans. An open casket funeral is possible.</p>
        </div>
        <div class="small-12 cell float-right" id="registration">
          <h4>REGISTRATION</h4>
          <p>- Donor registration is confidential and will not impact one’s medical care. Registration status is only accessed at end-of-life to share a person’s donation wishes with their family.<br><br>- Donor registration gives families clear evidence of their loved one’s donation decision. It relieves families of the burden of making a donation decision on their loved one’s behalf at a difficult time.<br><br>- Anyone over the age of 16 can register. People of all ages and medical histories should consider themselves potential donors.<br><br>- One can easily change or withdraw their donor registration at any time.<br><br>- Even if a person has signed a donor card, they still need to register by clicking Register or by visiting a ServiceOntario centre. Donor cards are no longer used in Ontario.<br><br>- Donation in Ontario is managed by Trillium Gift of Life Network, a not-for-profit agency of the Ontario government.</p>
        </div>
      </div>
      
      <div id="stats" class="hide small-12 cell aboutSection">
        <div class="whiteBckgrd">
          <img src="images/left-heart.svg" alt="left heart" class="float-left leftHeart">
          <h3>32% of Ontarians are registered donors.</h3>
          <h4>That’s 3.9 million out of a total of 12.3 million.</h4>
        </div>
        <div class="redBckgrd">
          <img src="images/right-heart.svg" alt="right heart" class="float-right rightHeart">
          <h2>1,527 Ontarians are currently waiting for an organ transplant.</h2>
        </div>
        <div class="whiteBckgrd">
          <img src="images/red-heart.svg" alt="red heart" class="float-left redHeart">
          <h3>15,547 Ontarians have recieved a lifesaving organ transplant since 2003.</h3>
        </div>
        <div class="redBckgrd">
          <img src="images/white-heart.svg" alt="white heart" class="whiteHeart">
          <h2>168,637 Ontarians have registered to become organ and tissue donors.</h2>
        </div>
        <a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration" class="beAHero">BE A HERO</a>
      </div>
      <div id="faq" class="hide aboutSection">
        <h3>F.A.Q</h3>
        <ul class="vertical menu accordion-menu float-left" data-accordion-menu>
          <li><a>WHAT ORGANS AND TISSUE CAN BE DONATED?</a>
            <ul class="nested">
              <li><p>Organs and tissue that can be donated include the heart, kidneys, liver, lungs, pancreas, small intestines, eyes, bone, skin, and heart valves.</p></li>
            </ul>
          </li>
          <li><a>DOES MY RELIGION SUPPORT ORGAN AND TISSUE DONATION?</a>
            <ul class="nested">
              <li><p>Most major religions support organ and tissue donation because it can save the life of another. If your religion restricts the use of a body after death, consult your religious leader: these restrictions may not include organ and tissue donation, if the donation could save another life. More information can be found <a href="https://www.giftoflife.on.ca/en/community.htm">here</a>.</p></li>
            </ul>
          </li>
          <li><a>WHAT DOES IT MEAN TO CONSENT TO DONATE ORGANS AND TISSUE FOR RESEARCH?</a>
            <ul class="nested">
              <li><p>Organs or tissue not suitable for transplantation can be used for organ and tissue research (if indicated by donor upon registration). This research is specific to the field of organ and tissue donation, and is not the same as whole body donation.</p></li>
            </ul>
          </li>
          <li><a>HOW CAN I CHECK TO SEE IF I’VE ALREADY REGISTERED AS A DONOR?</a>
            <ul class="nested">
              <li><p>There are two ways to check if you are already registered as an organ and tissue donor: <br><br>1. On the <a href="index.html">www.BeAHero.ca</a> home page choose “BE A HERO.” This will take you to the ServiceOntario online registration page. Click on “Register, check or update your consent online.” The system will ask for identification. Enter in that information, and click on “Check or Update Registration.” If your registration has been processed, the system will respond, “Yes, you are a registered organ and tissue donor.” (If not, the system will then ask you if you wish to register.) <br><br>2. You can also check the back of your photo health card. If the word “Donor” is present, you are registered and do not need to register again.</p></li>
            </ul>
          </li>
        </ul>
        <ul class="vertical menu accordion-menu float-right" data-accordion-menu>
          <li><a>DOES MY AGE, MEDICAL CONDITION OR SEXUAL ORIENTATION PREVENT ME FROM BEING A DONOR?</a>
            <ul class="nested">
              <li><p>Everyone is a potential donor regardless of age, medical condition or sexual orientation. The oldest Canadian organ donor was 92 and the oldest tissue donor was 104. Even individuals with serious illnesses can sometimes be donors. Your decision to register should not be based on whether you think you would be eligible or not. All potential donors are evaluated on an individual, medical, case-by-case basis.</p></li>
            </ul>
          </li>
          <li><a>WHY SHOULD I REGISTER AS AN ORGAN AND TISSUE DONOR?</a>
            <ul class="nested">
              <li><p>By registering consent for organ and tissue donation, you give hope to the thousands of Ontarians waiting for a transplant. Individuals on the transplant wait list are suffering from organ failure and without the generous gift of life from an organ donor, they will die. Tissue donors can also enhance the lives of recovering burn victims, help restore sight, and allow people to walk again. Transplants not only save lives, they return recipients to productive lives.</p></li>
            </ul>
          </li>
          <li><a>I SIGNED MY DONOR CARD, DO I NEED TO REGISTER AGAIN?</a>
            <ul class="nested">
              <li><p>Paper donor cards are no longer in use as they often were not available when needed. In 2008, Trillium Gift of Life Network adopted an affirmative registry and now your consent to donate organs and tissue is stored in a Ministry of Health and Long-Term Care database. By formally registering, either online at <a href="index.html"> www.BeAHero.ca</a> or in person at any ServiceOntario location, you ensure that your decision is recorded and can be made available to your loved ones at the right time. You only need to register once.</p></li>
            </ul>
          </li>
          <li><a>I’M NOT ABLE TO REGISTER OR CHECK ONLINE.</a>
            <ul class="nested">
              <li><p>If the system is not able to register you online, it may ask you to contact ServiceOntario directly. There are a number of reasons that might prevent you from registering online. Visit any ServiceOntario location to register in person.</p></li>
            </ul>
          </li>
          <li><a>HOW DO I UPDATE OR WITHDRAW MY CONSENT TO ORGAN AND TISSUE DONATION?</a>
            <ul class="nested">
              <li><p>You can update or withdraw your consent at any time at <a href="index.html">www.BeAHero.ca</a> by simply choosing “Check or Update Registration” on the home page. You can also visit any ServiceOntario centre to update or withdraw in person. You can also withdraw your consent by mailing a letter to the below address with your name, date of birth, health card number and mailing address. <br><br>Organ Donor Consent<br>ServiceOntario<br>P.O. Box 48<br>Kingston, ON<br>K7L 5J3</p></li>
            </ul>
          </li>
        </ul>
      </div>
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
    <script src="js/about.js"></script>
  </body>
</html>
