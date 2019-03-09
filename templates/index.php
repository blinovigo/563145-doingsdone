
<main class="content__main">
	<h2 class="content__main-heading">Список задач</h2>

	<form class="search-form" action="index.php" method="post">
		<input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

		<input class="search-form__submit" type="submit" name="" value="Искать">
	</form>

	<div class="tasks-controls">
		<nav class="tasks-switch">
			<a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
			<a href="/" class="tasks-switch__item">Повестка дня</a>
			<a href="/" class="tasks-switch__item">Завтра</a>
			<a href="/" class="tasks-switch__item">Просроченные</a>
		</nav>

		<label class="checkbox">
			<input class="checkbox__input visually-hidden show_completed" type="checkbox" <?php echo($show_complete_tasks == 1 ? "checked":" ")?>>
			<span class="checkbox__text">Показывать выполненные</span>
		</label>
	</div>

	<table class="tasks">
		<?php 
			$count_task = 0; // cчетчик выведенных задач для выбранной категории
			foreach($task as $key => $val):  //Вывод всего списка задач
				if ($val['project_id'] == $_GET['project_id'] or !isset($_GET['project_id'])): $count_task++; // показ задач нужной категории
			if (empty($val['date_finish']) or $show_complete_tasks != 0): //Показ завершенных задач  ?> 
		<tr class="tasks__item task <?php 
			echo(!empty($val['date_finish']) ? "task--completed": " ");
			timer_up_to_24_hours($val['term']); 
			?>   ">
			<td class="task__select">
				<label class="checkbox task__checkbox">
					<input class="checkbox__input visually-hidden task__checkbox " type="checkbox" value="1" <?php echo(!empty($val['date_finish']) ? "checked":" ");?> >
					<span class="checkbox__text"><?=htmlspecialchars($val['name']);?></span>
				</label>
			</td>

			<td class="task__file">
				<a class="download-link" href="#">Home.psd</a>
			</td>

			<td class="task__date"></td>
		</tr>
		<?php 
			endif; // показ завершенных задач
			endif; //показ задач нужной категории
		endforeach; 
		
		echo($count_task == 0 ? "Ошибка 404":""); // Вывод ошибки если в выбранной категории нет задач?>
		
	</table>
</main>