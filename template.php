<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');
    $id = $_GET['id'];
    
    require_once "connect.php";
      
        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
        
        if($polaczenie->connect_errno!=0)
        {
        echo "Error: ".$polaczenie->connect_errno;
        }
        else 
        {		
          $polaczenie->set_charset("utf8mb4");
         // echo "SELECT * FROM przepisy WHERE id = $id";		
          @$rezultat = $polaczenie->query(sprintf("SELECT * FROM przepisy WHERE id = $id"));
          $wynik = $rezultat->fetch_assoc();
        //  var_dump($wynik);
          $nazwa = $wynik['nazwa'];
          $kategoria = $wynik['kategoria'];
          $sklad = $wynik['sklad'];
          $przygotowanie = $wynik['przygotowanie'];
          $opis = $wynik['opis'];
          $shortopis = $wynik['shortopis'];
          $img = $wynik['img'];
          $vegan = $wynik['vegan'];
          
          $rezultat->free_result();
          $polaczenie->close();

        }

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Gotuj z Bartnikiem</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
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
  
  <div class = "przepisBox">   
    <section class="mainSection">
<?php
    echo '<header class="tytul"> <h1>'.$nazwa.'</h1> </header>';
?>
  
      <h2>Składniki:</h2>
       
<?php
    echo '<div class = "styleSkladniki">'.$sklad.'</div>';
?>
      <h2>Przygotowanie:</h2>
<?php
  echo '<div class = "styleSkladniki">'.$przygotowanie.'</div>';
?>
      <p id="smacznego">Smacznego!</p>
    </section>  
      <div class = "caloscOpisu">
        <h2 class="opis">Opis:</h2>
<?php
  echo '  <p class="par">'.$opis.'</p>';
?>
      </div>
      <img class="zdjecie1" src="<?= $img ?>" alt="zdjęcie potrawy">
      <button class = 'sprawdz'><a href = "index.php">Powrót</a></button>
  </div>
  <div class="empty1"></div>
</body>

</html>