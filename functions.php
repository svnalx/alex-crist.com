<?php
function makeSkills() {
    $skillLogos = array(
    "HTML 5" => "html5.svg",
    "CSS 3" => "css3.svg",
    "PHP 7" => "php7.png",
    "JavaScript" => "javascript.svg",
    "jQuery" => "jquery.svg",
    "MySQL" => "mysql.svg",
    "Bootstrap" => "bootstrap.svg",
    "Wordpress" => "wordpress.png",
    "CodeIgniter" => "codeigniter.svg",            
    "Apache" => "apache.png",            
    "Brackets" => "brackets.svg",
    "Composer" => "composer.svg",
    "Illustrator" => "illustrator.svg",
    "Photoshop" => "photoshop.svg"
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
    "Allegiance Group Construction" => "allegiance.png",
    "Clearfork Bamboo Rods" => "clearfork.png",
    "Fancy That" => "fancythat.png"
    );
    
    $projectInfo = array(
    "Allegiance Group Construction" 
    => "Wordpress website for a veteran-owned construction company. Designed the logo, developed a child theme, and provide ongoing hosting and maintenance.",
    
    "Clearfork Bamboo Rods" 
    => "cf info",
    
    "Fancy That" 
    => "ft info"
    );

    $baseURL = 'img/projects/';

    foreach ($projectImages as $label => $filename)
    {
      echo 
      '<li>' .
      '<img src="' . $baseURL . $filename . '" alt="Image of ' .  $label . '" />' .
      '<div class="project-info">' .
      '<span>' .  $label .  '</span>' .
      '<p>' . $projectInfo[$label] . '</p>' .
      '</div>' .
      '</li>';
    }
}
?> 