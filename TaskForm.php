<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To do List</title>
</head>
<body>

<h1>Add new task</h1>
<form action="MainPage.php" method="post">
    <fieldset>    
        <legend>New task:</legend>
            Name:<br>
            <input type="text" name="name" placeholder="Name of the task"><br><br>
            Description:<br>
            <textarea rows="5" cols="40" name="description" placeholder="More information"></textarea><br><br>
            <input type="submit" value="Add">
    </fieldset>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Magda
 * Date: 2017-10-22
 * Time: 21:13
 */
?>
</body>
</html>