<?php

namespace Service {
    use Repository\TodolistRepository;

    interface TodolistService {
        function showTodolist();
        function addTodolist(string $todo);
        function removeTodolist(int $number);
    }

    class TodolistServiceImpl implements TodolistService {

        private  TodolistRepository $todoListRepository;

        public function __construct(TodolistRepository $todoListRepository) {
            $this->todoListRepository = $todoListRepository;
        }

        function showTodolist() : void {
            echo "TODOLIST" . PHP_EOL;
            foreach ($this->todoListRepository->findAll() as $number => $value) {
                echo "$number. $value" . PHP_EOL;
            }
        }
    }

}