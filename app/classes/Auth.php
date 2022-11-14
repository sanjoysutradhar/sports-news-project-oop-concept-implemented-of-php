<?php


namespace App\classes;
use App\classes\Database;

class Auth
{
    private $id,$fName,$lName,$phone,$image,$email,$password;
    private $imageName,$directory,$tmpDirectory;
    private $sql,$database,$queryResult,$user=[],$data=[];
    private $getUserByEmail;

    public function __construct($post=null,$files=null)
    {
        if(isset($post['email'])){
            $this->email=$post['email'];

            if(isset($post['password'])){
                $this->password=md5($post['password']);
            }
            if(isset($post['fName'])) {
                $this->fName = $post['fName'];
                $this->lName = $post['lName'];
                $this->phone = $post['phone'];
            }
            if(isset($post['id'])){
                $this->id=$post['id'];
            }
            if(isset($files['image']['name'])){
                $this->imageName=$files['image']['name'];
                $this->directory='assets/images/user/';
                $this->tmpDirectory=$files['image']['tmp_name'];
            }
        }
        $this->database = new Database();
    }
    public function getImageUrl(){
        move_uploaded_file($this->tmpDirectory,$this->directory.$this->imageName);
        return $this->directory.$this->imageName;
    }
    public function newUser()
    {
        $this->getUserByEmail = $this->getUserByEmail($this->email);
        if (isset($this->getUserByEmail['email'])) {
            return "This Email is exist!";
        }else {
            $this->image = $this->getImageUrl();
            $this->sql = "INSERT INTO `users`(`fName`,`lName`,`phone`,`image`,`email`,`password`) VALUES ('$this->fName','$this->lName','$this->phone','$this->image','$this->email','$this->password')";
            mysqli_query($this->database->dbConnect(), $this->sql);
            return "Successfully complete your Registration. You can SignIn now";
        }
    }
    public function getUserByEmail($email){
        $this->sql= "SELECT * FROM users WHERE email = '$email'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        $this->user=mysqli_fetch_assoc($this->queryResult);
        return $this->user;
    }
    public function getUserById($id){
        $this->sql= "SELECT * FROM users WHERE id = $id";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        $this->user=mysqli_fetch_assoc($this->queryResult);
//        echo '<pre>';
//        print_r($id);
//        exit();
        return $this->user;
    }
    public function login(){
        $this->sql="SELECT * FROM `users` WHERE email='$this->email' AND password='$this->password'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        $this->user=mysqli_fetch_assoc($this->queryResult);
        if($this->user){
            $_SESSION['id']=$this->user['id'];
            $_SESSION['fName']=$this->user['fName'];
            $_SESSION['lName']=$this->user['lName'];
            $_SESSION['image']=$this->user['image'];

            return $this->getUserById($this->user['id']);
        }else{
            return "Your Credential Is Wrong!";
        }
    }
    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['fName']);
        unset($_SESSION['lName']);
        unset($_SESSION['image']);
        header('Location:action.php?page=home');

    }
    public function updateAuthByID(){
        if($this->imageName){
            $this->image=$this->getImageUrl();
        }else{
            $this->user=$this->getUserById($this->id);
            $this->image=$this->user['image'];
        }
        $this->sql="UPDATE users SET fName='$this->fName',lName='$this->lName',phone='$this->phone',image='$this->image' WHERE id='$this->id'";
        mysqli_query($this->database->dbConnect(),$this->sql);
        return $this->getUserById($this->id);

    }


}