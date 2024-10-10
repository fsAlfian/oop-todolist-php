<?php

namespace Repository{

    use Entity\Todolist;
    interface TodolistRepository{
        function save (Todolist $todolist) : void;
        function remove (Todolist $todolist) : void;
        function findAll() : array;
    }

    class TodolistRepositoryImpl implements TodolistRepository{

        public array $todoList = array();
        public function save (Todolist $todoList) : void{
        }

        public function remove (Todolist $todoList) : void{
        }

         public function findAll() : array{
            return  $this->todoList;
        }
    }
}