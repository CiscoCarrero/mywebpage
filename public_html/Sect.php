<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franciscos's Webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body>
  <style>
    body{
        background: #FAEDDD;
      }
  </style>
    <section id="TopPage">
      <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  <a class="nav-link" href="Programs.html">Programs</a>
                  <a class="nav-link" href="CV.html">CV</a>
                  <a class="nav-link" href="Sect.php">PHP</a>
                  <a class="nav-link" href="Ref.html">References</a>
                </div>
              </div>
            </div>
          </nav>
    </div>
    </section>
    <br>
    <br>
    <br>
    <center>
    <div>
    <h3>We’ll display today’s date and day by PHP!</h3>
    <div>
        <?php
            echo 'Today’s date is <b>' . date('Y/m/d') . '</b> and it’s a <b>'.date('l').'</b> today!';
        ?>
    </div>
    <div>Again, this is static HTML content.</div>
    </div>
    <!--https://code.tutsplus.com/es/tutorials/how-to-use-php-in-html-code--cms-34378-->
    </center>
    <center>
      <br>
      <br>
      <br>
      <br>
    <div>
    <h2>This program shows a array of strings</h2>
    <div>
    <?php
    $cars = array("Honda", "RAM", "Toyota"); 
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    </div>
    </div>
    </center>
    <!--https://www.w3schools.com/php/phptryit.asp?filename=tryphp_array_num -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
    <div>
      <h1>This program shows the names of my family members</h1>
      <?php
      function familyName($fname) {
      echo "$fname ";
      }

      familyName("Maria, ");
      familyName("Francisco, ");
      familyName("Gabriela, ");
      familyName("Luis, ");
      familyName("Keishla, ");
      familyName("Aron");
      ?>
    </div>
    </center>
    <!--https://www.w3schools.com/php/phptryit.asp?filename=tryphp_function2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous">
</body>
</html>