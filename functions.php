<?php
define("SITE", "https://alex-crist.com");
define("LOCAL", "http://localhost/alex-crist/vanilla");

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

    $baseURL = 'app/img/icons/';

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
    "Clearfork Bamboo Rods" => "clearfork-screenshot-faded.png",
    "Allegiance Group Construction" => "allegiance-screenshot-faded.png",
    "Fancy That" => "fancythat-screenshot-faded.png",
    "Tom Vandergriff Tribute" => "vandergriff-faded.png"
    );
    
    $projectInfo = array(
    "Clearfork Bamboo Rods" 
    => "&#8226; Wordpress &#8226; Custom theme <br>&#8226; Logo &#8226; Branding",

    "Allegiance Group Construction" 
    => "&#8226; Wordpress &#8226; Custom theme <br>&#8226; Logo &#8226; Branding",
        
    "Fancy That" 
    => "&#8226; Bootstrap &#8226; Logo &#8226; Branding",
    
    "Tom Vandergriff Tribute"
    => "&#8226; Bootstrap &#8226; jQuery"
    
    );
    
    $projectURLs = array(
    "Clearfork Bamboo Rods" => "https://clearforkrods.com",
    "Allegiance Group Construction" => "https://allegiance-grp.com",
    "Fancy That" => "https://fancythatagain.com",
    "Tom Vandergriff Tribute" => "https://codepen.io/alexanderwebdev/full/bRyqzE"
    );

    $baseURL = 'app/img/projects/';

    foreach ($projectImages as $label => $filename)
    {
      echo '
      <li>' . '
        <img src="' . $baseURL . $filename . '" alt="Image of ' .  $label . '" />' . '
        <div id="project-info">' . '
          <span>' .  $label .  '</span>' . '
          <p>' . $projectInfo[$label] . '</p>' . '
            <div>' . '
            <a class="btn-secondary" href="' . $projectURLs[$label] . '" target="_blank">'. '<img src="app/img/view-icon.svg" alt="view site">VIEW SITE</a>' . '
          </div>' . '
        </div>' . '
      </li>';
    }
}
function makeSocial() {
    $socialIcons = array(
    "Github" => "github.svg",
    "LinkedIn" => "linkedin.svg"
    );
    
    $socialURLs = array(
    "Github" => "https://github.com/svnalx/",
    "LinkedIn" => "http://www.linkedin.com/in/AlexCristWebDeveloper",
    "Email" => "mailto:alex@alex-crist.com"
    );

    $baseURL = 'app/img/';

    foreach ($socialIcons as $label => $filename)
    {
      echo 
      '<li>' . '
      <a href="' . $socialURLs[$label] . '" target="_blank"><img src="' . $baseURL . $filename . '" alt="Icon for ' .  $label . '" /></a></li>';
    }

    //echo '<li id="alex-crist">ALEX CRIST</li>';
}
?> 