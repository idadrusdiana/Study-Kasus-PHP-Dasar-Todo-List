<?php

require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";

addTodoList("Idad");
addTodoList("Rusdiana");
addTodoList("Ganteung");

var_dump($todoList);
