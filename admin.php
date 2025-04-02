<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planer Grafików</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script defer src="js/main.js" type="text/javascript"></script>
  </head>
  <body>
    <?php
        include_once("views/menu.php");
    ?>
    <section>
        <div class="view-wrapper">
            <div id="view">
<!-- Content of this div gets replaced with content of according page file from views/ like so:
                <div class="view-inner" id="view-{podsumowanie/przystanki/kierowcy/flota}">
                    
                    ...
                    
                </div>
-->
            </div>
        </div>
    </section>
  </body>
</html>