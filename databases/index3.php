<?php

require 'connect.inc.php';
?>

<form action="index3.php" method="GET">
    Choose a food type:<br>
    <select name="uh">
        <option value="u">Unhealthy</option>
        <option value="h">Healthy</option>
    </select><br>
    <input type="submit" />

</form>

<?php

if(isset($_GET['uh']) && !empty($_GET['uh'])){

    $food_type = strtolower($_GET['uh']);
    //this IF statement is to protect against sql injection
    if($food_type=='h' || $food_type=='u'){

        $query = "SELECT food, calories FROM food WHERE healthy_unhealthy = '$food_type' ORDER BY id DESC";
        if($query_run = mysql_query($query)){
            echo 'Query success<br><br>';
            if(mysql_num_rows($query_run)==NULL){
                    echo 'No results for that query';
            }else{
                while($row = mysql_fetch_assoc($query_run)){
                    $food = $row['food'];
                    $calories = $row['calories'];
                    echo $food.' has '.$calories.' calories<br>';
                }
            }
        }else{
            echo 'Query failed<br><br>';
            echo mysql_error();
        }
    }else{
        echo 'Error submitting the form, try again';
        /*
            if there is someone messing around with sql injection we dont
            want to give them any tips in our error messages ;)
        */
    }
}else{
    echo 'Submit the form';
}
?>

