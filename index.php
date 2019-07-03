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
  
  <link rel="stylesheet" href="css/html5boilerplate/normalize.css">
  <link rel="stylesheet" href="css/html5boilerplate/main.css">
  <link rel="stylesheet" href="css/styles.css">
  <!--  <link rel="stylesheet" media="screen and (min-width:1366px)" href="css/1366.css">-->
  
</head>
<body>

<header id="welcome">

  <nav>
    <ul>
      <li><a href="#welcome">WELCOME</a></li>
      <li><a href="#projects">PROJECTS</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a href="#skills">SKILLS</a></li>
      <li><a href="#contact">CONTACT</a></li>
    </ul>
  </nav>
  
  <div id="greeting">
    <span id="hi-im">Hi, I'm</span>
    <span id="alex">Alex</span>
    <span id="one-liner">UI/UX Designer and Front-End Developer from Arlington, Texas.</span>
    <span id="hand-coded">This website is hand-coded in plain HTML, CSS, PHP, and JavaScript<br />with focus on responsive design and cross-browser compatibility.</span>
    <br />
    <a class="btn btn-white" href="resume.pdf"><img src="img/download-icon.svg" alt="download icon">DOWNLOAD RESUME</a>
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
    <p>To clear my cache, I visit nature and exercise on a nature trail with work out stations called Timberform Fitness.</p>
  </div>
  
  <div id="about-right">

  </div>
  
</section>

<section id="skills">

  <h1><span class="blue">Tools</span> of creation</h1>
  <ul><?php makeSkills(); ?></ul>

</section>

<footer id="contact">

  <h2>Want to connect? Here's how to reach me.</h2>  
  <ul><?php makeSocial(); ?></ul>


  <!--<p>
    <div style="width:90%;">Icons made by <a href="https://www.flaticon.com/authors/gregor-cresnar" title="Gregor Cresnar">Gregor Cresnar</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"             title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"             title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"             title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    
    <div>Icons made by <a href="https://www.flaticon.com/authors/dave-gandy" title="Dave Gandy">Dave Gandy</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"                 title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    
    <div>Icons made by <a href="https://www.flaticon.com/authors/simpleicon" title="SimpleIcon">SimpleIcon</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"             title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"             title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
  </p>-->
</footer>
</body>
</html>