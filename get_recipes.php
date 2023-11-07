<?php

require_once('connect.php');

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$pyt = isset($_GET['q']) ? $_GET['q'] : '';

$pyt = $conn->real_escape_string($pyt);

$sql = "SELECT * FROM przepisy WHERE nazwa LIKE '%$pyt%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<p>" . $row["nazwa"] . "</p>";
  }
} else {
  echo "Brak potraw";
}

$conn->close();
?>