<?php
  session_start();

  require_once 'database.php';

?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Gotuj z Bartnikiem</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="dodajPrzepisStyle.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  </head>

  <body>
    <div class = "topBar">
      <img class = "logo" src="garnek.png">
    
      <div class = "dropDown">
        <button class = "dropButtons">O nas</button>
        <div class = "dropMenu">
          <a href = "#" class = "dropDownLink">information</a>
          <a href = "#" class = "dropDownLink">information</a>
          <a href = "#" class = "dropDownLink">information</a>
        </div>
      </div>
    
      <div class = "dropDown">
        <button class = "dropButtons" id = "kat">Kategorie</button>
        <div class = "dropMenu">
          <a href = "#" class = "dropDownLink">information</a>
          <a href = "#" class = "dropDownLink">information</a>
          <a href = "#" class = "dropDownLink">information</a>
          <a href = "#" class = "dropDownLink">information</a>
          <a href = "#" class = "dropDownLink">information</a>
          <a href = "#" class = "dropDownLink">information</a>
        </div>
      </div>
    
      <div class = "dropDown">
        <button class = "dropButtons">Kontakt</button>
        <div class = "dropMenu">
          <a href = "#" class = "dropDownLink">information</a>
          <a href = "#" class = "dropDownLink">information</a>
          <a href = "#" class = "dropDownLink">information</a>
        </div>
      </div>
    </div>

    <form class="formContainer" method="POST" enctype="multipart/form-data" action="addInfo.php">
      <header class = "formHeader">Dodaj swój przepis</header>
      <div class= "radiobox">
        <p class="header">Kategoria</p>
        <label class="container">Danie Główne
          <input type="radio" checked="checked" id="danie_glowne" name="kategoria" value="1">
          <span class="checkmark"></span>
        </label>
        <label class="container">Zupa
          <input type="radio" name="kategoria" value="2">
          <span class="checkmark"></span>
        </label>
        <label class="container">Deser
          <input type="radio" id="deser" name="kategoria" value="3">
          <span class="checkmark"></span>
        </label>
      </div>
      <div class="inputField">
        <input type="text" id = "nazwa-przepisu" name="nazwa-przepisu" required>
        <label for="nazwa-przepisu">Nazwa przepisu</label>
      </div>
      <div class="inputField">
        <textarea type="text" id = "krotki-opis" name="krotki-opis" rows="4" required></textarea>
        <label for="krotki-opis">Krótki opis przepisu</label>
      </div>
      <div class="inputField">
        <textarea type="text" id = "dlugi-opis" name="dlugi-opis" rows="8" required></textarea>
        <label for="dlugi-opis">Pełny opis przepisu</label>
      </div>
      <div class="inputField" id = "polezdj">
        <input type="file" id = "zdj-przepisu" name="zdj-przepisu" accept="image/*" required>
        <label for="zdj-przepisu">Zdjęcie przepisu</label>
      </div>
      <div class="inputField">
        <textarea type="text" id = "skladniki" name="skladniki" rows="12" required></textarea>
        <label for="skladniki">Potrzebne składniki (z ilością)</label>
      </div>
      <div class="inputField">
        <textarea type="text" id = "kroki" name="kroki" rows="12" required></textarea>
        <label for="kroki">Przepis krok po kroku</label>
      </div>
      <div class="przeslij">
        <button class = "sprawdz" ><a href = "index.html">Powrót</a></button>
        <button class = "sprawdz" type = "submit" name = "submit" >Prześlij</button>
      </div>
     </form>
  </body>

</html>