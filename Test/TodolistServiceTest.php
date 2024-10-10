<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void{
    $todoListRepository = new TodolistRepositoryImpl();
    $todoListRepository->todoList[] = "Belajar PHP Dasar";
    $todoListRepository->todoList[] = "Belajar PHP OOP";
    $todoListRepository->todoList[] = "Belajar PHP Database";
    $todoListRepository->todoList[] = "Belajar PHP Framework";

    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListService->showTodolist();
}

testShowTodolist();