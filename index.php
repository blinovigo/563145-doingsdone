<?php

$con = mysqli_connect("localhost", "root", "","doingsdone");

// Проверка подключения БД
if ($con == false) {
   print("Ошибка подключения: ". mysqli_connect_error());
}
else {
   print("Соединение установлено");
}
// Установка кодировки
mysqli_set_charset($con, "utf8");


require_once('functions.php');
require_once('data.php');

$page_content = include_template('index.php', ['task_list' => $task_list]);
$layout_content = include_template('layout.php',[
	'content' => $page_content,
	'categories' => $categories,
	'title' => 'Дела в порядке',
	'task_list' => $task_list
]);

print($layout_content);



?>
