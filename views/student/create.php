<a href="/CodeIgniter/qlsv/index.php/StudentController/list">Quay lai</a>
<form action="store" method="POST">
    name<br>
    <input type="text" name='name' >
    <br>year_birth<br>
    <input type="text" name='year_birth'>
    <br>class<br>
    <select name="class_id" id="">
        <?php  foreach($classes as $class) {?>
        <option value="<?php echo $class['id']; ?>"><?php echo $class['name']; ?></option>
        <?php } ?>
    </select>
    <input type="submit">
</form>