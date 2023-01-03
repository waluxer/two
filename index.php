<?php

# подлючаем библиотеки
require __DIR__."/src/phpQuery/phpQuery/phpQuery.php";
require __DIR__."/vendor/autoload.php";

// $cookie = "/cookie.txt";

// # забираем фронтенд файлы
// $html = "<b></b>";
// $style = "color: #FFFFFF";


# инициализируем CURL и забираем HTML от (Yandex погода) файл в обход системы безопасности
$ch = curl_init("https://texnomart.uz");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");

$html = curl_exec($ch);
curl_close($ch);

$cookie = file_get_contents("cookie.txt");
echo $cookie;
# забираем нужные элементы с HTML при помощи phpQuery
// phpQuery::newDocuemnt($htmlYandex);
// 
// $title = pq('title') -> html();
// 
// phpQuery::unloadDocuments();


# подключем нужные элементы к нашей INDEX.HTML
// $html += $title;


# выводим фронтенд файлы

?>