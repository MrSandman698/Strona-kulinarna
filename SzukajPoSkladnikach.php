<?php
  session_start();

  require_once 'database.php';

?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Garnek.pl</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="dodajPrzepisStyle.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  </head>

  <body>
  <div class = "topBar">
   <a class = "logoImg" href="index.php"><img class = "logo" src="garnek.png" ></a>
  
    <div class = "dropDown">
      <a href = "oNas.php"><button class = "dropButtons">O nas</button></a>
    </div>
  
    <div class = "dropDown">
      <button class = "dropButtons" id = "kat">Kategorie</button>
      <div class = "dropMenu">
        <a href = "index.php?kategoria=1" class = "dropDownLink">Danie Główne</a>
        <a href = "index.php?kategoria=2" class = "dropDownLink">Zupa</a>
        <a href = "index.php?kategoria=3" class = "dropDownLink">Deser</a>
        <a href = "SzukajPoSkladnikach.php" class = "dropDownLink">Szukaj po składnikach</a>
      </div>
    </div>
  
    <div class = "dropDown">
      <a href = "dodajPrzepis.php"><button class = "dropButtons">Dodaj Przepis</button></a>
    </div>
  </div>

    <form class="formContainer" method="POST" action="searchByThingsScript.php">
      
      <div class= "radiobox">
        <p class="header">Składniki jakie masz w domu:</p>
        <div class="checklist">
        <label class="container">makaron
          <input type="checkbox" id="składnik1" name="sk[]" value="makar">
          <span class="checkmark"></span>
        </label><label class="container">jajka
          <input type="checkbox" id="składnik2" name="sk[]" value="jaj">
          <span class="checkmark"></span>
        </label>
        <label class="container">cebula
          <input type="checkbox" id="składnik3" name="sk[]" value="cebul">
          <span class="checkmark"></span>
        </label>
        <label class="container">pomidor
          <input type="checkbox" id="składnik4" name="sk[]" value="pomi">
          <span class="checkmark"></span>
        </label>
        <label class="container">marchewka
          <input type="checkbox" id="składnik5" name="sk[]" value="marche">
          <span class="checkmark"></span>
        </label>
        <label class="container">pietruszka
          <input type="checkbox" id="składnik6" name="sk[]" value="pietru">
          <span class="checkmark"></span>
        </label>
        <label class="container">kurczak
          <input type="checkbox" id="składnik7" name="sk[]" value="kurcz">
          <span class="checkmark"></span>
        </label>
        <label class="container">schab
          <input type="checkbox" id="składnik8" name="sk[]" value="scha">
          <span class="checkmark"></span>
        </label>
        <label class="container">baranina
          <input type="checkbox" id="składnik9" name="sk[]" value="barani">
          <span class="checkmark"></span>
        </label>
        <label class="container">czosnek
          <input type="checkbox" id="składnik10" name="sk[]" value="czosn">
          <span class="checkmark"></span>
        </label>
        <label class="container">sałata
          <input type="checkbox" id="składnik11" name="sk[]" value="sałat">
          <span class="checkmark"></span>
        </label>
        <label class="container">ser
          <input type="checkbox" id="składnik12" name="sk[]" value="ser">
          <span class="checkmark"></span>
        </label>
        <label class="container">ogórek
          <input type="checkbox" id="składnik13" name="sk[]" value="ogór">
          <span class="checkmark"></span>
        </label>
          <label class="container">burak
            <input type="checkbox" id="składnik14" name="sk[]" value="bura">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      
      <div class="przeslij">
        <button class = "sprawdz" ><a href = "index.php">Powrót</a></button>
        <button class = "sprawdz" type = "submit" name = "submit" >Prześlij</button>
      </div>
     </form>
     <div class="empty1"></div>
  </body>

</html>