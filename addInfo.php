<?php

	session_start();
	
	require_once 'connect.php';
	
	var_dump($_POST);
    $rodzajDania = $_POST['kategoria'];
    $nazwaPrzepisu = $_POST['nazwa-przepisu'];
    $krotkiOpis = $_POST['krotki-opis'];
    $dlugiOpis = $_POST['dlugi-opis'];
    $zdjPrzepisu = $_FILES['zdj-przepisu']['name'];
    $skladniki = $_POST['skladniki'];
    $krokPoKroku = $_POST['kroki'];
    
    $target = "images/".time().rand(1,100).time().rand(1,100).end((explode(".", $zdjPrzepisu)));;
	
	if(move_uploaded_file($_FILES['zdj-przepisu']['tmp_name'], $target)){
		
        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

        if($polaczenie->connect_errno!=0)
        {
            echo "Error: ".$polaczenie->connect_errno;
        }
        else
        {
            
            $sql = "INSERT INTO przepisy (id, nazwa, kategoria, sklad, przygotowanie, opis, shortopis, img, vegan) VALUES (NULL, '$nazwaPrzepisu', '$rodzajDania', '$skladniki', '$krokPoKroku', '$dlugiOpis', '$krotkiOpis', '$target', '1')";

            if($polaczenie->query($sql) === TRUE)
            {
                echo "Przepis dodany!";
            }
            else
            {
                echo "Error: ". $sql. "<br>". $polaczenie->error;
            }
            
            $polaczenie->close();
            
            header("Location: index.php");

        }
		
	} else {
		echo "Jest problem. Nie udalo sie przeniesc pliku. Sproboj ponownie pozniej, lub skontaktuj sie z administratorem strony";
	}
	
?>