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
        <li>
            <strong>Title: </strong>  <?= $task['title'] ?>
        </li>
        
        <li>
            <strong>Person Responsible: </strong>  <?= $task['assigned to'] ?>
        </li>        
        
        <li>
            <strong>Deadline: </strong>  <?= $task['due'] ?>
        </li>
        
        <li>
            <strong>Completed: </strong> 
            
            <?php 
            if ($task['completed']) 
                {echo('&#9989');}
            else 
                {echo('&#10062');}  
            ?>
            
        </li>

        <li>
            <strong>Completed: </strong> 
            
            <?php if ($task['completed']) : ?> 

                <span class="icon"> &#9989 <span>

            <?php else : ?>

                <span class="icon"> &#10062 <span>
            
            <?php endif; ?>
                
            
        </li>
    </ul>

</body>

</html>