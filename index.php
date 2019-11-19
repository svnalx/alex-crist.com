<?php require_once('functions.php'); ?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Alex Crist | Frontend Web Developer</title>
  <meta name="author" content="Alex Crist">
  <meta name="description" content="Web Developer in Arlington, Texas">
  <meta name="keywords" content="html,css,php,mysql,javascript,jquery,illustrator,photoshop,ui/ux,front end,web developer,portfolio,alex crist">  
  
  <style>
@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900|Roboto:300,400,500,700,900&display=swap');
</style>
  <link rel="stylesheet" href="dist/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  
</head>
<body>

<nav class="topnav" id="top-nav">

  <ul id="social">
    <?php makeSocial(); ?>
  </ul>
  <ul id="menu">
    <li><a href="javascript:void(0);" class="icon" onclick="toggleTopNav()"><i id="menu-toggle-btn" class="fas fa-bars"></i></a></li>
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
      <img src="app/img/alex-crist-badge.png">
      <a class="btn" href="app/img/Alex Crist - Resume for Web Development.pdf" target="_blank">My resume</a>
    </div>
    <div id="hero-area-row-2">
      <span id="title">Frontend Web Developer<br><span id="subtitle">and UI/UX Designer</span><br>
      <img src="app/img/divider-arrow-thin-sm.svg">
    </div> 
    <div id="hero-area-row-3">
      <p>Hello! My name is Alex and this is my website. It's hand-coded in plain HTML, CSS, PHP, and JavaScript serves to represent my competency and fluency in programming for the web.</p>
      <p>I chose to build my website as both a showcase of my work and as a creative outlet for expression. It's responsive (try it out), cross-browser compatible (I use Autoprefixer for Gulp), and being constantly updated.</p>
      <img src="app/img/divider-arrow-wings-4000px.svg">
    </div>
    
  </div>

</section>

<section id="projects">

  <h1>Explore my work</h1>
  <ul><?php makeProjects(); ?></ul>

</section>
  
<section id="about">

  <h1>Get to know me</h1>
  <div id="about-text">
    <p>Hi, I’m Alex and you have arrived at my web development portfolio. Here, you can see samples of my capabilities. I plan to grow this site as my skills grow. <a class="body-text-link" href="#contact">Also, I’m available to hire!</a> I’m eager to meet you.</p>
    <p>I chose to become a developer so that I can build things that make peoples’ lives better while also building my dream career. My enthusiasm for programming started early - I was writing games on my graphing calculator in middle school. Now I am looking to put my knowledge and experience to work creating beautiful, functional websites using industry best practices.</p>
    <p></p>
  </div>
  
</section>

<section id="skills">

  <h1>Tools</span> of creation</h1>
  <ul><?php makeSkills(); ?></ul>

</section>

<footer id="footer">

  <br><h1>Contact me</h1>

  <form id="contact" action="process-contact-form.php" method="post">
    <input type="text" name="name" placeholder="Your name"><br>
    <input type="email" name="email" placeholder="Your email"><br>
    <textarea name="message" rows="6" placeholder="Message..."></textarea><br><br>
    <input type="hidden" name="process">
    <button type="submit" class="btn" form="contact" value="Send it">Send it</button>
  </form>

<?php require_once('roll-credits.php'); ?>

</footer>
<script>
function toggleTopNav() {
  var x = document.getElementById("top-nav");
  var y = document.getElementById("menu-toggle-btn");

  if (x.className === "topnav") {
    x.className += " expanded";
    y.className = "fas fa-times-circle"
  } else {
    x.className = "topnav";
    y.className = "fas fa-bars"
  }
}
</script>
</body>
</html>