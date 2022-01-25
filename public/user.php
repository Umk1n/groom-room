<?
require_once ('connection.php');

echo '<br>';

function register($bd, $login, $password) {
  $sql = "INSERT INTO `users` (`login`, `password`, `role`) VALUES ('$login', '$password', 'user')";
  if ($bd->query($sql) === TRUE) {
    echo "New user created";
  } else {
    echo "Error: " . $sql . "<br>" . $bd->error;
  }
}

function authorization($bd, $login, $password) {
  $users =  mysqli_query($bd, "SELECT * FROM `users`");
  $values = [];
  while ($values = mysqli_fetch_assoc($users)) {
    array_push($values, [$values['login'], $values['password']]);
  }
  $result = '';
  for ($i=0; $i < count($values); $i++) {
    if ($login === $values[$i][0] && $password === $values[$i][1]) {
      $result = 'succses';
      break;
    }
  }
  if ($result === 'succses') {
    echo 'Authorization';
  } else {
    echo 'User undefined';
  }
}
?>