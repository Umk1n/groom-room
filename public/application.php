<?
require_once ('connection.php');

echo '<br>';

function createApp($bd, $name, $category) {
  $default = 'in process';
  $date = date('Y-m-d');
  $sql = "INSERT INTO `application` (`id`, `name`, `img_before`, `img_after`, `metka`, `category`, `status`) VALUES (NULL, '$name', 'before', 'after', '$date', '$category', '$default')";
  if ($bd->query($sql) === TRUE) {
    echo "New application created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $bd->error;
  }
}

function createReceiving($bd) {
  $application =  mysqli_query($bd, "SELECT * FROM `application`");
  $values = [];
  while ($val = mysqli_fetch_assoc($application)) {
    array_push($values, [$val['id'], $val['name'], $val['img_before'], $val['img_after'], $val['metka'], $val['category'], $val['status']]);
  }
  for ($i=0; $i < count($values); $i++) {
    for ($j=0; $j < count($values[$i]); $j++) { 
      echo $values[$i][$j]. " ";
    }
    echo '<br>';
  }
}

function recevingRecevingId($bd, $id) {
  for ($idx=0; $idx < count($id); $idx++) { 
    $application =  mysqli_query($bd, "SELECT * FROM `application` Where `id` = '$id[$idx]'");
    $values = [];
    while ($val = mysqli_fetch_assoc($application)) {
      array_push($values, [$val['id'], $val['name'], $val['img_before'], $val['img_after'], $val['metka'], $val['category'], $val['status']]);
    }
    for ($i=0; $i < count($values); $i++) {
      for ($j=0; $j < count($values[$i]); $j++) { 
        echo $values[$i][$j]. " ";
      }
      echo '<br>';
    }
  }
}

function deleteReceiving($bd, $name) {
  $sql = "DELETE FROM `application` WHERE `application`.`name` = '$name'";
  if ($bd->query($sql) === TRUE) {
    echo "Application was remove successfull";
  } else {
    echo "Error: " . $sql . "<br>" . $bd->error;
  }
}

function changeStatusReceiving($bd, $name, $status) {
  $sql = "UPDATE `application` SET `status` = '$status' WHERE `name` = '$name'";
  if ($bd->query($sql) === TRUE) {
    echo "Status was changed successfull";
  } else {
    echo "Error: " . $sql . "<br>" . $bd->error;
  }
}
?>