<?php

namespace App\classes;
use App\classes\Database;

class Blog
{
    private $title,$author,$category,$description,$image,$sql,$database,$queryResult,$row,$data=[],$blogId,$blog=[];
    private $imageName,$imageDirectory,$tempLocation;
    private $cricketBlogs=[],$footballBlogs=[];

    public function __construct($post=null,$files=null)
    {
        $this->database = new Database();

        if(isset($post["title"])){
            $this->title=$post["title"];
            $this->author=$post["author"];
            $this->category=$post["category"];
            $this->description=$post["description"];

            if(isset($post['id'])){
                $this->blogId= $post["id"];
            }
            if($files["image"]["name"]){
            $this->imageName =$files["image"]["name"];
            $this->tempLocation=$files["image"]["tmp_name"];
            $this->imageDirectory="assets/images/blog-images/";
            }

        }
    }

    public function getImageUrl(){
        move_uploaded_file($this->tempLocation,$this->imageDirectory.$this->imageName);

        return $this->imageDirectory.$this->imageName;
    }

    public function newBlog(){
        $this->image = $this->getImageUrl();
        $this->sql = "INSERT INTO blogs (title,author,category,description,image) VALUES ('$this->title','$this->author','$this->category','$this->description','$this->image')";

        mysqli_query($this->database->dbConnect(),$this->sql);


        return "Record Saved Successfully";
    }

    public function getAllBlog(){
        $this->sql = "SELECT * FROM blogs";
        $this->queryResult = mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row = mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data , $this->row);
        }
        return $this->data;
    }

    public function getAllCricketBlogs(){
        $this->sql = "SELECT * FROM blogs WHERE category = 'cricket' ";

        $this->queryResult = mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row = mysqli_fetch_assoc($this->queryResult)){
            array_push($this->cricketBlogs,$this->row);

        }
        return $this->cricketBlogs;
    }

    public function getAllFootBallBlogs(){
        $this->sql = "SELECT * FROM blogs WHERE category = 'football' ";

        $this->queryResult = mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row = mysqli_fetch_assoc($this->queryResult)){
            array_push($this->footballBlogs,$this->row);

        }
        return $this->footballBlogs;
    }

    public function getBlogById($id){
        $this->sql = "SELECT * FROM blogs WHERE id = '$id'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        $this->data=mysqli_fetch_assoc($this->queryResult);

        return $this->data;
    }

    public function updateBlog(){

        if($this->imageName){
            $this->image = $this->getImageUrl();
        }else{
            $this->blog=$this->getBlogById($this->blogId);

            $this->image = $this->blog["image"];
        }

        $this->sql = "UPDATE blogs SET title = '$this->title',author = '$this->author',category = '$this->category', description = '$this->description',image = '$this->image' WHERE id = '$this->blogId'";

        mysqli_query($this->database->dbConnect(),$this->sql);

        header("location:action.php?page=manage-blog");

    }

    public function deleteBlog($id){
        $this->sql= "DELETE FROM blogs WHERE id = '$id'";

        mysqli_query($this->database->dbConnect(),$this->sql);

        header('location:action.php?page=manage-blog');
    }



}