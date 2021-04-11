<?php require_once('functions.php'); ?>

<!doctype html>
<html lang="en-US">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MRGC5DM');</script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Alex Crist">
  <meta name="description" content="Web Developer in Arlington, Texas">
  <meta name="keywords" content="html,css,php,mysql,javascript,jquery,illustrator,photoshop,ui/ux,front end,web developer,portfolio,alex crist">  

  <title>Alex Crist | Frontend Web Developer</title>

  <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:700,800,900|Roboto:100,300,400,500&display=swap');
  </style>

  <link rel="stylesheet" href="dist/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRGC5DM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<nav>

  <div id="top">

    <ul id="social">
      <?php makeSocial(); ?>
    </ul>

    <a href="javascript:void(0);" id="menu-toggle-btn" onclick="toggleMenu()"><i id="menu-toggle-icon" class="fas fa-bars"></i></a>

  </div>

  <ul id="menu" class="menu-closed">
    <li><a href="#hero" onclick="toggleMenu()">START</a></li>
    <li><a href="#projects" onclick="toggleMenu()">PROJECTS</a></li>
    <li><a href="#about" onclick="toggleMenu()">ABOUT</a></li>
    <li><a href="#skills" onclick="toggleMenu()">SKILLS</a></li>
    <li><a href="#contact" onclick="toggleMenu()">CONTACT</a></li>
  </ul>
  
</nav>

<section id="hero">

  <div id="hero-area">
    <div id="hero-area-row-1">
      <img src="app/img/Alex-Crist-logo.svg">
    </div>
    <div id="hero-area-row-2">
      <div class="card-rounded-with-shadow">
        <h1>Hello</h1><br><br>
        <span class="highlighted">&nbsp;I'm <span class="poppins700">Alex Crist</span>, a hybrid&nbsp;<br>
        &nbsp;Front-End <span class="poppins700">Developer&nbsp;</span> <span class="ampersand"><br>&nbsp;&&nbsp;</span>UI/UX <span class="poppins700">Designer&nbsp;</span><br>
        &nbsp;continuously studying my craft.&nbsp;</span><br><br><br>
        <a class="btn-primary" href="app/img/Alex Crist - Resume for Web Development.pdf" target="_blank">Download resume</a>
        <br><br><br>
      </div>
    </div>     
  </div>

</section>

<section id="projects">

  <h2>Projects</h2><h3>A collection of my work</h3>
  <ul><?php makeProjects(); ?></ul>

</section>
  
<section id="about">

  <h2>About Alex</h2><h3>Or, why I stay up late coding</h3>
  <div id="about-text">

    <p>Programming and design are two core components of who I am. I chose to become a developer so that I can use my acquired skills to build beautiful, functional apps that move people.</p>

    <p>In the early days, I was programming games on my graphing calculator in middle school. I experimented with Visual Basic and C++, then I discovered HTML and CSS. The ability to quickly re-arrange the UI on a whim was a defining reason for choosing these languages.</p>

    <p class="img-in-text"><a href="app/img/Seat-of-Pantheon.jpg"><img src="app/img/Seat-of-Pantheon.jpg"></a><span class="img-subtext">My custom interface in World of Warcraft.</span></p>

    <p>This website is the child of my love for learning and improving. It's hand coded in plain HTML, CSS/SCSS, PHP, and JavaScript. For cross-browser compatibility I use Autoprefixer for the Gulp taskrunner. It was designed using atomic design theory and mobile first theory.</p>

    <p><a id="available-hire" href="#contact">I am available for hire.</a></p>

  </div>
  
</section>

<section id="skills">

  <h2>Skills</h2><h3>Tools of creation</h3>
  <ul><?php makeSkills(); ?></ul>

</section>

<section id="contact">

  <br><h2>Contact</h2><h3>Send me a message.</h3>

  <?php 
  if (isset($_POST['process2'])) {
    echo "true";
  }
  ?>

  <form id="contact-form" action="process-contact-form.php" method="post">
    <input type="text" name="name" placeholder="Your name"><br>
    <input type="email" name="email" placeholder="Your email"><br>
    <textarea name="message" rows="6" placeholder="Message..."></textarea><br><br>
    <input type="hidden" name="process">
    <button type="submit" class="btn-primary" form="contact-form" value="Send it">Send it</button>
  </form>

</section>

<footer id="footer">
  <?php require_once('roll-credits.php'); ?>
</footer>

<script>
function toggleMenu() {
  var x = document.getElementById("menu");
  var y = document.getElementById("menu-toggle-icon");

  if (x.className === "menu-closed") {
    x.className = "menu-open";
    y.className = "fas fa-times-circle"
  } else {
    x.className = "menu-closed";
    y.className = "fas fa-bars"
  }
}
</script>
</body>
</html>