<?php require_once('functions.php'); ?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Alex Crist | UI/UX and Front-End Developer</title>
  <meta name="author" content="Alex Crist">
  <meta name="description" content="Web Developer in Arlington, Texas">
  <meta name="keywords" content="html,css,php,mysql,javascript,jquery,illustrator,photoshop,ui/ux,front end,web developer,portfolio,alex crist">  
  
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

<header id="welcome">
  <nav class="topnav" id="top-nav">
    <ul>
      <li><a href="#welcome">WELCOME</a></li>
      <li><a href="#projects">PROJECTS</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a href="#skills">SKILLS</a></li>
      <li><a href="#contact">CONTACT</a></li>
      <li><a href="javascript:void(0);" class="icon" onclick="toggleMenu()"><i class="fa fa-bars"></i></a></li>
    </ul>
  </nav>
  
  <div id="greeting">
    <span id="hi-im-alex">Hi, I'm Alex.</span>
    <span id="one-liner">UI/UX Designer<br>Front-End Developer<br>from Arlington, Texas.</span>
    <a class="btn btn-white" href="resume.pdf"><img src="img/download-icon.svg" alt="download icon">DOWNLOAD RESUME</a>
    <span id="hand-coded">This website is hand-coded in plain HTML, CSS, PHP, and JavaScript with focus on responsive design and cross-browser compatibility.</span>
  </div>
  
</header>

<section id="projects">

  <h1>Explore my <span class="blue">work</span></h1>
  <ul><?php makeProjects(); ?></ul>

</section>
  
<section id="about">

  <div id="about-left">
    <h1>My <span class="blue">story</span> so far</h1>
    <p>I see the web as a wonder of human achievement in our process of becoming connected with others. My enthusiasm for computers started early and I had programmed games on my TI-83 graphing calculator in middle school. By highschool, I was reading C++ books but was given a book on HTML and started making websites.</p>
    <p>Now I am fortunate to specialize in making beautiful, usable, and professional websites for others using best practices and industry standards. My <a class="body-text-link" href="#skills">tools of creation</a> include HTML, CSS, PHP, JavaScript, MySQL, Wordpress, and Photoshop.</p>
    <!--
    <p>To clear my cache, I visit nature and exercise on a nature trail with work out stations called Timberform Fitness.</p>
    <p>Sometimes I find it necessary to clear my own cache, much like a browser cache. To do that, </p>
    -->
  </div>
  
  <div id="about-right">

  </div>
  
</section>

<section id="skills">

  <h1><span class="blue">Tools</span> of creation</h1>
  <ul><?php makeSkills(); ?></ul>

</section>

<footer id="contact">

  <a class="btn btn-white" href="mailto:alex@alex-crist.com"><img src="img/email-btn-icon.svg" alt="email icon">SEND A MESSAGE</a>

  <h2>Available for hire.</h2>
  <ul><?php makeSocial(); ?></ul>

<?php require_once('roll-credits.php'); ?>

</footer>
<script>
function toggleMenu() {
  var x = document.getElementById("top-nav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>