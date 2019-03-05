<?php

require_once('functions.php');
require_once('data.php');

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

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

$user__id = 1;

// Запрос списка проектов
$sql ="SELECT * FROM project WHERE user_id = $user__id ";
$result = mysqli_query($con, $sql);
$project = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Запрос списка задач
$sql ="SELECT * FROM task WHERE user_id = $user__id ";
$result = mysqli_query($con, $sql);
$task = mysqli_fetch_all($result, MYSQLI_ASSOC);



$page_content = include_template('index.php', ['task' => $task, 'show_complete_tasks' => $show_complete_tasks]);
$layout_content = include_template('layout.php',[
	'content' => $page_content,
	'project' => $project,
	'title' => 'Дела в порядке',
	'task' => $task,
]);

print($layout_content);



?>
