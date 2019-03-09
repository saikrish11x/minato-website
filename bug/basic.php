<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Info About Minato Namikaze from naruto anime">
    <meta name="keywords" content="Minato,fourth hokage,yondaime,yellow flash">
    <title>Minato_Namikaze</title>
    <link rel="stylesheet" href="http://localhost/bug/css/style.css">

  </head>
  <?php
  error_reporting(0);

  if($_SERVER["REQUEST_METHOD"]==POST )
  {
    if(!empty($_POST["email"]))
    {
      echo "<br>";
      $notif="email registered";
    }
    elseif (empty($_POST["email"])) {
      $notif="enter email";

    }
  }
   ?>
  <body>
    <header style="margin-top:-20px;">
      <div class="container">
        <div id="Name">
          <h1><span class="highlight">Minato </span>Namikaze</h1>
        </div>
        <nav>
          <ul>
             <li class="current"><a href="basic.html">Home</a></li>
             <li><a href="About.html">About</a></li>
             <li><a href="Other.html">Other Articles</a> </li>
          </ul>
        </nav>
      </div>
    </header>
    <section id=intro>
      <div class="container">
        <h1><span class="hook">Fastest Shinobi Alive</span></h1>
          <p><h3><span class="lift">Minato Namikaze is one of the main supporting characters in the Naruto universe. He was the Fourth Hokage of the Hidden Leaf Village. He was also the husband of Kushina Uzumaki and is the father of Naruto Uzumaki.</span></h3></p>
      </div>
    </section>
    <section id="notify">
      <div class="container">
        <h1>Subscribe to newsletter</h1>
        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <input type="email" placeholder="Enter email" name="email">
          <span class="error"> <?php echo "<div style='color: black;'>$notif</div>"; ?></span>
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>
    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="http://localhost/bug/images/hokage.jpg" class="img-thumbnail" alt="speed" width="250" height="200" border="5">
          <h3>Fourth Hokage</h3>
          <p>he is the Fourth Hokageof konohagakurei.e hiddesn leaf village taking the office after the sarutobi hiruzen the third Hokage.Minato accomplished lot of activities during Hokage,he is th most youngest hokage other than naruto.he served the office for shortest time of all the kages </p>
        </div>
        <div class="box">
          <img src="http://localhost/bug/images/speed.gif" alt="speed" width="250" height="200" border="5">
          <h3>Fastest of all</h3>
          <p>minato is known for is speed in all five nations.he uses flyin rajin thunder god techinque,which was earlier used by Tobirama,the second hokage.conjunction with his Space–Time Ninjutsu: the Flying Thunder God Technique. They differ from a standard kunai in that they have three blades instead of one and the handle (which is thicker than normal) serves as the "marker" for Minato's teleportation ability. Minato also said that these blades are a bit heavier than a normal kunai.</p>
        </div>
        <div class="box">
          <img src="http://localhost/bug/images/rasengan.gif" alt="speed" width="250" height="200" border="5">
          <h3>Creater Of Rasengan</h3>
          <p>One of the best ninjutsu technique that minato has in his arsenel,This a 'A' rank jutsu which is harder to master.This was passed to Jiraya and passed down to future generation like Naruto,konohamaru,boruto.Flying Thunder God Kunai-This is the main weapon that Minato uses for teleportation ,he inscripted the formula on to kunai. </p>
        </div>
      </div>
    </section>
    <footer>
      <center>
      <p>publisher:M Sai Krishna</p>
      contact information:<a href="mailto:saimatta11@gmail.com">saimatta11@gmail.com</a>
      <br>
        copyrights reserver &copy;2019
      </center>
    </footer>

  </body>
</html>
