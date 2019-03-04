
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
		<?php foreach($task as $key => $val):
			if($val['date_finish'] != TRUE or $show_complete_tasks != 0):?>
		<tr class="tasks__item task <?php 
			echo($val['date_finish'] == TRUE ? "task--completed": " ");
			timer_up_to_24_hours($val['term']); 
			?>   ">
			<td class="task__select">
				<label class="checkbox task__checkbox">
					<input class="checkbox__input visually-hidden task__checkbox " type="checkbox" value="1" <?php echo($val['date_finish'] == TRUE ? "checked":" ");?> >
					<span class="checkbox__text"><?=htmlspecialchars($val['name']);?></span>
				</label>
			</td>

			<td class="task__file">
				<a class="download-link" href="#">Home.psd</a>
			</td>

			<td class="task__date"></td>
		</tr>
		<?php 
			endif;
		endforeach; ?>
	</table>
</main>