<?php
function CheckCurlResponse($code)
{
    $code = (int)$code;
    $errors = array(
        301 => 'Moved permanently',
        400 => 'Bad request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not found',
        500 => 'Internal server error',
        502 => 'Bad gateway',
        503 => 'Service unavailable'
    );
    try {
        #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
        if ($code != 200 && $code != 204)
            throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error', $code);
    } catch (Exception $E) {
        die('Ошибка: ' . $E->getMessage() . PHP_EOL . 'Код ошибки: ' . $E->getCode());
    }
}


$data_val = array(
    // Имя
    'name' => isset($_POST['name']) ? $_POST['name'] : '',
    // Email
    'email' => isset($_POST['email']) ? $_POST['email'] : '',
    // Телефон
    'phone' => isset($_POST['phone']) ? $_POST['phone'] : '',
    // Сообщение
    'message' => isset($_POST['message']) ? $_POST['message'] : '',
    // URL страницы
    'page_url' => isset($_POST['urlPage']) ? $_POST['urlPage'] : 'Ссылка не передана',
    // Геолокация
    'geo_location' => isset($_POST['geoLocation']) && $_POST['geoLocation'] !== '' ? $_POST['geoLocation'] : 'Город не определен',
    // Имя формы
    'page_place' => isset($_POST['pagePlace']) ? $_POST['pagePlace'] : '',
    // Татунашвили тег
    'tatunashvili_tag' => isset($_POST['tatunashviliTag']) && $_POST['tatunashviliTag'] !== 'undefined' ? $_POST['tatunashviliTag'] : '',
    // roistat
    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,

    // utm
    'utm_source' => isset($_COOKIE['utm_source']) ? $_COOKIE['utm_source'] : '',
    'utm_medium' => isset($_COOKIE['utm_medium']) ? $_COOKIE['utm_medium'] : '',
    'utm_campaign' => isset($_COOKIE['utm_campaign']) ? $_COOKIE['utm_campaign'] : '',
    'utm_content' => isset($_COOKIE['utm_content']) ? $_COOKIE['utm_content'] : '',
    'utm_term' => isset($_COOKIE['utm_term']) ? $_COOKIE['utm_term'] : ''
);

if ($_POST['formId'] == 1) {
    $data_config = array(
        'form_id' => 1,
        'pipeline_id' => 190857,
        'status_id' => 11769034,
        'responsible_user_id' => 'Иванов Владимир',
        'mail_to' => 'mossebo@mail.ru',
        'subject' => 'Заявка со страницы "Франшиза'
    );
} elseif ($_POST['formId'] == 2) {
    $data_config = array(
        'form_id' => 2,
        'pipeline_id' => 212412,
        'status_id' => 11360994,
        'responsible_user_id' => 'Дарья Соколовская',
        'mail_to' => 'mossebo@mail.ru',
        'subject' => 'Заявка со страницы ' . $data_val['page_url']
    );
} elseif ($_POST['formId'] == 3) {
    $data_config = array(
        'form_id' => 3,
        // 'pipeline_id' => 190857,
        // 'status_id' => 11769034,
        // 'responsible_user_id' => 'Иванов Владимир',
        'mail_to' => 'hr@mossebo.ru',
        'subject' => 'Заявка со страницы ' . $data_val['page_url']
    );
} elseif ($_POST['formId'] == 4) {
    $data_config = array(
        'form_id' => 4,
        // 'pipeline_id' => 190857,
        // 'status_id' => 11769034,
        // 'responsible_user_id' => 'Иванов Владимир',
        'mail_to' => 'product@mossebo.market',
        'subject' => 'Зявка стать поставщиком'
    );
} elseif ($_POST['formId'] == 5) {
    $data_config = array(
        'form_id' => 5,
        // 'pipeline_id' => 190857,
        // 'status_id' => 11769034,
        // 'responsible_user_id' => 'Иванов Владимир',
        'mail_to' => 'marketing@mossebo.ru',
        'subject' => 'Зявка со страницы продакшен на маркетинг-кит'
    );
} elseif ($_POST['formId'] == 6) {
    $data_config = array(
        'form_id' => 6,
        // 'pipeline_id' => 190857,
        // 'status_id' => 11769034,
        // 'responsible_user_id' => 'Иванов Владимир',
        'mail_to' => 'yuri@mossebo.ru',
        'subject' => 'Зявка со страницы Прорабы'
    );
}

$data = $data_val + $data_config;


?>
