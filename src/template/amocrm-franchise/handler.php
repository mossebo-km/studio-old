<?php

if ( isset( $_POST['name'] ) ) {

  error_reporting( -1 );
  header('Content-Type: text/html; charset=utf-8');

  $root=__DIR__;

  require $root . '/prepare.php'; #Объявление функций, поля
  require $root . '/mail.php'; #Объявление функций, поля

  if ( ($data[ 'form_id' ] != 3) && ($data[ 'form_id' ] != 4) ) {
    require $root . '/auth.php'; #Авторизация
    require $root . '/account_current.php'; #Получим информацию об аккаунте
    require $root . '/user_list_info.php'; #Получим информацию о пользователях
    require $root . '/leads_statuses_info.php'; #Получим инфомрацию об этапах сделки
    require $root . '/fields_lead_info.php'; #Получим поля сделок
    require $root . '/fields_contact_info.php'; #Получим поля контактов
    require $root . '/lead_add.php'; #Добавление сделки
    require $root . '/tasks_add.php'; #Добавляем задачу и привязываем к сделке
    require $root . '/contact_add.php'; #Добавляем контакт и привязываем сделку
  }

}

/*
Информация:
$sdelka_new_add_id - id новой сделки.
*/

?>
