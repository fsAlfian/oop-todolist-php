<?php

namespace View {
    use Service\TodoListService;
    use Helper\InputHelper;
    class TodolistView {
        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService) {
            $this->todoListService = $todoListService;
        }
        function showTodolist() : void {
            while(true) {
                $this->todoListService->showTodolist();
                echo '"Menu"' . PHP_EOL;
                echo "1. Add Todo" . PHP_EOL;
                echo "2. Remove Todo" . PHP_EOL;
                echo "3. Exit" . PHP_EOL;
            
                $choice = InputHelper::input("Input your choice");

                if ($choice == "1") {
                    $this->addTodolist();
                } else if ($choice == "2") {
                    $this->removeTodolist();
                } else if ($choice == "3") {
                    // exit
                    break;
                } else {
                    echo "Wrong choice" . PHP_EOL;
                }
            }
        }

        function addTodolist() : void {
             echo  'ADD TODO LIST' . PHP_EOL;
            $todo = InputHelper::input("Input your todo");
            if ($todo == 'x') {
                echo 'Cancel add todo' . PHP_EOL;
            } else {
                $this->todoListService->addTodolist($todo);
            }
        }

        function removeTodolist() : void {
            echo "REMOVE TODO LIST" . PHP_EOL;
            $number = InputHelper::input("Input todo number");
            $success = $this->todoListService->removeTodoList($number);
            if ($success) {
                echo "Success remove todo list" . PHP_EOL;
            } else {
                echo "Failed remove todo list" . PHP_EOL;
            }
        }
    }
}