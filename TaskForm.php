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
</main>
</body>
</html>