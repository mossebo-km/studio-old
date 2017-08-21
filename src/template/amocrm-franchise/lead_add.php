<?php
#Опишем массив содержащий информацию о сделке и поместим его в массив 'add'
$leads[ 'request' ][ 'leads' ][ 'add' ][] = array(

			'name' => $data[ 'name' ] . ' ' . 'г.' . $data[ 'geo_location' ], #Имя сделки
			'pipeline_id' => $data[ 'pipeline_id' ], #Id воронки
			'status_id' => $data[ 'status_id' ], #Id этапа сделки
			'responsible_user_id' => $task_id_name[ $data[ 'responsible_user_id' ] ], #Ответственный пользователь
			'tags' => $data[ 'tatunashvili_tag' ] . ', mossebo.studio' . ', ' . $data['utm_source'],

			'custom_fields' => array( # Дополнительные поля


				# Дополнительное поле 'Время заполнения'.
				array(
					'id' => $custom_fields[ 'Время заполнения' ],
					'values' => array(
						array(
							'value' => date("H:i d.m.Y")
						)
					)
				),

				# Дополнительное поле 'URL'.
				array(
					'id' => $custom_fields[ 'url' ],
					'values' => array(
						array(
							'value' => $data[ 'page_url' ]
						)
					)
				),

				# Дополнительное поле 'Локация'.
				array(
					'id' => $custom_fields[ 'IP' ],
					'values' => array(
						array(
							'value' => $_SERVER[ 'REMOTE_ADDR' ]
						)
					)
				),

				# Дополнительное поле 'Место'.
				array(
					'id' => $custom_fields[ 'Расположене формы' ],
					'values' => array(
						array(
							'value' => $data[ 'page_place' ]
						)
					)
				),

				# Дополнительное поле 'utm'
				array(
					'id' => $custom_fields[ 'utm' ],
					'values' => array(
						array(
							'value' => $data[ 'utm_source' ] . ' ' . $data[ 'utm_medium' ] . ' ' . $data[ 'utm_campaign' ] . ' ' . $data[ 'utm_content' ] . ' ' . $data[ 'utm_term' ],
						)
					)
				),

				# Дополнительное поле roistat
				array(
					'id' => $custom_fields[ 'roistat' ],
					'values' => array(
						array(
							'value' => $data[ 'roistat' ]
						)
					)
				)

      )
);

# Теперь подготовим данные, необходимые для запроса к серверу.
$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';
$curl=curl_init(); # Сохраняем дескриптор сеанса cURL.
# Устанавливаем необходимые опции для сеанса cURL.
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($leads));
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);

$out=curl_exec($curl); # Инициируем запрос к API и сохраняем ответ в переменную.
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
CheckCurlResponse($code);

/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$Response = json_decode( $out, true );
$Response = $Response['response']['leads']['add'];

#Получим id созданной сделки
foreach ( $Response as $v ) {
	if( is_array( $v ) ) {
		$sdelka_new_add_id =  $v['id'];
	}
	return $sdelka_new_add_id;
}

?>
