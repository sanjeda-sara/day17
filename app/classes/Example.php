<?php


namespace App\classes;
class Example
{
    public $i;
    public $j;
    public function index(){
        echo "<br/>increment:<br/>";
        for ($this->i = 50; $this->i < 71; $this->i++ ){
            echo $this->i. "<br/>";
        }
        echo "<br/>decrement:<br/>";
        for ($this->i = 45; $this->i > 22; $this->i-- ){
            echo $this->i. "<br/>";
        }
        echo "<br/>while loop: <br/>";
        $this->i = 10;
        while ($this->i < 20){
            echo $this->i;
            $this->i++;
            echo "<br/>";
        }
        echo "<br/>do-while loop: <br/>";
        $this->k = 10;
        do{
            echo $this->k;
            $this->k++;
            echo "<br/>";
        }
        while($this->k < 20);
    }
}