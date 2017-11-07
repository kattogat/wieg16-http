<form method="post" action="form.php">
    <label>Namn</label><br>
    <input name="name" type="text"><br>  
    <input type="submit" text="Sänd">  
</form>

<?php
    echo $_POST["name"];
?>