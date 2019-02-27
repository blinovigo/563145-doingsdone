INSERT INTO project SET name = 'Входяшие', user_id = '1';
INSERT INTO project SET name = 'Учеба', user_id = '1';
INSERT INTO project SET name = 'Работа', user_id = '1';
INSERT INTO project SET name = 'Домашние дела', user_id = '1';
INSERT INTO project SET name = 'Авто', user_id = '1';
INSERT INTO project SET name = 'Входяшие', user_id = '2';

INSERT INTO user SET email = 'list@mail.ru', name = 'One_user';
INSERT INTO user SET email = 'list@mail.ru', name = 'Two_user';

INSERT INTO task SET name = 'Собеседование в IT компании', term = '01.12.2019', project_id = '3'; 
INSERT INTO task SET name = 'Выполнить тестовое задание', term = '25.12.2019', project_id = '3';
INSERT INTO task SET name = 'Сделать задание первого раздела', term = '21.12.2019', project_id = '2';
INSERT INTO task SET name = 'Встреча с другом', term = '22.12.2019', project_id = '1';
INSERT INTO task SET name = 'Купить корм для кота', project_id = '4';
INSERT INTO task SET name = 'Заказать пиццу', project_id = '4';


SELECT id, name FROM project WHERE user_id = '2';
SELECT id, name FROM task WHERE project_id = '3';
INSERT INTO task SET data_finish = '22.12.2019' WHERE name = 'Встреча с другом';
UPDATE task SET name = 'Новое название' WHERE id = '1';