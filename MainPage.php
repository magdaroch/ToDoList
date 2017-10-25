<!doctype html>
<html lang="en">
<head>
    <title>To Do List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<main role="main" class="container">
<h1>To do list</h1>

<form action="TaskForm.php" method="get">
      <button type="submit">Add New Task</button>
</form>
    <div class="row">
        <div class="col-4"></div></div>
<?php
/**
 * Created by PhpStorm.
 * User: Magda
 * Date: 2017-10-22
 * Time: 21:13
 */
session_start();
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
        if(isset($_SESSION['tasks'])){
            array_push($_SESSION['tasks'], serialize($task1));
        }else{
            $_SESSION['tasks'] = array();
            array_push($_SESSION['tasks'], serialize($task1));
        }
    }else{
        echo ("Empty task - not created");
    }
}
if(isset($_SESSION['tasks'])){
    foreach ($_SESSION['tasks'] as $task){
        echo("Task <br>");
        $task = unserialize($task);
        $task->printInfo($task->getName(),$task->getDescription());
        echo("
<form action='MainPage.php' method='get'>
    <input type='submit' name='name' value='" . $task->getName() . "'>
</form>
        ");
    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['name']) === TRUE && isset($_SESSION['tasks']) === TRUE){
        foreach ($_SESSION['tasks'] as $task){
            $task=unserialize($task);
            if($_GET['name'] === $task->getName()){
                unset($_SESSION['tasks'][serialize($task)]);
                $task->finishTask(TRUE);
                $task->printInfo($task->getName(),$task->getDescription());
            }
        }
    }
}
//var_dump($_SESSION['tasks']);

?>
</main>
</body>
</html>
