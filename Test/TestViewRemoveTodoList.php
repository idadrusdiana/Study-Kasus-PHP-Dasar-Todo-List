<?php

require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../View/ViewRemoveTodoList.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";
require_once __DIR__."/../BusinessLogic/ShowTodoList.php";

addTodoList("Idad");
addTodoList("Rusdiana");
addTodoList("Ganteung");
addTodoList("Baik Hati");
addTodoList("Rajin");
addTodoList("Cerdas");

showTodoList();

viewRemoveTodoList();

showTodoList();