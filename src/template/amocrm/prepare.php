<?php
function CheckCurlResponse($code)
{
	$code=(int)$code;
	$errors=array(
		301=>'Moved permanently',
		400=>'Bad request',
		401=>'Unauthorized',
		403=>'Forbidden',
		404=>'Not found',
		500=>'Internal server error',
		502=>'Bad gateway',
		503=>'Service unavailable'
	);
	try
	{
		#Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
		if($code!=200 && $code!=204)
			throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
	}
	catch(Exception $E)
	{
		die('Ошибка: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
	}
}

$data = array(

		// input's
		'name_lead' => isset( $_POST[ 'nameLead' ] ) ? $_POST[ 'nameLead' ] : 'Ремонт',
		'area' => isset( $_POST[ 'roomSpace' ] ) ? $_POST[ 'roomSpace' ] : 'error_space',
		'area_type' => isset( $_POST[ 'roomType' ] ) ? $_POST[ 'roomType' ] : 'error_type',
		'phone_number' => isset( $_POST[ 'phoneNumber' ] ) ? $_POST[ 'phoneNumber' ] : 'error_phone_number',
		'fix_type' => isset( $_POST[ 'fixType' ] ) ? $_POST[ 'fixType' ] : 'emty',

		// url
		'page_url' => isset( $_POST[ 'urlPage' ] ) ? $_POST[ 'urlPage' ] : 'Ссылка не передана',

		// geo
		'page_place' => isset( $_POST[ 'pagePlace' ] ) ? $_POST[ 'pagePlace' ] : 'Место не определено',
		'geo_location' => isset( $_POST[ 'geoLocation' ] ) && $_POST[ 'geoLocation' ] !== '' ? 'г.' . $_POST[ 'geoLocation' ] : 'Город не определен',
		'geo_office' => isset( $_POST[ 'geoOffice' ] ) && $_POST[ 'geoOffice' ] !== 'null' ? $_POST[ 'geoOffice' ] : '',

		// roistat
		'roistat' => isset( $_COOKIE[ 'roistat_visit' ] ) ? $_COOKIE[ 'roistat_visit' ] : null,

		// utm
		'utm_source' => isset( $_COOKIE[ 'utm_source' ] ) ? $_COOKIE[ 'utm_source' ] : '',
		'utm_medium' => isset( $_COOKIE[ 'utm_medium' ] ) ? $_COOKIE[ 'utm_medium' ] : '',
		'utm_campaign' => isset( $_COOKIE[ 'utm_campaign' ] ) ? $_COOKIE[ 'utm_campaign' ] : '',
		'utm_content' => isset( $_COOKIE[ 'utm_content' ] ) ? $_COOKIE[ 'utm_content' ] : '',
		'utm_term' => isset( $_COOKIE[ 'utm_term' ] ) ? $_COOKIE[ 'utm_term' ] : ''

);


$to      = 'mossebo@mail.ru';
$subject = $data[ 'name_lead' ] . ' ' . $data[ 'geo_location' ];

$message =
'Площадь: ' . $data[ 'area' ] . "\n" .
'Тип: ' . $data[ 'area_type' ] . "\n" .
'Телефон: ' . $data[ 'phone_number' ] . "\n" .
'Геолокация: ' . $data[ 'geo_location' ] . "\n" .
'Имя формы: ' . $data[ 'page_place' ] . "\n" .
'URL: ' . $data[ 'page_url' ] . "\n";

mail( $to, $subject, $message );

