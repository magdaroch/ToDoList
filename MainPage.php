<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To do List</title>
</head>
<body>

<h1>To do list</h1>
<form action="TaskForm.php" method="get">
      <button type="submit">Add New Task</button>
</form>
<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Magda
 * Date: 2017-10-22
 * Time: 21:13
 */
require_once "Task.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = '';
    $description = '';
    if(isset($_POST['name']) === TRUE && strlen(trim($_POST['name'])) > 0){
        $name = trim($_POST['name']);
    }else{
        echo ("Name of task not found");
    }
    if(isset($_POST['description']) === TRUE && strlen(trim($_POST['description'])) > 0){
        $description = trim($_POST['description']);
    }else{
        echo ("Description of task not found");
    }
    if($name != "" && $description != ""){
        $task1 = new Task;
        $task1->setName($name)->setDescription($description);
        echo ("Object created<br>");
        $_SESSION['task1'] = serialize($task1);
        echo "Session added<br>";
        }else{
        echo ("Empty task - not created");
    }
}else{
    echo ("No information found");
}
?>
</body>
</html>
