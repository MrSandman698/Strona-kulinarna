<?php
  session_start();
		
    $id = $_GET['id'];
    
    require_once "connect.php";
      
        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
        
        if($polaczenie->connect_errno!=0)
        {
        echo "Error: ".$polaczenie->connect_errno;
        }
        else 
        {		
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
  
  <div class = "przepisBox">   
    <section class="mainSection">
<?php
    echo '<header class="tytul">
    <h1>'.$nazwa.'</h1> 
    </header>';
?>
  
      <h2>Składniki:</h2>
       
<?php
    echo $sklad;
?>
      <h2>Przygotowanie:</h2>
<?php
    echo $przygotowanie;
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
      <button class = 'sprawdz'><a href = "index.html">Powrót</a></button>
  </div>
  <div class="empty1"></div>
</body>

</html>