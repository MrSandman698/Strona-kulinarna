

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Gotuj z Bartnikiem</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="dodajPrzepisStyle.css" rel="stylesheet" type="text/css" />
    <link href="oNasStyle.css" rel="stylesheet" type="text/css" />
    <script src="script.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  </head>

  <body>
    
  <div class = "topBar">
   <a class = "logoImg" href="index.php"><img class = "logo" src="garnek.png" ></a>
  
    <div class = "dropDown">
      <button class = "dropButtons">O nas</button>
    </div>
  
    <div class = "dropDown">
      <button class = "dropButtons" id = "kat">Kategorie</button>
      <div class = "dropMenu">
        <a href = "?kategoria=1" class = "dropDownLink">Danie Główne</a>
        <a href = "?kategoria=2" class = "dropDownLink">Zupa</a>
        <a href = "?kategoria=3" class = "dropDownLink">Deser</a>
      </div>
    </div>
  
    <div class = "dropDown">
      <button class = "dropButtons">Kontakt</button>
    </div>
  </div>
  <div class="oNasBox">
    <img src ="garnek.png">
  </div>
    
  </body>

</html>