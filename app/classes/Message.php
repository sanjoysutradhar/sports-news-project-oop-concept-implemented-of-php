<?php


namespace App\classes;
use App\classes\Database;

class Message
{
    private $name,$email,$message;
    private $sql,$database,$queryResult,$row,$data=[];

    public function __construct($post=null)
    {
        if(isset($post['email'])){
            $this->name=$post['name'];
            $this->email=$post['email'];
            $this->message=$post['message'];
        }
        $this->database=new Database();
    }

    public function newMessage(){
        $this->sql="INSERT INTO `messages` (`name`,`email`,`message`) VALUES ('$this->name','$this->email','$this->message')";
        mysqli_query($this->database->dbConnect(), $this->sql);
        return "Thanks For Your Message !";
    }
    public function getAllMessage(){
        $this->sql="SELECT * FROM messages";
        $this->queryResult=mysqli_query($this->database->dbConnect(), $this->sql);
        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data, $this->row);
        }
        return $this->data;
    }

}