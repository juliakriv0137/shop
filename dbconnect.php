<?php
    // Указываем кодировку
    header('Content-Type: text/html; charset=utf-8');

    $server = "localhost"; /* имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost */
    $username = "root"; /* Имя пользователя БД */
    $password = ""; /* Пароль пользователя БД, если у пользователя нет пароля то, оставляем пустым */
    $database = "julia"; /* Имя базы данных, которую создали */
 
    // Подключение к базе данных через MySQLi
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Проверяем, успешность соединения. 
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }

    // Устанавливаем кодировку подключения
	




    //Для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
    $address_site = "http://my_site.ru/";

    //Почтовый адрес администратора сайта
    $email_admin = "juliakriv0135@gmail.com";
?>



