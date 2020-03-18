<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/CodeIgniter/qlsv/index.php/classController/create">Tao</a>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
        </tr>
        <?php
        foreach ($classes as $key => $class) { ?>
            <tr>
                <td><?php echo $class['id']; ?></td>
                <td><?php echo $class['name']; ?></td>
                <td><a href="/CodeIgniter/qlsv/index.php/ClassController/edit?id=<?php echo $class['id']?>">Edit</a></td>
                <td>
                    <form action="delete" method="post">
                        <input type="text" value="<?php echo $class['id']?>" name="id" hidden>
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>