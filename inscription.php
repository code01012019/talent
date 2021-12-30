<?php
$servername = "mariadb";
$username = "dbuser";
$password = "Dbuser1234";
$dbname = "db_talent";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$sql = "INSERT INTO Talents (nom, mail) VALUES ('Adam', 'adam@gmail.com')";

    $nom = $_POST['nom'];
    $mail = $_POST['mail'];

    $sql = "INSERT INTO Talents (".
                         "nom," .
                         "mail" .
                         ")".
                         "VALUES ('".
                          $nom . "','" .
                          $mail."'".
                         ")";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
