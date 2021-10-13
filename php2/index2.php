<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Kamadoing | Home</title>
</head>

<body>
<a id="logotext">Kamadiong</a>
<img src="images/logo.png" alt="logo" id="logo">
    <nav>
        <ul>
            <a href="index.php">Home</a>
            <a href="#informatietext">Informatie</a>
            <a href="#">Recepten</a>
            <a href="logout.php">Log Uit</a>
        </ul>
    </nav>

    <div class="CSSgal">

  <s id="s1"></s> 
  <s id="s2"></s>
  <s id="s3"></s>
  <s id="s4"></s>

  <div class="slider">
    <div>
  <a href="link.html" target="blank">
    <img src="images/unnamed2.jpg" alt="bbq plaatjes" id="plaatje1">
  </a>
    </div>
    <div>
    <a href="link.html" target="blank">
      <img src="images/unnamed3.jpg" alt="bbq plaatjes" id="plaatje1">
      </a>
    </div>
    <div>
    <a href="link.html" target="blank">
    <img src="images/unnamed4.jpg" alt="bbq plaatjes" id="plaatje1">
    </a>
    </div>
    <div>
    <a href="link.html" target="blank">
    <img src="images/unnamed5.jpg" alt="bbq plaatjes" id="plaatje1">
    </a>
    </div>
  </div>
  
  <div class="prevNext">
    <div><a href="#s4"></a><a href="#s2"></a></div>
    <div><a href="#s1"></a><a href="#s3"></a></div>
    <div><a href="#s2"></a><a href="#s4"></a></div>
    <div><a href="#s3"></a><a href="#s1"></a></div>
  </div>

  <div class="bullets">
    <a href="#s1">1</a>
    <a href="#s2">2</a>
    <a href="#s3">3</a>
    <a href="#s4">4</a>
  </div>

</div>
    <h1 id="informatietext">INFORMATIE</h1>
    <p id="informatietext2">Wij zijn kamadiong</p>
    <p id="informatietext2">Een blogsite voor jouw weekelijkse recepten</p>
    <p id="informatietext2">Bekijk hier mijn heerlijke gerechten en maak ze zelf</p>
    <p id="informatietext2">En neem ook een kijkje naar mijn Boek!</p>
    <br><br><br><br><br><br>


    <h1 id="informatietext">Wie zijn Wij</h1>
    <p id="informatietext2">Wij zijn kamadiong</p>
    <p id="informatietext2">Wij bestaan als sinds 2006 en zijn nogsteeds bezig</p>
    <p id="informatietext2">Bik maak in mijn vrije tijd veel lekkere gerechten en zou die graag willen delen</p>
    <p id="informatietext2">overigens maak ik ook een boek, en ik zou het leuk vinden als je die ook wilt lezen</p>
    <br><br><br>
</body>
</html>