<?php

namespace Service {
    use Repository\TodolistRepository;

    interface TodolistService {
        public function showTodolist();
        public function addTodolist(string $todo);
        public function removeTodolist(int $number);
    }

    class TodolistServiceImpl implements TodolistService {

        private  TodolistRepository $todoListRepository;

        public function __construct(TodolistRepository $todoListRepository) {
            $this->todoListRepository = $todoListRepository;
        }

        public function showTodolist() : void {
            echo "TODOLIST" . PHP_EOL;
            foreach ($this->todoListRepository->findAll() as $number => $value) {
                echo "$number. $value" . PHP_EOL;
            }
        }

        public function addTodolist(string $todo) : void {}

        public function removeTodolist(int $number) : void {}
    }

}