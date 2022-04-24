<?php
require_once 'Database.php';

class MenuController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from news');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image']='./images/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO news (news_image, news_title, news_body)
        VALUES (:news_image, :news_title, :news_body)');

        $query->bindParam(':news_image', $request['image']);
        $query->bindParam(':news_title', $request['title']);
        $query->bindParam(':news_body', $request['body']);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from news WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE news SET news_image = :news_image,
        news_title = :news_title, news_body = :news_body WHERE id = :id');
        $query->bindParam(':news_image', $request['image']);
        $query->bindParam(':news_title', $request['title']);
        $query->bindParam(':news_body', $request['body']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from news WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}