<?
  $bd = new PDO("mysql:host=localhost;dbname=groom-room",
  "root", "root");
  $applicationTable = [];
  $usersTable = [];
  if ($query = $bd->query("SELECT * FROM application")) {
    echo "<pre>";
    $applicationTable = $query->fetchAll(PDO::FETCH_ASSOC);
    echo 'Подключение к application успешно';
    echo "</pre>";
  } else {
    print_r($bd->errorInfo());
  }
  if ($query = $bd->query("SELECT * FROM users")) {
    echo "<pre>";
    $usersTable = $query->fetchAll(PDO::FETCH_ASSOC);
    echo 'Подключение к users успешно';
    echo "</pre>";
  } else {
    print_r($bd->errorInfo());
  }
?>