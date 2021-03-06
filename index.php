<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>bardolino</title>
    <link rel="stylesheet" href="crudwebsite\css\new.css" />
    <link rel="stylesheet" href="./foto/">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@1,100&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel&family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital@1&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/php/">
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="crudwebsite/easteregg.html"><h1>bardolino</h1></a>
      </div>
      <nav>
        <ul>
          <a href="#home"><li class="options">Home</li></a>
          <a href="#tijden"><li class="options">Openingstijden</li></a>
          <a href="#eten bestellen"><li class="options">Eten bestellen</li></a>
          <a href="#extra"><li class="options">locatie</li></a>
          <a href="login.php"><li class="options">login</li></a>
        </ul>
      </nav>
    </header>
    <main>
      <div class="container" id="home">
        <div class="introductie">
          <div class="content"><div class="center menu">
            <div id="myMenu"></div>
        </div></div>

          <img
            class="logo1"
            src="crudwebsite/foto/bardolino-oosterhout-oosterhout.jpg"
            alt=""
          />
        </div>
        <hr class="hr3" id="tijden" />
        <br />
        <h1 class="text2">openingstijden</h1>
        <br />
        <a class="textgr"
          >hieronder ziet u een overzicht van onze openingstijden.</a
        >

        <table>
          <tr>
            <th>Dag</th>
            <th>Restaurant</th>
            <th>Bezorging</th>
          </tr>
          <tr>
            <td>Maandag</td>
            <td>15:00 - 20:30</td>
            <td>gesloten</td>
          </tr>
          <tr>
            <td>dinsdag</td>
            <td>gesloten</td>
            <td>gesloten</td>
          </tr>
          <tr>
            <td>woensdag</td>
            <td>15:00 - 21:45</td>
            <td>16:00 - 21:30</td>
          </tr>
          <tr>
            <td>Donderdag</td>
            <td>15:00 - 21:45</td>
            <td>16:00 - 21:30</td>
          </tr>
          <tr>
            <td>Vrijdag</td>
            <td>15:00 - 21:45</td>
            <td>16:00 - 21:30</td>
          </tr>
          <tr>
            <td>zaterdag</td>
            <td>15:00 - 21:30</td>
            <td>16:00 - 21:30</td>
          </tr>
          <tr>
            <td>Zondag</td>
            <td>15:00 - 21:45</td>
            <td>16:00 - 21:30</td>
          </tr>
        </table>
        <br />
        <div class="tabelbox"></div>
        <br />
        <br />
        <hr class="hr3" />
        <div class="box3" id="eten bestellen">
          <div class="tekstbox2">
            <h1 class="etenbestellen">eten bestellen</h1>
            <br />
            <br />
            <a
              >u kunt hier eten bestellen selecteer of u het wilt laten bezorgen
              of komt afhalen</a
            >
            <br />
            <a href="crudwebsite/pizza.php"><button class="afhalen">afhalen</button></a>
            <a href="crudwebsite/pizza.php"><button class="bezorgen">bezorgen</button></a>
          </div>
          <div class="frame2">
            <img class="robot" src="crudwebsite/foto/vietnamees-bestellen.png" alt="" />
          </div>
        </div>
        <hr class="hr3" />
        <div id="contact" class="box5">
          <h1 id="extra" class="text1">locatie</h1>
          <div class="kaartframe">
          <iframe class="kaart" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2462.836312692054!2d5.821551224892768!3d51.882200406788265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7a9fb9930d41f%3A0xd6f50937184ef1d3!2sPizzeria%20Bardolino!5e0!3m2!1snl!2snl!4v1647425394855!5m2!1snl!2snl" width="613" height="176" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="box6"></div>
      </div>
    </main>
    <footer>
      <h5>?? 2022 | bardolino.</h5>
    </footer>
    <script src="main.js"></script>
  </body>
  <script src="./js/script.js"></script>
</html>
