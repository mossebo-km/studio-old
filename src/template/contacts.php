<?
if (array_key_exists('roomSpace', $_POST)) {
    $to = 'averinuveren@yandex.ru';
    $subject = 'Заполнена контактная форма с ' . $_SERVER['HTTP_REFERER'];
    $subject = "=?utf-8?b?" . base64_encode($subject) . "?=";
    $message = "Площадь помещения: " . $_POST['roomSpace'] . "\nТип помещения: " . $_POST['roomType'] . "\nТелефон: " . $_POST['phoneNumber'] . "\nСтраницы заполнения формы: " . $_POST['urlPage'];
    $headers = 'Content-type: text/plain; charset="utf-8"';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: " . date('D, d M Y h:i:s O') . "\r\n";
    mail($to, $subject, $message, $headers);
} elseif (array_key_exists('emailForm', $_POST)) {
    $file = 'emails.txt';
    // Открываем файл для получения существующего содержимого
    $current = file_get_contents($file);
    // Добавляем нового человека в файл
    $current .= $_POST['emailForm'] . "\n";
    // Пишем содержимое обратно в файл
    file_put_contents($file, $current);
}
?>
