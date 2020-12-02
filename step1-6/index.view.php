<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>My first webpage</title>

    <style>

    header {
        background: #e3e3e3;

        padding: 2em;

        text-align: center;

    }
    </style>

</head>

<body>

    <h1>Task for Today</h1>

    <ul>
        <?php foreach ($task as $heading => $value): ?>

            <li> 
                <strong> <?= ucwords($heading) ?>: </strong> <?= $value ?>
            </li> 


        <?php endforeach; ?>

        <li>
            <strong>Completed : </strong>  <?= $task['completed']? 'Complete' : 'Incomplete' ?>
        </li>
    </ul>

</body>

</html>