<?php
// __DIR__ = adalah buat manggil letak di rektori di simpan
require_once __DIR__."/Model/TodoList.php";
require_once __DIR__."/BusinessLogic/ShowTodoList.php";
require_once __DIR__."/BusinessLogic/AddTodoList.php";
require_once __DIR__."/BusinessLogic/RemoveTodoList.php";
require_once __DIR__."/View/ViewShowTodoList.php";
require_once __DIR__."/View/ViewAddTodoList.php";
require_once __DIR__."/View/ViewRemoveTodoList.php";

echo "Aplikasi TodoList" . PHP_EOL;

viewShowTodoList();