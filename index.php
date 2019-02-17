<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);


require_once('functions.php');
require_once('data.php');

$page_content = include_template('index.php', ['task_list' => $task_list]);
$layout_content = include_template('layout.php',[
	'content' => $page_content,
	'categories' => $categories,
	'title' => 'Дела в порядке'
]);

print($layout_content);



?>
