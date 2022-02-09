<?php

require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";
require_once __DIR__."/../BusinessLogic/ShowTodoList.php";
require_once __DIR__."/../BusinessLogic/RemoveTodoList.php";

addTodoList("Idad");
addTodoList("Rusdiana");
addTodoList("Ganteung");
addTodoList("Budi");
addTodoList("Joko");
addTodoList("Bagus");

showTodoList();

RemoveTodoList(3);
showTodoList();

$success = removeTodoList(6);
var_dump($success);

showTodoList();
