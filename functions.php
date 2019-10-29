<?php
function makeSkills() {
    $skillLogos = array(
    "HTML 5" => "html5.svg",
    "CSS 3" => "css3.svg",
    "PHP 7" => "php7.png",
    "JavaScript" => "javascript.svg",
    "jQuery" => "jquery.svg",
    "MySQL" => "mysql.svg",
    "Github" => "github.svg",
    "Illustrator" => "illustrator.svg",
    "Photoshop" => "photoshop.svg",
    "Bootstrap" => "bootstrap.svg",
    "Wordpress" => "wordpress.png",
    "CodeIgniter" => "codeigniter.svg",    
    "Apache" => "apache.png", 
    "NodeJS" => "nodejs.svg",   
    "npm" => "npm.svg",        
    "Visual Studio Code" => "code.svg",          
    "Composer" => "composer.svg",
    //"Sass" => "sass.svg",
    //"Grunt" => "grunt.svg",
    "Gulp" => "gulp.svg",
    //"Slack" => "slack.svg",
    "AutoHotKey" => "ahk.svg"
    );

    $baseURL = 'img/icons/';

    foreach ($skillLogos as $label => $filename)
    {
      echo 
      '<li><img src="' .    
      $baseURL .
      $filename .
      '" alt="Icon of ' .
      $label .
      '" /><span>' .
      $label .
      '</span></li>';
    }
}
function makeProjects() {
    $projectImages = array(
    "Allegiance Group Construction" => "allegiance-screenshot-faded.png",
    "Clearfork Bamboo Rods" => "clearfork-screenshot-faded.png",
    "Fancy That" => "fancythat-screenshot-faded.png",
    "Tom Vandergriff Tribute" => "vandergriff-faded.png"
    );
    
    $projectInfo = array(
    "Allegiance Group Construction" 
    => "Veteran-owned business that needed a modern website. I designed the logo and website and developed it by creating a custom Wordpress child theme.",
    
    "Clearfork Bamboo Rods" 
    => "Bamboo flyrod craftsman who was just beginning his business. The logo, website design, and Wordpress development were done exclusively by me.",
    
    "Fancy That" 
    => "Local retailer specializing in gifts and furniture. I designed their logo and built this website with Bootstrap for a responsive layout.",
    
    "Tom Vandergriff Tribute"
    => "Tom Vandergriff Tribute Page"
    
    );
    
    $projectURLs = array(
    "Allegiance Group Construction" => "https://allegiance-grp.com",
    "Clearfork Bamboo Rods" => "https://clearforkrods.com",
    "Fancy That" => "https://fancythatagain.com",
    "Tom Vandergriff Tribute" => "https://codepen.io/alexanderwebdev/full/bRyqzE"
    );

    $baseURL = 'img/projects/';

    foreach ($projectImages as $label => $filename)
    {
      echo '
      <li>' . '
        <img src="' . $baseURL . $filename . '" alt="Image of ' .  $label . '" />' . '
        <div id="project-info">' . '
          <span>' .  $label .  '</span>' . '
          <p>' . $projectInfo[$label] . '</p>' . '
            <div class="btn-container-1">' . '
            <a class="btn" href="' . $projectURLs[$label] . '" target="_blank">'. '<img src="img/view-icon.svg" alt="view site">VIEW SITE</a>' . '
          </div>' . '
        </div>' . '
      </li>';
    }
}
function makeSocial() {
    $socialIcons = array(
    "Github" => "github.svg",
    "CodePen" => "codepen.svg",
    "LinkedIn" => "linkedin.svg",
    "Email" => "email.svg"
    );
    
    $socialURLs = array(
    "Github" => "https://github.com/middlename-alexander",
    "CodePen" => "https://codepen.io/alexanderwebdev",
    "LinkedIn" => "http://www.linkedin.com/in/AlexCristWebDeveloper",
    "Email" => "mailto:alex@alex-crist.com"
    );

    $baseURL = 'img/';

    foreach ($socialIcons as $label => $filename)
    {
      echo 
      '<li>' . '
      <a href="' . $socialURLs[$label] . '" target="_blank"><img src="' . $baseURL . $filename . '" alt="Icon for ' .  $label . '" /></a></li>';
    }
}
?> 