<?php
foreach( $account[ 'custom_fields' ][ 'contacts' ] as $field ) {	$custom_fields_contact[ $field[ 'name' ] ] = ( int )$field[ 'id' ];}

#Вывести всех пользователей
// foreach ( $custom_fields_contact as $key => $value) {
//   echo $key . ' - ' . $value . '<br>';
// }
?>
