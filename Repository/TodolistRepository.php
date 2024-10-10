<?php

namespace Repository{
    use Entity\Todolist;
    
    interface TodolistRepository{
        function save (Todolist $todolist) : void;
        function remove (int $number) : bool;
        function findAll() : array;
    }

    class TodolistRepositoryImpl implements TodolistRepository{

        public array $todoList = array();

        public function save (Todolist $todoList) : void{
            $number = sizeof($this->todoList) + 1;
            $this->todoList[$number] = $todoList;
        }

        public function remove (int $number) : bool{
             if (sizeof($this->todoList) < $number) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todoList); $i++) {
                $this->todoList[$i] = $this->todoList[$i + 1];
            }
            unset($this->todoList[sizeof($this->todoList)]);
            
            return true;
        }

         public function findAll() : array{
            return  $this->todoList;
        }
    }
}