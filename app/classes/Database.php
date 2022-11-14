<?php


namespace App\classes;;


class Database
{
    private $hostName;
    private $userName;
    private $password;
    private $databaseName;
    private $link;
    public function __construct()
    {
        $this->hostName="localhost";
        $this->userName="root";
        $this->password="";
        $this->databaseName="sports_news";
    }
    public function dbConnect(){
        $this->link =mysqli_connect($this->hostName, $this->userName, $this->password, $this->databaseName);
        return $this->link;
    }
}