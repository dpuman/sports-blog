<?php

namespace App\classes;
use App\classes\Database;

class Comment
{
    public $name,$blockId,$email,$comment,$sql,$database;

    public function __construct($post)
    {
        $this->database = new Database();
        $this->name= $post['name'];
        $this->email=$post['email'];
        $this->comment=$post['comment'];
        $this->blockId = $post['block_id'];
    }

    public function makeComment(){
        echo $this->name.$this->email.$this->comment.$this->blockId;

        $this->sql = "INSERT INTO comments VALUES(default,'$this->name','$this->email','$this->comment','$this->blockId') ";
        mysqli_query($this->database->dbConnect(),$this->sql);

        header('location:action.php?page=home');
    }


}