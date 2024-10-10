<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use Entity\Todolist;

function testShowTodolist(): void{
    $todoListRepository = new TodolistRepositoryImpl();
    $todoListRepository->todoList[1] = new Todolist("Belajar PHP");
    $todoListRepository->todoList[2] =  new Todolist("Belajar PHP");;
    $todoListRepository->todoList[3] =  new Todolist("Belajar PHP");;
    $todoListRepository->todoList[4] =  new Todolist("Belajar PHP");;

    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListService->showTodolist();
}

function testAddTodolist(): void{
    $todoListRepository = new TodolistRepositoryImpl();
    $todoListService = new TodolistServiceImpl($todoListRepository);
    $todoListService->addTodolist("Belajar PHP OOP");
    $todoListService->addTodolist("Belajar PHP Database");
    $todoListService->addTodolist("Belajar PHP Framework");
    $todoListService->showTodolist();
}

// testShowTodolist();

testAddTodolist();