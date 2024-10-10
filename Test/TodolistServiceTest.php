<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void{
    $todoListRepository = new TodolistRepositoryImpl();
    $todoListRepository->todoList[1] = "Belajar PHP Dasar";
    $todoListRepository->todoList[2] = "Belajar PHP OOP";
    $todoListRepository->todoList[3] = "Belajar PHP Database";
    $todoListRepository->todoList[4] = "Belajar PHP Framework";

    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListService->showTodolist();
}

testShowTodolist();