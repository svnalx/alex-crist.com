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
    @import url('https://fonts.googleapis.com/css?family=Poppins:700,800,900|Roboto:100,300,400,500&display=swap');
  </style>

  <link rel="stylesheet" href="dist/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  
</head>
<body>

<nav>

  <ul id="social">
    <?php makeSocial(); ?>
  </ul>

  <a href="javascript:void(0);" class="icon" onclick="toggleMenu()"><i id="menu-toggle-btn" class="fas fa-bars"></i></a>

  <ul id="menu" class="menu-closed">
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

  <h2>Some of my work</h2>
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
function toggleMenu() {
  var x = document.getElementById("menu");
  var y = document.getElementById("menu-toggle-btn");

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