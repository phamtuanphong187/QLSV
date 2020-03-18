<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/CodeIgniter/qlsv/index.php/StudentController/create">Tao</a>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
        </tr>
        <?php
        foreach ($students as $key => $student) { ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><a href="/CodeIgniter/qlsv/index.php/StudentController/edit?id=<?php echo $student['id']?>">Edit</a></td>
                <td>
                    <form action="delete" method="post">
                        <input type="text" value="<?php echo $student['id']?>" name="id" hidden>
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>