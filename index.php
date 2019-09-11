<?php require_once('functions.php'); ?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Alex Crist | Frontend Developer</title>
  <meta name="author" content="Alex Crist">
  <meta name="description" content="Web Developer in Arlington, Texas">
  <meta name="keywords" content="html,css,php,mysql,javascript,jquery,illustrator,photoshop,ui/ux,front end,web developer,portfolio,alex crist">  
  
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

<nav class="topnav" id="top-nav">

  <ul id="social">
    <?php makeSocial(); ?>
  </ul>
  <ul id="menu">
    <li><a href="javascript:void(0);" class="icon" onclick="toggleTopNav()"><i class="fa fa-bars"></i></a></li>
    <li><a href="#hero">BEGIN</a></li>
    <li><a href="#projects">PROJECTS</a></li>
    <li><a href="#about">ABOUT</a></li>
    <li><a href="#skills">SKILLS</a></li>
    <li><a href="#contact">CONTACT</a></li>
  </ul>

</nav>

<section id="hero">

  <div id="hero-area">
    <div id="hero-area-row-1">
      <span id="alex">Alex<br><span id="crist">CRIST</span></span>
      <a class="btn" href="Alex Crist's resume - Frontend Developer.pdf">Download my resume</a>
    </div>
    <div id="hero-area-row-2">
      <span id="fedev">Frontend Developer<br><span id="one-liner">with a side of UI/UX Design</span> 
    </div> 
    <div id="hero-area-row-3">
      <span id="hand-coded">This website is hand-coded in plain HTML, CSS, PHP, and JavaScript with focus on responsive design and cross-browser compatibility.</span>
    </div>
  </div>

</section>

<section id="projects">

  <h1>Explore my work</span></h1>
  <ul><?php makeProjects(); ?></ul>

</section>
  
<section id="about">

  <div id="about-left">
    <h1>This is my story</h1>
    <p>Hi, I’m Alex and you have arrived at my web development portfolio. Here, you can see samples of my capabilities. I plan to grow this site as my skills grow. <a class="body-text-link" href="#contact">Also, I’m available to hire!</a> I’m eager to meet you. </p>
    <p>I chose to become a developer so that I can build things that make peoples’ lives better while also building my dream career. My enthusiasm for programming started early - I was writing games on my graphing calculator in middle school. Now I am looking to put my knowledge and experience to working creating beautiful, usable websites using industry best practices.</p>
  </div>
  
  <div id="about-right">

  </div>
  
</section>

<section id="skills">

  <h1>Tools</span> of creation</h1>
  <ul><?php makeSkills(); ?></ul>

</section>

<footer id="footer">

  <br><h2>Contact me</h2>

  <?php require_once('contact-form.php'); ?>

<?php require_once('roll-credits.php'); ?>

</footer>
<script>
function toggleTopNav() {
  var x = document.getElementById("top-nav");
  if (x.className === "topnav") {
    x.className += " expanded";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>