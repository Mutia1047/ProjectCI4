<?php namespace App\Controllers;

class Helloworld extends BaseController {

    public function index($name, $npm) 
    {
        // echo $this->name;
        echo $name ."<br>";
        echo $npm;
        // echo "Hello Mutiara";
    }

    public function show()
    {
        echo "Mutiara Widdi";
        echo "1817051047";
    }
}