<?php


namespace App\classes;
use App\classes\Database;

class Blog
{
    private $imageName,$directory,$temDirectory;
    private $id,$title,$author,$category_id,$image,$description,$status;
    private $database,$sql,$queryResult;
    private $data=[],$row,$blog=[];
    private $cricData=[],$fooData=[],$recentData=[];

    public function __construct($post=null,$files=null)
    {
        if(isset($post['title'])){
            $this->title=$post['title'];
            $this->author=$post['author'];
            $this->category_id=$post['category_id'];
            $this->description = $post['description'];
            $this->status=$post['status'];
            if(isset($post['id'])){
                $this->id=$post['id'];
            }
            if($files['image']['name']){
                $this->imageName=$files['image']['name'];
                $this->directory='assets/images/blog';
                $this->temDirectory=$files['image']['tmp_name'];
            }
        }
        $this->database=new Database();
    }
    private function getImageUrl(){
        move_uploaded_file($this->temDirectory,$this->directory.$this->imageName);
        return $this->directory.$this->imageName;
    }
    public function newBlog(){
        $this->image=$this->getImageUrl();
        $this->sql='INSERT INTO `blogs`(`title`,`author`,`category_id`,`description`,`image`,`status`,`created_date`) VALUES("'.$this->title.'","'.$this->author.'","'.$this->category_id.'","'.$this->description.'","'.$this->image.'","'.$this->status.'", now() )';
        mysqli_query($this->database->dbConnect(),$this->sql);
        return "Blog Save Successfully";
    }

    public function getAllBlog()
    {
        $this->sql="SELECT * FROM blogs";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data, $this->row);
        }
        return $this->data;
    }
    public function getBlogById($id){
        $this->sql = "SELECT * FROM blogs WHERE id='$id'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        $this->data=mysqli_fetch_assoc($this->queryResult);
        return $this->data;
    }
    public function updateBlog(){
        if($this->imageName){
            $this->image=$this->getImageUrl();
        }else{
            $this->category=$this->getBlogById($this->id);
            $this->image=$this->category['image'];
        }
        $this->sql="UPDATE blogs SET author='$this->author',title='$this->title',category_id='$this->category_id',description='$this->description',image='$this->image',status='$this->status',created_date = DATE(NOW()) WHERE id='$this->id'";
        mysqli_query($this->database->dbConnect(),$this->sql);

        header('Location: action.php?admin=sports-blog-index');
    }
    public function deleteBlogById($id){
        $this->sql="DELETE FROM blogs WHERE id='$id'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        header('Location: action.php?admin=sports-blog-index');
    }
    public function getAllBlogByCricket($cat_id){
        $this->sql = "SELECT * FROM blogs WHERE category_id=$cat_id and status='active' ORDER BY id DESC LIMIT 4";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->cricData, $this->row);
        }
        return $this->cricData;
    }
    public function getAllBlogOfCricket($cat_id){
        $this->sql = "SELECT * FROM blogs WHERE category_id=$cat_id and status='active' ORDER BY id DESC";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->cricData, $this->row);
        }
        return $this->cricData;
    }
    public function getAllBlogByFootball($football_id){
        $this->sql = "SELECT * FROM blogs WHERE category_id=$football_id and status='active' ORDER BY id DESC LIMIT 4";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->fooData, $this->row);
        }
        return $this->fooData;
    }
    public function getAllBlogOfFootball($football_id){
        $this->sql = "SELECT * FROM blogs WHERE category_id=$football_id and status='active' ORDER BY id DESC";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->fooData, $this->row);
        }
        return $this->fooData;
    }
    public function getAllBlogByRecent(){
        $this->sql = "SELECT * FROM blogs WHERE status='active' ORDER BY id DESC LIMIT 12";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->recentData, $this->row);
        }
        return $this->recentData;
    }

}