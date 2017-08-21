<?phpforeach( $account[ 'custom_fields' ][ 'leads' ] as $field ) {	$custom_fields[ $field[ 'name' ] ] = ( int )$field[ 'id' ];}#Вывести все поля сделок
// foreach ( $custom_fields as $key => $value) {
// 	echo $key . ' - ' . $value . '<br>';
// }
?>
