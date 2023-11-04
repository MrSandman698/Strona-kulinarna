<?php
  session_start();

  require_once 'database.php';

  $got = $db->query("SELECT * FROM przepisy");
	$all = $got->fetchAll();


?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Gotuj z Bartnikiem</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
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
    
    <div class="headerAndSearch">
      <header class = 'mainHeader'>Garnek.pl</header>
      <input class = "searchbarstyle" type="text" placeholder="Search...">
    </div>
    
    
    <div class = 'mainBox' >
      
    <?php

        foreach($all as $przepis){
        echo "<div class = 'przepis' style= 'background-image: url({$przepis['img']}); background-size: 100% 100%; background-repeat: no-repeat;' >";
        echo "<header class = 'nazwaPrzepisu'>{$przepis['nazwa']}</header>";
        echo "<p class = 'opisPrzepisu'>{$przepis['shortopis']}</p>";
        echo "<button class = 'sprawdz'><a>Sprawdź</a></button>";
        echo "</div>";
        }
        
    ?>

      <button class = "dodaj-przepis"><a href = "dodajPrzepis.php">+</a></button>
    </div>
    <div class="empty1"></div>
  </body>

</html>