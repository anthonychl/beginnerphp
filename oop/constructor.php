<?php

class Example {

    public function __construct($something){
        $this->SaySomething($something);
    }
    /*
    public function __construct($something = 'default text'){
        $this->SaySomething($something);
    }
    */

    public function SaySomething($something){
        echo $something;
    }
}

$example = new Example('some text');
//$example2 = new Example();

?>
