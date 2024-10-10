<?php

namespace Repository{

    use Entity\Todolist;
    interface TodolistRepository{
        function save (Todolist $todolist) : void;
        function remove (Todolist $todolist) : void;
        function findAll() : array;
    }
}