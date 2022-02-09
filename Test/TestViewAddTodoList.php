<?php

require_once __DIR__."/../View/ViewAddTodoList.php";
require_once __DIR__."/../BusinessLogic/ShowTodoList.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";

addTodoList("Idad");
addTodoList("Rusdiana");
addTodoList("Ganteung");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();