

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
      <a href = "oNas.php"><button class = "dropButtons">O nas</button></a>
    </div>
  
    <div class = "dropDown">
      <button class = "dropButtons" id = "kat">Kategorie</button>
      <div class = "dropMenu">
        <a href = "index.php?kategoria=1" class = "dropDownLink">Danie Główne</a>
        <a href = "index.php?kategoria=2" class = "dropDownLink">Zupa</a>
        <a href = "index.php?kategoria=3" class = "dropDownLink">Deser</a>
        <a href = "SzukajPoSkladnikach.php" class = "dropDownLink">Wyszukaj po składnikach</a>
      </div>
    </div>
  
    <div class = "dropDown">
      <a href = "dodajPrzepis.php"><button class = "dropButtons">Dodaj Przepis</button></a>
    </div>
  </div>
  <div class="oNasBox">
    <img src ="garnekCienie.png" id="logoGarnekCienie">
    <h1 id = "headerONas">O nas</h1>
    <p id = "parONas">
      Jesteśmy zespołem uczniów z II Liceum Ogólnokształcącego w Krakowie. Nasza pasja do gotowania oraz chęć pomocy innym skłoniła nas do stworzenia tej strony.
      Chcemy dostarczać praktyczne porady, przepisy i wskazówki, które ułatwią wszystkim gotowanie i pozwolą na przygotowywanie pysznych potraw. Naszym celem jest dzielenie się naszą wiedzą i inspiracją kulinarzą, aby każdy mógł cieszyć się smacznymi posiłkami.
      Dzięki naszej stronie, nawet początkujący kucharze będą w stanie przygotować smaczne dania bez stresu i trudności.
    </p>
    <img src = "osoby/numer1.png" id="n1">
    <img src = "osoby/numer2.png" id="n2">
    <img src = "osoby/numer3.png" id="n3">
    <img src = "osoby/numer4.png" id="n4">
  </div>
    
  </body>

</html>