<?php

/*
Template name: Калькулятор 2
*/

get_header();

$form_office_address = geoInit( 'address' );
$form_city_name_geo = geoInit( 'city' );
#Рандомные числа для id радиокнопок калькулятора,
$radio_id = rand();
$radio_id_2 = rand();
#Рандомное чилсо для id select
$select_id = rand();
?>



<?php

get_footer();

?>
