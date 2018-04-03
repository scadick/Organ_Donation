<?php

  require_once('admin/phpscripts/config.php');
  if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($username !== "" && $password !== "") {
      $result = logIn($username, $password);
      $message = $result;
    }else{
      $message = "Please fill in the required fields";
    }

  }

  if(isset($_POST['register'])) {
    $fname = trim($_POST['firstName']);
    $lname = trim($_POST['lastName']);
    $cusername = trim($_POST['newusername']);
    $cpassword = trim($_POST['newpassword']);
    $confirmPassword = trim($_POST['cpassword']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $code = trim($_POST['postalCode']);
    $length = strlen($code);
    if(empty($code) || $length < 3){
      $message = "Please enter your Postal Code";
    }else{
      $shortCode = substr("{$code}", 0, 3);
      if($cpassword == $confirmPassword) {
        $result = createUser($fname, $lname, $cusername, $cpassword, $email, $phone, $shortCode, $code); 
        $message = $result;
        echo $message;
      } else {
        $message = "Please make sure your password is spelled correctly";
        echo $message;
      }
    }
  }

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be A Hero - Log In/Sign up</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  </head>
  <body>

    <header class="grid-x">
      <div class="small-3 cell float-right small-offset-9">
        <div id="hamMenu" class="title-bar" data-responsive-toggle="mainNav">
          <a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration"><h3 class="title-bar-title" id="menuHeader">BE A HERO</h3></a>
          <button class="menu-icon" type="button" data-toggle="mainNav">
          </button>
        </div>
        <nav id="mainNav" class="top-bar" data-closable>
          <button id="closeButton" class="close-button" aria-label="Close menu" type="button" data-close><span aria-hidden="true">&times;</span></button>
          <ul class="vertical menu">
            <li><a href="index.php">Home Page</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="drives.php">Donor Drives</a></li>
            <li><a href="stories.php">Stories</a></li>
            <li><a href="#">Log In/Sign Up</a></li>
            <li><a href="profile.php">Your Profile</a></li>
            <li><a href="https://www.ontario.ca/page/organ-and-tissue-donor-registration">BE A HERO</a></li>
          </ul>
          <div id="ribbon"></div>
        </nav>
      </div>
    </header>

  <section id="mainContent">
    <h3 class="small-12 cell pageTitles">LOGIN</h3>
    <div class="grid-container">
      <form method="post">
  			<label>USERNAME</label>
  			<input type="text" name="username" value="">
  			<label>PASSWORD</label>
  			<input type="password" name="password" value="">
        <a href="forgotpassword.php" id="forgotPassword">Forgot your password?</a>
  			<br>
        <div class="centerSubmit">
        <button type="submit" id="loginButton" name="submit">SUBMIT</button>
        </div>
  		</form>
    </div>
    <h3 class="small-12 cell pageTitles">REGISTER</h3>
    <div class="grid-container">
        <p id="reqField">*Required Fields</p>
        <form id="contactForm" method="post" action="account.php">
        <div class="grid-x">
          <div class="small-12 medium-6 cell field">
           <label for="fname">FIRST NAME*</label>
           <input type="text" required id="fname" name="firstName" value="<?php if(!empty($fname)){ echo $fname;} ?>">
          </div>
          <div class="small-12 medium-6 cell field">
           <label for="lname">LAST NAME*</label>
           <input type="text" required id="lname" name="lastName" value="<?php if(!empty($lname)){ echo $lname;} ?>">
          </div>
          <div class="small-12 cell field">
           <label>USERNAME*</label>
     			 <input type="text" required name="newusername" value="<?php if(!empty($cusername)){ echo $cusername;} ?>">
          </div>
          <div class="small-12 cell field">
     			 <label>PASSWORD*</label>
     			 <input type="password" required name="newpassword" value="<?php if(!empty($cpassword)){ echo $cpassword;} ?>">
          </div>
          <div class="small-12 cell field">
     			 <label>CONFIRM PASSWORD*</label>
     			 <input type="password" required name="cpassword" value="<?php if(!empty($confirmPassword)){ echo $confirmPassword;} ?>">
          </div>
          <div class="small-12 cell medium-5 cell field">
           <label for="email">EMAIL*</label>
           <input type="email" required id="email" name="email" value="<?php if(!empty($email)){ echo $email;} ?>">
          </div>
          <div class="small-12 medium-3 cell field">
           <label for="postal">POSTAL CODE*</label>
           <input type="text" required id="pCode" name="postalCode" value=" <?php if(!empty($code)){ echo $code;} ?>">
          </div>
          <div class="small-12 medium-4 cell field">
           <label for="tel">PHONE NUMBER</label>
           <input type="tel" id="phone" name="phone" value="<?php if(!empty($phone)){ echo $phone;} ?>">
          </div>
          <button type="submit" id="regButton" name="register">SUBMIT</button>
        </div>
       </form>
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
