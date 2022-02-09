<?php

require_once __DIR__."/../View/ViewShowTodoList.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";

addTodoList("Idad");
addTodoList("Rusdiana");
addTodoList("Ganteung");
addTodoList("Baik");
addTodoList("Rajin");
addTodoList("Kaya Raya");

viewShowTodoList();