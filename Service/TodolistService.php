<?php

namespace Service {

    interface TodolistService {
        function showTodolist();
        function addTodolist(string $todo);
        function removeTodolist(int $number);
    }

}