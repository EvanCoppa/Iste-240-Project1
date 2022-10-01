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
    public function header()
    {
        // header
        echo '
        <header>
        <nav class="nav">
        <a class="nav-link active" href="#">Info</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </nav>         </header>';
    }
    // footer
    public function footer()
    {
        // footer
       // include_once 'components/footer.php';
    }
}

$Components = new Components();
