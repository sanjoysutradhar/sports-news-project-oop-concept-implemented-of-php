<?php


namespace App\classes;
use App\classes\Database;

class Comment
{
    private $id,$user_id,$comment,$product_id;
    private $queryResult,$data=[],$row;
    public function __construct($post=null)
    {
        if(isset($post['user_id'])) {
            $this->user_id = $post['user_id'];
            $this->comment = $post['comment'];
            $this->product_id = $post['product_id'];
        }
        if(isset($post['id'])){
            $this->id=$post['id'];
        }
        $this->database=new Database();
    }
    public function newComment(){
        $this->sql='INSERT INTO `comments`(`user_id`,`comment`,`product_id`) VALUES("'.$this->user_id.'","'.$this->comment.'","'.$this->product_id.'")';
        mysqli_query($this->database->dbConnect(),$this->sql);
    }
    public function getAllCommentByProduct($proId){

        $this->sql = "SELECT * FROM `comments` WHERE product_id=$proId";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data, $this->row);
        }
//        echo '<pre>';
//        print_r($this->data);
//        exit();
        return $this->data;
    }
    public function commentDelete($id){
        $this->sql="DELETE FROM comments WHERE id= '$id'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        return ' ';
    }
}