<?php
  session_start();

  require_once 'database.php';

?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Gotuj z Bartnikiem</title>
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
      </div>
    </div>
  
    <div class = "dropDown">
      <a href = "dodajPrzepis.php"><button class = "dropButtons">Dodaj Przepis</button></a>
    </div>
  </div>

    <form class="formContainer" method="POST" enctype="multipart/form-data" action="addInfo.php">
      
      <div class= "radiobox">
        <p class="header">Składniki jakie masz w domu:</p>
        <div class="checklist">
        <label class="container">makaron
          <input type="checkbox" id="składnik1" name="składnik" value="makaron">
          <span class="checkmark"></span>
        </label><label class="container">jajka
          <input type="checkbox" id="składnik2" name="składnik" value="jajka">
          <span class="checkmark"></span>
        </label>
        <label class="container">cebula
          <input type="checkbox" id="składnik3" name="składnik" value="cebula">
          <span class="checkmark"></span>
        </label>
        <label class="container">pomidor
          <input type="checkbox" id="składnik4" name="składnik" value="pomidor">
          <span class="checkmark"></span>
        </label>
        <label class="container">marchewka
          <input type="checkbox" id="składnik5" name="składnik" value="marchewka">
          <span class="checkmark"></span>
        </label>
        <label class="container">pietruszka
          <input type="checkbox" id="składnik6" name="składnik" value="pietruszka">
          <span class="checkmark"></span>
        </label>
        <label class="container">kurczak
          <input type="checkbox" id="składnik7" name="składnik" value="kurczak">
          <span class="checkmark"></span>
        </label>
        <label class="container">schab
          <input type="checkbox" id="składnik8" name="składnik" value="schab">
          <span class="checkmark"></span>
        </label>
        <label class="container">baranina
          <input type="checkbox" id="składnik9" name="składnik" value="baranina">
          <span class="checkmark"></span>
        </label>
        <label class="container">czosnek
          <input type="checkbox" id="składnik10" name="składnik" value="czosnek">
          <span class="checkmark"></span>
        </label>
        <label class="container">sałata
          <input type="checkbox" id="składnik11" name="składnik" value="sałata">
          <span class="checkmark"></span>
        </label>
        <label class="container">ser
          <input type="checkbox" id="składnik12" name="składnik" value="ser">
          <span class="checkmark"></span>
        </label>
        <label class="container">ogórek
          <input type="checkbox" id="składnik13" name="składnik" value="ogórek">
          <span class="checkmark"></span>
        </label>
          <label class="container">burak
            <input type="checkbox" id="składnik14" name="składnik" value="burak">
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