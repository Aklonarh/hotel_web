<!DOCTYPE html>
<html lang=cz dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt | Hotel Ort</title>
    <!-- default favicon -->
<link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml">
<!-- wideley used favicon -->
<link rel="icon" href="favicon.svg" sizes="32x32" type="image/svg+xml">
<!-- for apple mobile devices -->
<link rel="apple-touch-icon-precomposed" href="/favicon.svg" type="image/svg+xml" sizes="152x152">
<link rel="apple-touch-icon-precomposed" href="/favicon.svg" type="image/svg+xml" sizes="120x120">
<!-- google tv favicon -->
<link rel="icon" href="/favicon.svg" sizes="96x96" type="image/svg+xml">
    <style>
    @media screen and (min-width: 610px){
    form {
      padding-left: 50px;
    }
    }
    input[type=submit], input[type=reset] {
      background-color: #2f5d8c;
      border: 2px solid #ccc;
      color: white;
      padding: 16px 32px;
      text-decoration: none;
      margin: 1px 1px;
      cursor: pointer;
    }

    @media screen and (max-width: 610px){
      input[type=submit], input[type=reset] {
      margin: auto;

      }
    }

    input[type=submit]:hover:not(.active), input[type=reset]:hover:not(.active) {
      background-color: #1f4060;
      color: white;
    }
    input[type=text] {
      border: 2px solid #ccc;
      width: 200px;
      padding: 9px 15px;
      margin: 1px 0px 10px 0px;
      box-sizing: border-box;
      background-color: #f9f9f9;
    }

    input[type=text]:focus {
      border: 2px solid #2f5d8c;
    }

    textarea {
      width: 100%;
      height: 150px;
      padding: 10px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f9f9f9;
      resize: none;
      text-align: left;
    }

    @media screen and (min-width: 601px) {
      textarea {
        width: 450px;
      }
    }
    @media screen and (max-width: 350px) {
      input[type=text] {
        margin: auto;
        width: 100%;
      }
    }
    .item2 { grid-area: top; }



    .grid-container {
    display: grid;
    grid-template:
      'top top top top top top top top top';

    background-color: #d8d8d6;
    padding: 20px 50px;
    }
    .kontakt {
      list-style-type: none;

    }
    main {
      font-size: 120%;
    }
    </style>

  </head>
  <body>
    <header>
<a href="../hotel_web/index.html"><img class="logo" src="../hotel_web/hotel_w.svg" alt="Hotel Ort" width="300px"></a>
    </header>
    <nav>
      <ul class="nav">
       <li><a href="../hotel_web/index.html">Domů</a></li>
       <li class="dropdown">
        <button class="dropbtn" onclick="myFunction()">Ubytování
      <i class="fa fa-caret-down"></i>
    </button>
       <div class="dropdown-content" id="myDropdown">
         <a href="../hotel_web/hotel_ubytovani.html">Ubytování</a>
         <a href="../hotel_web/hotel_cenik.html">Ceník</a>
       </div>
       <li><a href="../hotel_web/hotel_restaurace.html">Restaurace</a></li>
       <li class="active right"><a href="../hotel_web/hotel_kontakt.php">Kontakt</a></li>
      </ul>
    </nav>
    <main>
      <div class="grid-container">
        <div class="top">
      <h2 style="color:#2f5d8c">Kontakt</h2>
      <ul class="kontakt">
      <li>Hotel Ort</li>
      <li>Nepřívěc 18</li>
      <li>506 01 Libošovice-Nepřívěc</li>
      <li><a href="tel:00420724737878">+420 724 737 878</a></li>
      <li><a href="mailto:hotelort@seznam.cz">hotelort@seznam.cz</a></li>
      </ul>
      <br>
      <br>

      <h2 style="color:#2f5d8c">Napiště nám!</h2>

<?php
if(isset($_POST['submit'])){
    $recipient = "ortovag@gmail.com";
    $sender = $_POST['email'];
    $jmeno = $_POST['jmeno'];
    $prijmeni = $_POST['prijmeni'];
    $subject = "Emailový formulář - Hotel Ort";
    $subject2 = "Emailový formulář - Hotel Ort kopie";
    $message = $jmeno . " " . $prijmeni . " Vám napsal: " . "\n\n" . $_POST['message'];
    $message2 = "Email, který jste zaslali Hotelu Ort " . $jmeno . "\n\n" . $_POST['message'];


    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From:'. $from . "\r\n";
    $headers .= 'From:'. $to . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers);
    echo "Email byl odeslán. Děkujeme, " . $jmeno . "! Brzy Vás budeme kontaktovat.";
  }
 ?>
      <p>Pokud máte zájem o o ubytování, soukromou akci nebo cokoliv jiného, kontaktujte nás pomocí formuláře níže.</p>
      <form action="" method="post">
          Jméno:<br>
          <input type="text" name="jmeno"><br>
          Příjmení:<br>
          <input type="text" name="prijmeni"><br>
          E-mail:<br>
          <input type="text" name="email"><br>
          <!--Mám zájem o...<br>
          <input type="radio" id="ubytovani">
          <label for="ubytovani">Ubytování</label><br>
          <input type="radio" id="soukr_akce">
          <label for="soukr_akce">Soukromou akci</label><br>
          <input type="radio" id="jine">
          <label for="jine">Jiné</label><br><br>-->
          Vaše zpráva:<br>
          <textarea size="50" name="message"></textarea><br><br>
          <input type="submit" name="submit" value="Odeslat">
          <input type="reset" value="Reset">
      </form>
    </div>
    </main>

    <footer>
      <div class="grid-fcontainer">
      <div class="footer1">
        <img src="hotel_w.svg" class="flogo">
      </div>
        <div class="footer2">
        <h2 style="color:white">Kontakt</h2>
        <ul class="kontakt">
        <li>Hotel Ort</li>
        <li>Nepřívěc 18</li>
        <li>506 01 Libošovice-Nepřívěc</li>
        <li><a href="tel:00420724737878">+420 724 737 878</a></li>
        <li><a href="mailto:hotelort@seznam.cz">hotelort@seznam.cz</a></li>
        </ul>
      </div>
      <div class="footer3">
        <h2 style="color:white">Sledujte nás!</h2>
        <ul>
          <li>Lorem ipsum</p</li>
        </ul>
      </div>
      <div class="footer4">
        <p class="footer">© 2021 Elerokka s.r.o.</p>
      </div>
    </div>
    </footer>
<script type="text/javascript">
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}


window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
  </body>
</html>
