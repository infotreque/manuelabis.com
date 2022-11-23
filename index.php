<!DOCTYPE html>
<html lang="en">
<head>

<title>home | manuelabis.com</title>

<!--

Template 2099 Scenic

http://www.tooplate.com/view/2099-scenic

-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/tooplate-style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="images/logo.jpg">

<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 275px;
  background-color: lightblue;
  color: #ffffff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: lightblue transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
</head>
<body>

<!-- PRELOAD BUTTON AND LINK HOVER AND CLICK BEEP SOUND -->

<div>
  <audio id="heartbeat" src="./audios/beep.mp3" preload="auto">
  Your browser does not support the <code>audio</code> element.
  </audio>
</div>


<!-- PRELOAD OLD TYPEWRITER SOUND -->

<div>
     <audio preload="auto"> 
          <source src="./audios/natural.mp3" type="audio/mp3">
     </audio>
</div>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- JAVASCRIPT SDK FOR FB BUTTONS -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="45swMyV4"></script>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="#" id="site" class="navbar-brand">manuelabis.com</a>
          </div>
          
          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about-me" id="about-nonoy" class="smoothScroll">about me</a></li>
                    <li><a href="https://makata.manuelabis.com/" target="_blank" id="makata" class="smoothScroll">writer</a>
                    </li>
                    <li><a href="https://webdeveloper.manuelabis.com/" target="_blank" id="webdev" class="smoothScroll">webdeveloper</a>
                    </li>
                    <li><a href="#contact" id="lets-talk" class="smoothScroll">let's talk</a></li>
                    <li>
                        <iframe src="https://free.timeanddate.com/clock/i8km4ppe/n145/fn8/fs10/fcfff/tct/pct/pa8/tt0/tw1/th1/ta1/tb4" frameborder="0" width="154" height="38" allowtransparency="true"></iframe>
                    </li>
               </ul>
          </div>

     </div>
</div>


<!-- HOME -->
<section id="home" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                         <h2 style="color:white;">get to know me better</h2>
                         <p style="color:white;">as a writer and as a webdeveloper...</p>
                         <ul class="section-btn">
                              <a href="#about" id="my-clutters" class="smoothScroll"><span data-hover="my clutters">my clutters</span></a>
                         </ul>
                    </div>
               </div>

          </div>
     </div>

     <!-- Video -->
     <div>
          <button class="buttons">
               <video controls="" autoplay="" loop="" muted>
                    <source src="./videos/sunrise-small.mp4" type="video/mp4">
                    Your browser does not support the video tag.
               </video>
          </button>
     </div>
</section>


<!-- ABOUT -->
<section id="about-me" class="parallax-section-me">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="about-info-me">
                         <h3 style="color:white;">about me<br><img src="./images/manuelabis.png" alt="Manuel Ortega Abis"></h3>
                         <h1 style="color:white;">Hi! I am Manuel Ortega Abis. Nonoy, for short. I am a Filipino writer and webdeveloper. I was was born in Quezon City, Philippines on July 5, 1966. I enjoy my singlehood. Writing poems and short stories in the English and Filipino languages is my only love story. Since the 90s, webdevelopment has become my passion. I am equally proud to be a Filipino writer and a webdveloper.</h1>
                    </div>
               </div>

          </div>
     </div>
</section>

<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="about-info">
                         <h3>my clutters</h3>
                         <h1>I became interested in and writing poems after I was involved in a minor vehicular accident in the 70s. My hospitalization for a few months became a blessing in disguise for me. I have time to read and reflect. In high school, I became the literary editor of our official publication. My first published work was a collection of poems in English in the defunct Focus magazine in 1984. It was inspired by the martyrdom of Senator Ninoy Aquino. The collection was titled by the magazine's literary editor as "Identity."" On the other hand, I became interested in webdevelopment in the 90s. I passed the UPCAT and enrolled in UP Diliman. I took BS Education, major in Elementary Eduction. When Senator Aquino was shot dead, I decided to leave college and become an activist poet instead. I never regretted my decision. However, I have to try my hand on many things to get by in life. So I became hooked to webdevelopment. I started with ASP, HTML, PHP, FLASH, DREAMWEAVER. Afterwards, I realized that self-studying webdevelopment is convenient for my lifestyle, and financially as well as intrinsically rewarding for me.</h1>
                         <h1><br><br><a href="#contact" id="yes" class="buttons"></a></h1>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- PROJECT -->
<section id="project" class="parallax-section">
     <div class="container">
          <div class="row">
              
               <div class="col-md-6 col-sm-3">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="./images/sunrise.jpg" class="image-popup">
                              <img src="./images/sunrise-2.jpg" class="img-responsive" alt="noise">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Sunrise</h1>
                                        <h3>For a Filipino writer and webdeveloper</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-7 col-sm-3">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="./images/webdev-2.jpg" class="image-popup">
                              <img src="./images/webdev.jpg" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Poetry is the animation of all language:<br>Filipino, English, computer, music, and more...</h1>
                                        <h3>This is my poetics</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-8 col-sm-3">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="./images/noisiest-job-in-the-world-for-site-2.jpg" class="image-popup">
                              <img src="./images/noisiest-job-in-the-world.jpg" class="img-responsive" alt="noise">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>What to me is writing?</h1>
                                        <h3>What to me is poetry?</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-9 col-sm-3">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="./images/books-not-guns-for-site-2.jpg" class="image-popup">
                              <img src="./images/books-not-guns-for-site.jpg" class="img-responsive" alt="">
                         
                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Books, books, books</h1>
                                        <h3>Who has time to read my books?</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- CONTACT 2 -->
<div id="contact" class="container">
    <div><h1>let's talk</h1></div>
        <div><p>&nbsp;</p></div>
        <div><p>&nbsp;</p></div>
     <fieldset>
          <form name="frmContact" class="needs-validation " method="post" action="./php/contact.php">
          <p>
                    <label for="Name">name </label>
                    <input type="text" class="form-control" name="txtName" id="txtName" placeholder="name" value="" required>
          </p>
          <p>
                    <label for="email">email</label>
                    <input type="text"  class="form-control"  name="txtEmail" id="txtEmail" placeholder="email" value="" required>
          </p>
          <p>
                    <label for="subject">subject</label>
                    <input type="text"  class="form-control" name="txtSubject" id="txtSubject" placeholder="subject" value="">
          </p>
          <p>
                    <label for="message">message</label>
                    <textarea name="txtMessage" class="form-control"  id="txtMessage"  placeholder="message" required></textarea>
          </p>
          <p>&nbsp;</p>
          <p>
                    <input type="submit" name="Submit" id="Submit" value="send me a message" class="btn btn-primary btn-lg btn-block buttons">
          </p>
          </form>
     </fieldset>
</div>
    
<!-- FOOTER -->

<footer>
<!-- JAVASCRIPT SDK FOR FB BUTTONS 2 -->
<div class="container text-center">
<div id="fb-like-share" class="fb-like buttons" data-href="https://manuelabis.com/" data-width="" data-layout="box_count" data-action="like" data-size="small" data-share="true"></div>
</div>
     
     <br>
     <br>

     <div class="container text-center">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="footer-info">
                         <h2>keep in touch</h2>
                         <p><a href="tel:+63-995-015-8587" id="tel" class="buttons">+63-995-015-8587</a></p>
                         <p><a href="mailto:info@company.com" id="con" class="buttons">manuelabis070566@gmail.com</a></p>
                         <p><a href="#" id="phil" class="buttons">Philippines</a></p>
                    </div>
               </div>

               <div class="col-md-12 col-sm-12 mt-5">
                    <div class="copyright-text smoothScroll text-center">
                         <p class="buttons">copyright © 2022
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <a href="#" id="nonoy">manuelabis.com</a>
                    </div>
               </div>
               
          </div>
     </div>
</footer>

<!-- SCRIPTS -->

<!-- JS FOR HOVER AND CLICK SOUND -->

<script type="text/javascript">
     var playBtn1 = document.getElementById("site"),
      resetBtn1 = document.getElementById("about-nonoy"),
      hearbeat = document.getElementById("heartbeat");
      audios = document.querySelectorAll("audio");
      console.log(audios);

      playBtn1.addEventListener(
      "mouseover",
      function () {
      [].forEach.call(audios, function (audio) {
      // do whatever
      audio.play();
      });
      },
      false
      );

      playBtn1.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );

      resetBtn1.addEventListener(
      "mouseover",
      function () {
      heartbeat.play();
      },
      false
      );

      resetBtn1.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      ); 

      var playBtn2 = document.getElementById("makata"),
      resetBtn2 = document.getElementById("webdev"),
      hearbeat = document.getElementById("heartbeat");
      audios = document.querySelectorAll("audio");
      console.log(audios);

      playBtn2.addEventListener(
      "mouseover",
      function () {
      [].forEach.call(audios, function (audio) {
      // do whatever
      audio.play();
      });
      },
      false
      );

      playBtn2.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );

      resetBtn2.addEventListener(
      "mouseover",
      function () {
      heartbeat.play();
      },
      false
      );

      resetBtn2.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      ); 

      var playBtn3 = document.getElementById("lets-talk"),
      resetBtn3 = document.getElementById("my-clutters"),
      hearbeat = document.getElementById("heartbeat");
      audios = document.querySelectorAll("audio");
      console.log(audios);

      playBtn3.addEventListener(
      "mouseover",
      function () {
      [].forEach.call(audios, function (audio) {
      // do whatever
      audio.play();
      });
      },
      false
      );

      playBtn3.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );

      resetBtn3.addEventListener(
      "mouseover",
      function () {
      heartbeat.play();
      },
      false
      );

      resetBtn3.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );
      
      var playBtn4 = document.getElementById("Submit"),
      resetBtn4 = document.getElementById("tel"),
      hearbeat = document.getElementById("heartbeat");
      audios = document.querySelectorAll("audio");
      console.log(audios);

      playBtn4.addEventListener(
      "mouseover",
      function () {
      [].forEach.call(audios, function (audio) {
      // do whatever
      audio.play();
      });
      },
      false
      );

      playBtn4.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );

      resetBtn4.addEventListener(
      "mouseover",
      function () {
      heartbeat.play();
      },
      false
      );

      resetBtn4.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );
      
      var playBtn5 = document.getElementById("con"),
      resetBtn5 = document.getElementById("phil"),
      hearbeat = document.getElementById("heartbeat");
      audios = document.querySelectorAll("audio");
      console.log(audios);

      playBtn5.addEventListener(
      "mouseover",
      function () {
      [].forEach.call(audios, function (audio) {
      // do whatever
      audio.play();
      });
      },
      false
      );

      playBtn5.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );

      resetBtn5.addEventListener(
      "mouseover",
      function () {
      heartbeat.play();
      },
      false
      );

      resetBtn5.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );
      
      var playBtn6 = document.getElementById("nonoy"),
      resetBtn6 = document.getElementById("nonoy"),
      hearbeat = document.getElementById("heartbeat");
      audios = document.querySelectorAll("audio");
      console.log(audios);

      playBtn6.addEventListener(
      "mouseover",
      function () {
      [].forEach.call(audios, function (audio) {
      // do whatever
      audio.play();
      });
      },
      false
      );

      playBtn6.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );

      resetBtn6.addEventListener(
      "mouseover",
      function () {
      heartbeat.play();
      },
      false
      );

      resetBtn6.addEventListener(
      "mouseleave",
      function () {
      heartbeat.pause();
      heartbeat.currentTime = 0;
      },
      false
      );
</script>

<!-- JS FOR OLD TYPEWRITER SOUND -->

<script type="text/javascript">
const figures = document.querySelectorAll(".grid-images figure");
const btnSound = document.querySelector(".grid-btn .btn-sound");
const noTransitionDelayClass = "no-transition-delay";
const audio = document.querySelector("audio");
let sound = false;
let timer;

for (const figure of figures) {
  generateCharactersMarkup(figure);
  figure.addEventListener("mouseenter", mouseenterHandler);
  figure.addEventListener("mouseleave", mouseleaveHandler);
}

function generateCharactersMarkup(el) {
  let index = 0;
  const textBlock = el.querySelector(".animate");
  const characters = textBlock.textContent.split("");
  const charactersHTML = characters
    .map(function (character) {
      let markup = "";
      if (character == " ") {
        markup = "<span></span>";
        if (index == 0) index = 1;
      } else {
        let style = "";
        if (index != 0) {
          const sec = 0.15 * index;
          const secRounded = Math.round(sec * 100) / 100;
          style = `style="transition-delay:${secRounded}s"`;
        }
        markup = `<span ${style}>${character}</span>`;
        index++;
      }
      return markup;
    })
    .join(" ");
  textBlock.innerHTML = charactersHTML;
}

function mouseenterHandler() {
  if (sound) {
    const spans = this.querySelectorAll(".animate span[style]");
    const duration = spans.length * 0.15 * 1000;
    /*SECOND METHOD FOR CALCULATING THE AUDIO DURATION BASED ON THE EFFECT DURATION*/
    /*const style = window.getComputedStyle(
      this.querySelector(".animate span[style]:last-child")
    );
    const duration =
      style.getPropertyValue("transition-delay").split("s")[0] * 1000;*/
    clearTimeout(timer);
    audio.play();
    timer = setTimeout(function () {
      audio.pause();
    }, duration);
  }
}

function mouseleaveHandler() {
  if (sound) {
    audio.pause();
    audio.currentTime = 0;
  }
}

btnSound.addEventListener("click", function () {
  sound = !sound;
  const ariaLabel =
    this.getAttribute("aria-label") == "Enable sound"
      ? "Disable sound"
      : "Enable sound";
  this.setAttribute("aria-label", ariaLabel);
  this.classList.toggle("btn-sound-off");
});   
</script>

<!-- OTHER SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>