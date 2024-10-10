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


function testViewAddTodolist() : void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database"); 
    $todolistService->addTodoList("Belajar PHP Framework");

    $todolistView->addTodolist();

    $todolistView->showTodolist();
}

function testViewRemoveTodolist() : void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database"); 
    $todolistService->addTodoList("Belajar PHP Framework");
    $todolistView->removeTodolist();
    $todolistView->showTodolist();

}

testViewRemoveTodolist();

// testViewAddTodolist();

// testViewShowTodolist();