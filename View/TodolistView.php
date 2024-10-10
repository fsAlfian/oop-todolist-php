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
            
        }

        function removeTodolist() : void {
            
        }
    }
}