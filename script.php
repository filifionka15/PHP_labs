<?php
$link = mysqli_connect('localhost','root','root','car_showroom');

if(mysqli_connect_errno()) die('Ошибка соединения:
'.mysqli_connect_error());
else {
print ('Успешно установлено!!!');

 echo '<table border="1">';
 echo '<thead>';
 echo '<tr>';
 echo '<th>ID</th>';
 echo '<th>Название авто</th>';
 echo '</tr>';
 echo '</thead>';
 echo '<tbody>';

$res = mysqli_query($link,"SELECT * FROM `cars`");

if($res) {
while($row = mysqli_fetch_assoc($res)) {
 echo '<tr>';
 echo '<td>' . $row['id'] . '</td>';
 echo '<td>' . $row['name'] . '</td>';
 echo '</tr>';
}
echo '</tbody>';
echo '</table>';
mysqli_free_result($res);
}

mysqli_close($link);
}
?>
