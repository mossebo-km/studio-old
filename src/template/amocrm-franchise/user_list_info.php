<?php
#Выводим ответственных
foreach ($account['users'] as $key) {
  $task_id_name[ $key[ 'name' ] ] = $key[ 'id' ];
}

#Вывести всех пользователей
// foreach ( $task_id_name as $key => $value) {
//   echo $key . ' - ' . $value . '<br>';
// }
?>
