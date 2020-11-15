<?php namespace App\Controllers;

class Helloworld extends BaseController {

    public function index() 
    {
        // echo $this->name;
        // echo $name ."<br>";
        // echo $npm;
        // echo "Hello Mutiara";
        $query = $this->db->query("SELECT * FROM users");
        $row = $query->getRow();
        dd($row);
    }

    public function show()
    {
        echo "Mutiara Widdi";
        echo "1817051047";
    }
}