<?php
// componets class
class Components
{
  //head
  public function head($title)
  {
    echo '<html lang="en">
        <head>
            <link rel="stylesheet" href="style.css">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . $title . '</title>
        </head>
        <body>';
  }

  // header
  public function header($pageId = -1)
  {
    echo '<header> <nav class="nav">';
    $pages = array('Home', 'Glass Beach', 'Lost Cost', "San Francisco", "National Parks");
    $links = array('index.php', 'glassbeach.php', 'lostcoast.php', 'sanfrancisco.php', 'nationalparks.php');
    for ($currentPageId = 0; $currentPageId < count($pages); $currentPageId++) {
      if ($pageId == $currentPageId) {
        echo '<a class="nav_link active" href="' . $links[$currentPageId] . '">' . $pages[$currentPageId] . '</a></li>';
      } else {
        echo '<a class="nav_link" href="' . $links[$currentPageId] . '">' . $pages[$currentPageId] . '</a></li>';
      }
    }
    echo '</nav> </header>';
  }

  // footer
  public function footer()
  {
    // pages links, Home Lost Coast Glass Beach San Francisco
    echo '<footer>
          <div class="footer">
          <div>
          <h3>Pages</h3>
          <a class="footer-link" href="#">The Lost Coast</a>
          <a class="footer-link" href="#">Natioal Parks</a>
          <a class="footer-link" href="#">Roadside Atractions</a>
          <a class="footer-link" href="#">The Lost Coast</a>
          <a class="footer-link" href="#">Glass Beach</a>
          <a class="footer-link" href="sanfrancisco.php">San Francisco</a>
           </div>';
    // resorces links, Survey Rubrick
    echo '<div>
         <h3>Resources</h3>
         <a class="footer-link" href="/about.php">About</a>
            <a class="footer-link" href="/survey.php">Survey</a>
            <a class="footer-link" href="Rubric.php">Rubric</a>
            <a class="footer-link" href="Refrences.php">Reference</a>
            </div>';
    //project desctiption section
    echo '<div>
         <h3>Project Description</h3>
         <p>Project Description</p>
            </div>
            </div>
            </footer>';
  }
}


$Components = new Components();
