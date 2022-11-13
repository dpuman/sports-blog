<?php

namespace App\classes;
use App\classes\Database;

class Home
{

    public function index(){

        header("location:action.php?page=home");
    }

}