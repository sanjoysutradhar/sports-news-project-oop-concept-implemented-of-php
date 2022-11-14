<?php


namespace App\classes;
use App\classes\Database;

class Category
{
    private $imageName,$directory,$temDirectory;
    private $id,$name,$image,$description,$status;
    private $database,$sql,$queryResult;
    private $data=[],$row,$category=[];

    public function __construct($post=null,$files=null)
    {
        if(isset($post['name'])){
            $this->name=$post['name'];
            $this->description=$post['description'];
            $this->status=$post['status'];
            if(isset($post['id'])){
                $this->id=$post['id'];
            }
            if($files['image']['name']){
                $this->imageName=$files['image']['name'];
                $this->directory='assets/images/category';
                $this->temDirectory=$files['image']['tmp_name'];
            }
        }
        $this->database=new Database();
    }
    private function getImageUrl(){
        move_uploaded_file($this->temDirectory,$this->directory.$this->imageName);
        return $this->directory.$this->imageName;
    }
    public function newCategory(){
        $this->image=$this->getImageUrl();
        $this->sql="INSERT INTO categories(name,description,image,status) VALUES('$this->name','$this->description','$this->image','$this->status')";
        mysqli_query($this->database->dbConnect(),$this->sql);
        return "Record Save Successfully";
    }
    public function getAllCategory(){
        $this->sql="SELECT * FROM categories";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data, $this->row);
        }
        return $this->data;
    }

    public function getCategoryById($id){
        $this->sql = "SELECT * FROM categories WHERE id=$id";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        $this->data=mysqli_fetch_assoc($this->queryResult);
        return $this->data;

    }
    public function updateCategory(){
        if($this->imageName){
            $this->image=$this->getImageUrl();
        }else{
            $this->category=$this->getCategoryById($this->id);
            $this->image=$this->category['image'];
        }
        $this->sql="UPDATE categories SET name='$this->name',description='$this->description',image='$this->image',status='$this->status' WHERE id='$this->id'";
        mysqli_query($this->database->dbConnect(),$this->sql);

        header('Location: action.php?admin=category-index');
    }

    public function deleteCategoryById($id)
    {
        $this->sql="DELETE FROM categories WHERE id='$id'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        header('Location: action.php?admin=category-index');
    }
    public function getAllCategoryByStatus(){
        $this->sql = "SELECT * FROM categories WHERE status='active'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data, $this->row);
        }
        return $this->data;
    }
    public function getCategoryByCricket(){
        $this->sql = "SELECT * FROM categories WHERE name='cricket' and status='active'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        $this->data=mysqli_fetch_assoc($this->queryResult);
        return $this->data['id'];
    }
    public function getCategoryByFootball(){
        $this->sql = "SELECT * FROM categories WHERE name='football' and status='active'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        $this->data=mysqli_fetch_assoc($this->queryResult);
        return $this->data['id'];
    }

}