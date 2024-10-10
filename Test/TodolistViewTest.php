<?php

require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use \Entity\Todolist;
use \View\TodolistView;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;

function testViewShowTodolist() : void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database"); 
    $todolistService->addTodoList("Belajar PHP Framework");

    $todolistView->showTodolist();
}

testViewShowTodolist();