<form action="update" method="POST">
    <input type="text" name='id' value="<?php echo $id?>" hidden>
    NAME<br>
    <input type="text" name='name' value="<?php echo $student->name?>">
   <br> Year_birth<br>
    <input type="text" name='year_birth'  value="<?php echo $student->year_birth?>">
   <br> Class_id<br>
    <input type="text" name='class_id' value="<?php echo $student->class_id?>"><br>
    <input type="submit">
</form>