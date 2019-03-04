INSERT INTO project (
	name,
	user_id,
	project_id
	)
VALUES (
	'Входящие',
	'1',
	'1'
),
(
	'Учеба',
	'1',
	'2'
),
(
	'Работа',
	'1',
	'3'
),
(
	'Домашние дела',
	'1',
	'4'
),
(
	'Авто',
	'1',
	'5'
),
(
	'Входящие',
	'2',
	'1'
);

INSERT INTO user (
	email,
	name
)
VALUES (
	'list@mail.ru',
	'One_user'
),
(
	'list@mail.ru',
	'Two_user'
);

INSERT INTO task (
	name,
	term,
	project_id
)
VALUES (
	'Собеседование в IT компании',
	'01.12.2019',
	'3'
),
(
	'Выполнить тестовое задание',
	'25.12.2019',
	'3'
),
(
	'Сделать задание первого раздела',
	'21.12.2019',
	'2'
),
(
	'Встреча с другом',
	'22.12.2019',
	'1'
);

INSERT INTO task (
	name,
	project_id
)
VALUES(
	'Купить корм для кота',
	'4'
),
(
	'Заказать пиццу',
	'4'
);


SELECT id, name FROM project WHERE user_id = '2';
SELECT id, name FROM task WHERE project_id = '3';
UPDATE task SET data_finish = '22.12.2019' WHERE id = '2';
UPDATE task SET name = 'Новое название' WHERE id = '1';