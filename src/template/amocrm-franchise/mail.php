<?php
$to      = $data[ 'mail_to' ];
$subject = $data[ 'subject' ];

$message =
'Имя: ' . $data[ 'name' ] . "\n" .
'Email: ' . $data[ 'email' ] . "\n" .
'Телефон: ' . $data[ 'phone' ] . "\n" .
'Геолокация: ' . $data[ 'geo_location' ] . "\n" .
'Имя формы: ' . $data[ 'page_place' ] . "\n" .
'URL: ' . $data[ 'page_url' ] . "\n" .
$data[ 'message' ];

mail( $to, $subject, $message );
