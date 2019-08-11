<?php

if(isset($_POST['name'])){
    $name = $_POST['name'];
    if(!empty($name)){
        $handle = fopen('names.txt','a');
        fwrite($handle,"\n".$name);
        fclose($handle);

        echo 'Current names in file: ' ;
        $read_in = file('names.txt');  //array variable
        $read_in_count = count($read_in);
        $count = 1;
        foreach($read_in as $n){
            echo trim($n);  //trim() para quitar espacios innecesarios
            if($count < $read_in_count)
            echo ', ';
            $count++;
        }
    }else{
        echo 'enter a name';
    }
}


?>

<form action="file2.php" method="POST">
    Name :<br>
    <input type="text" name="name"><br><br>
    <input type="submit" value="SUBMIT" />
</form>