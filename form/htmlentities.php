<?php

/*
I. has the form been submitted?
II. is it empty?
III. Display back to user
*/

/*
echo $_GET['day'];
echo $_GET['date'];
echo $_GET['year'];
*/

//check if it's been submitted with isset() function
if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){

        $day =  htmlentities($_GET['day']);
        $date = htmlentities($_GET['date']);
        $year = htmlentities($_GET['year']);

    //check if values are empty
    if(empty($day) || empty($date) || empty($year)){
        echo 'Please fill the form and submit again';
    }else{
        //display values

        echo $day.' '.$date.' '.$year.'<br>';
    }
}

?>

<form action="htmlentities.php" method="GET">
    Day:<br><input type="text" name="day" /><br>
    Date:<br><input type="text" name="date" /><br>
    Year:<br><input type="text" name="year" /><br><br>
    <input type="submit" value="Submit" />

</form>