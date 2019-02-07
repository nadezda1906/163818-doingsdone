<?php

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

//вывод ошибок
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);

$categories = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];

$doings = [
    [
        'task' => 'Собеседование в IT компании',
        'date' => '01.12.2019',
        'category' => 'Работа',
        'status' => false
    ],
    [
        'task' => 'Выполнить тестовое задание',
        'date' => '25.12.2019',
        'category' => 'Работа',
        'status' => false
    ],
    [
        'task' => 'Сделать задание первого раздела',
        'date' => '21.12.2019',
        'category' => 'Учеба',
        'status' => true
    ],
    [
        'task' => 'Встреча в другом',
        'date' => '22.12.2019',
        'category' => 'Входящие',
        'status' => false
    ],
    [
        'task' => 'Купить корм для кота',
        'date' => 'Нет',
        'category' => 'Домашние дела',
        'status' => false
    ],
    [
        'task' => 'Заказать пиццу',
        'date' => 'Нет',
        'category' => 'Домашние дела',
        'status' => false
    ]
];

require_once('functions.php');
$index_content = include_template('index.php', ['doings' => $doings, 'show_complete_tasks' => $show_complete_tasks]);
$layout_content = include_template('layout.php', ['title_name' => 'doingsdone', 'doings' => $doings, 'content' => $index_content, 'categories' => $categories]);

print($layout_content);
?>
