<form method="post" action="form.php">
    <label>Namn</label><br>
    <input name="name" type="text"><br>  
    <label>mail</label><br>
    <input type="text" name="mail"><br>
    <label>tel</label><br>
    <input type="number" name="tel"><br>
    <input type="submit" text="Sänd">  
</form>

<?php
    echo $_POST["name"] . "<br>";
    echo $_POST["mail"] . "<br>";
    echo $_POST["tel"] . "<br>";
?>