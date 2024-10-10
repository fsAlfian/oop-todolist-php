<?php

require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ .'/Helper/InputHelper.php';
require_once __DIR__ . '/View/TodolistView.php';
require_once __DIR__ . '/Service/TodolistService.php';

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use View\TodolistView;
use Service\TodolistServiceImpl;
use Helper\InputHelper;

echo "Welcome To Todolist App" . PHP_EOL;

$todolistRepository = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView -> showTodolist();