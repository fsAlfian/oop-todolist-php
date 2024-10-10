<?php

namespace Service {
    use Repository\TodolistRepository;
    use Entity\Todolist;

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
                echo "$number.". $value->getTodo() . PHP_EOL;
            }
        }

        public function addTodolist(string $todo) : void {
            $todoList = new Todolist($todo);
            $this->todoListRepository->save($todoList);
            echo "Added Todolist: $todo" . PHP_EOL;
        }

        public function removeTodolist(int $number) : void {
           if ($this->todoListRepository->remove($number)) {
               echo "Removed Todolist" . PHP_EOL;
           } else {
               echo "Todolist not found" . PHP_EOL;
           }
        }
    }

}