<?php

$lista = $_POST['sk'];
if(empty($lista)) 
{
    header('Location: index.php');
} 
else 
{
  $N = count($lista);
  $asd = $lista[0];
  $sql = "SELECT * FROM przepisy WHERE '1'='1' AND (sklad LIKE '%$asd%' "; 
  for($i=1; $i < $N; $i++)
  {
    $sql .= " OR sklad LIKE '%$lista[$i]%' ";
  }
  $sql.=" )";
 // echo $sql;
  $name = "";
  if(isset($_COOKIE['w'])){
    $name = $_COOKIE['w'];
  } else if(isset($_GET['nazwa'])){
    $name = $_GET['nazwa'];
  } else {
    unset($name);
  }
  require_once 'database.php';
  if(isset($_GET['kategoria']) && isset($name)){
    $temp1 = $_GET['kategoria'];
    $temp2 = $name;
    $got = $db->query($sql." AND kategoria='$temp1' AND nazwa LIKE '%$temp2%' ORDER BY id DESC");
  } else if(isset($_GET['kategoria'])){
    $got = $db->query($sql." AND kategoria = '".$_GET['kategoria']."' ORDER BY id DESC");
  } else if(isset($name)){
    $temp = $name;
    $got = $db->query($sql." AND nazwa LIKE '%$temp%'");
  } else {
    $got = $db->query($sql);
  }
	$all = $got->fetchAll();

}

?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Garnek.pl</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
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
        <a href = "?kategoria=1" class = "dropDownLink">Danie Główne</a>
        <a href = "?kategoria=2" class = "dropDownLink">Zupa</a>
        <a href = "?kategoria=3" class = "dropDownLink">Deser</a>
        <a href = "SzukajPoSkladnikach.php" class = "dropDownLink">Szukaj po składnikach</a>
      </div>
    </div>
  
    <div class = "dropDown">
      <a href = "dodajPrzepis.php"><button class = "dropButtons">Dodaj Przepis</button></a>
    </div>
  </div>
    
    <div class="headerAndSearch">
      <header class = 'mainHeader'><a href="index.php">Garnek.pl</a></header>
      <input type="text" id="searchbarstyle" placeholder="Wyszukaj...">
    </div>
    
    
    <div class = 'mainBox' >
      
    <?php

        foreach($all as $przepis){
        echo "<div class = 'przepis' style= 'background-image: linear-gradient(rgba(0, 0, 0, 0.65),rgba(0, 0, 0, 0.65)), url({$przepis['img']}); background-size: 100% 100%; background-repeat: no-repeat; ' >";
        echo "<header class = 'nazwaPrzepisu'>{$przepis['nazwa']}</header>";
        echo "<p class = 'opisPrzepisu'>{$przepis['shortopis']}</p>";
        echo '<button class = "sprawdz"><a href="template.php?id='.$przepis['id'].'">Sprawdź</a></button>';
        echo "</div>";
        }
        
    ?>

      <button class = "dodaj-przepis"><a href = "dodajPrzepis.php">+</a></button>
    </div>
    <div class="empty1"></div>
  </body>

</html>