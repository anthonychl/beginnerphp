<?php

if(isset($_POST['name'])){
    $name = $_POST['name'];
    if(!empty($name)){
        $handle = fopen('names.txt','a');
        fwrite($handle,"\n".$name);
        fclose($handle);
    }else{
        echo 'enter a name';
    }
}


?>

<form action="file.php" method="POST">
    Name :<br>
    <input type="text" name="name"><br><br>
    <input type="submit" value="SUBMIT" />
</form>