<?php
$contacts['request']['contacts']['add'] = array(
    array(

        #Имя контакта
        'name' => $data['name'],

        #Ответстенный
        'responsible_user_id' => $task_id_name['Виталий Воротягин'],

        #Список с айдишниками сделок контакта
        'linked_leads_id' => array(
            $sdelka_new_add_id
        ),

        #Кастомные поля
        'custom_fields' => array(

            # Дополнительное поле 'Город'
            array(
                'id' => $custom_fields_contact['Город'],
                'values' => array(
                    array(
                        'value' => $data['geo_location']
                    )
                )
            ),
            // email
            array(
                'id' => $custom_fields_contact['Email'],
                'values' => array(
                    array(
                        'value' => $data['email'],
                        'enum' => 'OTHER'
                    )
                )
            ),
            // Телефон
            array(
                'id' => $custom_fields_contact['Телефон'],
                'values' => array(
                    array(
                        'value' => $data['phone'],
                        'enum' => 'OTHER'
                    )
                )
            ),

        )

    ) #array END
);

#Формируем ссылку для запроса
$link = 'https://' . $subdomain . '.amocrm.ru/private/api/v2/json/contacts/set';

$curl = curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($contacts));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

$out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

CheckCurlResponse($code);

/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$Response = json_decode($out, true);
$Response = $Response['response']['contacts']['add'];

$output = 'ID добавленных контактов:' . PHP_EOL;
foreach ($Response as $v)
    if (is_array($v))
        $output .= $v['id'] . PHP_EOL;
return $output;
?>
