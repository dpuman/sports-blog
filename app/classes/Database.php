<?php

namespace App\classes;

class Database
{
    private $hostName,$databaseName,$userName,$password,$link;

    public function __construct()
    {
        $this->hostName="localhost";
        $this->userName="root";
        $this->password="dipankar";
        $this->databaseName="sports-blog";
    }

    public function dbConnect(){
        $this->link=mysqli_connect($this->hostName,$this->userName,$this->password,$this->databaseName);

        return $this->link;
    }

}